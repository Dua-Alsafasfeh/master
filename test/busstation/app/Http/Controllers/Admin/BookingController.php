<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\BookingStatus;
use App\DataTables\BookingsDataTable;
use App\Exceptions\NotEnoughSeatsAvailableException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Booking\PatchBookingRequest;
use App\Services\BookingService;

class BookingController extends Controller
{
   

    public function index(BookingsDataTable $dataTable)
    {
        $bookingStatuses = array_map(fn($key) => strtolower($key), BookingStatus::getKeys());
        $status = request()->get('status');
        if (in_array($status, $bookingStatuses)) {
            $namespace = '\\App\DataTables\Scopes\Bookings\\';
            $scopeClass = $namespace . ucfirst($status) . 'Bookings';
            $dataTable->addScope(new $scopeClass());
        }

        return $dataTable->render('admin.bookings.index', compact('bookingStatuses'));
    }

    public function edit(Booking $booking)
    {
        $bookingStatuses = BookingStatus::getKeys();
        // $bookedSeats = $this->bookingService->getBookedSeatsSum(
           
        //     $booking->startLocation->id,
        //     $booking->endLocation->id,
        //     $booking->travel_date->toDateString()
        // );

        $ride =  $booking->ride ;
        $date = $booking->date ;
        $endLocationId = $booking->endLocationId;
        $startLocationId = $booking->startLocationId;


        $startLocation = $ride->route->locations->where('id', $startLocationId)->first();
        $endLocation = $ride->route->locations->where('id', $endLocationId)->first();

        $calculatedDepartureTime = 'rides.departure_time + INTERVAL(?) MINUTE';
        $minutesFromDep = $startLocation->pivot->minutes_from_departure;
        $dayBefore = Carbon::parse($date)->subDay()->toDateString();

        return Booking::join('rides', 'ride_id', 'rides.id')
            ->join('location_route as start_location', function ($join) {
                $join->on('rides.route_id', 'start_location.route_id')
                    ->on('start_location_id', 'start_location.location_id');
            })->join('location_route as end_location', function ($join) {
                $join->on('rides.route_id', 'end_location.route_id')
                    ->on('end_location_id', 'end_location.location_id');
            })->where([
                ['ride_id', '=', $ride->id],
                ['start_location.order', '<', $endLocation->pivot->order],
                ['end_location.order', '>', $startLocation->pivot->order],
                ['status', '=', BookingStatus::CONFIRMED]
            ])->where(function (Builder $query) use ($calculatedDepartureTime, $minutesFromDep, $dayBefore, $date) {
                $query->where(function (Builder $query) use ($calculatedDepartureTime, $minutesFromDep, $dayBefore) {
                    $query->whereRaw("$calculatedDepartureTime > '23:59:59'", [$minutesFromDep])
                        ->where('ride_start_date', $dayBefore);
                })->orWhere(function (Builder $query) use ($calculatedDepartureTime, $minutesFromDep, $date) {
                    $query->whereRaw("$calculatedDepartureTime <= '23:59:59'", [$minutesFromDep])
                        ->where('ride_start_date', $date);
                });
            })->sum('seats');

        $availableSeats = $booking->ride->bus->seats - $bookedSeats;

        return view('admin.bookings.edit-status', compact('booking', 'bookingStatuses', 'availableSeats'));
    }

    public function update(PatchBookingRequest $request, Booking $booking)
    {
        try {
            $this->bookingService->updateStatus($booking, $request->validated()['status']);
        } catch (NotEnoughSeatsAvailableException $e) {
            return redirect()->back()->withToastError($e->getMessage());
        }

        return redirect()->route('admin.bookings.index')
            ->withToastSuccess('The booking status has been successfully updated!');
    }

    public function destroy(Booking $booking)
    {
        try {
            $booking->delete();
        } catch (\Exception $e) {
            return redirect()->route('admin.bookings.index')
                ->withToastError('An error occurred while deleting the booking.');
        }

        return redirect()->route('admin.bookings.index')
            ->withToastSuccess('The booking has been successfully deleted!');
    }
}
