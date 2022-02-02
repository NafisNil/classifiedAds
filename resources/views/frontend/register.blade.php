@extends('frontend.layout.master')
@section('title')
    User Registration Form
@endsection
@section('content')
<div id="pageBackground">
    <div id="breadcrumbs">
    <a href="https://www.backlist24.org/"> Home</a> &gt; Registration form
    </div>
    <div id="centralIndexModule">
        <div class="mFormWrap mLoginForm">
          <div id="loginForm">
            <img alt="backlist24" title="backlist24" src="https://www.backlist24.org/assets/frontend/img/logo.png" />
            <div class="wrpper">
              <div class="error"></div>
              <h1>Sign Up Form</h1>
              <div class="container">
                <form id="signup" method="post">
                  <div class="input-name">
                    <input name="fname" type="text" placeholder="First name" class="name" required value="">
                    <span>
                      <input name="lname" type="text" placeholder="Last name " class="name" required value="">
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
                    <input name="confpassword" type="password" placeholder="Confirm password" required="" class="text-name" value="">
                  </div>
                  <div class="input-name">
                    <a href="/login">
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