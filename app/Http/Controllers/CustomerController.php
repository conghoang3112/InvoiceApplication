<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function all_customer()
    {
        $customers = Customer::orderBy('id', 'DESC')->get();
        return response()->json([
            'customers' => $customers
        ], 200);
    }
}
