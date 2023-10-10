<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Space;
use App\Models\County;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Exports\BookingsExport;
use App\Imports\BookingsImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use DateTime;

class BookingController extends Controller
{
    public function ManageBooking(){
        $user = Auth::user();
        $bookings = $user->bookings;
        return view('client.manage_booking', compact('bookings'));
    } //End Method


    public function BookSpace(){

        $counties = County::all();
        return view('client.book_space', compact('counties'));
    } //End Method


    public function BookingStore(Request $request){

        $user = Auth::user();
        $space = Space::all();

        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'number_plate' => 'required',
            'county' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $bookingData = [
            'user_id' => $user->id, 
            'name' => $request->name,
            'id_number' => $request->id_number,
            'number_plate' => $request->number_plate,
            'county' => $request->county,
            'phone' => $request->country_code. $request->phone,
            'address' => $request->address,
        ];
        
        Booking::create($bookingData);

        return view('spaces.index');
    } //End Method


    public function BookingEdit($id){
        $counties = County::all();
        $bookings = Booking::findOrFail($id);
        return view('client.booking_edit', compact('bookings','counties'));
    } //End Method


    public function BookingUpdate(Request $request){
        $bid = $request->id;
        Booking::findOrFail($bid)->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'number_plate' => $request->number_plate,
            'county' => $request->county,
            'phone' => $request->country_code. $request->phone,
            'address' => $request->address,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,

        ]);
        $notification = array(
            'message'=> 'Booking Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('manage.booking')->with($notification);
    } //End Method


    public function BookingDelete($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Booking Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.booking')->with($notification);
    } //End Method


    public function Reserve(Request $request){

        if (Auth::id()) {

            $user = Auth::user();
   
        }else {
            return redirect('login');
        }
    }

//_________________________________________________________________________________________________________________________-

    //DIRECTOR BOOKING CRUD

    public function AllBookings(){
        $bookings = Booking::latest()->get();
        return view('backend.bookings.all_bookings',compact('bookings'));

    } //End method


    public function AddBooking(){
        $counties = County::all();
        return view('backend.bookings.add_booking', compact('counties'));
    } //End method


    public function StoreBooking(Request $request){

        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'number_plate' => 'required',
            'county' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        Booking::insert([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'number_plate' => $request->number_plate,
            'county' => $request->county,
            'phone' => $request->country_code. $request->phone,
            'address' => $request->address,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
            'user_id' => Auth::id()
        ]);
        $notification = array(
            'message'=> 'Booking added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.bookings')->with($notification);
    } //End Method


    public function EditBooking($id){
        $counties = County::all();
        $bookings = Booking::findOrFail($id);
        return view('backend.bookings.edit_booking', compact('bookings','counties'));
    } //End Method


    public function UpdateBooking(Request $request){

        $bid = $request->id;
        Booking::findOrFail($bid)->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'number_plate' => $request->number_plate,
            'county' => $request->county,
            'phone' => $request->country_code. $request->phone,
            'address' => $request->address,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
        ]);
        $notification = array(
            'message'=> 'Booking Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.bookings')->with($notification);
    } //End Method


    public function SoftDeleteBooking($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Booking Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function BookingTrashed(){
        $bookings = Booking::onlyTrashed()->get();

        return view('backend.bookings.booking_trash', compact('bookings'));
    } //End Method


    public function BookingRestore($id){
        Booking::whereId($id)->restore();
        
        return back();
    } //End Method


    public function BookingRestoreAll(){
        Booking::onlyTrashed()->restore();
        
        return back();
    } //End Method


    public function BookingForceDelete($id){
        Booking::onlyTrashed()->findOrFail($id)->forceDelete();

        return back();  
              
    } //End method


    //Reports
    public function ImportBookings(){

        return view('backend.bookings.import_bookings');
    } //End Method


    public function ExportBooking(){
        
        return Excel::download(new BookingsExport, 'booking.xlsx');

        $notification = array(
            'message'=> 'Booking Downloaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function ImportBookingFile(Request $request){

        Excel::import(new BookingsImport, $request->file('import_file'));

        $notification = array(
            'message'=> 'Booking imported Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


}
