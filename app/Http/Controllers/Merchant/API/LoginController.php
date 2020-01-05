<?php

namespace App\Http\Controllers\Merchant\API;

use App\Hall;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\Sms;
use App\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function preLogin(Request $request)
    {
        $merchant = Merchant::where('mobile', $request->mobile)->first();
        if ($merchant) {
            if ($merchant->verified == 1) {
                if ($merchant->name == '' || $merchant->email == '' || $merchant->password == '') {
                    return response()->json(['message' => 'Redirecting to registration page', 'merchant_id' => $merchant->id, 'error' => 0]);
                }
            } else {
                $otp = rand(100000, 999999);
                $sms = new Sms();
                $sms->send($request->mobile, 'Your verification otp is ' . $otp);
                $merchant->otp = $otp;
                $merchant->save();
                return response()->json([
                    'message' => 'OTP sent',
                    'merchant_id' => $merchant->id,
                    'error' => 0
                ]);
            }
            return response()->json(['message' => 'Mobile exists', 'merchant' => $merchant, 'error' => 1]);
        } else {
            $otp = rand(100000, 999999);
            $sms = new Sms();
            $sms->send($request->mobile, 'Your login otp is ' . $otp);

            $merchant = new Merchant();
            $merchant->mobile = $request->mobile;
            $merchant->otp = $otp;
            $merchant->save();

            return response()->json([
                'message' => 'OTP sent',
                'merchant_id' => $merchant->id,
                'error' => 0
            ]);
        }

    }

    public function login(Request $request)
    {
        $request->validate([
            'mobile' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = request(['mobile', 'password']);

        if (!Auth::guard('merchant')->attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = auth()->guard('merchant')->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(5);
        $token->save();

        return response()->json([
            'merchant' => $user,
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'message' => 'Login successful',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $hall = null;
        $merchant = Merchant::find($request->merchant_id);
        if ($merchant != '' || $merchant != NULL) {
            $venue = Venue::where('merchant_id', $merchant->id)->first();
            if ($venue) {
                $hall = Hall::where('venue_id', $venue->id)->first();
            }
            if ($merchant->otp == $request->otp) {
                $merchant->verified = 1;
                $merchant->save();
                return response()->json(['message' => 'OTP verified', 'venue' => $merchant, 'hall' => $hall, 'venue' => $venue, 'error' => 0]);
            } else {
                return response()->json(['message' => 'Incorrect OTP', 'error' => 1]);
            }
        } else {
            return response()->json(['message' => 'Invalid Merchant', 'error' => 1]);
        }

    }

    public function register(Request $request)
    {
        $merchant = Merchant::findOrFail($request->merchant_id);
        $merchant->name = $request->name;
        $merchant->email = $request->email;
        $merchant->password = bcrypt($request->password);
        $merchant->save();
        return response()->json(['message' => 'Registration successful', 'error' => 0]);
    }

    public function forgotSendOtp(Request $request)
    {
        $mobile = $request->mobile;
        $otp = rand(100000, 999999);
        $merchant = Merchant::where('mobile', $mobile)->first();
        if ($merchant != '' || $merchant != NULL) {
            $merchant->otp = $otp;
            $merchant->save();
            (new Sms())->send($mobile, 'You account reset OTP is : ' . $otp);
            return response()->json(['message' => 'Account reset OTP has been sent', 'merchant_id' => $merchant->id, 'error' => 0]);
        } else {
            return response()->json(['message' => 'Mobile number doesn\'t exist', 'error' => 1]);
        }
    }

    public function changePassword(Request $request)
    {
        $merchant = Merchant::where('mobile', $request->mobile)->first();
        if ($merchant != '' || $merchant != NULL) {
            $merchant->password = bcrypt($request->password);
            $merchant->save();
            return response()->json(['message' => 'Password updated successfully', 'error' => 0]);
        } else {
            return response()->json(['message' => 'Mobile number doesn\'t exist', 'error' => 1]);
        }

    }
}
