@extends('layouts.app')

@section('title')
   Contact Us
@endsection

@section('header')

@endsection
@section('content')



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{asset('website/estateimages/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Contact Us</h1>
                    <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">Contact</strong></div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">


             {!! Form::open(['url' => '/contact' , 'method' => 'post','class'=>'p-5']) !!}


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Full Name</label>
                                <input type="text" name="contact_name" id="fullname" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" name="contact_email" class="form-control" placeholder="Email Address" value="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->email:''}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">

                                <label class="font-weight-bold" for="email">Subject</label>
                                <input type="text" name="contact_subject" id="subject" class="form-control" placeholder="Enter Subject">
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Message</label>
                                <textarea name="contact_message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary  py-2 px-4 rounded-0">
                            </div>
                        </div>


                  {!! Form::close() !!}
                </div>

                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">{{getSetting('address')}}</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">{{getSetting('mobile')}}</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">{{getSetting('email')}}</a></p>


                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')

@endsection
