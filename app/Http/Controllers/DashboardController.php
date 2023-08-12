<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Parking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    //     $managers = User::where('role_as','manager')->count();
    //     $clients = User::where('role_as','user')->count();
    //     $spaces = Parking::count();
    //     $bookings = Booking::count();


    //     return view('director.director_dashboard', compact('managers', 'clients', 'spaces','bookings'));
    // }
}
