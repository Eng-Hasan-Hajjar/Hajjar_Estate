@extends('layouts.app')

@section('title')
    Add New EState
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
                      </a><span> / </span> </li>
                      <li><a href="{{url('/user/create/estate')}}">add-new-estate</a></li>
                  </ol>
                  <div class="profile-content">
                      {!! Form::open(['url' => '/user/create/estate' , 'method' => 'post','files'=>true , 'class'=>'col-md-9' ,'style'=>'margin-left:150px;']) !!}
                      @include('admin.estate.form',['user'=> 1])
                      {!! Form::close() !!}
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