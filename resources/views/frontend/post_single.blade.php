@extends('frontend.layout.master')
@section('title')
@php
    $cityname = App\Models\City::where('id', $post->city)->first();
    $subregion = App\Models\City::where('subregion', $cityname->subregion)->get();
   $category = App\Models\Subcategory::where('id',$post->subcategory)->first();
   $subregionname = App\Models\Subregion::where('id', $cityname->subregion)->first();
   $regionname = App\Models\Region::where('id', $subregionname->region)->first();
@endphp
 {{$post->title}}
@endsection
@section('content')
<style>
    body {
      background-color: #ebecec !important;
    }

    .badge {
      display: inline-block;
      padding: .45em 10px;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem;
      background-color: #48ca48;
    }

    .badge-success {
      color: #fff;
      background-color: #48ca48 !important;
      border-radius: 15rem !important;
      font-size: 15px !important;
      padding: 5px 10px !important;
    }

    /* image responsive */
    .fit-image {
      width: 100%;
      height: auto;
    }

    @media screen and (max-width: 500px) {
      .ncall {
        width: 100%;
        margin-left: 0px;
      }

      .fit-image {
        width: 100%;
        height: auto;
      }
    }

    @media screen and (max-width: 420px) {
      .fit-image {
        width: 100%;
        height: auto;
      }
    }

    @media screen and (max-width: 320px) {
      .fit-image {
        width: 100%;
        height: auto;
      }
    }

    @media screen and (max-width: 240px) {
      .fit-image {
        width: 100%;
        height: auto;
      }
    }

    @media screen and (max-width: 240px) {
      .fit-image {
        width: 100%;
        height: auto;
      }
    }

    /* image responsive */
    @media screen and (min-width: 751px) {
      #ncall1 {
        width: 65%;
        margin-left: 0px;
      }

      #viewAdPhotoLayout {
        width: 35% !important;
      }

      #ncall3 {
        width: 98%;
      }
    }
  </style>
  <div id="pageBackground">
    <div id="cookieCrumb">
        <a title="Home" href="{{route('index')}}">Home</a> &gt; <a title="country" href="#">{{$regionname->name}}</a> &gt; <a title="state" href="#">{{$subregionname->name}}</a> &gt; <a title="city" href="#">{{$cityname->name}}</a> &gt; {{$category->name}}
    </div>
    <div class="mainBody">
      <div id="postingTitle">
        <h1 style="font-size:22px !important;">🧲B-B-B-J🧲100% YOUNG✅100% PRETTY 🧲GFE🧲69🧲✅NURU🧲Table Shower💦</h1>
      </div>
      <div class="adInfo"> Posted: Wed 23 February <br>
        <br>
        <div style="padding-left:0em; font-size: 16px"> Location: <b>Both Incall and outcall</b>
          <br>
        </div>
        <div style="padding-left:0em; font-size: 16px"> Poster age: <b></b>
          <br>
        </div>
      </div>
      <br />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <div class="tapbox">
        <div class="tapone">
          <style>
            .postrp1 {
              width: 175px;
            }

            .postrp1:hover {
              color: #fff;
            }
          </style>
          <a class="postrp1" href="{{route('post.list', $category->id)}}" rel="noopener noreferrer" target="_parent">
            <i class='fa fa-list-alt'></i> &nbsp;View Ads List </a>
        </div>
        <div class="tapone">
          <a id="postrport" href="{{route('contact.us')}}" rel="noopener noreferrer" target="_parent">
            <i class='fa fa-ban'></i> &nbsp;Report ad </a>
        </div>
        <div class="adInfo"></div>
        <hr noshade="" style="margin-top: 10px;margin-bottom: 12px;">
        <div class="adVideoContainer"></div>
        <p class="infobox" style="
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #bb0000;
  background-color: #faffe5;
">
          <span style="color: red">
            <strong>SCAM Alert!!!</strong>
          </span>
          <br>if ad poster asks for money or tells you to verify in another website by Gift Card, Cash app, Venmo, Zelle app, bitcoin, debit card, credit card or by any other way, consider its a Total SCAM ! They will take your money and will never respond your messages. DO NOT pay anything before meeting the provider! <br>
          <span style="color: red">Bedpage24 won’t be responsible for any fraud if you ignore this warning.</span>
        </p>
        <ul id="viewAdPhotoLayout" class="fivePlus">
          <li class="error_0" style="width:100%;">
            <a class="group1" href="{{(!empty($post->logo))?URL::to('storage/'.$post->logo):URL::to('image/no_image.png')}}">
              <img src="{{(!empty($post->logo))?URL::to('storage/'.$post->logo):URL::to('image/no_image.png')}}" class="fit-image" alt="" title="" border="0">
            </a>
          </li>
         
        </ul>
        <div class="posting" id="ncall1">
          <div id="ncall3">
            <div class="alert alert-info" style="font-size: 16.5px; text-align:center">When you call, tell me that you saw my AD on <b>bedpage24.com</b>
            </div>
            <div class="postingBody">
              <div style="font-size:16.5px;"> {!!@$post->desc!!} <br>
              </div>
            </div>
            <br>
            <div class="">
              <a rel="nofollow" class="btn btn-success btn-block" href="sms:{{@$post->phone}}?body=Hey, I saw your Ad on Bedpage24.org" onclick="return startSmsTo('  {{@$post->phone}}')\;">
                <i class="fa fa-comment"></i> Message{{@$post->phone}} </a>
              <a rel="nofollow" class="btn btn-success btn-block" href="tel: {{@$post->phone}}">
                <i class="fa fa-phone"></i> Call{{@$post->phone}}</a>
            </div>
          </div>
        </div>
        <br>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <h3> Related Ads ( <a href="{{route('post.list', $post->subcategory)}}">See all</a>) </h3>
        <hr />
        @php
            $related_post = App\Models\Advertise::where('subcategory',$post->subcategory)->take(4)->get();
        @endphp

        @foreach ($related_post as $item)
        <div class="cat hasPhoneNumber ribbon-box gallery">
            <a class="theimgbox" href="hook-up-567216">
              <div class="gallerybox" style="
                                                    background-image: url(/storage/{{$item->logo}}),
                                                    url('/assets/frontend/img/seologo.jpg');
                                                    background-size: cover;
                                                    height: 217px;
                                                "></div>
            </a>
            <div class="galleryHeader">
              <a href="hook-up-567216">{{$item->title}}</a>
            </div>
            <div class="galleryPosted">Posted: {{date('d M,Y', strtotime($post->created_at))}}</div>
          </div>
        @endforeach


        <div style="clear: both"></div>
      </div>
    </div>
    <style>
      @media (max-width: 500px) {
        #button {
          display: inline-block;
          background-color: #ff9800;
          width: 50px;
          height: 50px;
          text-align: center;
          border-radius: 4px;
          position: fixed;
          top: 250px;
          right: 30px;
          transition: background-color 0.3s, opacity 0.5s, visibility 0.5s;
          opacity: 0;
          visibility: hidden;
          z-index: 1000;
        }

        #button::after {
          content: "\f053";
          font-family: FontAwesome;
          font-weight: normal;
          font-style: normal;
          font-size: 2em;
          line-height: 50px;
          color: #fff;
        }

        #button:hover {
          cursor: pointer;
          background-color: #333;
        }

        #button:active {
          background-color: #555;
        }

        #button.show {
          opacity: 1;
          visibility: visible;
        }
      }

      @media (min-width: 500px) {
        #button {
          margin: 30px;
        }
      }
    </style>
    <a id="button"></a>
@endsection