@extends('frontend.layout.master')
@section('title')
    Reset Password
@endsection
@section('content')
<div id="pageBackground">
    <div id="breadcrumbs">
      <a href="https://www.backlist24.org/"> Home</a> &gt; Login / Sign up
    </div>
    <div id="centralIndexModule">
      <div class="mFormWrap mLoginForm">
        <div id="loginForm">
          <div class="signupbtn">
            <a href="/register" style="
  text-decoration: none;
">Sign Up</a>
          </div>
          <img alt="backlist24" title="backlist24" src="https://www.backlist24.org/assets/frontend/img/logo.png" />
          <form method="post"  action="{{ route('password.email') }}" id="login" style="
  margin-left: 15%;
  margin-right: 15%;
      background-color: inherit;
">
@csrf
            <div class="">
              <div class="error"></div>
              <h3 class="" style="padding: 5px;text-align: center;">Reset Password</h3>
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6 form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Enter Email Id.." name="email" id="billing_email" value="" class="form-control @error('email') is-invalid @enderror" required="" autocomplete="off">
                      </div>
                    </div>
                    <button type="submit" class="postbtncls rbtn">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <br />
          <br />
        </div>
      </div>
    </div>
    <br />
    <br />
  
  </div>
@endsection