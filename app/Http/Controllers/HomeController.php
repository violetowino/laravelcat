<?php

namespace App\Http\Controllers;

use App\Models\Space;
use App\Models\Rating;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    // public function Form(Request $request)
    // {
    //     $request->validate([
    //         'time_in' => 'required|date',
    //         'time_out' => 'required|date',
    //         // Add validation rules for other form fields if needed
    //     ]);

    //     // Create a new Space model and save it to the database
    //     $space = new Space;
    //     $space->time_in = $request->input('time_in');
    //     $space->time_out = $request->input('time_out');
    //     $space->total_time = $request->input('total_time');
    //     $space->save();

    //     // Redirect to a success page or do something else
    //     return redirect()->back();
    // }


    public function BasementSpace(Request $request, Space $space)
    {
        $quantity = $request->input('quantity', 1);
        $totalPrice = $space->price * $quantity;

        // $totalTime = $request->query('total_time');

        $spaces = Space::where('is_booked', false)->get();
        return view('parking.basementspace', compact('spaces','quantity','totalPrice'));
    } //End Method


    public function RooftopSpace(Request $request)
    {
        $spaces = Space::where('is_booked', false)->get();
        return view('parking.rooftopspace', compact('spaces'));
    } //End Method

    public function OutdoorSpace()
    {
        
        $spaces = Space::where('is_booked', false)->get();
        return view('parking.outdoorspace', compact('spaces'));
    } //End Method


    public function StoreMessage(Request $request){

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your Message has been Submitted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }



    //Rating
    public function Rating(){
        return view('rating');
    }

    // public function submitRating(Request $request)
    // {
    //     $user = Auth::user();
    //     $serviceId = $request->input('service_id');
    //     $ratingValue = $request->input('rating');

    //     // Validate input if needed

    //     $rating = new Rating();
    //     $rating->user_id = $user->id;
    //     $rating->service_id = $serviceId;
    //     $rating->rating = $ratingValue;
    //     $rating->save();

    //     session()->flash('success', 'Thank you for your rating.');

    //     return redirect()->back();
    // }

}
