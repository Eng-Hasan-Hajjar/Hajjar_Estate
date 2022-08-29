@extends('layouts.app')


@section('title')


Home page


@endsection


@section('header')

<style type="text/css">
  .para{ color: #fff;}
 
</style>

@endsection


@section('content')

  <!-- banner -->
    <div class="banner" id="home"> 
        <div class="cd-radial-slider-wrapper"> 
            <ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
                 <li class="visible"> 
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated Hasan</title>
                            <defs>
                                <clipPath id="cd-image-2">
                                    <circle id="cd-circle-2" cx="110" cy="400" r="1364"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="{{Request::root()}}/website/images/2.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div class="text-center">

                                  <h3>Hajjar Estate </h3>
                                <h5> find your home for Real Estate </h5>
                                <a href="search" class="read" style="font-size:24px"> Search  <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
              
                <li class="next-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-1">
                                    <circle id="cd-circle-1" cx="1290" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="{{Request::root()}}/website/images/1.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                            <h3>Hajjar Estate </h3>
                                <h5> Search for the best your demand </h5>
                                <a href="search" class="read" style="font-size:24px"> Search  <i class="fas fa-caret-right"></i></a>
                                
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 

               
                
                <li>
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-3">
                                    <circle id="cd-circle-3" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="{{Request::root()}}/website/images/3.jpg"></image>
                            
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                                <h3>Hajjar Estate </h3>
                                <h5> find your home for Real Estate </h5>
                                <a href="search" class="read" style="font-size:24px"> Search  <i class="fas fa-caret-right"></i></a>

                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
                <li class="prev-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-4">
                                    <circle id="cd-circle-4" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="{{Request::root()}}/website/images/4.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                            <h3>Hajjar Estate </h3>
                                <h5> find your home for Real Estate </h5>
                                <a href="search" class="read" style="font-size:24px"> Search  <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
            </ul> <!-- .cd-radial-slider --> 
            <ul class="cd-radial-slider-navigation">
                <li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
            </ul> <!-- .cd-radial-slider-navigation -->
        </div> <!-- .cd-radial-slider-wrapper --> 
    </div>
<!-- //banner --> 



<!-- about -->
<section class=" "style="font-size: 24px; background-color:#000000; 
        margin: 1px  ;color:#ffed52; border: 5px solid #eeff00;">
    <div class="container py-lg-5 py-3">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"style="margin:2px  ; font-size: 24px;      background-color:#1a5996;     padding: 10px;  
                  color:#ffed52; border: 5px solid #eeff00;"> About us </h3>
        <div class="row d-flex justify-content-center"style="  font-size: 24px;      background-color:#1a5996;     padding: 10px;  
           margin: 2px  ;color:#ffed52; border: 5px solid #eeff00;" >
            
            <div class="card col-lg-3 col-md-6  mt-md-0 mt-5"style="margin:100px  ; font-size: 24px;      background-color:#1A5995;     padding: 10px;  
           margin: 12px  ;color:#ffed52;">
                <img class="card-img-top" src="{{Request::root()}}/website/images/a1.jpg " alt="Card image cap ">
                <div class="card-body bg-light text-center">
                    <h5 class="card-title pt-3">About Developer</h5>
                    <p class="card-text mb-3 para"> Established in 2019,
                  </p>
                    <a href="{{url('/more1')}}" class="btn "style="border: 5px solid #eeff00;">View More</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6  mt-md-0 mt-5"style="margin:100px  ; font-size: 24px;      background-color:#1A5995;     padding: 10px;  
           margin: 12px  ;color:#ffed52;">
                <img class="card-img-top" src="{{Request::root()}}/website/images/a2.jpg " alt="Card image cap ">
                <div class="card-body bg-light text-center">
                    <h5 class="card-title pt-3">Office Chairs</h5>
                    <p class="card-text mb-3 para ">Wellcome to your in our project for Estate..</p>
                    <a href="{{url('/more2')}}" class="btn "style="border: 5px solid #eeff00;">View More</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6  mt-lg-0  "style="margin:100px  ; font-size: 24px;      background-color:#1A5995;     padding: 10px;  
           margin: 12px  ;color:#ffed52; ">
                <img class="card-img-top " src="{{Request::root()}}/website/images/a3.jpg " alt="Card image cap ">
                <div class="card-body bg-light text-center">
                    <h5 class="card-title pt-3">The leader</h5>
                    <p class="card-text mb-3  para">
The team leader is Mr. Hassan Safwan Hajjar
</p>
                    <a href="{{url('/more3')}}" class="btn " style="border: 5px solid #eeff00;">View More</a>
                </div>
            </div>
          
           
        </div>
    </div>
</section>
<!-- //about -->

<!-- why choose us -->
<section class="why">
    <div class="layer py-5">
    <div class="container py-3">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> Why Choose us </h3>
        <div class="row why-grids">
            <div class="col-lg-3 col-sm-6 why-grid1">
                <i class="fas icon fa-tags"></i>
                <h4>5 year Gurantee</h4>
                <p class="mb-lg-5 mb-4"></p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 why-grid1">
                <i class="fas icon fa-puzzle-piece"></i>
                <h4>Comfortable support</h4>
                <p class="mb-lg-5 mb-4"></p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
                <i class="fab icon fa-angellist"></i>
                <h4>Quality In Furniture</h4>
                <p class="mb-lg-5 mb-4"></p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
                <i class="fas icon fa-dollar-sign"></i>
                <h4>100% Money Back</h4>
                <p class="mb-lg-5 mb-4"></p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- //why choose us -->

<!-- team -->
<section class=" py-5">
    <div class="container py-3" >
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> Our Team </h3>
        <div class="row ">
            <div class="col-md-3 col-sm-6"style="  font-size: 24px;      background-color:#1a5996;     padding: 10px;  
           margin: 2px  ;color:#ffed52; border: 5px solid #eeff00;">
                <img class="img-fluid" src="{{Request::root()}}/website/images/t1.jpg" alt="">
                <h5 class="mt-3">En.Hasan Safwan Hajjar</h5>
                <p>Web full Stack Developer</p>
                <div class="social-icons mt-2">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/hasan.safwan.94" class="fab fa-facebook-f icon-border facebook"> </a>
                        </li>
                        <li class="mx-1">
                            <a href="#" class="fab fa-twitter  icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
                        </li>
                    </ul>
                </div>
            </div>


          
          
        </div>
    </div>
</section>
<!-- //team -->

<!-- Clients -->
<section class="clients-main">
    <div class="wthree-different-dot1 py-5">
        <div class="container py-sm-3">
            <!-- Owl-Carousel -->
            <h3 class="heading text-capitalize mb-sm-5 mb-4">What People Say </h3>
            <div class="cli-ent">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t1.jpg" alt="" />
                                        <h5>Hasan</h5>
                                        <h4>Best Quality Furniture</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo</p>
                                </div>
                            </li>
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t2.jpg" alt="" />
                                        <h5>Hasan</h5>
                                        <h4>Great Place For Great Price</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo.</p>
                                </div>
                            </li>
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t3.jpg" alt="" />
                                        <h5>Hasan</h5>
                                        <h4>Lot Of Furniture Design</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!--// Owl-Carousel -->
        </div>
    </div>
</section>
<!--// Clients -->

<!-- latest news -->
<div class="" style="font-size: 24px; background-color:#000000; 
           margin: 1px  ;color:#ffed52; border: 5px solid #eeff00;">
    <div class="container">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"style="padding:10px;font-size: 24px; background-color:#1a5996; 
           margin: 30px  ;color:#ffed52; border: 5px solid #eeff00;"> Advantages for our site </h3>
        <div class="row news-grids"style="font-size: 24px; background-color:#1a5996; 
           margin: 30px;padding:30px  ;color:#ffed52; border: 5px solid #eeff00;">
            <div class="col-md-4 newsgrid1 text-center5">
                <img src="{{Request::root()}}/website/images/1.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase"> 
Feature 1</h4>
                <p class="mt-4"> Most beautiful homes and distinctive designs</p>
                <a href="{{url('/feature1')}}" style="border: 5px solid #eeff00;">View Post</a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
                <img src="{{Request::root()}}/website/images/2.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase">
Feature 2</h4>
                <p class="mt-4">Competitive Prices</p>
                <a href="{{url('/feature2')}}" style="border: 5px solid #eeff00;">View Post</a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
                <img src="{{Request::root()}}/website/images/3.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase">
Feature 3</h4>
                <p class="mt-4">Great reliability</p>
                <a href="{{url('/feature3')}}" style="border: 5px solid #eeff00;">View Post</a>
            </div>
        </div>
    </div>
</div>
<!-- //latest news -->






       


  

</div>


@endsection





@section('footer')




   {!! Html::script('website/js/jquery-2.2.3.min.js') !!}
    {!! Html::script('website/js/bootstrap.js') !!} <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    
    <!-- banner js -->
    {!! Html::script('website/js/snap.svg-min.js') !!}
    {!! Html::script('website/js/main.js') !!} <!-- Resource jQuery -->  
    <!-- //banner js --> 

    <!-- flexSlider --><!-- for testimonials -->
    {!! Html::script('website/js/jquery.flexslider.js') !!}

        <!-- start-smoth-scrolling -->
     {!! Html::script('website/js/SmoothScroll.min.js') !!}
     {!! Html::script('website/js/move-top.js') !!}
     {!! Html::script('website/js/easing.js') !!}

@endsection
