<?php

namespace App\Http\Controllers;

use App\Models\PEOPLE;
use App\Http\Requests\StorePEOPLERequest;
use App\Http\Requests\UpdatePEOPLERequest;

class PEOPLEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePEOPLERequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePEOPLERequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PEOPLE  $pEOPLE
     * @return \Illuminate\Http\Response
     */
    public function show(PEOPLE $pEOPLE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PEOPLE  $pEOPLE
     * @return \Illuminate\Http\Response
     */
    public function edit(PEOPLE $pEOPLE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePEOPLERequest  $request
     * @param  \App\Models\PEOPLE  $pEOPLE
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePEOPLERequest $request, PEOPLE $pEOPLE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PEOPLE  $pEOPLE
     * @return \Illuminate\Http\Response
     */
    public function destroy(PEOPLE $pEOPLE)
    {
        //
    }
}
