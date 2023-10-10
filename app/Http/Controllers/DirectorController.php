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
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class DirectorController extends Controller
{
    
    public function DirectorDashboard(){
        $managers = User::where('role','manager')->count();
        $clients = User::where('role','user')->count();
        $amounts = Space::sum('amount_paid');
        $spaces = Space::count();
        $bookings = Booking::count();

        $manager = User::where('role', 'manager')->get();
        $space = Space::all();
        $parkings = Parking::all();


        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                ->where('role', '=', 'user') 
                ->whereYear('created_at', date('Y'))
                ->groupBy('month')
                ->orderBy('month')
                ->get();

        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#607D8B', '#FF5722', '#009688', 
                    '#795548', '#9C27B0', '#2196F3', '#FF9800', '#CDDC39', '#750208'];

        for ($i=1; $i <= 12 ; $i++) { 
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;

            foreach($users as $user){
                if ($user->month == $i) {
                    $count = $user->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' => 'Users',
                'data' => $data,
                'backgroundColor' => $colors,
                'borderColor' => '#f5f5f5',
                // 'borderWidth' => 5,
            ]
            ];

        return view('director.index',compact('managers', 'clients', 'spaces','bookings','amounts','manager','space','parkings','datasets','labels'));
    } //End Method
    

    public function DirectorLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
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
    } //End Method


    public function DirectorChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('director.director_change_password',compact('profileData'));
    } //End Method


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
    } //End Method


    public function AddManager(){
        $roles = Role::all();
        return view('backend.managers.add_manager', compact('roles'));
    } //End Method


    public function StoreManager(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_number = $request->id_number;
        $user->phone = $request->country_code. $request->phone;
        $user->duty_station = $request->duty_station;
        $user->role = 'manager';
        $user->status = 'active';
        $user->password = Hash::make($request->password);
        $user->save();

        // if($request->roles) {
        //     $user->assignRole($request->roles);
        // }

        $user->sendLoginInformation();

        $notification = array(
            'message'=> 'Manager added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.managers')->with($notification);
    } //End Method


    public function EditManager($id){
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('backend.managers.edit_manager', compact('user', 'roles'));
    } //End Method


    public function UpdateManager(Request $request,$id){

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_number = $request->id_number;
        $user->phone = $request->country_code. $request->phone;
        $user->duty_station = $request->duty_station;
        $user->role = 'manager';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        if($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message'=> 'Manager Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.managers')->with($notification);
    } //End Method


    public function SoftDeleteManager($id){
        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message'=> 'Manager Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function ManagerTrashed(){
        $allmanagers = User::onlyTrashed()->get();

        return view('backend.managers.manager_trash', compact('allmanagers'));
    } //End Method


    public function ManagerRestore($id){
        User::whereId($id)->restore();
        
        return back();
    }

    public function ManagerRestoreAll(){
        User::onlyTrashed()->restore();
        
        return back();
    } //End Method


    public function ManagerForceDelete($id){
        User::onlyTrashed()->findOrFail($id)->forceDelete();

        return back();        
    } //End Method


    public function ImportManagers(){
        User::where('role','manager')->get();

        return view('backend.managers.import_managers');
    } //End Method


    public function ExportManager(){
        
        return Excel::download(new ManagersExport, 'manager.xlsx');

        return redirect()->back();
    } //End Method


    public function ImportManagerFile(Request $request){

        Excel::import(new ManagersImport, $request->file('import_file'));

        return redirect()->back();
    } //End Method


    // CLIENT CRUD


    public function ImportClients(){

        User::where('role','user')->get();

        return view('backend.clients.import_clients');
    } //End Method


    public function ExportClient(){
        
        return Excel::download(new ClientsExport, 'client.xlsx');

        return redirect()->back();
    } //End Method


    public function ImportClientFile(Request $request){

        Excel::import(new ClientsImport, $request->file('import_file'));

        return redirect()->back();
    } //End Method
}

