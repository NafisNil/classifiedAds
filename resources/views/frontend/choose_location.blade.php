@extends('frontend.layout.master')
@section('title')
    Choose Location
@endsection
@section('content')
<style>
    .countryHeader {
      background-color: #AFBED8;
      padding: 4px 8px 4px 22px;
      clear: both;
      border-radius: 4px;
      position: relative;
      margin-top: 1px;
    }

    .stateHeader {
      background-color: #E3E9F2;
      padding: 4px 8px 4px 22px;
      margin-left: 12px;
      clear: both;
      border-radius: 4px;
      position: relative;
      margin-top: 1px;
    }

    .stateCont .stateSub {
      clear: both;
      float: left;
      padding: 4px 24px;
    }

    input#continueButton {
      display: block;
      clear: both;
      margin: 2em 0 1em !important;
    }

    .cityofstate {
      list-style-type: disc;
      list-style: none;
      -webkit-columns: 4;
      -moz-columns: 4;
      columns: 4;
      list-style-position: inside;
      margin-top: 10px !important;
      margin-bottom: 10px !important;
    }

    .stateContainer {
      padding-left: 50px;
    }

    .iscityselectedcode {
      opacity: 0.05;
    }

    .hideme {
      display: none;
    }

    .showme {
      display: block;
    }

    .arrow {
      content: "";
      position: absolute;
      border-width: 8px;
      display: block;
      width: 0;
      border-style: solid;
      border-color: transparent transparent transparent #FFF;
      top: 6px;
      left: 7px;
    }

    .button {
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
    }

    @media (max-width: 600px) {
      .cityofstate {
        -webkit-columns: 2;
        -moz-columns: 2;
        columns: 2;
        line-height: 25px;
      }

      .stateContainer {
        padding-left: 0px;
      }

      li {
        list-style-type: none;
        font-size: 14px;
      }
    }
  </style>
  <div id="cookieCrumb">
    <a href="https://www.backlist24.org/">Home</a> &gt; Choose locations
  </div>
  <div class="mainBody">
    <h2 style="display: block;font-size: 1.5em;-webkit-margin-before: 0.83em;-webkit-margin-after: 0.83em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;font-weight: bold;"> Choose locations </h2>
    <div>
      @foreach ($region as $item)
     
      <div class="countryHeader countryheader5">
        <a class="a4countryopen a4countryopen5" onclick="openshowstates(5,1);">
          <div class="arrow showarrow" style="display: block;"></div>
          <div class="arrow hidearrow downArrow inthide" style="display: none;"></div>
        </a>
        <input type="checkbox" onclick="selectallstateofcountry(5);" class="hideme iscountryselected iscountryselected2" value="0">
        <a style="display: inline-block;" onclick="openshowstates(5,1);">{{$item->name}}</a>
      </div>
        @php
            $subregion = App\Models\Subregion::where('region',$item->id)->get();
        @endphp
      <div class="countryContainer countrycont5 hideme">
        @foreach ($subregion as $item)
       
        <div class="stateHeader">
          <a class="a4stateopen a4stateopen10" onclick="showcities(&quot;10&quot;);">
            <div class="arrow showarrow"></div>
            <div class="arrow hidearrow downArrow inthide"></div>
          </a>
          <input type="checkbox" class="hideme sta_con231 city_sta10" onclick="selectallcitiesofstate(10);" value="0">
          <a onclick="showcities(&quot;10&quot;);">{{$item->name}}</a>
        </div>
             
        @endforeach
        <div class="stateContainer statecont10 hideme">
          <ul class="cityofstate">
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=auburn">Auburn</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=birminghama">Birmingham</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=dothan">Dothan</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=gadsden">Gadsden</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=huntsvillee">Huntsville</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=mobile">Mobile</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=montgomery">Montgomery</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=muscle-shoals">Muscle Shoals</a>
            </li>
            <li>
              <a href="https://www.backlist24.org/free-ad-choose-section?country=united-states&state=alabama&cities=tuscaloosa">Tuscaloosa</a>
            </li>
          </ul>
        </div>

        <div class="homeclearecls"></div>
      </div>
           
      @endforeach
<div class="homeclearecls"></div></div>
    </div><script>
      function openshowstates(idcountry, vasd) {
        var classes = $('.countrycont' + idcountry).attr('class').split(' ');
        if (classes[2] == 'hideme') {
          $('.countrycont' + idcountry).removeClass('hideme');
          $('.countrycont' + idcountry).addClass('showme');
        } else {
          $('.countrycont' + idcountry).removeClass('showme');
          $('.countrycont' + idcountry).addClass('hideme');
        }
      }

      function showcities(idstate) {
        var classes = $('.statecont' + idstate).attr('class').split(' ');
        if (classes[2] == 'hideme') {
          $('.statecont' + idstate).removeClass('hideme');
          $('.statecont' + idstate).addClass('showme');
        } else {
          $('.statecont' + idstate).removeClass('showme');
          $('.statecont' + idstate).addClass('hideme');
        }
      }
    </script>
  </div>
@endsection