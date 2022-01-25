<?php

namespace App\Http\Controllers;

use App\Models\SubRegion;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Requests\SubRegionRequest;

class SubRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subRegion = SubRegion::orderBy('id', 'desc')->paginate(20);
       
        return view('admin.subregion.index',['subRegion'=>$subRegion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $region = Region::all();
        return view('admin.subregion.create', ['region'=>$region] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubRegionRequest $request)
    {
        //
        $subRegion = SubRegion::create($request->all());
        
        return redirect()->route('subregion.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubRegion  $subRegion
     * @return \Illuminate\Http\Response
     */
    public function show(SubRegion $subRegion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubRegion  $subRegion
     * @return \Illuminate\Http\Response
     */
    public function edit(SubRegion $subRegion)
    {
        //
        return view('admin.subregion.edit',[
            'edit' => $subRegion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubRegion  $subRegion
     * @return \Illuminate\Http\Response
     */
    public function update(SubRegionRequest $request, SubRegion $subRegion)
    {
        //
        $subRegion->update($request->all());
       
        return redirect()->route('subregion.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubRegion  $subRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubRegion $subRegion)
    {
        //
        $subRegion->delete();
        return redirect()->route('subregion.index')->with('status','Data deleted successfully!');
    }
}
