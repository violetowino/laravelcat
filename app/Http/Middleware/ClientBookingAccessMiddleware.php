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
        $bookingId = $request->route('manage.booking'); // Assuming 'booking' is the route parameter
        $booking = Booking::findOrFail($bookingId);

        if ($booking->user_id !== auth()->id()) {
        abort(403, 'Unauthorized'); // User doesn't have access to this booking
    }

        return $next($request);
    }
    
}
