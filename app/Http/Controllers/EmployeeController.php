<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {
    public function index(Request $request) {
        // Get the search value from the request
        $search = $request->input('search');

        $employees = Employee::with('hobbies')
                        ->where('name', 'LIKE', "%{$search}%")
                        ->orWhereHas('hobbies', function ($query) use ($search) {
                            $query->where('name', 'LIKE', "%{$search}%");
                        })
                        ->get()
                        ->toArray();
             
        return view('employees.list', compact('employees'));
    }
}