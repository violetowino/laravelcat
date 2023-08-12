<?php

namespace App\Policies;

use App\Models\User;

class BookingPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewOwnBooking(User $user, Booking $booking)
{
    return $user->id === $booking->user_id;
}

}
