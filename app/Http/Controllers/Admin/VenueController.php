<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Merchant;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth:admin");
    }

    public function add()
    {
        $merchants = Merchant::all();
        return view('admin.venue.create', ['merchants' => $merchants]);
    }

    public function save(Request $request)
    {
        return $request->all();
    }


}
