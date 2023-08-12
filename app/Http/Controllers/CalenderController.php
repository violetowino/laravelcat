<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
   public function CalenderIndex (){

        $events = array();
        $bookings = Booking::all();

        foreach($bookings as $booking) {
            $events[] = [
                'name' => $booking->name,
                'start' => $booking->time_in,
                'end' => $booking->time_out,
            ];
        }

    return view('calender.calender_index', compact('events'));
   }

   public function CalenderStore(Request $request){
        
      $request->validate([
        'name' => 'required'
      ]);

   }
}
