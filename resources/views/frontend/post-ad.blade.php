@extends('frontend.layout.master')
@section('title')
    Post Ad
@endsection
@section('content')
<style>
    ul li.active a,
    a:hover,
    a {
      text-decoration: underline !important;
    }

    ul {
      line-height: 30px;
    }

    .local {
      color: #fff;
      font-size: 16px;
      padding: 7px 20px;
      display: inline-block;
      width: 150px;
      text-align: center;
      margin-bottom: 10px;
      border-radius: 5px;
      margin-right: 5px;
      background-color: #efefef;
      background: #1d651e;
    }

    .multiad {
      color: #fff;
      display: inline-block;
      width: 150px;
      text-align: center;
      margin-bottom: 10px;
      font-size: 16px;
      padding: 7px 20px;
      border-radius: 5px;
      margin-right: 5px;
      background-color: #efefef;
      background: #000600;
    }

    .multiad2 {
      color: #fff;
      display: inline-block;
      width: 150px;
      text-align: center;
      margin-bottom: 10px;
      font-size: 16px;
      padding: 7px 20px;
      border-radius: 5px;
      margin-right: 5px;
      background-color: #efefef;
      background: #7266ba;
    }

    .postbox {
      padding: 15px;
    }

    @media only screen and (max-width: 600px) {
      .multiad {
        display: block;
      }

      .local {
        display: block;
      }

      .multiad2 {
        display: block;
      }

      .postbox {
        text-align: -moz-center;
      }
    }

    .infobox {
      padding: 0px 10px 10px 20px;
      background-color: #fffecf;
      border: 1px solid #000;
      margin-top: 10px;
      border-radius: 5px;
      max-width: 970px;
      padding: 5px;
    }
  </style>
  <div id="cookieCrumb">
    <a href="{{route('index')}}">Home</a> &gt; <a href="#">post ad</a>
    <span id="crumbSectionName"></span>
    <span id="crumbCategoryName"></span>
  </div>
  <div class="mainBody">
    <h2>Post An Ad</h2>
    <div class="">
      <br />
      <ul>
        <li>
          <a href="{{route('choose.location', 1)}}">Post free ad </a>( Mainly free )
        </li>
        <li>
          <a href="{{route('choose.location', 2
        )}}">Post local ad</a> ( Paid Premium And Sponsor ads )
        </li>
        <li>
          <a href="{{route('choose.location', 2
          )}}">Post in multiple cities</a> ( Paid Premium And Sponsor ads )
        </li>
        <br />
        <br />
      </ul>
    </div>
    <ul></ul>
    <div style="clear:both;"></div>
  </div>
@endsection