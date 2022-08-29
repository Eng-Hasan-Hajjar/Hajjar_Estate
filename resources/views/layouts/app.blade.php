<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head backgroun="black">
     <!-- links template-->
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
      {!! Html::style('website/css/slider.css') !!}
      {!! Html::style('website/css/bootstrap.css') !!}
      {!! Html::style('website/css/style.css') !!}
      {!! Html::style('website/css/fontawesome-all.css') !!}
      {!! Html::style('website/css/flexslider.css') !!}
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <!-- //web-fonts -->
    <title>  
    Hajjar Estates 
     |
    @yield('title')
    </title>
    @yield('header')
</head>
<body style="margin-top:1px ; padding-bottom:0px ; background-color:#1a5996; ">
<header  >
    <div class=" agile-banner_nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <h1><a class="navbar-brand" href="{{url('/home')}}">Hajjar <span class="display">Estate </span></a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"style="font-size:10px">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                      <li class="nav-item active"style="font-size:0.1px">
                        <a class="nav-link" href="{{url('/ShowAllBuilding')}}">Estates<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/forBuy')}}">Buy<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/forRent')}}">Rent<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/forMortgage')}}">Mortgage<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="dropdown nav-item ">
                        <a href="{{url('/ShowAllBuilding')}}" class="dropdown-toggle nav-link" data-toggle="dropdown">Rent Estate
                            <b class=""></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            @foreach(es_type() as $keyType=>$type)
                                  <li>
                                     <a href="{{url('/search?es_rent=1&es_type='.$keyType)}}">{{$type}}</a>
                                  </li>
                            @endforeach
                           
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="{{url('/ShowAllBuilding')}}" class="dropdown-toggle nav-link" data-toggle="dropdown">Vend Estate
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            @foreach(es_type() as $keyType=>$type)
                                  <li>
                                     <a href="{{url('/search?es_rent=0&es_type='.$keyType)}}">{{$type}}</a>
                                  </li>
                            @endforeach
                        </ul>
                    </li>
                 </ul> 
                 <ul class="navbar-nav ml-auto">
                 <li class="dropdown nav-item">
                 @guest
                        <a href="{{ route('login') }}" class="nav-link" style="color: #FFFF00" >{{ __('Login') }}
                            <b class="caret"></b>
                        </a>
                           @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: #FFFF00"  >{{ __('Register') }}</a>
                                </li>
                            @endif
                                  @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </li>
              </ul> 
            </div>
        </nav>
    </div>
</header >
<div style="margin-top:2px ; padding:45px">
</div>
@yield('content')
<div style="margin-top:10px ; padding:10px">
</div>
            <!-- footer -->
<footer class="py-5" style="background-color: #1a5996">
    <div class="container py-md-5" style="background-color: #1a5996">
        <div class="footer-logo mb-5 text-center">
            <a class="navbar-brand" href="/home">Hajjar <span class="display"> Estate </span></a>
        </div>
        <div class="footer-grid">
            <div class="social mb-4 text-center">
                <ul class="d-flex justify-content-center">
                    <li class="mx-2"><a href="https://www.facebook.com/hasan.safwan.94"><span class="fab fa-facebook-f"></span></a></li>
                    <li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
                    <li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    <li class="mx-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
                </ul>
            </div>
            <div class="list-footer">
                <ul class="footer-nav text-center">
                    <li>
                        <a href="{{url('/home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/aboutsite')}}">About</a>
                    </li>
                    <li>
                        <a href="{{url('/home')}}">Services</a>
                    </li>
                    <li>
                        <a href="{{url('/home')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="agileits_w3layouts-copyright mt-4 text-center">
                <p>© 2022 Intrend. All Rights Reserved | Design and Develop by <a href="https://www.facebook.com/hasan.safwan.94/" target="=_blank"> Hajjar-Developer </a></p>
        </div>
        </div>
    </div>
</footer>
<!-- footer -->
 <!-- js-scripts -->     
 <!-- js -->
    {!! Html::script('website/js/jquery-2.2.3.min.js') !!}
    {!! Html::script('website/js/bootstrap.js') !!} <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    <!-- banner js -->
    {!! Html::script('website/js/snap.svg-min.js') !!}
    {!! Html::script('website/js/main.js') !!} <!-- Resource jQuery -->  
    <!-- //banner js --> 
    <!-- flexSlider --><!-- for testimonials -->
    {!! Html::script('website/js/jquery.flexslider.js') !!}
    <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
    </script>
    <!-- //flexSlider --><!-- for testimonials -->
    <!-- start-smoth-scrolling -->
     {!! Html::script('website/js/SmoothScroll.min.js') !!}
     {!! Html::script('website/js/move-top.js') !!}
     {!! Html::script('website/js/easing.js') !!}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
            });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->
<!-- //js-scripts -->
              @yield('footer')
</body>
</html>
