<?php

namespace App\Repositories;


use App\Contracts\Repositories\CustomerRepositoryContract;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryContract
{
    /**
     * 顧客資源取得
     * @return mixed
     */
    public function customerResources()
    {
        $customers = Customer::latest()->get();
        return compact('customers');
    }
}