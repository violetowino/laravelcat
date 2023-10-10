<?php

namespace App\Http\Controllers\Backend;

use App\Models\County;
use App\Models\Booking;
use App\Models\Parking;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\ParkingController;


class ParkingController extends Controller
{
    public function AllSpaces(){
        
         $spaces = Parking::latest()->get();
     
        return view('backend.space.all_space', compact('spaces'));

    } //End method

    
    public function AddSpace(){
    
        $categories = Category::all();
      
        return view('backend.space.add_space', compact('categories'));
    } //End method


    public function StoreSpace(Request $request){
        $spaces = new parking;

        $spaces->location = $request->location;
        $spaces->category = $request->category;
        $spaces->quantity = $request->quantity;
        $spaces->price = $request->price;

        $spaces->save();

        $notification = array(
            'message'=> 'Space added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.spaces')->with($notification);
    } //End Method


    public function EditSpace($id){
        $categories = Category::all();
        $spaces = Parking::findOrFail($id);
        return view('backend.space.edit_space', compact('spaces','categories'));
    } //End Method


    public function UpdateSpace(Request $request){
        $sid = $request->id;
        Parking::findOrFail($sid)->update([
            'location' => $request->location,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        $notification = array(
            'message'=> 'Space Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.spaces')->with($notification);
    } //End Method


    public function SoftDeleteSpace($id){
        Parking::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Space Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function SpaceTrashed(){
        $spaces = Parking::onlyTrashed()->get();

        return view('backend.space.space_trash', compact('spaces'));
    } //End Method


    public function SpaceRestore($id){
        Parking::whereId($id)->restore();
        
        return back();
    } //End Method

    public function SpaceRestoreAll(){
        Parking::onlyTrashed()->restore();
        
        return back();
    } //End Method




    //Category CRUD

    public function AllCategory(){
        $categories = Category::all();
        return view('backend.category.all_category', compact('categories'));

    } //End Method

    public function AddCategory(){
        return view('backend.category.add_category');
    } //End Method


    public function StoreCategory(Request $request){
        $category = Category::create([
            'space_category' => $request->space_category,
        ]);

        $notification = array(
            'message'=> 'Category Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    } //End Method

    public function EditCategory($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('category'));
    } //End Method

    public function UpdateCategory(Request $request){

        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([
            'space_category' => $request->space_category,
        ]);

        $notification = array(
            'message'=> 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    } //End Method

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    } //End Method


    //Parking
    public function AllParkings(){
        $bookings = Booking::latest()->get();
        return view('backend.parkings.all_parkings',compact('bookings'));

    } //End method

    public function AddParking(){
        
        $counties = County::all();
        return view('backend.parkings.add_parking', compact('counties'));
    } //End method

    public function StoreParking(Request $request){

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
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
            'user_id' => Auth::id()
        ]);
        $notification = array(
            'message'=> 'Booking added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.parkings')->with($notification);
    } //End Method


    public function EditParking($id){
        $counties = County::all();
        $bookings = Booking::findOrFail($id);
        return view('backend.parkings.edit_parking', compact('bookings','counties'));
    } //End Method


    public function UpdateParking(Request $request){

        $bid = $request->id;
        Booking::findOrFail($bid)->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'number_plate' => $request->number_plate,
            'county' => $request->county,
            'phone' => $request->country_code. $request->phone,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
        ]);
        $notification = array(
            'message'=> 'Booking Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.parkings')->with($notification);
    } //End Method


    public function SoftDeleteParking($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Booking Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function ParkingTrashed(){
        $bookings = Booking::onlyTrashed()->get();

        return view('backend.parkings.parking_trash', compact('bookings'));
    } //End Method


    public function ParkingRestore($id){
        Booking::whereId($id)->restore();
        
        return back();
    } //End Method

    public function ParkingRestoreAll(){
        Booking::onlyTrashed()->restore();
        
        return back();
    } //End Method
    

}
