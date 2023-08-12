<?php

namespace App\Models;

use App\Models\Space;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    }

    public static function roleHasPermissions($role, $permissions){

        $hasPermission = true;

        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission->name)) {
                $hasPermission = false;
            }
        }
        return $hasPermission;
    }

}
