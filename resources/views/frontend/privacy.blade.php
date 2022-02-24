<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Privacy Policy | Bedpage24.com</title>
    <meta name="description" content="If you are ready to use Bedpage24 then must read privacy policy of Bedpage24 before posting your first ad." />
    <meta name="keywords" content="privacy policy of Bedpage24" />
    <link rel="canonical" href="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="en-US, en-CA, en-GB, es">
    <link rel="shortcut icon" alt="similar to backpage, new Bedpage24, back page replacement, backpage alternative" href="https://www.bedpage24.com/assets/frontend/img/favicon.ico" />
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
        <a href="https://www.bedpage24.com/" alt="bedpage24" type="bedpage24">
          <img alt="backlist24" title="backlist24" src="{{asset('frontend/image/logo.png')}}">
        </a>
        <div class="clerclsd"></div>
        <div id=postAnAd>
          <a href="{{route('post_ad')}}" alt="bedpage24" title="bedpage24">post ad</a>
        </div>
        <div>&nbsp;</div>
      </div>
      <div class="col-md-12 mycont">
        <h1>Privacy</h1>
        <br>
      {!!$terms->desc!!}
        <br> &nbsp;
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
        <a alt="Alternative to backpage" title="Alternative to backpage" href="#">Alternative to backpage</a>
      </li>
      <li>
        <a alt="Best sites like backpage" title="Best sites like backpage" href="#">Best sites like backpage</a>
      </li>
      <li>
        <a alt="Backpage replacement" title="Backpage replacement" href="#">Backpage replacement</a>
      </li>
    </ul>
    <ul id="navLinkList">
      <li>©&nbsp;2022&nbsp; <a alt="bedpage24.com" title="bedpage24.com" href="{{route('index')}}" class="homefootcls">bedpage24.com</a>
      </li>
    </ul>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="11471662a4ea25200329e364-text/javascript" src="https://www.backlist24.com/assets/frontend/js/nav.js"></script>
    <div class=endpage></div>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="11471662a4ea25200329e364-|49" defer=""></script>
  </body>
</html>