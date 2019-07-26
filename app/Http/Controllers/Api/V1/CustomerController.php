<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    /**
     * 顧客一覧取得
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CustomerResource::collection(Customer::all());
    }
}
