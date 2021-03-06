<?php

namespace App\Http\Controllers\Settings;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\CustomerRequest;
use App\Contracts\Repositories\CustomerRepositoryContract;

class CustomerController extends Controller
{
    /**
     * 勤務分類倉庫契約（レポジトリー）.
     * @var CustomerRepositoryContract
     */
    protected $repository;

    protected $nav = 'settings';

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
     * @return mixed
     */
    public function index()
    {
        return view('settings.customer.index', $this->repository->customerResources())->with('nav', $this->nav)->with('mode', 'customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        return response()->save($this->repository->create($request));
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
        return response()->update($this->repository->update($request, $customer));
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
