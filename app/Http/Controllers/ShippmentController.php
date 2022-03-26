<?php

namespace App\Http\Controllers;

use App\Models\Shippment;
use Illuminate\Http\Request;

class ShippmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.shipments.all');
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
     * @param  \App\Models\Shippment  $shippment
     * @return \Illuminate\Http\Response
     */
    public function show(Shippment $shippment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shippment  $shippment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shippment $shippment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shippment  $shippment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shippment $shippment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shippment  $shippment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shippment $shippment)
    {
        //
    }
}
