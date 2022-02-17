<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\SubRegion;
use App\Models\City;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Role;
use App\Models\Term;
use App\Models\Privacy;
use App\Models\Aboutus;
use App\Models\Contact;
use App\Models\Advertise;
use Session;
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

    public function role()
    {
        # code...
        $role = Role::first();
        return view('frontend.role_user',['role' => $role]);
    }

    public function postad()
    {
        # code...
        return view('frontend.post-ad');
    }

    public function choose($id)
    {
        # code...
      $ad_Category = $id;
        $region = Region::all();
        return view('frontend.choose_location',['region' => $region, 'ad_Category' => $ad_Category]);
    }

    public function category($id)
    {
        # code...
        $category = Category::all();
        $cityId = $id;
        return view('frontend.choose_category',['category' => $category, 'cityId' => $cityId]);

    }

    public function subcategory($id)
    {
        # code...
        $subcategory = Subcategory::all();
        $categoryId = $id;
        return view('frontend.choose_subcategory',['subcategory' => $subcategory, 'categoryId' => $categoryId]);

    }


    public function adform($id)
    {
        # code...
        $city =Session::get('city');
        $subcategory = $id;
        $cityDetails = City::find($city);
        $nearby = City::where('subregion', $cityDetails->subregion)->get();
        
        return view('frontend.user_adform',['city' => $city, 'subcategory'=>$subcategory, 'cityDetails' => $cityDetails, 'nearby' => $nearby]);
    }
//ad store with status 0
    public function adstore(Request $request)
    {
        # code...
        dd($request->all());
        $ad = Advertise::create($request->all());
       
        session()->put('key', $value);
        return redirect()->route('preview.adform')->with('success','Data inserted successfully');
       // dd($request->all());
    }
    //ad preview
    public function preview(Request $request)
    {
        # code...
        $ad = Advertise::create($request->all());
        return view('frontend.preview_ad');
        return redirect()->route('gallery.index')->with('success','Data inserted successfully');
       // dd($request->all());
    }
    public function terms()
    {
        # code...
        $terms = Term::first();
        
        return view('frontend.terms', ['terms' => $terms]);
    }


    public function privacy()
    {
        # code...
        $privacy = Privacy::first();
        dd($privacy);
        return view('frontend.terms',  ['privacy' => $privacy]);
    }

    public function aboutUs()
    {
        # code...
        $about = Aboutus::first();
        
        return view('frontend.aboutus', ['about' => $about]);
    }

    public function contact()
    {
        # code...
        $contact = Contact::first();
        return view('frontend.contact', ['contact' => $contact]);
    }

    public function addCredit()
    {
        # code...
        return view('frontend.add_credit');
    }

    public function passwordReset()
    {
        # code...
        return view('frontend.reset');
    }
}
