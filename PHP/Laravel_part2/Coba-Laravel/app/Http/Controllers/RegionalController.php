<?php

namespace App\Http\Controllers;

use App\Models\regional;
use App\Http\Requests\StoreregionalRequest;
use App\Http\Requests\UpdateregionalRequest;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('regional.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreregionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreregionalRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function show(regional $regional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function edit(regional $regional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateregionalRequest  $request
     * @param  \App\Models\regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateregionalRequest $request, regional $regional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function destroy(regional $regional)
    {
        //
    }
}
