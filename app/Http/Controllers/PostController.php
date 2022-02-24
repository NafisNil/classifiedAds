<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;

class PostController extends Controller
{
    //
    public function index($id)
    {
        # code...
        $city = session()->get('city');
        
        $posts = Advertise::selectRaw('title, id, subcategory, premium, weekly, location, logo,DATE(created_At) as created_date')->where('city', $city)->where('subcategory', $id)->orderBy('created_at', 'desc')->orderBy('weekly', 'desc')->get()->groupBy('created_date');
     //dd($posts);
        return view('frontend.post', ['posts' =>$posts, 'city' => $city, 'id' => $id ]);
    }

    public function single($id)
    {
        # code...
        $post = Advertise::find($id);
        return view('frontend.post_single',['post' => $post]);
    }
}
