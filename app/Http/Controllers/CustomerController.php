<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Customer;

class CustomerController extends BaseController
{
    public function listCustomer() {
        // $list = \DB::table('sales.customers')->whereBetween('customer_id', [81, 100])->get();
		$list = Customer::whereBetween('customer_id', [81, 100])->get();
        // return view('welcome',[
        //     'customer_id' => $customer_id,
        //     'first_name' => $first_name,
        //     'last_name' => $last_name,
        //     'phone' => $phone,
        //     'email' => $email,
        //     'street' => $street,
        //     'city' => $city,
        //     'state' => $state,
        //     'zip_code' => $zip_code,
        // ]);
		return view('welcome')->with('list', $list);
    }
}
