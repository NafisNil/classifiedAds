<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Requests\TermRequest;
class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $term = Term::orderBy('id', 'desc')->get();
        //dd($about);
        $termCount = Term::count();
        return view('admin.term.index',['term'=>$term, 'termCount'=> $termCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.term.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TermRequest $request)
    {
        //
        $term = Term::create($request->all());
        
        return redirect()->route('term.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit( $term)
    {
        //
       
        $edit = Term::find($term);
      
    //  dd($edit);
        return view('admin.term.edit',[
            'edit' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $term)
    {
        //
        $term = Term::find($term);
        $term->update($request->all());
       
        return redirect()->route('term.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        //
    }
}
