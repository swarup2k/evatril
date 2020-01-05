<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\MasterVenue;
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
        $data['venues'] = MasterVenue::where('merchant_id', auth('merchant')->id())->count();
        return view('merchant.dashboard', ['data' => $data]);
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

    public function myMasterVenues()
    {
        $venues = MasterVenue::where('merchant_id', auth('merchant')->id())->paginate(20);
        return view('merchant.master-venues', ['venues' => $venues]);
    }

    public function deleteMasterVenue($id)
    {
        $venue = MasterVenue::find($id);
        $venue->delete();

        return redirect()->back()->with('success','Venue has been removed');
    }

    public function bookings()
    {
        return view('merchant.bookings');
    }

    public function reviews()
    {
        return view('merchant.reviews');
    }

    public function payments()
    {
        return view('merchant.payments');
    }

    public function support()
    {
        return view('merchant.support');
    }
}
