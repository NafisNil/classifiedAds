@extends('frontend.layout.master')
@section('title')
    Choose Category
@endsection
@section('content')
<div class="mainBody">
    <div class="jsChooser jsChooser_section" style="display: block;">
      <h2>Choose a Section  </h2>
      <div class="chooseSection" style="width:99%;max-width:540px;">
        @php
            $ad_Category = session()->get('ad_Category');
            session()->put('ad_Category', $ad_Category);
        @endphp
        
        <ul class="getSection" style="column-count:2;-webkit-column-count:2;-moz-column-count:2;column-gap:3px;-webkit-column-gap:3px;-moz-column-gap:3px;line-height:2.5;">
            @foreach ($category as $item)
      
             

          <li class="post_li">
          
            <a href="{{route('choose.subcategory',$item->id)}}" data-name="{{$item->name}}">{{$item->name}}</a>
            @php
                Session::put('cityId',$cityId);
                 
            @endphp
          </li>

          @endforeach
        </ul>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
@endsection