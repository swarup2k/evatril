<?php


namespace App\Http\Controllers\Merchant\API;

use App\CateringPackage;
use App\Hall;
use App\Http\Controllers\Controller;
use App\MasterVenue;
use App\Merchant;
use App\Slug;
use App\Sms;
use App\Venue;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth:merchant-api")->except(['addVenue','accountUpdate','addHall','addMasterVenue']);
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

    public function addMasterVenue(Request $request)
    {
        $enc_photo = $request->banner;
        $base64_str = substr($enc_photo, strpos($enc_photo, ",") + 1);
        $image = base64_decode($base64_str);
        $safeName = \Str::random(10) . md5(time()) . '.' . 'jpeg';
        \Storage::disk('public')->put('venue/banner/' . $safeName, $image);
        $banner = "venue/banner/" . $safeName;


        $venue = new MasterVenue();
        $venue->merchant_id = $request->merchant_id;
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
        return response()->json(['code' => 200, 'message' => 'Venue has been added successfully!']);
    }

    public function myMasterVenueList(Request $request)
    {
        $venues = MasterVenue::where(['merchant_id' => $request->merchant_id])->get();
        return response()->json(['code' => 200, 'message' => 'Success', 'data' => $venues]);
    }

    public function addPackage(Request $request)
    {
        $package = new CateringPackage();
        $package->merchant_id = auth('merchant-api')->id();
        $package->name = $request->name;
        $package->description = $request->description;
        $package->price = $request->price;
        $package->save();
        return response()->json(['message' => 'Package has been added successfully', 'error' => 0]);
    }

    public function listPackage(Request $request)
    {
        $packages = CateringPackage::where(['merchant_id' => $request->merchant_id])->get();
        return response()->json(['code' => 200, 'message' => 'Success', 'data' => $packages]);
    }

    public function deletePackage(Request $request)
    {
        CateringPackage::find($request->id)->delete();
        return response()->json(['code' => 200, 'message' => 'Package has been deleted!']);
    }

    public function updatePackage(Request $request)
    {
        $package = CateringPackage::find($request->id);
        $package->name = $request->name;
        $package->description = $request->description;
        $package->price = $request->price;
        $package->save();
        return response()->json(['message' => 'Package has been updated successfully', 'error' => 0]);
    }





}
