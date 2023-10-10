<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Space;
use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function ManagerDashboard(){
        $clients = User::where('role','user')->count();
        $spaces = Parking::count();
        $total = Space::count();

        $managers = User::where('role', 'manager')->get();
        $space = Space::all();

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
                'backgroundColor' => $colors
            ]
            ];

        return view('manager.index2', compact('clients','spaces','total','managers','space','datasets','labels'));
    } //End Method


    public function ManagerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    } //End Method


    public function ManagerProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('manager.manager_profile_view', compact('profileData'));
    }//End Method


    public function ManagerProfileStore(Request $request){
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
            $file->move(public_path('upload/manager_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function ManagerChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('manager.manager_change_password',compact('profileData'));
    } //End Method


    public function ManagerUpdatePassword(Request $request){
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



    //CLIENT CRUD

    public function AllClients(){
        $allclients = User::where('role','user')->get();
        return view('backend.clients.all_clients', compact('allclients'));
    } //End Method


    public function AddClient(){
        return view('backend.clients.add_client');
    } //End Method


    public function StoreClient(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_number = $request->id_number;
        $user->phone = $request->country_code. $request->phone;
        $user->address = $request->address;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();

        $notification = array(
            'message'=> 'Client added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);
    } //End Method


    public function EditClient($id){
        $user = User::findOrFail($id);

        return view('backend.clients.edit_client', compact('user'));
    } //End Method

    
    public function UpdateClient(Request $request){
        $cid = $request->id;

        User::findOrFail($cid)->update([
        'name' => $request->name,
        'email' => $request->email,
        'id_number' => $request->id_number,
        'phone' => $request->country_code. $request->phone,
        'address' => $request->address,
        
        ]);

        $notification = array(
            'message'=> 'Client Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);
    } //End Method


    public function SoftDeleteClient($id){
        User::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Client Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method


    public function ClientTrashed(){
        $allclients = User::onlyTrashed()->get();

        return view('backend.clients.client_trash', compact('allclients'));
    } //End Method


    public function ClientRestore($id){
        User::whereId($id)->restore();
        
        return back();
    } //End Method


    public function ClientRestoreAll(){
        User::onlyTrashed()->restore();
        
        return back();
    } //End Method
    

    public function ClientForceDelete($id){
        User::onlyTrashed()->findOrFail($id)->forceDelete();

        return back();        
    } //End Method
}
