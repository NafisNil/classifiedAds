@extends('frontend.layout.master')
@section('title')
    User Dashboard
@endsection
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/managead.css">
<style>
    .affiliate li {
      display: inline
    }

    .userinfo span {
      float: none !important
    }

    .btn.btn-gradient-red {
      background-color: #f44336 !important;
      background-image: -webkit-linear-gradient(top, #f44336 0, #f44336 100%);
      background-image: -o-linear-gradient(top, #127bde 0, #072d50 100%);
      background-image: linear-gradient(to bottom, #f44336 0, #f44336 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff127bde', endColorstr='#ff072d50', GradientType=0);
      border-color: #f44336;
      color: #fff !important;
      text-shadow: 0 -1px 0 rgba(31, 31, 31, .29);
      -webkit-font-smoothing: antialiased;
      margin-right: 10px
    }

    .balance-blue {
      width: fit-content;
      display: inline-block
    }

    .userinfo {
      padding-left: 0;
      padding-right: 0
    }

    .loggeduser {
      float: right
    }

    @media only screen and (max-width:600px) {
      .userinfo {
        text-align: -moz-center;
        text-align: -webkit-center
      }

      .balance-blue {
        display: block;
        margin-bottom: 10px
      }

      .loggeduser {
        float: none
      }
    }

    .badge {
      display: inline-block;
      padding: .45em 10px;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem
    }

    .badge-success {
      color: #fff;
      background-color: #48ca48;
      border-radius: 10rem
    }
  </style>
      <div id="pageBackground">
        <div id="cookieCrumb">
          <a href="https://www.backlist24.org/" referrerpolicy="origin-when-cross-origin">Home</a> &gt; <h1> Manage Ads</h1>
        </div>
        <div id="manage_ads">
          <style>
            #n {
              transition: 0.3s;
            }
  
            #n:hover,
            #n:focus {
              background: #8080803d;
              transition: 0.3s;
            }
  
            #ncenter {
              text-align: center;
            }
  
            @media only screen and (min-width: 600px) {
              #manage_ads {
                margin: 0 auto 12px;
                text-align: left;
                padding: 5px;
              }
            }
  
            .navbar-nav {
              padding-top: 0px !important;
            }
  
            .navbar.navbar-inverse {
              box-shadow: 0 2px 2px rgba(255, 9, 9, 0.64);
            }
  
            .navbar-brand:hover {
              color: #d3d3d3 !important
            }
  
            .navbar-nav li a:hover {
              color: #d3d3d3 !important
            }
  
            .fa-home {
              color: white;
            }
  
            .fa-home:hover {
              color: #d3d3d3;
            }
          </style>
          <div class="userinfo">
            <div class="balance-blue">Balance : $ {{Auth::user()->balance}} </div>
            <span id="group" class="hidemeonmobile">
              <style>
                .count {
                  position: relative;
                  top: -20px;
                  left: -25px;
                  border: 1px solid black;
                  border-radius: 50%;
                }
  
                @media screen and (max-width: 600px) {
                  .hidemeonmobile {
                    visibility: hidden;
                    clear: both;
                    float: left;
                    margin: 10px auto -40px -20px;
                    width: 28%;
                    display: none;
                  }
                }
              </style>
              <button type="button" class="btn btn-info" onclick="showmessage()">
                <i class="fa fa-envelope"></i>
              </button>
              <span style="display: initial;" class="badge badge-light count">0</span>
            </span>
            <div class="loggeduser">
              {{Auth::user()->email}}
            </div>
          </div>
          <div class="col-12 p-5" role="alert">
            <div class="col-12 p-5" style="border:1px solid #483483;background:#d3d3d3">We request you not upload any nude or vulgar images and vulgar language like-( bitch, college girl, sugar baby, Porn girl, Drugs, Alcohol Etc ) please ignore post in your account. We are looking forward to your cooperation to make backlist24 a safe and secure platform for everyone <a title="Post Roles policy" href="{{route('post.role')}}">Post Roles</a>
              </a>
            </div>
          </div>
          <div class="clearcls"></div>
          <nav style="margin-top: 20px !important" class="navbar navbar-inverse hidden-xs">
            <div class="container-fluid kundansd">
              <div class="navbar-header">
                <a class="navbar-brand" href="https://www.backlist24.org/manage-ads">
                  <i class="fa fa-home"></i>
                </a>
              </div>
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{route('add.credit')}}">Buy Credits</a>
                </li>
                <li>
                  <a style="color:#d3d3d3 !important;" href="#">Manage Ads</a>
                </li>
                <li>
                  <a href="https://www.backlist24.org/get-verified-badge">Get Verified Badge</a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <a type="button" class="navbar-btn btn btn-gradient-red" am-latosans="bold" href="{{route('add.credit')}}">Buy Credits</a>
              </ul>
            </div>
          </nav>
          <div class="show-xs">
            <div class="btn-group btn-group-justified">
              <a class="btn btn-primary" href="https://www.backlist24.org/add-credit">Buy Credits</a>
              <a style="background-color:#286090;border-color:#204d74;" class="btn btn-primary" href="https://www.backlist24.org/manage-ads">Manega</a>
              <a class="btn btn-primary" href="https://www.backlist24.org/get-verified-badge">Verified</a>
            </div>
          </div>
          @include('sessionMsg')
          <div class="payment_error"></div>
          <div class="clearcls"></div>
          <div id="dataTable">
            <table class="table table-striped custab">
              <tbody>
                <tr>
                  <th style="text-align:center;">Status</th>
                  <th style="text-align:center;" class="firsty">Title</th>
                  <th style="text-align:center;">Category</th>
                  <th style="text-align:center;">Premium</th>
                  <th style="display:none;">Sponsor</th>
                  <th style="text-align:center;">Weekly Sponsor</th>
                  <th style="text-align:center;">Date</th>
                  <th style="text-align:center;" class="firstz">Action</th>
                </tr>
              </tbody>
              @php
                  $ads = App\Models\Advertise::where('user', Auth::user()->id)->orderBy('id','desc')->get();
              @endphp
              @foreach ($ads as $item)
              <tr>
                <th style="text-align:center;">
                  @if ($item->status == 1)
                      <span class="badge badge-success">Live</span>
                  @else
                     <span class="badge badge-danger">Not Live</span>
                  @endif
                </th>
                <th style="text-align:center;" class="firsty">{{$item->title}}</th>
                <th style="text-align:center;">{{$item->subcategoryName->name}}</th>
                <th style="text-align:center;">
                @if ($item->premium == 0)
                <i class="fa fa-times-circle" style="color: red;font-size: 20px;" aria-hidden="true"></i>
                @else
                <i class="fa fa-check" style="color: rgb(40, 185, 72);font-size: 20px;" aria-hidden="true"></i>
                @endif
                </th>
              
                <th style="text-align:center;"> 
                   @if ($item->weekly == 0)
                  <i class="fa fa-times-circle" style="color: red;font-size: 20px;" aria-hidden="true"></i>
                  @else
                  <i class="fa fa-check" style="color: rgb(40, 185, 72);font-size: 20px;" aria-hidden="true"></i>
                  @endif</th>
                  
                <th style="text-align:center;">
                {{  \Carbon\Carbon::parse($item->created_at)->format('d M,Y')}}
                </th>
                <th style="text-align:center;" class="firstz">
                  <a href="{{route('edit.adform', [$item])}}" > <button style="background: #127bde;border-radius:8px">Edit</button></a>
                  <a href="" > <button style="background: #12debc;border-radius:8px">View</button></a>
                  <a href="" > <button style="background: #de1267;border-radius:8px">Delete</button></a>
                  
                </th>
              </tr>
              @endforeach
              
            </table>
            <ul class="pagination"></ul>
            <br />
            <br />
          </div>
        </div>
        
@endsection