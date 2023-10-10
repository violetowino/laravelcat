<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Space;
use Safaricom\Mpesa\Mpesa;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\MpesaTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MpesaController extends Controller
{
    public function lipaNaMpesaPassword()
    {
        $timestamp = Carbon::now()->format('YmdHms');
        $passKey ="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $businessShortCOde =174379;
        $mpesaPassword = base64_encode($businessShortCOde.$passKey.$timestamp);

        return $mpesaPassword;
        
    }

    public function newAccessToken()
    {
        $consumer_key="4Vu3l6yTP5CplAjj1zespx5HbyooiKqo";
        $consumer_secret="23cQx0cKPBQHGqRP";
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$credentials,"Content-Type:application/json"));
        curl_setopt($curl, CURLOPT_HEADER,false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        $access_token=json_decode($curl_response);
        curl_close($curl);
       
        return $access_token->access_token;  
        
    }


    public function stkPush(Request $request)
    {  
      
            $user = $request->user;
            $amount = $request->amount;
            $phone =  $request->phone_number;
            $formatedPhone = substr($phone, 1);
            $code = "254";
            $phoneNumber = $code.$formatedPhone;

        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $curl_post_data = [
            'BusinessShortCode' =>174379,
            'Password' => $this->lipaNaMpesaPassword(),
            'Timestamp' => Carbon::now()->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' =>  $amount,
            'PartyA' =>  $phoneNumber, 
            'PartyB' => 174379,
            'PhoneNumber' =>  $phoneNumber, 
            'CallBackURL' => 'https://65cf-102-0-4-108.ngrok-free.app/api/stk/push/callback/url',
            'AccountReference' => "Neighbours Parking",
            'TransactionDesc' => "Parking fee"
        ];


        $data_string = json_encode($curl_post_data);


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$this->newAccessToken()));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        
        return view('payment.success');
        
    }

    
    public function MpesaRes(Request $request)
     {
        $response = json_decode($request->getContent());

        $trn = new MpesaTransaction;
        $trn->response = json_encode($response);
        $trn->save();
     }

}

