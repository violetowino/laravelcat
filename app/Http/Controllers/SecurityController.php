<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function Security(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $bookings = Booking::latest()->get();
        return view('security.index1',compact('bookings','profileData'));

    } //End method

    public function SecurityLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    } //End Method

    public function SecurityProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();  //unique image
            $file->move(public_path('upload/client_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
