<?php

namespace App\Http\Controllers;

use App\Models\Space;
use App\Models\Booking;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function index()
    {
        $spaces = Space::where('is_booked', false)->get();
        return view('spaces.index', compact('spaces'));
    }

    public function book(Request $request, Space $space)
    {
        $bookingHours = $request->input('booking_hours', 1); // Default to 1 hour if not specified
        $totalPrice = $space->price * $bookingHours;
        // Ensure the space is available for booking
        if (!$space->is_booked) {

            // Mark the space as booked
            $space->update(['is_booked' => true]);
            // Redirect to the payment page with the space_id in session
            return redirect()->route('payment.index')->with('space_id', $space->id);
        } else {
            // Space is already booked, handle accordingly (e.g., show an error message)
            return redirect()->back()->with('error', 'Space is already booked.');
        }
    }


    // public function search(Request $request) {
    //     $spaceType = $request->input('space_type');
    
    //     // Fetch spaces based on the selected space type
    //     if ($spaceType) {
    //         $spaces = Space::where('space_type', $spaceType)->get();
    //     } else {
    //         $spaces = Space::all(); // Fetch all spaces if no space type selected
    //     }
    
    //     return view('spaces.index', ['spaces' => $spaces]);
    // }
    
}
