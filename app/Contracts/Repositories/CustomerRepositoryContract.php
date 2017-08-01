<?php

namespace App\Contracts\Repositories;


use App\Models\Customer;

interface CustomerRepositoryContract
{
    /**
     * 顧客資源取得契約
     * @return mixed
     */
    public function customerResources();

    /**
     * 顧客更新契約
     * @param $request
     * @param Customer $customer
     * @return mixed
     */
    public function customerUpdate($request, Customer $customer);

    /**
     * 追加契約
     * @param $request
     * @return mixed
     */
    public function customerStore($request);
}
