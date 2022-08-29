@extends('layouts.app')

@section('title')
    the main page
@endsection

@section('header')

<style>
    p{
        font-size: 20px !important;
    }
</style>

@endsection

@section('content')


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url({{asset('/website/estateimages/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">About Us</h1>
                    <div><a href="{{url('/home')}}">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">About</strong></div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('/website/estateimages/c2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
                    <div class="site-section-title mb-3">
                        <h2>Our WebSite</h2>
                    </div>
                    <p>If you’re looking for an apartment for rent,</p>
                    <p>you need to first figure out how much rent you can afford per month. Of course, you’ll be limited by your income, and property managers and landlords will account for that when you submit a website.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('/website/estateimages/about.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 mr-auto order-md-1"  data-aos="fade-up" data-aos-delay="200">
                    <div class="site-section-title mb-3">
                        <h2>Our Office</h2>
                    </div>
                    <p>If you’re looking for an apartment for rent,</p>
                    <p>you need to first figure out how much rent you can afford per month. Of course, you’ll be limited by your income, and property managers and landlords will account for that when you submit a website.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-top bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Social Media</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member p-4">

                       <a href="https://www.facebook.com">
                           <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/facebook.png')}}" alt="Image" class="img-fluid rounded mb-4">
                       </a>
                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">FaceBook</h2>
                            <span class="d-block mb-3 text-white-opacity-05">facebook account</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>

                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member p-4">

                        <a href="https://www.telegram.com">
                            <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/telegram.png')}}" alt="Image" class="img-fluid rounded mb-4">
                        </a>
                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">Telegram</h2>
                            <span class="d-block mb-3 text-white-opacity-05">telegram account</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>

                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member p-4">

                       <a href="https://www.instagram.com">
                           <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/instagram.png')}}" alt="Image" class="img-fluid rounded mb-4">
                       </a>
                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">Instagram</h2>
                            <span class="d-block mb-3 text-white-opacity-05">instagram account</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>

                        </div>

                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member p-4">

                       <a href="https://www.linkedin.com">
                           <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/linkedin.jpg')}}" alt="Image" class="img-fluid rounded mb-4">
                       </a>
                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">LinkedIn</h2>
                            <span class="d-block mb-3 text-white-opacity-05">linkedin account</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>

                        </div>

                    </div>
                </div>



                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member p-4">

                        <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/mobile.jpg')}}" alt="Image" class="img-fluid rounded mb-4">

                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">Mobile</h2>
                            <span class="d-block mb-3 text-white-opacity-05">mobile number</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>

                        </div>

                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member p-4">
                      <a href="https://www.twitter.com">
                        <img style="width: 200px; height: 200px" src="{{asset('/website/estateimages/twitter.png')}}" alt="Image" class="img-fluid rounded mb-4">
                      </a>
                        <div class="text">

                            <h2 class="mb-2 font-weight-light text-black h4">Twitter</h2>
                            <span class="d-block mb-3 text-white-opacity-05">twitter account</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>

                        </div>

                    </div>
                </div>





            </div>
        </div>
    </div>








@endsection
@section('footer')



@endsection
