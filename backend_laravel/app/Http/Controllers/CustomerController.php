<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //** http://localhost:8000/api/customer
    public function index()
    {
        error_log('## Customer index');
        return response()->json(Customer::all());
    }
    public function store(Request $request)
    {
        
    }
    public function show($id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
