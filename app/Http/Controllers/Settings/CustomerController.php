<?php

namespace App\Http\Controllers\Settings;

use App\Contracts\Repositories\CustomerRepositoryContract;
use App\Http\Requests\Settings\CustomerRequest;
use App\Models\Customer;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * @var CustomerRepositoryContract
     */
    protected $repository;

    /**
     * CustomerController constructor.
     * @param CustomerRepositoryContract $repository
     */
    public function __construct(CustomerRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.customer.index', $this->repository->customerResources());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        return response()->save($this->repository->customerStore($request));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param CustomerRequest $request
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        return response()->update($this->repository->customerUpdate($request, $customer));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Customer $customer)
    {
        return response()->delete($customer->delete());
    }
}
