<?php

namespace App\Http\Controllers\Merchant;

use App\Booking;
use App\Hall;
use App\Http\Controllers\Controller;
use App\MasterVenue;
use App\Slug;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:merchant')->except('logout');
    }

    public function merchant()
    {
        return auth('merchant')->user();
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
        $bookings = Booking::with(['venue','slot'])->where('merchant_id', $this->merchant()->id)->get();
        return view('merchant.bookings',['bookings' => $bookings]);
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

    public function addMasterVenue(Request $request)
    {
        $banner = $request->file('banner')->store('venue/banner','public');
        $venue = new MasterVenue();
        $venue->merchant_id = auth('merchant')->id();
        $venue->name = $request->name;
        $venue->slug = (new Slug())->createSlug($request->name);
        $venue->banner = $banner;
        $venue->type = $request->type;
        $venue->charge_per_night = $request->charge_per_night;
        $venue->guest_capacity = $request->guest_capacity;
        $venue->phone = $request->phone;
        $venue->address = $request->address;
        $venue->city = $request->city;
        $venue->state = $request->state;
        $venue->pincode = $request->pincode;
        $venue->lat = $request->lat;
        $venue->lon = $request->lon;
        $venue->inclusions = $request->inclusions;
        $venue->spaces = $request->spaces;
        $venue->location_description = $request->location_description;
        $venue->accommodation = $request->accommodation;
        $venue->event_space = $request->event_space;
        $venue->events_type = $request->events_type;
        $venue->catering_policy = $request->catering_policy;
        $venue->alcohol_policy = $request->alcohol_policy;
        $venue->indian_cuisines = $request->indian_cuisines;
        $venue->western_cuisines = $request->western_cuisines;
        $venue->oriental_cuisines = $request->oriental_cuisines;
        $venue->modes_of_payment = $request->modes_of_payment;
        $venue->cancellation_policy = $request->cancellation_policy;
        $venue->limit_for_celebration = $request->limit_for_celebration;
        $venue->restrictions = $request->restrictions;
        $venue->active = 1;
        $venue->save();
        return redirect()->route('merchant.master.venues')->with('success','Venue has been added');
    }

    public function addHall(Request $request)
    {
        $hall = new Hall();
        $hall->name = $request->name;
        $hall->venue_id = $request->venue_id;
        $hall->merchant_id = auth('merchant')->id();
        $hall->type = $request->type;
        $hall->area_size = $request->area_size;
        $hall->capacity_floating = $request->capacity_floating;
        $hall->capacity_row = $request->capacity_row;
        $hall->booking_amount = $request->booking_amount;
        $hall->save();
        return redirect()->route('merchant.home')->with('success','Hall/Lawn has been added');
    }

    public function listHall(Request $request)
    {
        $halls = Hall::where('merchant_id', auth('merchant')->id())->paginate();
        return view('merchant.halls',['halls' => $halls]);
    }

    public function deleteHall($id)
    {
        Hall::find($id)->delete();
        return redirect()->back()->with('success','Hall/Lawn has been deleted');
    }
}
