@extends('layouts.app')

@section('title')
   {{$user->name}} Personal Information Update
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
                        <li><a href="{{url('/home')}}">home</a></li>
                        </a><span> / </span> </li>
                        <li class="active"><a href="{{url('/user/editsetting/')}}">{{$user->name}}-Personal-Information-Update</a></li>
                    </ol>

                    <div class="profile-content">
                        <h4>
                            Email and UserName Update
                        </h4>
                        <hr>
                        <br>
                        <br>

                        {!! Form::model($user,['url' => ['/user/editsetting',$user->id] , 'method' => 'post']) !!}
                        <section class="content">
                        @include('admin.user.form',['showforuser'=> 1])
                        </section>
                        {!! Form::close() !!}
                        <br>
                        <hr>
                        <br>
                        <h4>
                            Password Update
                        </h4>
                        <hr>
                            <br>

                            {!!  Form::open(['url'=> '/user/changepassword','method'=>'patch']) !!}
                            <div class="form-group" style="padding-top:15px;">

                                <div class="row">
                                <div class="col-md-9">
                                    <input id="password" type="password" placeholder="enter old password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                       </span>
                                    @enderror
                                </div>
                                </div>
                                <br>
                                  <div class="row">
                                <div class="col-md-9">
                                    <input id="newpassword" type="password" placeholder="enter new password" class="form-control @error('password') is-invalid @enderror" name="newpassword" required autocomplete="new-password">

                                    @error('newpassword')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                       </span>
                                    @enderror
                                </div>
                                  </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('change password') }}
                                    </button>

                                        <div class="col-md-3"></div>
                                </div>
                                </div>
                            </div>


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