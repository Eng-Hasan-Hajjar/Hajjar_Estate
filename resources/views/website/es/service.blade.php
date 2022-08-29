@extends('layouts.app')

@section('title')
    Service Page
@endsection

@section('header')



@endsection

@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:url({{asset('/website/estateimages/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">EState Services</h1>
                    <div><a href="{{url('/home')}}">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">Services</strong></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-11 main-section">

            <h1 style="margin-top: 20px;" class="text-center text-info">Add EState Services</h1>
            <br>
            <br>
            <br>
            <div class="form-group">
              <form method="post" action="{{url('/estate/services')}}">
                @csrf
                <input name="estate_id" type="hidden" value="{{$id}}"/>
                <div class="row">
                    <div class="col-md-6">
                        <div style="width:400px;width: 400px; float: left; margin: 40px; margin-left: 30px"><img style="width:100%;height:100%" src="{{asset('services/water.jpg')}}"/></div>
                        <input name="services[]" value="water" style="width: 30px; height: 30px; float: right; margin: 40px; margin-left:-5px;" type="checkbox">
                         water
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/electricity.jpg')}}"/></div>
                        <input name="services[]" value="electricity" style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        electricity
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/mosques.jpg')}}"/></div>
                        <input name="services[]" value="mosques" style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        mosques
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/gardens.jpg')}}"/></div>
                        <input name="services[]" value="gardens"  style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        gardens
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/amusementpark.jpg')}}"/></div>
                        <input name="services[]" value="amusementpark"  style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        parks
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/schools.png')}}"/></div>
                        <input name="services[]" value="schools"  style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        schools
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/shops.jpg')}}"/></div>
                        <input name="services[]" value="shops"  style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        shops
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/bakery.jpg')}}"/></div>
                        <input name="services[]" value="bakery"  style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        bakery
                    </div>

                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float: left;margin: 40px; margin-left:30px"><img style="width:100%;height:100%" src="{{asset('services/churchs.jpg')}}"/></div>
                        <input name="services[]"  value="churchs" style="width: 30px; height: 30px;margin: 40px; margin-left: -5px;float: right" type="checkbox">
                        churchs
                    </div>
                    <div class="col-md-6">
                        <div style="width:400px;width: 400px;float:right;margin-top: 40%;">
                            <input  type="submit" name="service" class="btn btn-success"></div>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>





@endsection
@section('footer')



@endsection
