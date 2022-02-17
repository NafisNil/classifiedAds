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
        <h2 style="margin-bottom:-1px"> Amity Miller</h2>
        <div class="adInfo"> Posted: Thu 17 February <br>
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
            <br> Email: <a href="/cdn-cgi/l/email-protection#503b293c2926313831103d31393c393e31243f227e333f3d">
              <span class="__cf_email__" data-cfemail="81eaf8edf8f7e0e9e0c1ece0e8ede8efe0f5eef3afe2eeec">[email&#160;protected]</span>
            </a>
          </div> Location : Ea aspernatur anim s <br>
          <b>Category:</b> Surfing <br>
        </div>
        <br>
        <form name="f" id="form" method="post" action="https://www.backlist24.org/free_post_done" enctype="multipart/form-data">
          <input type="hidden" name="post_id" value="566313">
          <input type="hidden" name="user_id" value="337839">
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