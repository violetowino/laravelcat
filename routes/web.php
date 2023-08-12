<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ParkingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/basement', function () {
    return view('basement');
});

Route::get('/rooftop', function () {
    return view('rooftop');
});

Route::get('/outdoor', function () {
    return view('outdoor');
});

Route::get('/indexB', function () {
    return view('indexB');
});

Route::get('/indexR', function () {
    return view('indexR');
});

Route::get('/indexO', function () {
    return view('indexO');
});

Route::get('/chatify', function () {
    return redirect('chatify');
});

Route::get('/stk/push/simulation', [MpesaController::class, 'stkSimulation']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Director

Route::middleware(['auth', 'role:director'])->group(function(){

    Route::get('/director/dashboard', [DirectorController::class, 'DirectorDashboard'])
    ->name('director.dashboard');

    Route::get('/director/logout', [DirectorController::class, 'DirectorLogout'])
    ->name('director.logout');

    Route::get('/director/profile', [DirectorController::class, 'DirectorProfile'])
    ->name('director.profile');

    Route::post('/director/profile/store', [DirectorController::class, 'DirectorProfileStore'])
    ->name('director.profile.store');

    Route::get('/director/change/password', [DirectorController::class, 'DirectorChangePassword'])
    ->name('director.change.password');

    Route::post('/director/update/password', [DirectorController::class, 'DirectorUpdatePassword'])
    ->name('director.update.password');


    // Director CDRUD

    Route::controller(ParkingController::class)->group(function(){
        Route::get('/all/space', 'AllSpaces')->name('all.spaces');
        Route::get('/add/space', 'AddSpace')->name('add.space');
        Route::post('/store/space', 'StoreSpace')->name('store.space');
        Route::get('/edit/space/{id}', 'EditSpace')->name('edit.space');
        Route::post('/update/space', 'UpdateSpace')->name('update.space');
        Route::get('/delete/space/{id}', 'DeleteSpace')->name('delete.space');
    });

    Route::controller(ParkingController::class)->group(function(){
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
       Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    Route::controller(ParkingController::class)->group(function(){
        Route::get('/all/parkings', 'AllParkings')->name('all.parkings');
        Route::get('/add/parking', 'AddParking')->name('add.parking');
        Route::post('/store/parking', 'StoreParking')->name('store.parking');
        Route::get('/edit/parking/{id}', 'EditParking')->name('edit.parking');
        Route::post('/update/parking', 'UpdateParking')->name('update.parking');
        Route::get('/delete/parking/{id}', 'DeleteParking')->name('delete.parking');
    });


    //Permissions
    Route::controller(RoleController::class)->group(function(){
        Route::get('/all/permissions', 'AllPermissions')->name('all.permissions');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permisssion/{id}', 'EditPermisssion')->name('edit.permisssion');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

        Route::get('/import/permission', 'ImportPermission')->name('import.permission');
    });

    //Roles
    Route::controller(RoleController::class)->group(function(){
        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/role', 'AddRole')->name('add.role');
        Route::post('/store/role', 'StoreRole')->name('store.role');
        Route::get('/edit/role/{id}', 'EditRole')->name('edit.role');
        Route::post('/update/role', 'UpdateRole')->name('update.role');
        Route::get('/delete/role/{id}', 'DeleteRole')->name('delete.role');

        Route::get('/add/role/permission', 'AddRolePermission')->name('add.role.permission');
        Route::get('/all/role/permission', 'AllRolePermission')->name('all.role.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');
        Route::get('/edit/role/permission/{id}', 'EditRolePermission')->name('edit.role.permission');
        Route::post('/update/role/permission/{id}', 'UpdateRolePermission')->name('update.role.permission');
        Route::get('/delete/role/permission/{id}', 'DeleteRolePermission')->name('delete.role.permission');
    });

    Route::controller(DirectorController::class)->group(function(){
        Route::get('/all/managers', 'AllManagers')->name('all.managers');
        Route::get('/add/manager', 'AddManager')->name('add.manager');
        Route::post('/store/manager', 'StoreManager')->name('store.manager');
        Route::get('/edit/manager/{id}', 'EditManager')->name('edit.manager');
        Route::post('/update/manager/{id}', 'UpdateManager')->name('update.manager');
        Route::get('/softdelete/manager/{id}', 'SoftDeleteManager')->name('softdelete.manager');
        Route::get('/manager/trashed', 'ManagerTrashed')->name('manager.trashed');
        Route::get('/manager/restore/{id}', 'ManagerRestore')->name('manager.restore');
        Route::get('/manager/restoreall', 'ManagerRestoreAll')->name('manager.restoreall');
        Route::get('/manager/forcedelete/{id}', 'ManagerForceDelete')->name('manager.forcedelete');

        Route::get('/import/managers', 'ImportManagers')->name('import.managers');
        Route::get('/export/manager', 'ExportManager')->name('export.manager');
        Route::post('/import/managerfile', 'ImportManagerFile')->name('import.managerfile');
     });
    
    Route::controller(DirectorController::class)->group(function(){
        Route::get('/all/clients', 'AllClients')->name('all.clients');
        Route::get('/add/client', 'AddClient')->name('add.client');
        Route::post('/store/client', 'StoreClient')->name('store.client');
        Route::get('/edit/client/{id}', 'EditClient')->name('edit.client');
        Route::post('/update/client', 'UpdateClient')->name('update.client');
        Route::get('/softdelete/client/{id}', 'SoftDeleteClient')->name('softdelete.client');
        Route::get('/client/trashed', 'ClientTrashed')->name('client.trashed');
        Route::get('/client/restore/{id}', 'ClientRestore')->name('client.restore');
        Route::get('/client/restoreall', 'ClientRestoreAll')->name('client.restoreall');
        Route::get('/client/forcedelete/{id}', 'ClientForceDelete')->name('client.forcedelete');

        Route::get('/import/clients', 'ImportClients')->name('import.clients');
        Route::get('/export/client', 'ExportClient')->name('export.client');
        Route::post('/import/clientfile', 'ImportClientFile')->name('import.clientfile');
    });

    Route::controller(BookingController::class)->group(function(){
        Route::get('/all/bookings', 'AllBookings')->name('all.bookings');
        Route::get('/add/booking', 'AddBooking')->name('add.booking');
        Route::post('/store/booking', 'StoreBooking')->name('store.booking');
        Route::get('/edit/booking/{id}', 'EditBooking')->name('edit.booking');
        Route::post('/update/booking', 'UpdateBooking')->name('update.booking');
        Route::get('/softdelete/booking/{id}', 'SoftDeleteBooking')->name('softdelete.booking');
        Route::get('/booking/trashed', 'BookingTrashed')->name('booking.trashed');
        Route::get('/booking/restore/{id}', 'BookingRestore')->name('booking.restore');
        Route::get('/booking/restoreall', 'BookingRestoreAll')->name('booking.restoreall');
        Route::get('/booking/forcedelete/{id}', 'BookingForceDelete')->name('booking.forcedelete');

        Route::get('/import/bookings', 'ImportBookings')->name('import.bookings');
        Route::get('/export/booking', 'ExportBooking')->name('export.booking');
        Route::post('/import/bookingfile', 'ImportBookingFile')->name('import.bookingfile');
    });


Route::get('/calender/index', [CalenderController::class, 'CalenderIndex'])
->name('calender.index');

Route::post('/calender/store', [CalenderController::class, 'CalenderStore'])
->name('calender.store');

Route::get('/chart/analysis', [ChartController::class, 'ChartAnalysis'])
->name('chart.analysis');

});



//Manager

Route::middleware(['auth', 'role:manager'])->group(function(){
Route::get('/manager/dashboard', [ManagerController::class, 'ManagerDashboard'])
->name('manager.dashboard');

Route::get('/manager/logout', [ManagerController::class, 'ManagerLogout'])
    ->name('manager.logout');

Route::get('/manager/profile', [ManagerController::class, 'ManagerProfile'])
    ->name('manager.profile');

 Route::post('/manager/profile/store', [ManagerController::class, 'ManagerProfileStore'])
    ->name('manager.profile.store');

Route::get('/manager/change/password', [ManagerController::class, 'ManagerChangePassword'])
    ->name('manager.change.password');

Route::post('/manager/update/password', [ManagerController::class, 'ManagerUpdatePassword'])
    ->name('manager.update.password');
});


//Client
Route::middleware(['auth', 'role:user'])->group(function(){
    Route::get('/client/dashboard', [ClientController::class, 'ClientDashboard'])
    ->name('client.dashboard');
    
    Route::get('/client/logout', [ClientController::class, 'ClientLogout'])
        ->name('client.logout');
    
    Route::get('/client/profile', [ClientController::class, 'ClientProfile'])
        ->name('client.profile');
    
     Route::post('/client/profile/store', [ClientController::class, 'ClientProfileStore'])
        ->name('client.profile.store');
    
    Route::get('/client/change/password', [ClientController::class, 'ClientChangePassword'])
        ->name('client.change.password');
    
    Route::post('/client/update/password', [ClientController::class, 'ClientUpdatePassword'])
        ->name('client.update.password');

});

Route::middleware(['auth', 'role:user'])->group(function(){

    Route::controller(BookingController::class)->group(function(){
        Route::get('/manage/booking', 'ManageBooking')->name('manage.booking');
        Route::get('/book/space', 'BookSpace')->name('book.space');
        Route::post('/booking/store', 'BookingStore')->name('booking.store');

        Route::get('/booking/edit/{id}', 'BookingEdit')->name('booking.edit')->middleware('client.booking.access,id');
        Route::post('/booking/update', 'BookingUpdate')->name('booking.update');
        Route::get('/booking/delete/{id}', 'BookingDelete')->name('booking.delete');

        Route::get('/reserve/space', 'ReserveSpace')->name('reserve.space');
    
    });

    // routes/web.php


Route::get('/spaces', [SpaceController::class, 'index'])->name('spaces.index');
Route::post('/spaces/{space}', [SpaceController::class, 'book'])->name('spaces.book');




// routes/web.php


Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');



});




Route::get('/director/login', [DirectorController::class, 'DirectorLogin'])
->name('director.login');


Route::get('/map', 'MapController@index');
Route::post('/map/directions', 'MapController@getDirections');

Route::get('/map', [MapController::class, 'index'])->name('map.index');

Route::post('/map/directions', [MapController::class, 'getDirections'])->name('map.getdirections');


Route::post('/pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('/success', [PaymentController::class, 'success']);
Route::get('/error', [PaymentController::class, 'error']);



Route::post('/book', [SpaceController::class, 'store'])->name('bookings.store');

