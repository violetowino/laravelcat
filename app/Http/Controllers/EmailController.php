<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Email(){
        $managerEmails  = User::where('role', 'manager')->pluck('email');
        return view('director.email', compact('managerEmails'));
    }

    public function SendEmail(Request $request){
        $email=Email::create([
            'title'=>'Notification',
            'description'=>'To be done',
        ]);

        $notes=$request->input('notes');
        $selectedUserId= $request->input('user_id');

        if($request->has('send_individual')&& !empty($selecteduserId)){
            $selectedUser=User::find($selectedUserId);
        

        if($selectedUser){
            $selectedUser->notify(new IndividualNotification($email,$notes));

            $notification = array(
                'message'=> 'Email sent',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } }elseif($request->has('send_group')){

            $messageAll=$request->input('message_all');
            $chunkSize=10;

            User::chunk($chunkSize,function($users)use($email,$messageAll){
                foreach($users as $user){
                    $user->notify(new IndividualNotification($email,$messageAll));
                    sleep(1);
                }
            });

            $notification = array(
                'message'=> 'Email sent to All Managers',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }
        return redirect()->back()->with('error','please select a userr for individual email');
    }
}
