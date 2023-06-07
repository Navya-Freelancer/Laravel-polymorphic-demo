<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    public function index(Request $request) {
         // Get the search value from the request
         $search = $request->input('search');

         $customers = Customer::with('hobbies')
                         ->where('name', 'LIKE', "%{$search}%")
                         ->orWhereHas('hobbies', function ($query) use ($search) {
                             $query->where('name', 'LIKE', "%{$search}%");
                         })
                         ->get()
                         ->toArray();
        return view('customers.list', compact('customers'));
    }
}