@extends('frontend.layout.master')
@section('title')
    User AdForm
@endsection
@section('content')
<style>
    .nicEdit-button {
      background-image: url("/assets/frontend/img/nicEditorIcons.gif") !important;
    }

    .nicEdit-main {
      min-height: 150px !important;
    }

    #progress {
      display: none;
    }

    #progress1 {
      display: none;
    }

    .errornow {
      color: red;
    }

    .errornow1 {
      color: red;
    }

    .erroradult {
      color: red;
    }

    .button {
      padding: 5px 10px;
      font-size: 14px;
    }

    #spanbutton {
      border: 1px solid;
      padding: 5px;
      background: red;
      color: #fff;
      cursor: pointer;
    }

    @media only screen and (max-width: 600px) {
      #countrycode {
        max-width: 150px;
      }

      #mobilenumber {
        width: 100%;
      }
    }

    < !-- Light BOX CSS -->.row>.column {
      padding: 0 8px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Create four equal columns that floats next to eachother */
    .column {
      float: left;
      width: 25%;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      padding-top: 50px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: #00000073;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 1100px;
    }

    .modal-content2 {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 100%;
      max-width: 500px;
    }

    .modal-content2 .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5;
    }

    .modal-content2 {
      -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
      box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
      border-radius: 5px;
    }

    .modal-content2 .modal-footer {
      padding: 15px;
      text-align: right;
      border-top: 1px solid #e5e5e5;
    }

    .modal-content2 .modal-body {
      position: relative;
      padding: 15px;
    }

    .modal-content2 .modal-title {
      margin: 0;
      line-height: 1.42857143;
    }

    .modal-content2 .close {
      color: #020000;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 25px;
      font-weight: bold;
    }

    /* The Close Button */
    .close {
      color: white;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 25px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #999;
      text-decoration: none;
      cursor: pointer;
    }

    /* Hide the slides by default */
    .mySlides {
      display: none;
      width: 100%;
      height: 100%;
      background-color: #000;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* Caption text */
    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }

    img.demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    img.hover-shadow {
      transition: 0.3s;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    @media screen and (max-width: 300px) #viewAdPhotoLayout li a {
      pointer-events: all !important;
    }

    .chat_button {
      border: 1px solid red;
      padding: 6px 30px;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      background-color: #e88585;
      color: #fff;
      text-decoration: none;
    }

    .tapone {
      display: inline-block;
    }

    .maindiv {
      padding: 25px
    }

    .well {
      background-color: #eef !important
    }

    textarea {
      width: 100%;
      height: 150px;
    }

    .form-control {
      width: 100%;
      max-height: 100px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
    }

    .btn-success {
      color: #fff;
      background-color: #5cb85c;
      border-color: #4cae4c;
    }

    .btn-info {
      margin-top: 10px;
      background-color: #0097a7;
      color: #fff;
      margin-bottom: 20px;
    }

    .emailinput {
      display: block;
      width: 100%;
      height: calc(2.25rem + 2px);
      padding: 0px 5px;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      max-width: 300px;
    }

    .mobinput {
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #cac5c5;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <div class="mainBody">
    @php
    $ad_Category = session()->get('ad_Category');
      session()->put('ad_Category', $ad_Category);
      if($ad_Category == 1){
        $ad_price = 0;
      $sponsor = 0;
      $premium = 0;
      $cost = $ad_price + $sponsor + $premium;
      }else{
        $ad_price = .01;
      $sponsor = 2;
      $premium = 4;
      $cost = $ad_price + $sponsor + $premium;
      }
      
    @endphp

    <div style="max-height: 99999px;">
      <form name="f" id="submit-all" method="post" action="{{route('adstore')}}" enctype="multipart/form-data">
        @csrf
        
       
       
     
       
        <h2>Step 1: Write Ad&nbsp; <span class="req" style="font-size:14px;font-weight:normal;">&nbsp;required fields&nbsp;</span>
        </h2>
        <ul id="stepButtons">
          <li class="postAdButtonOn">
            <div class="indexSectionHeader">Step 1: Write Ad</div>
          </li>
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 2: Preview Ad</div>
          </li>
          @if($ad_Category != 1)
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 3: Activation</div>
          </li>
          @endif
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 4: All Done</div>
          </li>
        </ul>
        <div class="editAdField">
          <div class="header"> Title </div>
          <div class="content">
            <input type="text" name="title" id="name" maxlength="60" minlength="2" class="required largeInput" value="" required>
            <input type="hidden" name="ad_category" value="{{$ad_Category}}">
          </div>
          <span id="checkerror" style="display:none;color:red"></span>
        </div>
        <div class="editAdField">
          <div class="header"> Description </div>
          <div class="content">
            <span id="checkerror2" style="display:none;color:red"></span>
            <div id="sample">
              
              
              <textarea name="desc" id="description" cols="40"></textarea>
              <br />
            </div>
          </div>
        </div>
        <span class="editAdText" style="color:red; display: none" id="has_link">(We do not allow link with description <b>Remove link</b>) </span>
        <div class="editAdField">
          <div class="header"> Location </div>
          <div class="content">
            <div class="pac-card" id="pac-card">
              <input id="loc" name="location" type="text" class="required mediumInput" placeholder="Enter a location">
            </div>
            <div style="display:none" id="map"></div>
            <div id="infowindow-content" style="display: none">
              <img src="" width="16" height="16" id="place-icon">
              <span id="place-name" class="title"></span>
              <br>
              <span id="place-address"></span>
            </div>
          </div>
        </div>
        <input type="hidden" id="locationadd" value="">
        <div class="editAdField">
          <div class="header">Contact Email</div>
          <div class="content">
            <input type="text" name="email" id="email" maxlength="50" class="mediumInput" value="" placeholder="Enter a email address">
          </div>
        </div>
        <div class="editAdField">
          <div class="header">Contact Mobile Number</div>
          <div class="content">
            <input type="text" name="phone" id="phone" maxlength="20" class="mediumInput" value="" placeholder="Enter a contact mobile number">
          </div>
        </div>
        <br>
        <br>
        <div id="imageEditModule">
          <span class="editAdTitles">
            <b>Add Images</b>
          </span>
          <br>
          <span class="editAdText">Maximum 4 images, max size 2MB each.</span>
          <div class="form-group">
            <div class="custom-upload">
              <input  accept="image" name="logo" type="file" class="cloudinary-fileupload" data-cloudinary-field="images[]" ></input>
            </div>
            <div class="uploaded_images" id="selectedFiles"></div>
          </div>
          <input type="hidden" name="subcategory" value="{{$subcategory}}"/>
       
        <input type="hidden" name="user" value="{{Auth::user()->id}}"/>
        </div>
        <br clear="both">
        {{-- paid single ad --}}
        @if($ad_Category == 2 || $ad_Category == 3)
        <h3 class="recUpgrades">Verified ads future <span class="editAdText"></span>
        </h3>
      <span class="editAdTitles">
          <b>Verified Ads</b>
          <br>
          <p>
            <input type="checkbox" name="premium" id="premium" value="{{$premium}}"> Make this ad Verified for ( Verified ad will be shown on top of all Ads. ) $ <span id="premiumadval" data-near="5">{{$premium}}</span>
          </p>
        </span>
        <span class="editAdTitles">
          <b>Sponsor Ad</b>
        </span>
        <big> $ <span id="sponsoradval" data-near="2">{{$sponsor}}</span>
        </big>
        <div id="purchaseSponsorAd" style="margin-bottom:1em;">
          <dl id="purchSponsorAd" class="clearfix" style="position:relative;margin-bottom:1em;">
            <dt style="float:left;">
              <input style="position: relative; top: -3px;" type="checkbox" name="sponsor" id="sponsorAd" value="{{$sponsor}}">
            </dt>
            <dd style="line-height:1.5;margin-left:30px;">
              <div class="editAdText"> Your ad will appear highlighted (Top and Bottom). </div>
              <div class="editAdText" id="weeksNumber" style="margin:1em 0;"> Number of weeks: <select name="sponsor_weeks">
                  <option value="1">1 week (${{$sponsor}})</option>
                </select>
              </div>
            </dd>
          </dl>
        </div>
        @elseif($ad_Category == 1){
          <input type="hidden" name="premium" value="0"/>
          <input type="hidden" name="weekly" value="0"/>
        }
        @endif
        {{-- paid single ad --}}
        {{-- <h3 class="recUpgrades">Verified ads future <span class="editAdText"></span>
        </h3>
      <span class="editAdTitles">
          <b>Verified Ads</b>
          <br>
          <p>
            <input type="checkbox" name="premium" id="premium" value="1"> Make this ad Verified for ( Verified ad will be shown on top of all Ads. ) $ <span id="premiumadval" data-near="5">{{$premium}}</span>
          </p>
        </span>
        <span class="editAdTitles">
          <b>Sponsor Ad</b>
        </span>
        <big> $ <span id="sponsoradval" data-near="2">{{$sponsor}}</span>
        </big>
        <div id="purchaseSponsorAd" style="margin-bottom:1em;">
          <dl id="purchSponsorAd" class="clearfix" style="position:relative;margin-bottom:1em;">
            <dt style="float:left;">
              <input style="position: relative; top: -3px;" type="checkbox" name="sponsor" id="sponsorAd" value="1">
            </dt>
            <dd style="line-height:1.5;margin-left:30px;">
              <div class="editAdText"> Your ad will appear highlighted (Top and Bottom). </div>
              <div class="editAdText" id="weeksNumber" style="margin:1em 0;"> Number of weeks: <select name="sponsor_weeks">
                  <option value="1">1 week (${{$sponsor}})</option>
                </select>
              </div>
            </dd>
          </dl>
        </div> --}} 
        <br>
        <br>
        <span class="editAdTitles">
          <b>Add Nearby Cities</b>
          <span id="nearbyTotalPriceArea"> for <span id="nearbyTotalPrice" data-near="0.25"></span>
          </span>
          <br>
        {{--  @foreach ($nearby as $item)
            <input type="checkbox" name="citys" onclick="nearbycities(446)" id="NearByCities446" value="{{$item->id}}" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" @if ($item->id == $cityDetails->id)
              checked
            @endif>
            <label for="NearByCities">{{$item->name}} - {{$ad_price}}</label>
            <br>
          @endforeach
          --}}
          @php
            $cityprice = 0;
          @endphp
          @if($ad_Category == 3)
          @foreach ($nearby as $item)
            <input type="checkbox" name="cityprice[]" onclick="nearbycities(446)" id="NearByCities446" value="{{$item->id}}" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" @if ($item->id == $cityDetails->id)
              checked
            @endif  >
            <label for="NearByCities">{{$item->name}} - {{$ad_price}}</label>
            <br>
          @endforeach
          @else
          <input type="checkbox" name="city"  id="NearByCities446" value="{{$city}}" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25"
              checked
           @php
             $cityname = App\Models\City::where('id', $city)->first();
           @endphp
            <label for="NearByCities">{{$cityname->name}} - {{$ad_price}}</label>
          @endif
          <br>
          <br>
          <input type="checkbox" name="accept_terms" id="acceptTermsBox" style="float:left;" value="true">
          <div style="margin-left:30px;">
            <span id="fairHousing">By placing this ad I agree to the <a href="{{route('terms.condition')}}" target="_blank">terms of use</a> and <a href="{{route('privacy.policy')}}" target="_blank">privacy policy</a>. </span>
          </div>
          <br>
          <button class="button" id="submit_button" style="margin-bottom:1em;" onclick="submitted()" data-cf-modified="">Continue</button>
          <span id="submitProcessing" style="display:none;">Placing Ad...</span>
          <br />
          <span id="termsError" style="display:none;">Error: You must agree to the terms of use.</span>
          <span id="mobileError" style="display:none;color:red">Error: you are selected text message service, please provide mobile number.</span>
          <span id="errorurl" style="display:none;color:red">
            <b>Error: URL/link posting is disabled please remove URL/link from description.</b>
          </span>
          <span id="locationError1" style="display:none;color:red">Error: Please fill Location.</span>
          <span id="termsError1" style="display:none;color:red">Minimum ad cost 1 USD .</span>
          <span id="titleError1" style="display:none;color:red">Error: Please fill Title.</span>
          <span id="titleError2" style="display:none;color:red">Error: We do not allow particular Word.</span>
          <span id="termsError3" style="display:none;color:red">Error: You can post only 1 free ad / day.</span>
          <span id="ageError1" style="display:none;color:red">Error: Please fill Age.</span>
          <span id="agevalid" style="display:none;color:red">Error: Please Provide Age Between 18 to 80 years.</span>
          <input type="hidden" name="usertimezone" id="usertimezone" value="" />
          <input type="hidden" name="tcityprice" id="tcityprice" value="{{$ad_price}}" />
          <input type="hidden" name="mtprice" id="mtprice" value="0" />
        </span>
      </form>
    </div>
    <div style="clear:both;"></div>
  </div>
  <input type="hidden" id="countimg" value='0'>

  <script>
                        CKEDITOR.replace( 'desc' );
                </script>
@endsection