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
use App\Models\User;
use App\Http\Requests\AdvertiseRequest;
use Session;
use Image;
use DB;
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

/* ---------------free ad post -------------------*/


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
    public function adstore(AdvertiseRequest $request)
    {
        # code...
        
     // dd($request->premium);
     if($request->premium == null){
        $premium = 0;
        $request->premium = 0;
     }
    else 
        $premium = 1;


        if($request->weekly == null){
            $weekly = 0;
            $request->weekly = 0;
        }else{
            $weekly = 1;
        }
            
            //dd($request->premium);
        $ad = Advertise::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'category' => $request->category,
            'premium' => $premium,
            'weekly' => $weekly,
            'location' => $request->location,
            'phone' => $request->phone,
            'email' => $request->email,
            'subcategory' => $request->subcategory,
            'user' => $request->user,
            'city' => $request->city,
            
            'age' => $request->age,
            'cost' => $request->mtprice + $request->tcityprice+$request->premium+$request->sponsor,
            'status' => '0',
            'logo' => $request->logo
        ]);
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $ad);
        }
       
        session()->put('post_id', $ad->id);
        session()->put('title', $request->title);
        session()->put('desc', $request->desc);
        session()->put('phone', $request->phone);
        session()->put('cost', $ad->cost);
        session()->put('email', $request->email);
        session()->put('location', $request->location);
        session()->put('subcategory', $request->subcategory);
       
        return redirect()->route('preview.adform')->with('success','Data inserted successfully');
       // dd($request->all());
    }
    //ad preview
    public function preview()
    {
        # code...
      //  $ad = Advertise::create($request->all());
        return view('frontend.preview_ad');
      //  return redirect()->route('gallery.index')->with('success','Data inserted successfully');
       // dd($request->all());
    }

    public function post_ad(Request $request)
    {
        # code...
        
       
        DB::transaction(function () use($request) {
            $ad_Status = Advertise::findOrFail($request->post_id);
            $user = User::where('id', $ad_Status->user)->first();
            $ad_Status->update([
                'status' => '1'
            ]);

            $user->balance = $user->balance - $ad_Status->cost;
            $user->save();
        });

      


        return redirect()->route('ad_confirm');
    }

    public function adConfirm()
    {
        # code...
        return view('frontend.ad_confirm');
    }

    public function editAdform(Advertise $advertise)
    {
        # code...
        
        return view('frontend.user_editform',[
            'edit' => $advertise
        ]);
        //dd($advertise);
    }


    public function update_ad(Request $request,$id)
    {
        # code...
      //  dd($request->all());
      $advertise = Advertise::find($id);
      
        $advertise->update([
       
            'title' => $request->title,
            'desc' => $request->desc,
           
            'location' => $request->location,
            'phone' => $request->phone,
            'email' => $request->email,
           
            'logo' => $request->logo
                 
        ]
        );

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $ad);
        }
        return redirect()->route('user.dashboard')->with('success', 'Data updated suuccessfully!');
    }



/* ---------------free ad post -------------------*/

/* --------------- paid post single---------------------*/

    public function payment($id)
    {
        # code...
        $ad_id = $id;
        return view('frontend.payment_ad',['ad_id' =>$ad_id]);
    }

/*-------------- paid post single------------------------*/


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

    private function _uploadImage($request, $ad)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 900)->save(public_path('storage/' . $filename));
            $ad->logo = $filename;
            $ad->save();
        }
       
    }



}
