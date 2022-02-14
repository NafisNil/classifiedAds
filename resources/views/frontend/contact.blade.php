<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact Us | backlist24.com</title>
    <meta name="description" content="If you are ready to use backlist24 then must read privacy policy of backlist24 before posting your first ad." />
    <meta name="keywords" content="privacy policy of backlist24" />
    <link rel="canonical" href="https://www.backlist24.com/privacy-policy" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="en-US, en-CA, en-GB, es">
    <link rel="shortcut icon" alt="similar to backpage, new backlist24, back page replacement, backpage alternative" href="https://www.backlist24.com/assets/frontend/img/favicon.ico" />
    <script language="JavaScript" type="11471662a4ea25200329e364-text/javascript" src="https://www.backlist24.com/assets/frontend/js/jquery-3.3.1.min.js"></script>
    <link type="text/css" rel="stylesheet" media="all" href="https://www.backlist24.com/assets/frontend/css/bppage.css" />
    <link type="text/css" rel="stylesheet" media="all" href="https://www.backlist24.com/assets/frontend/css/backgd.css" />
    <link type="text/css" rel="stylesheet" media="all" href="https://www.backlist24.com/assets/frontend/css/pagesm.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143223964-1" type="11471662a4ea25200329e364-text/javascript"></script>
    <script type="11471662a4ea25200329e364-text/javascript">
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-143223964-1');
    </script>
  </head>
  <body id=home class=backpage cz-shortcut-listen=true>
    <div id=mainWrapper>
      <p class="floatrig">
        <span class="mrgpus">
            @if (Auth::check())
            <a title="my account" href="{{route('user.dashboard')}}">My Account</a>
            <a title="my account" href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
            @else
           
            <a title="Login" href="{{route('user.login')}}">Login / Signup</a>
            @endif
        </span>
      </p>
      <div id=header>
        <a href="https://www.backlist24.com/" alt="backlist24" type="backlist24">
          <img alt="backlist24" title="backlist24" src="https://www.backlist24.com/assets/frontend/img/logo.png">
        </a>
        <div class="clerclsd"></div>
        <div id=postAnAd>
          <a href="https://www.backlist24.com/post-ad" alt="backlist24" title="backlist24">post ad</a>
        </div>
        <div>&nbsp;</div>
      </div>
      <div class="col-md-12 mycont">
        <h1>Contact Us</h1>
        <br>
        <p> {!!$contact->desc!!}</p>
        <div class="row">
          
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="media text-center hg-media-contact">
              <div class="content-pad">
                <h4 class="media-heading">Contact Us</h4>
                <div class="row phone-row">
                  <b>backlist24 CLASSIFIEDS PVT LTD</b>
                  <div class="full-width-xs col-xs-5 col-sm-12 col-md-5">
                    <span class="blue-bold ph-type">
                      <b>Address - </b> {!!$contact->address!!} </span>
                  </div>
                  <div class="full-width-xs col-xs-5 col-sm-12 col-md-5">
                    <span class="blue-bold ph-type">
                      <b> Contact-Email: <a href="mailto:{{$contact->email}}" class="__cf_email__" >{{$contact->email}}</a>
                      </b> <br>
                      <b> Contact-Mobile: <a href="mailto:{{$contact->phone}}" class="__cf_email__" >{{$contact->phone}}</a>
                      </b>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id=footer>
      <div>
        <br>
        <br>
      </div>
    </div>
    <ul id="navLinkList">
        @include('frontend.secondary-footer')
    </ul>
    <ul id="navLinkList">
      <li>
        <a alt="Alternative to backpage" title="Alternative to backpage" href="https://www.backlist24.com/alternative-to-backpage">Alternative to backpage</a>
      </li>
      <li>
        <a alt="Best sites like backpage" title="Best sites like backpage" href="https://www.backlist24.com/best-sites-like-backpage">Best sites like backpage</a>
      </li>
      <li>
        <a alt="Backpage replacement" title="Backpage replacement" href="https://www.backlist24.com/backpage-replacement">Backpage replacement</a>
      </li>
    </ul>
    <ul id="navLinkList">
      <li>©&nbsp;2022&nbsp; <a alt="backlist24.com" title="backlist24.com" href="{{route('index')}}" class="homefootcls">backlist24.com</a>
      </li>
    </ul>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="11471662a4ea25200329e364-text/javascript" src="https://www.backlist24.com/assets/frontend/js/nav.js"></script>
    <div class=endpage></div>
  
  </body>
</html>