<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Requests\AboutusRequest;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $about = Aboutus::orderBy('id', 'desc')->get();
        //dd($about);
        $aboutCount = Aboutus::count();
        return view('admin.about.index',['about'=>$about, 'aboutCount'=> $aboutCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutusRequest $request)
    {
        //
        $about = Aboutus::create($request->all());
        
        return redirect()->route('about.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit( $aboutus)
    {
        //
      // dd($aboutus);
      $edit = Aboutus::find($aboutus);
    //  dd($edit);
        return view('admin.about.edit',[
            'edit' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(AboutusRequest $request,  $aboutus)
    {
        //
        $aboutus = Aboutus::find($aboutus);
        $aboutus->update($request->all());
       
        return redirect()->route('about.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $aboutus)
    {
        //
        $aboutus->delete();
        return redirect()->route('about.index')->with('status','Data deleted successfully!');
    }
}
