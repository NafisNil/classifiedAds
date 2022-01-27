<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use App\Http\Requests\SubCategoryRequest;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategory = Subcategory::orderBy('id', 'desc')->paginate(20);
        
        return view('admin.subcategory.index',['subcategory'=>$subcategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('admin.subcategory.create', ['category'=>$category] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryRequest $request)
    {
        //
        $subcategory = Subcategory::create($request->all());
        
        return redirect()->route('subcategory.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
        $category = Category::all();
        return view('admin.subcategory.edit',[
            'edit' => $subcategory,
            'category' =>  $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
        $subcategory->update($request->all());
       
        return redirect()->route('subcategory.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
        $subcategory->delete();
        return redirect()->route('subcategory.index')->with('status','Data deleted successfully!');
    }
}
