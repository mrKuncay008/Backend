<?php

namespace App\Http\Controllers;

use App\Models\Regional;
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
        $regionals = Regional::all();
        return view('regional.index', ['regional'=> $regionals]);
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
        $data = $request->validate([
            'name'=> 'required',
            'negara'=> 'required'
        ]);

        $newRegional = Regional::create($data);
        return redirect(route('regional.index'));
    }

    public function edit(Regional $regional)
    {
        return view('regional.edit', ['regional' => $regional]);
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
        $data = $request->validate([
            'name'=> 'required',
            'negara'=> 'required'
        ]);

        $regional->edit($data);
        return redirect(route('regional.index'))->with('success', 'Data is Update');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regional  $regional
     * @return \Illuminate\Http\Response
     */
    public function destroy(regional $regional)
    {
        $regional->delete();
        return redirect(route('regional.index'))->with('success', 'Data is Delete');
    }

    public function show(regional $regional)
    {
        //
    }

    

}
