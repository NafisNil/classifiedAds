@extends('frontend.layout.master')
@section('title')
    Preview AdForm
@endsection
@section('content')
<div class="mainBody">
    <div style="max-height: 99999px;">
      <h2>Step 2: Preview Ad</h2>
      <ul id="stepButtons">
        <li class="postAdButtonOn">
          <div class="indexSectionHeader">Step 1: Write Ad</div>
        </li>
        <li class="postAdButtonOn">
          <div class="indexSectionHeader">Step 2: Preview Ad</div>
        </li>
        <li class="postAdButtonOff">
          <div class="indexSectionHeader">Step 3: All Done</div>
        </li>
      </ul>
      <div id="previewAdLayout">
        @php
            $date = Carbon\Carbon::today();
        @endphp
        <h2 style="margin-bottom:-1px"> {{session()->get('title')}}</h2>
        <div class="adInfo"> Posted: {{date_format($date, 'd M, Y')}} <br>
          <br>
        </div>
        <div style="padding-left:0em; font-size: 16px"> Poster age: <b></b>
          <br>
        </div>
        <hr class="showad_hr" noshade="">
        <br>
        <style>
          <!--
          #viewAdPhotoLayout {
            float: right;
            margin: 0 0 1em 1em;
            padding: 0;
            clear: right;
          }

          #viewAdPhotoLayout li {
            / / display: inline-block;
            list-style-type: none;
            margin: 0;
            padding: 0.75em;
            background: #eee;
            text-align: center;
            overflow: hidden;
            -webkit-column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            -ms-column-break-inside: avoid;
            break-inside: avoid;
          }

          #viewAdPhotoLayout img {
            margin-bottom: 0.25em;
          }

          #viewAdPhotoLayout li a {
            color: #000;
          }

          / /
          -->
        </style>
        <!--[if gt IE 9]> -->
        <style>
          <!--
          #viewAdPhotoLayout.fivePlus {
            width: 465px;
            -moz-column-count: 2;
            -webkit-column-count: 2;
            column-count: 2;
            -moz-column-gap: 1.5em;
            -webkit-column-gap: 1.5em;
            column-gap: 1.5em;
          }

          #viewAdPhotoLayout.ninePlus {
            width: 708px;
            -moz-column-count: 3;
            -webkit-column-count: 3;
            column-count: 3;
            -moz-column-gap: 1.5em;
            -webkit-column-gap: 1.5em;
            column-gap: 1.5em;
          }

          / /
          -->
        </style>
      
        <!-- 
                                                                                      <![endif]-->
        <ul id="viewAdPhotoLayout" class="fivePlus"></ul>
        <div class="posting"> Veritatis veniam, al. <br>
          <br>
          <br>
          <div class="adInfo"> Phone: <a href="tel:+1 (513) 638-63">+1 (513) 638-63</a>
            <br> Email: <a href="">
              <span class="__cf_email__" >{{session()->get('email')}}</span>
            </a>
          </div> Location : {{session()->get('location')}} <br>
          @php
            $subcategory_name = App\Models\Subcategory::select('name')->where('id', session()->get('subcategory'))->first();
          @endphp
          <b>Category:</b> {{$subcategory_name->name}} <br>
        </div>
        <br>
        <form name="f" id="form" method="post" action="{{route('post_ad')}}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="post_id" value="{{session()->get('post_id')}}">
         
          <br>
          <input type="submit" name="submit" class="button" value="Place Ad Now">
        </form>
      </div>
      <br>
      <br>
    </div>
    <div style="clear:both;"></div>
  </div>
@endsection