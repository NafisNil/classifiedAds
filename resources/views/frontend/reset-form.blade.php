@extends('frontend.layout.master')
@section('title')
    Reset Password Form
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
          <form method="post" id="login" style="
  margin-left: 15%;
  margin-right: 15%;
      background-color: inherit;
">
            <div class="">
              <div class="error"></div>
              <h3 class="" style="padding: 5px;text-align: center;">Create New Password</h3>
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6 form-group">
                        <label>New Password</label>
                        <input type="password" placeholder="New Password" name="password" class="form-control" required="" autocomplete="off">
                      </div>
                      <input type="hidden" value="d57d414ad6b083a88e9681db4569bedbec39d485" name="token">
                      <div class="col-lg-6 form-group">
                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" name="confpassword" class="form-control" required="" autocomplete="off">
                      </div>
                    </div>
                    <button type="submit" class="postbtncls rbtn">Submit</button>
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
    <div id="tlFooter">
      <div class="maindatafooterlist">
        <a alt="backlist24.org" title="backlist24.org" href="https://www.backlist24.org/">Home</a> | <a alt="About us" title="About us" href="https://www.backlist24.org/about-us">About us</a> | <a alt="My Account" title="My Account" href="https://www.backlist24.org/manage-ads">My Account</a> | <a alt="Buy Credit" title="Buy Credit" href="https://www.backlist24.org/add-credit">Buy Credit</a> | <a alt="Contact" title="Contact" href="https://www.backlist24.org/contact">Contact</a> | <a alt="Privacy" title="Privacy" href="https://www.backlist24.org/privacy-policy">Privacy</a> | <a alt="Terms" title="Terms" href="https://www.backlist24.org/terms-of-use">Terms</a>
      </div>
      <div class="addthis_inline_share_toolbox"></div>
      <div class="footerDisclaimer"></div>
    </div>
  </div>
@endsection