<?php

namespace App\Http\Controllers;

use App\Models\Space;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class SpaceController extends Controller
{
    public function index(Request $request)
    {
        $spaces = Space::where('is_booked', false)->get();
        
        return view('spaces.index', compact('spaces'));
    } //End Method



    public function book(Request $request, Space $space)
    {
        $quantity = $request->input('quantity', 1);
        $totalTime = $quantity;
        $totalPrice = $space->price * $quantity;

        Session::put('booking_quantity', $quantity);

        if (!$space->is_booked) {

            // Mark the space as booked
            $space->update(['is_booked' => true, 'amount_paid' => $totalPrice]);
            // Redirect to the payment page with the space_id in session
            return redirect()->route('payment.index',['totalPrice' => $totalPrice, 'totalTime' => $totalTime])->with('space_id', $space->id);
        } else {
            
            return redirect()->back()->with('error', 'Space is already booked.');
        }
    } //End Method


    public function instructions(){
        return view('spaces.instructions');
    } //End Method
    
}
