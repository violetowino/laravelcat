<?php

namespace App\Http\Controllers;

use Omnipay\Omnipay;
use App\Models\Space;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct() {         //constructor
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

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
    }

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
    }

    public function error(){
        return 'User declined Payment!!';
    }


    public function index()
    {
        $spaceId = session('space_id');
        $space = Space::findOrFail($spaceId);
        return view('spaces.payment', compact('space'));
    }

    public function confirm(Request $request, Space $space)
    {
        $spaceId = $request->input('space_id');
        $space = Space::findOrFail($spaceId);

        // Implement your payment processing logic here
        // Assuming the payment is successful, you can mark the space as booked
        $space->update(['is_booked' => true]);

        // Redirect to the confirmation page or any other success page
        return view('payment.confirmation', compact('space'));
    }
}
