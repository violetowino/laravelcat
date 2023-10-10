<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Backend\MpesaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/mpesa/password', [MpesaController::class, 'lipaNaMpesaPassword']);
Route::post('/mpesa/token', [MpesaController::class, 'newAccessToken']);
Route::post('/stk/push', [MpesaController::class, 'stkPush'])->name('stk.push');
Route::post('/stk/push/callback/url', [MpesaController::class, 'MpesaRes']);

Route::post('/stk-push/response', [MpesaController::class, 'handleStkPushResponse'])->name('stk-push.response');


//Route::post('/stripe', [PaymentController::class, 'stripePost'])->name('stripe.post');
