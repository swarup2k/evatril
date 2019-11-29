<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
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
}
