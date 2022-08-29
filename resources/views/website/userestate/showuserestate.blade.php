@extends('layouts.app')

@section('title')
    {{$user->name}} user estate
@endsection

@section('header')
    <link rel="stylesheet" href="{{asset('cus/esAll.css')}}">

@endsection
@section('content')

    {{--<div class="container">--}}
        <div class="row profile">


            @include('website.es.pages')

            <div class="col-md-9">
                <div class="" style="margin-top: 10px;">
                <ol class="breadcrumb" style="background-color: #ffffff">
                    <li>
                        <a href="{{url('/home')}}">home</a>
                    </li>
                    <span> / </span>
                    <li>
                        <a href="{{url('/user/showuserestate')}}">all estates</a>
                        <span> / </span>
                    </li>
                    <li>
                        <a href="{{url('#')}}">{{$user->name}}-user-estates</a>
                    </li>
                </ol>
                <div class="profile-content">

                    @include('website.es.sharefile')


                    <div class="row">
                        <div class="col-md-12">
                            <div  style="margin:50px 40%;">
                                {{$esAll->appends(Request::except('page'))->render()}}
                            </div>
                        </div>
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
