<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SectionController extends Controller
{
    //
    public function index($cityid)
    {
        # code...
        $city = $cityid;
        return view('frontend.section',['city' => $city]);
    }
}
