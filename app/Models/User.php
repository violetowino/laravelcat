<?php

namespace App\Models;

use App\Models\Space;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use App\Mail\LoginInformationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    } //End Method


    public static function getpermissionGroups(){
        $permission_groups = DB::table('permissions')->select('group_name')
        ->groupBy('group_name')->get();
        return $permission_groups;
    }//End Method


    public static function getpermissionByGroupName($group_name){
        $permissions = DB::table('permissions')->select('name','id')
                    ->where('group_name', $group_name)
                    ->get();
        return $permissions;

    } //End Method


    public static function roleHasPermissions($role, $permissions){

        $hasPermission = true;

        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission->name)) {
                $hasPermission = false;
            }
        }
        return $hasPermission;
    } //End Method

    public function sendLoginInformation()
        {
            $password = Str::random(8); // Generate a random password
            $this->password = bcrypt($password);
            $this->save();

            // Mail::raw("Your login information:\n\nUsername: {$this->email}\nPassword: {$password}", function ($message) {
            //     $message->to($this->email)
            //             ->subject('Your Login Information');
            // });
            Mail::to($this->email)->send(new LoginInformationMail($this->email, $password));
        }

}
