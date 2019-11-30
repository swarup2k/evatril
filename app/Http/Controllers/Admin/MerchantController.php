<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth:admin");
    }

    public function list()
    {
        $merchants = Merchant::with('venue')->get();
        return view('admin.merchant.list',['merchants' => $merchants]);
    }

    public function activateMerchant($id)
    {
        $merchant = Merchant::find($id);
        $merchant->approved = 1;
        $merchant->save();

        flash(__('Merchant has been activated'))->success();
        return redirect()->back();
    }

    public function deactivateMerchant($id)
    {
        $merchant = Merchant::find($id);
        $merchant->approved = 0;
        $merchant->save();

        flash(__('Merchant has been deactivated'))->error();
        return redirect()->back();
    }

    public function deleteMerchant($id)
    {
        Merchant::find($id)->delete();
        flash(__('Merchant has been deleted'))->success();
        return redirect()->back();
    }
}
