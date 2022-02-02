<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\SubRegion;
use App\Models\City;
use App\Models\Category;
class FrontendController extends Controller
{
    //

    public function index()
    {
        # code...
        $region = Region::all();
        //$subregion = SubRegion::all();
       // $city = City::all();
        return view('frontend.index',['region' => $region]);
    }

    public function category_list()
    {
        # code...
        $category = Category::all();
        return view('frontend.layout.home',['category' => $category]);
    }

    public function login()
    {
        # code...
        return view('frontend.login');
    }

    public function registration()
    {
        # code...
        return view('frontend.register');
    }

    
}
