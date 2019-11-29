<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function myVenues()
    {
        $venues = Venue::where('merchant_id', NULL)->get();
       return view('admin.venues',['venues' => $venues,'title' => 'My Venues']);
    }

    public function merchantVenues()
    {
        $venues = Venue::where('merchant_id', '<>' ,NULL)->get();
        return view('admin.venues', ['venues' => $venues, 'title' => 'Merchant Venues']);
    }

    public function deleteMyVenues($id, Request $request)
    {
        Venue::findOrFail($id)->delete();
        flash(__('Venue has been deleted'))->success();
        return redirect()->back();
    }

    public function saveVenue()
    {

    }
    public function addVenue()
    {
        return view('admin.venue.create');
    }

    public function viewVenue($id)
    {
        $venue = Venue::with('merchant')->find($id);
        return view('admin.venue.view',['venue' => $venue]);
    }
}
