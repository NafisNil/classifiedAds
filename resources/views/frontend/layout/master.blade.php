<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="Backpage Auburn escorts near me, bedpage24 is the most popular classified site, jobs, sale, apartments, female escort, body rubs, strip clubs, dating" />
    <meta name="keywords" content="backpage Auburn, backpage massage, Auburn backpage escorts, backpage singles, Auburn hookup, women seeking men, Auburn meetup, strippers, body rub websites, female models, adult ad sites, escort ads, ts escort, the escort, new backpage, classified ads"
    />
    <meta name="robots" content="index">
    <meta name="robots" content="all">
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="https://www.backlist24.com/assets/frontend/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="{{asset('frontend')}}/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="{{asset('frontend')}}/js/googletag.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/cat.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/sidebara.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/sidebara2.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/cat2.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/login.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/loginmain.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/addCreditpage.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/managead.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/colorbox.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/css/viewadnew.css" />
    <script src="{{asset('frontend')}}/js/jquery.colorbox.js"></script>
    <script src="{{asset('frontend')}}/js/color.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143223964-1" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-143223964-1');
    </script>
    <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "5b2246601cc34b76b5e4ae67c733b37a"}' type="text/javascript"></script>
    <style>
        @media (max-width: 860px) {
            .city {
                font-size: 12px;
                margin-top: -6px !important;
                position: absolute;
                text-align: center;
                left: 32px;
                right: 97px;
            }
        }
        
        .importantnote h2 {
            font-size: 14px;
        }
        
        .importantnote h3 {
            font-size: 14px;
            font-weight: 100;
        }
    </style>
</head>

<body>
    <div id="tlHeader" class="siteHeader">
        <div onclick="openNav()" class="nav-trigger sidebar-toggle" data-cf-modified-5cf69b7f358dec5e96f44dff-="">nav</div>
        <div id="postAdButton" class="tlBlock logome" style="display: block; height: auto; float: left; padding: 0 !important;">
            <a title="bedpage24 logo" href="{{route('index')}}" title="bedpage24 logo">
                <img style="width: 158px; height: 40px; padding-top: 2px;" alt="bedpage24" title="bedpage24" class="logow" src="{{asset('frontend')}}/image/logo.png"> 
            </a>
        </div>
        @if (Auth::check())
        <div id="postAdButton" class="tlBlock">
           
          <a title="bedpage24 post ad" href="{{route('post.ad')}}">post ad <i class="fa fa-paper-plane-o"></i></a>
       
        </div>
        @else
        <div id="postAdButton" class="tlBlock">
         
            <a title="bedpage24 post ad" href="{{route('user.login')}}" class="postbtncls">post ad  <i class="fa fa-paper-plane-o"></i></a>
  
          </div>
        @endif
        <div id="community" class="tlBlock">
            <span class="city" style="background: #ce4242;position: fixed;z-index: -1;">
          <h1> Backpage Auburn,jobs, sale, apartments, dating, backlist </h1>
        </span>
        </div>
    </div>
    </div>
    <!-- sidebar -->
    @include('frontend.layout.sidebar')

    <!-- sidebar -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/list_cat.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/listcatpage.css">

   @yield('content')
   @include('frontend.layout.footer')
    <div class="endpage"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    
    <script src="{{asset('frontend')}}/js/nav.js" type="text/javascript"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/rocket-loader@2.4.0/build/js/loader.js" data-cf-settings="5cf69b7f358dec5e96f44dff-|49" defer=""></script>
</body>

</html>