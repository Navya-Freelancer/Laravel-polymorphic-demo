<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {
    public function list(Request $request) {
        $employees = Employee::with('hobbies')->get()->toArray();
        return view('employees.list', compact('employees'));
    }

    public function show(Request $request, $id) {
        $employee = Employee::with('hobbies')->where('id', $id)->first()->toArray();
        return view('employees.show', compact('employee'));
    }
}