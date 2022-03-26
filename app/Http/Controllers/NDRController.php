<?php

namespace App\Http\Controllers;

use App\Models\NDR;
use Illuminate\Http\Request;

class NDRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.ndr.index');
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
     * @param  \App\Models\NDR  $nDR
     * @return \Illuminate\Http\Response
     */
    public function show(NDR $nDR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NDR  $nDR
     * @return \Illuminate\Http\Response
     */
    public function edit(NDR $nDR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NDR  $nDR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NDR $nDR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NDR  $nDR
     * @return \Illuminate\Http\Response
     */
    public function destroy(NDR $nDR)
    {
        //
    }
}
