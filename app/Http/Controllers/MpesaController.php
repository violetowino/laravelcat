<?php

namespace App\Http\Controllers;

use Safaricom\Mpesa\Mpesa;
use Illuminate\Http\Request;

class MpesaController extends Controller
{
    public function stkSimulation(){
        $mpesa= new Mpesa();
        $BusinessShortCode= 174379; 
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType = 'CustomerPayBillOnline'; 
        $Amount = 1;
        $PartyA = "254727542403";
        $PartyB = 174379;
        $PhoneNumber = "254727542403"; 
        $CallBackURL = "https://mydomain.com/pat"; 
        $AccountReference = "Test"; 
        $TransactionDesc = "Test"; 
        $Remarks = "Payment Received";

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode, 
            $LipaNaMpesaPasskey, 
            $TransactionType, 
            $Amount,
            $PartyA, 
            $PartyB, 
            $PhoneNumber, 
            $CallBackURL, 
            $AccountReference, 
            $TransactionDesc, 
            $Remarks,
        );

        dd($stkPushSimulation);
    }
}
