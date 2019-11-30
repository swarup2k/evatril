<?php

namespace App\Http\Controllers\Merchant\API;

use App\Hall;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\Venue;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth:venue-api")->except(['addVenue','accountUpdate','addHall']);
    }

    public function addVenue(Request $request)
    {



        $venue = new Venue();
        $venue->name = $request->name;
        $venue->mobile = $request->mobile;
        $venue->merchant_id = $request->merchant_id;
        $venue->alt_mobile = $request->alt_mobile;
        $venue->email = $request->email;
        $venue->pincode = $request->pincode;
        $venue->area = $request->area;
        $venue->state = $request->state;
        $venue->city = $request->city;
        $venue->address = $request->address;
        $venue->lat = $request->lat;
        $venue->lon = $request->lon;
        $venue->venue_type = $request->venue_type;
        $venue->business_type = $request->business_type;
        $venue->venue_category = $request->venue_category;
        $venue->hall_nos = $request->hall_nos;
        $venue->lawn_nos = $request->lawn_nos;
        $venue->amenities = $request->amenities;
        $venue->save();

        return response()->json(['message' => 'Venue details has been saved', 'venue_id' => $venue->id ,'error' => 0]);

    }

    public function addHall(Request $request)
    {
        $hall = new Hall();
        $hall->name = $request->name;
        $hall->venue_id = $request->venue_id;
        $hall->type = $request->type;
        $hall->area_size = $request->area_size;
        $hall->capacity_floating = $request->capacity_floating;
        $hall->capacity_row = $request->capacity_row;
        $hall->booking_amount = $request->booking_amount;
        $hall->save();

        return response()->json(['message' => 'Property has been added', 'error' => 0]);
    }

    public function accountUpdate(Request $request)
    {
        $merchant = Merchant::findOrFail($request->merchant_id);

        $merchant->account_holder_name =  $request->account_holder_name;
        $merchant->account_no =  $request->account_no;
        $merchant->ifsc =  $request->ifsc;
        $merchant->branch_name =  $request->branch_name;
        $merchant->gst =  $request->gst;
        $merchant->save();

        return response()->json(['message' => 'Account has been updated', 'error' => 0]);


    }

}
