<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Booking;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientBookingAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $bookingId = $request->route('id');
        $booking = Booking::findOrFail($bookingId);
    
        if ($request->user()->can('viewOwnBooking', $booking)) {
            return $next($request);
        }
    
        abort(403, 'Unauthorized');
    }
    
}
