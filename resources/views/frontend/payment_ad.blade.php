@extends('frontend.layout.master')
@section('title')
    Pay Now
@endsection
@section('content')
<div class="mainBody">
    <div style="max-height: 99999px;">
      <h2>Step 3: Pay Now</h2>
      <ul id="stepButtons">
        <li class="postAdButtonOn">
          <div class="indexSectionHeader">Step 1: Write Ad</div>
        </li>
        <li class="postAdButtonOn">
          <div class="indexSectionHeader">Step 2: Preview Ad</div>
        </li>
        @if(session()->get('cost') > 0)
        <li class="postAdButtonOff">
          <div class="indexSectionHeader">Step 3: Activation</div>
        </li>
        @endif
        <li class="postAdButtonOff">
          <div class="indexSectionHeader">Step 3: All Done</div>
        </li>
      </ul>
      <ul id="stepButtons">
        <div id="previewAdLayout">
            <div class="posting">
            <br>
            </div>
            <br>
            <div>
            <div style="text-align: right"><span style="font-size: 24px">Credits: <strong>{{Auth::user()->balance}}</strong></span></div>
            @php
                $cost= App\Models\Advertise::select('cost')->where('id',$ad_id)->first();
            @endphp
            <div><span style="font-size: 16px">The price of your ad: <strong>${{$cost->cost}}</strong></span></div>
            </div>
            <hr noshade="">
            @if ($cost->cost > Auth::user()->balance)
                <a href=""><button style="background: red;color:aliceblue;border-radius:3px"> Pay Now </button></a>
            @else
            <form name="f" id="form" method="post" action="{{route('post_ad')}}" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="post_id" value="{{$ad_id}} ">
           
            <input type="submit" name="submit" class="button" value="Pay Now">
            </form>
            @endif
           
            </div>
      <br>
      <br>
    </div>
    <div style="clear:both;"></div>
  </div>
@endsection