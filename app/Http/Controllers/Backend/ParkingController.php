<?php

namespace App\Http\Controllers\Backend;

use App\Models\Parking;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $spaces->space_number = $request->space_number;
        $spaces->price = $request->price;

        $spaces->save();

        $notification = array(
            'message'=> 'Space added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.spaces')->with($notification);
    }

    public function EditSpace($id){
        $categories = Category::all();
        $spaces = Parking::findOrFail($id);
        return view('backend.space.edit_space', compact('spaces','categories'));
    }

    public function UpdateSpace(Request $request){
        $sid = $request->id;
        Parking::findOrFail($sid)->update([
            'location' => $request->location,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'space_number' => $request->space_number,
            'price' => $request->price,
        ]);
        $notification = array(
            'message'=> 'Space Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.spaces')->with($notification);
    }

    public function DeleteSpace($id){
        Parking::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Space Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End method


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
    }

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



    // public function AllParkings(){

    //    $category = Category::all();

    //     return view('backend.parkings.all_parkings', compact('category'));
    // }

}
