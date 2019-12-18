<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:merchant')->except('logout');
    }

    public function index()
    {
        return view('merchant.dashboard');
    }

    public function myVenues()
    {
        $venues = Venue::where('merchant_id', auth('merchant')->id())->paginate(15);
        return view('merchant.venues', ['venues' => $venues]);
    }

    public function deleteVenue($id)
    {
        $venue = Venue::find($id);
        $venue->delete();

        return redirect()->back()->with('success','Venue has been removed');
    }
}
