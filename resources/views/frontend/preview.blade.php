@extends('frontend.layout.master')
@section('title')
    View Ads
@endsection
@section('content')
<div class="mainBody">
    <div style="max-height: 99999px;">
     
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
        <div class="posting"> {{$advertise->title}}<br>
          <br>
          <br>
          <div class="" style="border: 1px solid #1b0602; max-width:64px; max-height:64px">
             
             <img src="{{(!empty($advertise->logo))?URL::to('storage/'.$advertise->logo):URL::to('image/no_image.png')}}" alt="" style="max-height: 63px; max-width:63px">
           </div>
          <div class="adInfo"> Phone: <a href="tel:+1 (513) 638-63">+1 (513) 638-63</a>
            <br> Email: <a href="">
              <span class="__cf_email__" >{{$advertise->email}}</span>
            </a>
          </div> Location :{{$advertise->location}}<br>
          Cost: {{$advertise->cost}} <br>
          @php
            $subcategory_name = App\Models\Subcategory::select('name')->where('id', $advertise->subcategory)->first();
          @endphp
          <b>Category:</b> {{$subcategory_name->name}} <br>
        </div>
        <br>
      
      </div>
      <br>
      <br>
    </div>
    <div style="clear:both;"></div>
  </div>
@endsection