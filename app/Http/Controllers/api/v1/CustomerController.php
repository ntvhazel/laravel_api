<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Resources\v1\CustomerResource;
use App\Http\Resources\v1\CustomerCollection;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        return new CustomerCollection(Customer::paginate());
    }

    public function show(Customer $customer){
        return new CustomerResource($customer);
    }
}
