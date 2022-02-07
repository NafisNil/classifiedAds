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
    <div style="max-height: 99999px;">
      <form name="f" id="submit-all" method="post" action="{{route('adstore')}}" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="category_id" value="{{$city}}">
        <input type="hidden" name="sub_category_id" value="272">
        <input type="hidden" name="country_id" value="6">
        <input type="hidden" name="state_id" value="61">
        <h2>Step 1: Write Ad&nbsp; <span class="req" style="font-size:14px;font-weight:normal;">&nbsp;required fields&nbsp;</span>
        </h2>
        <ul id="stepButtons">
          <li class="postAdButtonOn">
            <div class="indexSectionHeader">Step 1: Write Ad</div>
          </li>
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 2: Preview Ad</div>
          </li>
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 3: Activation</div>
          </li>
          <li class="postAdButtonOff">
            <div class="indexSectionHeader">Step 4: All Done</div>
          </li>
        </ul>
        <div class="editAdField">
          <div class="header"> Title </div>
          <div class="content">
            <input type="text" name="title" id="name" maxlength="60" minlength="2" class="required largeInput" value="" required>
          </div>
          <span id="checkerror" style="display:none;color:red"></span>
        </div>
        <div class="editAdField">
          <div class="header"> Description </div>
          <div class="content">
            <span id="checkerror2" style="display:none;color:red"></span>
            <div id="sample">
              
              
              <textarea name="description" id="description" cols="40"></textarea>
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
              <input multiple accept="image" name="file" type="file" class="cloudinary-fileupload" data-cloudinary-field="images[]" data-form-data='{&quot;upload_preset&quot;:&quot;testpreset&quot;,&quot;tags&quot;:[336314,"tickets","sport","canada","alberta"]}'></input>
            </div>
            <div class="uploaded_images" id="selectedFiles"></div>
          </div>
        </div>
        <br clear="both">
        <h3 class="recUpgrades">Premium ads future <span class="editAdText"></span>
        </h3>
        <span class="editAdTitles">
          <b>Premium Ads</b>
          <br>
          <p>
            <input type="checkbox" name="premium" id="premium" value="1"> Make this ad Premium for ( Premium ad will be shown on top of all Ads. ) $ <span id="premiumadval" data-near="5">5</span>
          </p>
        </span>
        <span class="editAdTitles">
          <b>Sponsor Ad</b>
        </span>
        <big> $ <span id="sponsoradval" data-near="2">2</span>
        </big>
        <div id="purchaseSponsorAd" style="margin-bottom:1em;">
          <dl id="purchSponsorAd" class="clearfix" style="position:relative;margin-bottom:1em;">
            <dt style="float:left;">
              <input style="position: relative; top: -3px;" type="checkbox" name="sponsor" id="sponsorAd" value="1">
            </dt>
            <dd style="line-height:1.5;margin-left:30px;">
              <div class="editAdText"> Your ad will appear highlighted (Top and Bottom). </div>
              <div class="editAdText" id="weeksNumber" style="margin:1em 0;"> Number of weeks: <select name="sponsor_weeks">
                  <option value="1">1 week ($2)</option>
                </select>
              </div>
            </dd>
          </dl>
        </div>
        <br>
        <br>
        <span class="editAdTitles">
          <b>Add Nearby Cities</b>
          <span id="nearbyTotalPriceArea"> for <span id="nearbyTotalPrice" data-near="0.25">$0.25</span>
          </span>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(446)" id="NearByCities446" value="446" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Calgary - $0.25</label>
          <br>
          <input type="checkbox" name="citys" checked disabled id="NearByCities447" value="447" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25">
          <label for="NearByCities">Edmonton - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(448)" id="NearByCities448" value="448" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Ft Mcmurray - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(449)" id="NearByCities449" value="449" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Grande Prairie - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(450)" id="NearByCities450" value="450" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Lethbridge - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(451)" id="NearByCities451" value="451" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Medicine Hat - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(452)" id="NearByCities452" value="452" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">Red Deer - $0.25</label>
          <br>
          <input type="checkbox" name="citys" onclick="if (!window.__cfRLUnblockHandlers) return false; nearbycities(453)" id="NearByCities453" value="453" data-baseprice="0.25" data-autorepostprice="5" data-sponsorprice="2" data-movetotopprice="0.25" data-cf-modified-68e6ab010021748e0a9b3282-="">
          <label for="NearByCities">St. Albert - $0.25</label>
          <br>
          <br>
          <input type="checkbox" name="accept_terms" id="acceptTermsBox" style="float:left;" value="true">
          <div style="margin-left:30px;">
            <span id="fairHousing">By placing this ad I agree to the <a href="https://www.backlist24.com/terms-of_use" target="_blank">terms of use</a> and <a href="https://www.backlist24.com/privacy-policy" target="_blank">privacy policy</a>. </span>
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
          <input type="hidden" name="tcityprice" id="tcityprice" value="0.25" />
          <input type="hidden" name="mtprice" id="mtprice" value="0" />
        </span>
      </form>
    </div>
    <div style="clear:both;"></div>
  </div>
  <input type="hidden" id="countimg" value='0'>
  <script type="68e6ab010021748e0a9b3282-text/javascript">
    var usertimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    $('#usertimezone').val(usertimezone);
    console.log();

    function submitted() {
      var cityprice = $('#tcityprice').val();
      var addonprice = $('#mtprice').val();
      var title = $('#name').val();
      var location = $('#pac-input').val();
      var age = $('#age').val();
      var totalprice = parseFloat(cityprice) + parseFloat(addonprice);
      var description = $("#desc").val();
      var loc = $("#loc").val();
     
      if ($("#checkerror").is(":visible")) {
        $("#name").focus();
        return false;
      }
      if ($("#checkerror2").is(":visible")) {
        $(".nicEdit-main").focus();
        return false;
      }
      if (loc == "") {
        $("#locationError1").show();
        return false;
      }
      if (title == "") {
        $("#titleError1").show();
        return false;
      }
      if (description == '') {
        $("#description").focus();
        return false;
      } else {
        $("#description").html('');
        var ht = $(".nicEdit-main").html();
        $("#description").html(ht);
      }
      if (locationadd == '') {
        $("#locationError1").show();
        $("#pac-input").focus();
        return false;
      }
      if (location == "") {
        $("#locationError1").show();
        $("#pac-input").focus();
        return false;
      }
      if (age == "") {
        $("#titleError1").hide();
        $("#ageError1").show();
        return false;
      }
      if (age < 18 || age > 80) {
        $("#titleError1").hide();
        $("#ageError1").hide();
        $("#agevalid").show();
        return false;
      }
      if (!$("#premium").is(":checked") && !$("#sponsorAd").is(":checked") && totalprice < 0) {
        if (totalprice < 0) {
          $("#agevalid").hide();
          $("#titleError1").hide();
          $("#ageError1").hide();
          $("#termsError1").show();
          return false;
        } else {
          $("#termsError1").hide();
          return false;
        }
      }
      if (!$("#acceptTermsBox").is(":checked")) {
        $("#termsError").show();
        $("#termsError1").hide();
        return false;
      } else {
        $("#locationError1").hide();
        $("#titleError1").hide();
        $("#ageError1").hide();
        $("#termsError").hide();
        $("#termsError1").hide();
        $("#description").html('');
        var ht = $(".nicEdit-main").html();
        $("#description").html(ht);
        var htmltag = $("#description").text();
        if (htmltag != '') {
          if (openatag != '-1' || atag != '-1' || hreftag != '-1' || comtag != '-1' || intag != '-1' || intag2 != '-1' || intag3 != '-1' || intag4 != '-1' || intag5 != '-1' || httptag != '-1' || httpstag != '-1' || wwwtag != '-1') {
            $("#errorurl").show();
            return false;
          } else {
            $("#errorurl").hide();
            $('#editoption').val('');
            $('#editoption').val(0);
            $("#termsError").hide();
            $("#termsError1").hide();
            return true;
          }
        } else {
          $("#description").focus();
          return false;
        }
      }
      return false;
    }

    function mtt() {
      if ($('#moveAdToTopMulti').is(':checked')) {
        var moveToTopTotal = $("#moveToTopTotal").attr('data-total');
        var totalpricecity = parseFloat(moveToTopTotal);
        $("#mtprice").val('');
        $("#mtprice").val(totalpricecity.toFixed(2));
      } else {
        $("#mtprice").val('');
        $("#mtprice").val('0');
      }
    }

    function nearbycities(city_id) {
      if ($('#NearByCities' + city_id).is(':checked')) {
        var moveToTopTotal = $("#moveToTopTotal").attr('data-total');
        // alert(moveToTopTotal);
        var add = parseFloat(moveToTopTotal) + parseFloat(0.25);
        var neartotal = $("#nearbyTotalPrice").attr('data-near');
        var total = parseFloat(neartotal) + parseFloat(0.25);
        $("#nearbyTotalPrice").html('');
        $("#nearbyTotalPrice").attr('data-near', total.toFixed(2));
        $("#nearbyTotalPrice").html('$' + total.toFixed(2));
        var bumpnewamount = $("#bumptotopamountsecret").val();
        var total_city_price = parseFloat(total) / parseFloat(0.25);
        var total_city = total_city_price * bumpnewamount;
        $("#bumptotopamount").html(total_city);
        $("#bumptotopamounthidden").val(total_city);
        var premiumtotal = $("#premiumadval").attr('data-near');
        var premiumprice = parseInt(premiumtotal) + parseInt(5);
        $("#premiumadval").html();
        $("#premiumadval").attr('data-near', premiumprice.toFixed(2));
        $("#premiumadval").html(premiumprice);
        $("#premiumadval1").val(premiumprice);
        var sponsortotal = $("#sponsoradval").attr('data-near');
        var sponsorprice = parseInt(sponsortotal) + parseInt(2);
        $("#sponsoradval").html();
        $("#sponsoradval").attr('data-near', sponsorprice.toFixed(2));
        $("#sponsoradval").html(sponsorprice);
        $("#sponsoradval").val(sponsorprice);
        $("#moveToTopTotal").html('');
        $("#moveToTopTotal").attr('data-total', add + '.00');
        $("#moveToTopTotal").html('$' + add + '.00');
        var totalpricecity = parseFloat(total);
        $("#tcityprice").val('');
        $("#tcityprice").val(totalpricecity.toFixed(2));
        if ($('#moveAdToTopMulti').is(':checked')) {
          var moveAdToTop = $("#moveToTopTotal").attr('data-total');
          var add = parseFloat(moveAdToTop)
          $("#mtprice").val('');
          $("#mtprice").val(add.toFixed(2));
        }
      } else {
        var moveToTopTotal = $("#moveToTopTotal").attr('data-total');
        // alert(moveToTopTotal);
        var add = parseFloat(moveToTopTotal) - parseFloat(0.25);
        var neartotal = $("#nearbyTotalPrice").attr('data-near');
        var total = parseFloat(neartotal) - parseFloat(0.25);
        $("#nearbyTotalPrice").html('');
        $("#nearbyTotalPrice").attr('data-near', total.toFixed(2));
        $("#nearbyTotalPrice").html('$' + total.toFixed(2));
        var bumpnewamount = $("#bumptotopamountsecret").val();
        var total_city_price = parseFloat(total) / parseFloat(0.25);
        var total_city = total_city_price * bumpnewamount;
        $("#bumptotopamount").html(total_city);
        $("#bumptotopamounthidden").val(total_city);
        var premiumtotal = $("#premiumadval").attr('data-near');
        var premiumprice = parseInt(premiumtotal) - parseInt(5);
        $("#premiumadval").html();
        $("#premiumadval").attr('data-near', premiumprice.toFixed(2));
        $("#premiumadval").html(premiumprice);
        $("#premiumadval1").val(premiumprice);
        $("#moveToTopTotal").html('');
        $("#moveToTopTotal").attr('data-total', add + '.00');
        $("#moveToTopTotal").html('$' + add + '.00');
        var sponsortotal = $("#sponsoradval").attr('data-near');
        var sponsorprice = parseInt(sponsortotal) - parseInt(2);
        $("#sponsoradval").html();
        $("#sponsoradval").attr('data-near', sponsorprice.toFixed(2));
        $("#sponsoradval").html(sponsorprice);
        $("#sponsoradval").val(sponsorprice);
        var totalpricecity = parseFloat(total);
        $("#tcityprice").val('');
        $("#tcityprice").val(totalpricecity.toFixed(2));
        if ($('#moveAdToTopMulti').is(':checked')) {
          var moveAdToTop = $("#moveToTopTotal").attr('data-total');
          var add = parseFloat(moveAdToTop)
          $("#mtprice").val('');
          $("#mtprice").val(add.toFixed(2));
        }
      }
    }
  </script>
  <script type="68e6ab010021748e0a9b3282-text/javascript">
    var lc = 0;
    $(document).ready(function() {
      $.cloudinary.config({
        cloud_name: 'dlo6mdp0c',
        secure: true
      });
      if (lc < 5) {
        $("input.cloudinary-fileupload[type=file]").cloudinary_fileupload();
      } else {
        alert("Maximum 4 images allow only");
        //$("#submitProcessing").hide();
        return;
      }
      $('.cloudinary-fileupload').bind('cloudinarydone', function(e, data) {
        var image = data.result;
        var html = " < div class = 'img-inner' > < img src = \"" + image.secure_url + "\" data-file='" + image.original_filename + "' class='selFile' title='Click to remove'> < span data - remove = '" + image.resource_type + "/" + image.type + "/v" + image.version + "/" + image.public_id + "." + image.format + "#" + image.signature + "'
        data - attr = '" + image.delete_token + "'
        class = 'fa fa-close delete-img' > < /span> < /div>";
        $("#selectedFiles").append(html);
        lc++;
        return true;
      });
    });
  </script>
  <script type="68e6ab010021748e0a9b3282-text/javascript">
    $(function() {
      var base_url = "https://www.backlist24.com/";
      var storedFiles = [];
      $("#product-photo-add").on("change", handleFileSelect);
      $("body").on("click", ".delete-img", removeFile);
      var storedFiles = [];

      function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        filesArr.forEach(function(f) {
          if (!f.type.match("image.*")) {
            return;
          }
          storedFiles.push(f);
          var reader = new FileReader();
          reader.onload = function(e) {
            var html = " < div class = 'img-inner' > < img src = \"" + e.target.result + "\" data-file='" + f.name + "' class='selFile' title='Click to remove'> < span data - attr = '" + f.name + "'
            class = 'fa fa-close delete-img' > < /span> < /div>";
            $("#selectedFiles").append(html);
          }
          reader.readAsDataURL(f);
        });
      }

      function removeFile(e) {
        var file = $(this).attr("data-attr");
        var el = "input[value='" + $(this).attr("data-remove") + "']";
        $(el).remove();
        $.cloudinary.delete_by_token(file);
        lc--;
        for (var i = 0; i < storedFiles.length; i++) {
          if (storedFiles[i].name === file) {
            storedFiles.splice(i, 1);
            var val = $('#removed_files').val();
            if (val === "") {
              $('#removed_files').val(file);
            } else {
              file = val + '|' + file;
              $('#removed_files').val(file);
            }
            break;
          }
        }
        $(this).parent().remove();
      }
      $("#submit-all").closest("form").submit(function(event) {
        event.preventDefault();
        $("#submitProcessing").show();
        var formData = new FormData();
        // Initializing city_id array with Checkbox checked values
        var city_id = [];
        $("input[name='citys']:checked").each(function() {
          city_id.push(this.value);
        });
        formData.append('city_id', city_id);
        $("form").find("input, textarea, select").each(function() {
          if ($(this).attr("name") !== 'files[]') {
            formData.append($(this).attr("name"), $(this).val());
          }
        });
        $("input[name='premium']:checked").each(function() {
          formData.append('has_premium', "1");
        });
        $("input[name='sponsor']:checked").each(function() {
          formData.append('has_sponsor', "1");
        });
        $.each(storedFiles, function(j, file) {
          formData.append('images[' + j + ']', file);
        })
        if (lc > 4) {
          alert("Maximum 4 images allow only");
          $("#submitProcessing").hide();
          return;
        } else {
          Swal.fire({
            title: 'Your Post is Proccessing!',
            html: 'Please  < b > Wait < /b> Until Your Post is Done.',
            timerProgressBar: true,
            onBeforeOpen: () => {
              Swal.showLoading()
            },
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.esc) {
              // console.log('I was closed by the timer') 
            }
          })
          $.ajax({
            url: base_url + 'user/postAdSave',
            data: formData,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
              if (data == "Error Code 503") {
                $("#submitProcessing").hide();
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Duplicate Post Not Allowed!',
                  footer: 'Must be Use Unique Tittle'
                })
                return;
              } else if (data == "Error Code 505") {
                $("#submitProcessing").hide();
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Implimeting Html Code is Prophicated ',
                  footer: 'Post Not Allowed! With Html Code injection!'
                })
                return;
              } else {
                $("#submitProcessing").hide();
                window.location.href = base_url + "preview-ad/" + data;
              }
            }
          });
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      let oldname = "";
      $("#name").blur(function() {
        var text = $("#name").val();
        if (text !== oldname) {
          $.post("check", {
            suggest: text
          }, function(result) {
            response = JSON.parse(result);
            let message = "Error: Please Remove The Word ";
            if (response.length > 0) {
              for (i = 0; i < response.length; i++) {
                message += response[i] + ",";
              }
              message += " From Title!";
              $("#checkerror").text(message);
              $("#checkerror").show();
              $("#name").focus();
            } else {
              $("#checkerror").hide();
              $("#checkerror").text("");
            }
          });
          oldname = text;
        }
      });
    });
  </script>
  <script>
                        CKEDITOR.replace( 'description' );
                </script>
@endsection