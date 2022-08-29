@extends('layouts.app')

@section('title')
   The EState Has Been Added Successfully
@endsection

@section('header')
    <link rel="stylesheet" href="{{asset('cus/estateall.css')}}">

@endsection
@section('content')

    {{--<div class="container">--}}
        <div class="row profile">


            @include('website.estate.pages')

            <div class="col-md-9">
                <div class="" style="margin-top: 10px;">
                <ol class="breadcrumb" style="background-color: #ffffff">
                    <li><a href="{{url('/home')}}">home</a></li>
                    <li><span> / </span></li>

                    <li><a href="{{url('/user/create/estate')}}">add new estate</a></li>
                </ol>
                <div class="profile-content">
                   <div class="alert alert-success">
                       <b>
                           The EState Has Been Added Successfully
                       </b>
                   </div>
                </div>
            </div>
            </div>


        </div>
    {{--</div>--}}




@endsection

@section('footer')
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 10000,
                max: 1000000,
                values: [ 200000,750000 ],
                slide: function( event, ui ) {
                    $( "#amount_start" ).val(ui.values[ 0 ]);
                    $( "#amount_end" ).val(ui.values[ 1 ]);
                }
            });

        });
    </script>
@endsection