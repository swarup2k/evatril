<?php

namespace App\Http\Controllers\Merchant\API;

use App\Hall;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\Sms;
use App\Venue;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function preLogin(Request $request)
    {
        $merchant = Merchant::where('mobile', $request->mobile)->first();
        if($merchant){
           if($merchant->verified == 1){
               if($merchant->name == '' || $merchant->email == '' || $merchant->password == ''){
                   return response()->json(['message' => 'Redirecting to registration page','merchant_id' => $merchant->id ,'error' => 0]);
               }
           }else{
               $otp = rand(100000,999999);
               $sms = new Sms();
               $sms->send($request->mobile,'Your verification otp is '.$otp);
               $merchant->otp = $otp;
               $merchant->save();
               return response()->json([
                   'message' => 'OTP sent',
                   'merchant_id' => $merchant->id ,
                   'error' => 0
               ]);
           }
            return response()->json(['message' => 'Mobile exists','merchant' => $merchant,'error' => 1]);
        }else{
            $otp = rand(100000,999999);
            $sms = new Sms();
            $sms->send($request->mobile,'Your login otp is '.$otp);

            $merchant = new Merchant();
            $merchant->mobile = $request->mobile;
            $merchant->otp = $otp;
            $merchant->save();

            return response()->json([
                'message' => 'OTP sent',
                'merchant_id' => $merchant->id ,
                'error' => 0
            ]);
        }

    }

    public function login(Request $request)
    {

    }

    public function verifyOtp(Request $request)
    {
        $hall = null;
        $merchant = Merchant::find($request->merchant_id);
        $venue = Venue::where('merchant_id', $merchant->id)->first();
        if($venue){
            $hall = Hall::where('venue_id', $venue->id)->first();
        }
        if($merchant->otp == $request->otp){
            $merchant->verified = 1;
            $merchant->save();
            return response()->json(['message' => 'OTP verified', 'venue' => $merchant, 'hall' => $hall ,'venue' => $venue,'error' => 0]);
        }else{
            return response()->json(['message' => 'Incorrect OTP','error' => 1]);
        }
    }

    public function register(Request $request)
    {
        $merchant = Merchant::findOrFail($request->merchant_id);
        $merchant->name = $request->name;
        $merchant->email = $request->email;
        $merchant->password = bcrypt($request->password);
        $merchant->save();
        return response()->json(['message' => 'Registration successful','error' => 0]);
    }
}
