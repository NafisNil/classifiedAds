@extends('frontend.layout.master')
@section('title')
    User Registration Form
@endsection
@section('content')
<div id="pageBackground">
    <div id="breadcrumbs">
    <a href="{{route('index')}}"> Home</a> &gt; Registration form
    </div>
    <div id="centralIndexModule">
       
        <div class="mFormWrap mLoginForm">
           
          <div id="loginForm">
           
            <img alt="bedpage24" title="bedpage24" src="{{asset('frontend/image/logo.png')}}" />
            <div class="wrpper">
              <div class="error">@include('admin.sessionFront') </div>
              <h1>Sign Up Form</h1>
              <div class="container">
                <form id="signup" action="{{route('signup.store')}}" method="post">
                    @csrf
                  <div class="input-name">
                    <input name="first_name" type="text" placeholder="First name" class="name" required value="">
                    <span>
                      <input name="last_name" type="text" placeholder="Last name " class="name" required value="">
                    </span>
                  </div>
                  <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input name="email" type="email" placeholder="Email" required="" class="text-name" value="">
                  </div>
                  <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input name="password" type="password" placeholder="Password" required="" class="text-name" value="">
                  </div>
                  <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input name="confirmation_password" type="password" placeholder="Confirm password" required="" class="text-name" value="">
                  </div>
                  <div class="input-name">
                    <a href="{{route('user.login')}}">
                      <button type="button" class="postbtncls rbtn">Login</button>
                    </a>
                    <span class="btnspace">
                      <button type="submit" class="postbtncls rbtn">Register</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br />
    <br />
    </div>
@endsection