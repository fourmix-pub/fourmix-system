<?php

namespace App\Http\Controllers;

use App\SafetyMail;
use Illuminate\Http\Request;

class SafetyMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('safety-mail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(SafetyMail $safetyMail)
    {
        //
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
