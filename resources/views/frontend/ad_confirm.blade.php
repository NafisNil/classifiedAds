@extends('frontend.layout.master')
@section('title')
    Preview AdForm
@endsection
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        <li class="postAdButtonOn">
          <div class="indexSectionHeader">Step 3: All Done</div>
        </li>
      </ul>
      <div id="previewAdLayout" class="bg-success" style="background: rgb(117, 223, 117); padding:10px">
        <section class="manage-ad mx-3">
            <div class="alert alert-success">
            <span style="font-size: 16px"> Your ad posted successfully. Please waits Upto 15 Minutes :) </span> <br><br>
            <a class="btn btn-success" href="{{route('user.dashboard')}}">Go Account</a>
            </div>
            </section>
      </div>
      <br>
      <br>
    </div>
    <div style="clear:both;"></div>
  </div>
@endsection