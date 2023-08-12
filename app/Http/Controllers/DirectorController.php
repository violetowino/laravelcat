<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Space;
use App\Models\Booking;
use App\Models\Parking;
use Illuminate\Http\Request;
use App\Exports\ClientsExport;
use App\Imports\ClientsImport;
use App\Exports\ManagersExport;
use App\Imports\ManagersImport;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class DirectorController extends Controller
{
    
    public function DirectorDashboard(){
        $managers = User::where('role','manager')->count();
        $clients = User::where('role','user')->count();
        $amounts = Space::sum('price');
        $spaces = Parking::count();
        $bookings = Booking::count();
        return view('director.index',compact('managers', 'clients', 'spaces','bookings','amounts'));
    } //End Method

    public function DirectorLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/director/login');
    } //End Method

    public function DirectorLogin(){
        return view('director.director_login');
    }//End Method

    public function DirectorProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('director.director_profile_view', compact('profileData'));
    }//End Method

    public function DirectorProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();  //unique image
            $file->move(public_path('upload/director_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DirectorChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('director.director_change_password',compact('profileData'));
    }

    public function DirectorUpdatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with();
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with();
    } //End Method


    //  Manager CRUD
    public function AllManagers(){
        $allmanagers = User::where('role','manager')->get();
        return view('backend.managers.all_managers', compact('allmanagers'));
    }

    public function AddManager(){
        $roles = Role::all();
        return view('backend.managers.add_manager', compact('roles'));
    }

    public function StoreManager(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_number = $request->id_number;
        $user->phone = $request->phone;
        $user->duty_station = $request->duty_station;
        $user->role = 'manager';
        $user->password = Hash::make($request->password);
        $user->save();

        if($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message'=> 'Manager added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.managers')->with($notification);
    }

    public function EditManager($id){
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('backend.managers.edit_manager', compact('user', 'roles'));

    }

    public function UpdateManager(Request $request){
        $mid = $request->id;

        $user = User::findOrFail($mid)->update([
        'name' => $request->name,
        'email' => $request->email,
        'id_number' => $request->id_number,
        'phone' => $request->phone,
        'duty_station' => $request->duty_station,
        ]);

        // $user->roles()->detach();
        // if($request->roles) {
        //     $user->assignRole($request->roles);
        // }

        $notification = array(
            'message'=> 'Manager Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.managers')->with($notification);
    }

    public function SoftDeleteManager($id){
        User::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Manager Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ManagerTrashed(){
        $allmanagers = User::onlyTrashed()->get();

        return view('backend.managers.manager_trash', compact('allmanagers'));
    }

    public function ManagerRestore($id){
        User::whereId($id)->restore();
        
        return back();
    }

    public function ManagerRestoreAll(){
        User::onlyTrashed()->restore();
        
        return back();
    }

    public function ManagerForceDelete($id){
        User::onlyTrashed()->findOrFail($id)->forceDelete();

        return back();        
    } //End Method


    public function ImportManagers(){
        User::where('role','manager')->get();

        return view('backend.managers.import_managers');
    }

    public function ExportManager(){
        
        return Excel::download(new ManagersExport, 'manager.xlsx');

        $notification = array(
            'message'=> 'Managers Downloaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ImportManagerFile(Request $request){

        Excel::import(new ManagersImport, $request->file('import_file'));

        $notification = array(
            'message'=> 'Managers imported Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    // CLIENT CRUD

    public function AllClients(){
        $allclients = User::where('role','user')->get();
        return view('backend.clients.all_clients', compact('allclients'));
    }

    public function AddClient(){
        return view('backend.clients.add_client');
    }

    public function StoreClient(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_number = $request->id_number;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();

        $notification = array(
            'message'=> 'Client added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);
    }

    public function EditClient($id){
        $user = User::findOrFail($id);

        return view('backend.clients.edit_client', compact('user'));

    }

    
    public function UpdateClient(Request $request){
        $cid = $request->id;

        User::findOrFail($cid)->update([
        'name' => $request->name,
        'email' => $request->email,
        'id_number' => $request->id_number,
        'phone' => $request->phone,
        'address' => $request->address,
        
        ]);

        $notification = array(
            'message'=> 'Client Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);
    }

    public function SoftDeleteClient($id){
        User::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Client Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ClientTrashed(){
        $allclients = User::onlyTrashed()->get();

        return view('backend.clients.client_trash', compact('allclients'));
    }

    public function ClientRestore($id){
        User::whereId($id)->restore();
        
        return back();
    }

    public function ClientRestoreAll(){
        User::onlyTrashed()->restore();
        
        return back();
    }

    public function ClientForceDelete($id){
        User::onlyTrashed()->findOrFail($id)->forceDelete();

        return back();        
    } //End Method


    public function ImportClients(){

        User::where('role','user')->get();

        return view('backend.clients.import_clients');
    }

    public function ExportClient(){
        
        return Excel::download(new ClientsExport, 'client.xlsx');

        $notification = array(
            'message'=> 'Clients Downloaded Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ImportClientFile(Request $request){

        Excel::import(new ClientsImport, $request->file('import_file'));

        $notification = array(
            'message'=> 'Clients imported Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

