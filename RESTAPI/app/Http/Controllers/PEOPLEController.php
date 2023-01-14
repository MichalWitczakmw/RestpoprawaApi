<?php

namespace App\Http\Controllers;

use App\Models\PEOPLE;
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
    public function show(PEOPLE $PEOPLE)
    {
        //
    }
    public function update(UpdatePEOPLERequest $request, PEOPLE $PEOPLE)
    {
        //
    }
    public function destroy(PEOPLE $PEOPLE)
    {
        //
    }
}
