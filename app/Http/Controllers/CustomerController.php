<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    public function list(Request $request) {
        $customers = Customer::with('hobbies')->get()->toArray();
        return view('customers.list', compact('customers'));
    }

    public function show(Request $request, $id) {
        $customer = Customer::with('hobbies')->where('id', $id)->first()->toArray();
        return view('customers.show', compact('customer'));
    }
}