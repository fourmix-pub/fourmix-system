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


    /**
     * 顧客更新
     * @param $request
     * @param Customer $customer
     * @return bool
     */
    public function customerUpdate($request, Customer $customer)
    {
        $customer->name = $request->get('name');
        $customer->type_id = $request->get('type_id');
        return $customer->update();
    }

    /**
     * 顧客保存
     * @param $request
     * @return bool
     */
    public function customerStore($request)
    {
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->type_id = $request->get('type_id');
        return $customer->save();
    }
}