@extends('frontend.layout.master')
@section('title')
    User Login
@endsection
@section('content')
<div id="pageBackground">
    <div id="breadcrumbs">
    <a href="https://www.backlist24.org/"> Home</a> &gt; Login / Sign up
    </div>
    <div id="centralIndexModule">
    <div class="mFormWrap mLoginForm">
    <div id="loginForm">
    <div class="signupbtn"> <a href="{{route('user.registration')}}" style="
        text-decoration: none;
    ">Sign Up</a></div>
    <img alt="backlist24" title="backlist24" src="https://www.backlist24.org/assets/frontend/img/logo.png" />
    <form method="post" id="login" style="
        margin-left: 15%;
        margin-right: 15%;
            background-color: inherit;
    ">
    <div class="">
    <div class="error"> </div>
    <h3 class="" style="padding: 5px;text-align: center;">Login With Password</h3>
    <div class="col-lg-12">
    <div class="row">
    <div class="col-lg-12">
    <div class="row">
    <div class="col-lg-6 form-group">
    <label>Email</label>
    <input type="email" placeholder="Enter Email Id.." name="email" id="billing_email" value="" class="form-control" required="" autocomplete="off">
    </div>
    </div><div class="row">
    <div class="col-lg-6 form-group">
    <label>Password</label>
    <input type="Password" placeholder="Type Password..." name="password" id="billing_pass" value="" class="form-control" required="" autocomplete="off">
    </div>
    </div>
    <div class="input-name">
    <a href="/forget-password"><button type="button" class="postbtncls rbtn">Reset</button></a>
    <span class="btnspace"><button type="submit" class="postbtncls rbtn">Login</button></span>
    </div>
    </div>
    </div>
    </div>
    </div><h2>Or</h2>
    <a class="login" href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=https%3A%2F%2Fwww.backlist24.org%2Fauth%2Foauth2callback&client_id=342367215811-92sdcsiuu0dkqp882l0avf7q01ufj5kg.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&access_type=online&approval_prompt=auto"><img style="height: 45px!important;" alt="gmail login" title="gmail login" src="https://www.backlist24.org/assets/frontend/img/gmaillogin.png" /></a></form>
    <br /><br />
    </div>
    </div>
    </div>
    <br />
    <br />
    </div>
@endsection