<?php

namespace App\Http\Controllers;

use PDF;
// use Stripe\Charge;
use Stripe\Stripe;
use Omnipay\Omnipay;
use App\Models\Space;
use App\Models\Booking;
use DateTime;
use Illuminate\Http\Request;
use App\Mail\PaymentReceiptEmail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Notifications\BookingConfirmation;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
     //Paypal integration
     private $gateway;

     public function __construct() {         //constructor
         $this->gateway = Omnipay::create('PayPal_Rest');
         $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
         $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
         $this->gateway->setTestMode(true);
     } //End Method
 
     public function pay(Request $request){
         try {
             
             $response = $this->gateway->purchase(array(
                 'amount' => $request->amount,
                 'currency' => env('PAYPAL_CURRENCY'),
                 'returnUrl' => url('success'),
                 'cancelUrl' => url('error')
 
             ))->send();
 
             if ($response->isRedirect()) {
                 $response->redirect();
             }
             else{
                 return $response->getMessage();
             }
 
 
         } catch (\Throwable $th) {
             return $th->getMessage();
         }
     } //End Method
 
 
     public function success(Request $request){
         if ($request->input('paymentId') && $request->input('PayerId')) {
             $transaction = $this->gateway->completePurchase(array(
                 'payer_id'=> $request->input('PayerId'),
                 'transactionReference'->$request->input('PaymentId')
             ));
             $response = $transaction->send();
 
             if ($response->isSuccessful()) {
                 $arr = $response->getData();
                 
                 $payment = new Payment();
                 $payment->payment_id->$arr['id'];
                 $payment->payer_id->$arr['payer']['payer_info']['payer_id'];
                 $payment->payer_email->$arr['payer']['payer_info']['email'];
                 $payment->amount->$arr['transactions'][0]['amount']['total'];
                 $payment->currency->env('PAYPAL_CURRENCY');
                 $payment->payment_status->$arr['state'];
 
                 $payment->save();
 
                 return "Payment Successful. Your Transaction code is : ". $arr['id'];
             }
             else{
                 return $response->getMessage();
             }
         }
         else{
             return 'Payment Declined!!';
         }
     } //End Method
 
 
     public function error(){
         return 'User declined Payment!!';
     } //End Method
     
//________________________________________________________________________________________________________________    
     
    // SPACE-PAYMENTS


    public function SuccessPayment(){
        return view('payment.confirmation');
    }

    
    public function index(Request $request, Space $space)
    {
        $startTime = new DateTime($request->time_in);
        $endTime = new DateTime($request->time_out);
        $interval = $startTime->diff($endTime);
        $totalTime = $interval->format('%h hours %i minutes');

        $quantity = Session::get('booking_quantity', 1);

        $spaceId = session('space_id');
        $space = Space::findOrFail($spaceId);

         $totalPrice = $space->price * $quantity;
        return view('spaces.payment', compact('space','totalPrice', 'quantity','totalTime'));

    } //End Method


    public function confirm(Request $request, Space $space)

    {
        $quantity = Session::get('booking_quantity', 1);
        
        $spaceId = $request->input('space_id');
        $space = Space::findOrFail($spaceId);

        $space->update(['is_booked' => true]);
        $totalPrice = $space->price * $quantity;


        $user = auth()->user();

         Notification::send($user, new BookingConfirmation($space, $totalPrice));

        return view('payment.confirmation', compact('space', 'totalPrice', 'quantity'));
    } //End Method

    

    public function generateReceipt(Request $request, Space $space)
    {
        $quantity = Session::get('booking_quantity', 1);
        $totalPrice = $space->price * $quantity;
        $user = auth()->user();

        $data = [
            'user' => $user,
            'space' => $space,
            'quantity' => $quantity,
            'totalPrice' => $totalPrice,
        ];

        $pdf = PDF::loadView('payment.receipt', $data);

        return $pdf->stream('payment_receipt.pdf');
    } //End Method


    public function Receipt(){

        return view('payment.receipt');
    }


}
