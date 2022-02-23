@extends('frontend.layout.master')
@section('title')
@php
    $cityname = App\Models\City::where('id', $city)->first();
   $subregion = App\Models\City::where('subregion', $cityname->subregion)->get();
   $category = App\Models\Subcategory::where('id',$id)->first();
   $subregionname = App\Models\Subregion::where('id', $cityname->subregion)->first();
   $regionname = App\Models\Region::where('id', $subregionname->region)->first();
@endphp
    All Post -  {{$cityname->name}}
@endsection

@section('content')
<style>
    .thumb_img li {
      display: inline;
    }

    .cat img {
      margin-top: -5px;
      margin-left: 0px;
      cursor: pointer;
    }

    .cat a:link {
      font-family: "Microsoft Yahei";
      font-size: 15px;
      line-height: 1.3em;
      padding: 10px 10px 10px 2px;
    }

    .cat {
      border-bottom: 0px;
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
    }

    .badge-success {
      color: #fff;
      background-color: #48ca48;
      border-radius: 10rem;
    }

    .cat {
      overflow-wrap: break-word;
      margin-top: 10px;
    }

    .sponsor {
      color: #FFF;
      background: #c2c0c0;
      text-transform: uppercase;
      padding: 1px 3px;
      font-weight: bold;
      margin-top: 0px;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
    }

    .sponsordiv {
      background-color: #fafad2;
      background-image: -webkit-gradient(linear, left top, right top, color-stop(.25, #fafad2), color-stop(.75, #fff));
    }

    .sponsordiv .cat,
    .cat img {
      background-color: #fafad2;
      background-image: -webkit-gradient(linear, left top, right top, color-stop(.25, #fafad2), color-stop(.75, #fff));
    }

    .bnrinfo {
      width: 85%;
      font-size: 15px;
      font-weight: 600;
      padding: 5px;
      background-color: #f7f868;
      background-image: -webkit-gradient(linear, left top, right top, color-stop(.45, #f5ff87), color-stop(.75, #fff));
    }

    @media screen and (max-width: 1024px) {
      #adn {
        display: none;
      }

      #adn2 {
        display: block;
        width: 100% !important;
      }
    }
    }
  </style>
  <div id="pageBackground">
    <div id="cookieCrumb">
      <h2>
        <a title="Home" href="{{route('index')}}">Home</a> &gt; <a title="country" href="#">{{$regionname->name}}</a> &gt; <a title="state" href="#">{{$subregionname->name}}</a> &gt; <a title="city" href="#">{{$cityname->name}}</a> &gt;{{$category->name}}
      </h2>
    </div>
    <div class="mainBody">
      <div class="infobox" style="display: none">Find Escorts in Lawrence at Backpage Lawrence. The best site for genuine backpage Body rubs in Lawrence. Post Lawrence Body rubs ad on Backpage Lawrence for free. Explore Backpage Lawrence for endless exciting posting options.if you are looking for <b>cityxguide Lawrence Body rubs</b> or <b>adultsearch Lawrence Body rubs</b> or <b>adult search Lawrence Body rubs</b> then backlist24 is the best site to visit </div>
      <div id="superRegionNavMenu">
          @foreach ($subregion as $item)
          <a title=""  href="" class="inactive"> {{$item->name}}</a> &nbsp;|
          @endforeach
      
      </div>
      <style>
        .metaField_Label {
          clear: both;
          padding: 0px !important;
          padding-top: 10px !important;
        }

        @media (max-width: 860px) {
          .btn {
            font-size: 14px;
          }
        }
      </style>
      <div class="metaFieldLabel metaField_Label">
        <div class="viewModeSelector">
          <b class="selectedHighlight">
            <a href="https://wichita.backlist24.org/post/bodyrubs" rel="nofollow">List View</a>
          </b> | <a href="https://wichita.backlist24.org/post/bodyrubs/gallery" rel="nofollow">Gallery View</a>
        </div>
      </div>
    </div>
    <div class="metaFieldLabel metaField_Label">
      <div class="primbox metaFieldLabel">
        <ul class="topul"></ul>
        <div class='clearclass'></div>
      </div>
      <style>
        #adn {
          width: 200px;
          float: right;
        }

        #adn2 {
          display: block;
          width: 90%;
        }

        #topSponsorWrapper1 {
          background: #fff;
          border: none;
        }
      </style>
      <span class="contentWrapper">
        <span class="dateWrapper" id="adn">
          <div id="topSponsorWrapper1"></div>
        </span>
        <style>
          .badge-success {
            color:
              #fff;
            background-color:
              #48ca48;
            border-radius: 10rem;
          }

          .badge {
            display: inline-block;
            padding: .45em 10px;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
          }
        </style>
        <span itemscope itemtype="https://schema.org/Service">
          <meta itemprop="serviceType" content="Body rubs" />
          <span style="display:none" itemprop="areaServed" itemscope itemtype="https://schema.org/State">
            <span itemprop="name">Kansas</span>, including </span>
          <span class="dateWrapper" id="adn2" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
  
       <div class="text-center col-8">
            {{--ad--}}
            @foreach ($posts as $date=>$items)
            <div style="margin-bottom:5px" class="date date_one">{{date('d M,Y', strtotime($date))}}</div>
           
        
            <div class="cat ad-549152" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                @foreach ($items as $item)
                <div class="card">
              <a itemprop="itemOffered" itemscope itemtype="https://schema.org/Service" title="{{$item->title}}" href="https://lawrence.backlist24.org/view/bodyrubs/i-039-m-available-24-7-for-any-hookup-service-both-incall-or-out-549152">
                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" style="max-width: 64px; max-height:64px">
                <i class="fa fa-trash" style="color: red"></i>
                @if ($item->premium != 0)
                    <span class="badge badge-dark" style="color: #fafad2; background:rgb(6, 153, 92)">Verified </span> <br>
                @endif
                <span itemprop="name">{{$item->title}}</span>
                <b>
                  <span style="color:black;"> -  {{$cityname->name}}</span>
                </b>
              </a>
            </div>
                 @endforeach
              <br />
            </div>
            @endforeach
            
             {{--ad--}}
            </div>
            
          </span>
        </span>
        <br />

        <div style="width: 88%;word-wrap:break-word;">

        </div>
        <br />
        <span class="sponsors">sponsor:</span>
        <div id="topSponsorWrapper"></div>
      </span>
    </div>
  </div>
  <style>
    #button {
      display: inline-block;
      background-color: #ff9800;
      width: 50px;
      height: 50px;
      text-align: center;
      border-radius: 4px;
      position: fixed;
      bottom: 30px;
      right: 30px;
      transition: background-color 0.3s, opacity 0.5s, visibility 0.5s;
      opacity: 0;
      visibility: hidden;
      z-index: 1000;
    }

    #button::after {
      content: "\f077";
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

    @media (min-width: 500px) {
      #button {
        margin: 30px;
      }
    }
  </style>
  <a id="button" title="Back to top"></a>
@endsection