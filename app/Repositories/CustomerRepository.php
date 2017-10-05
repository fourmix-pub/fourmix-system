<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Contracts\Repositories\CustomerRepositoryContract;

class CustomerRepository implements CustomerRepositoryContract
{
    /**
     * 顧客資源取得.
     * @return mixed
     */
    public function customerResources()
    {
        $customers = Customer::latest();

        if ($customerId = request('customer_id')) {
            $customers = $customers->where('id', $customerId);
        }

        if ($typeId = request('type_id')) {
            $customers = $customers->where('type_id', $typeId);
        }

        $customers = $customers->paginate(50);

        $customersSelect = Customer::all();

        return compact('customers', 'customersSelect', 'customerId', 'typeId');
    }

    /**
     * 顧客更新.
     * @param $request
     * @param Customer $customer
     * @return bool
     */
    public function update($request, Customer $customer)
    {
        $customer->name = $request->get('name');
        $customer->type_id = $request->get('type_id');

        return $customer->update();
    }

    /**
     * 顧客保存.
     * @param $request
     * @return bool
     */
    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->type_id = $request->get('type_id');

        return $customer->save();
    }
}
