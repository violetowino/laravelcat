<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function isBooked()
    {
        // Implement the logic to check if the seat is already booked
        return $this->bookings()->exists();
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function book()
    {
        // Implement the logic to update the seat status as booked
        $this->status = 'booked';
        $this->save();
    }
}
