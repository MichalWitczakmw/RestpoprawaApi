<?php

namespace App\Http\Controllers;

use App\Models\PEOPLE;
use App\Http\Requests\StorePEOPLERequest;
use App\Http\Requests\UpdatePEOPLERequest;

class PEOPLEController extends Controller
{

    public function index()
    {
        return PEOPLE::all();
    }
    public function create()
    {
        //
    }
    public function show(PEOPLE $pEOPLE)
    {
        //
    }
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
