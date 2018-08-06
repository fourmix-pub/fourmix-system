<?php

namespace App\Http\Controllers\SafetyMails;

use App\Contracts\Repositories\SafetyMailRepositoryContract;
use App\Http\Controllers\Controller;
use App\Models\SafetyMail;
use Illuminate\Http\Request;

class SafetyMailController extends Controller
{
    /**
     * 安否確認倉庫契約(インターフェース).
     * @var SafetyMailRepositoryContract
     */
    protected $repository;

    /**
     * SafetyMailController constructor.
     * @param SafetyMailRepositoryContract $repository
     */
    public function __construct(SafetyMailRepositoryContract $repository)
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
        return view('safety-mail.index', $this->repository->safetyMailResources());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('safety-mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $safetyMail = SafetyMail::find(1);
        return view('safety-mail.show', compact('safetyMail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function edit(SafetyMail $safetyMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SafetyMail $safetyMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SafetyMail  $safetyMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SafetyMail $safetyMail)
    {
        //
    }
}
