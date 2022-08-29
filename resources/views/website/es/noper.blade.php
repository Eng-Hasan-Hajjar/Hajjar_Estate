@extends('layouts.app')

@section('title')
    {{$messagetitle}}
@endsection

@section('header')
    <link rel="stylesheet" href="{{asset('cus/esall.css')}}">

@endsection
@section('content')

    {{--<div class="container">--}}
        <div class="row profile">
            @include('website.es.pages')
            <div class="col-md-9">
                <div class="" style="margin-top: 10px;">
                <ol class="breadcrumb" style="background-color: #ffffff;">
                    <li class="{{setActive(['home'])}}"><a href="{{url('/home')}}">home</a></li>
                    <li><span> / </span></li>
                    <li><a href="{{url('/showalluserestate')}}">all estates</a></li>
                    <li><span> / </span></li>

                    <li><a href="{{url('/user/edit/es/'.$esAll->id)}}">{{es_type()[$esAll->es_type]}}</a></li>
                </ol>
                <div class="profile-content">
                    <div class="alert alert-success">
                        <br>
                        <b style="font-size: 24px">
                            Notice: {{$messagebody}}
                        </b>
                        @if($user->id ==$esAll->user_id)

                        <br>
                        <br>
                           <h4>if you want to edit the estate click bellow</h4>
                            <a href="{{url('/user/edit/es/'.$esAll->id)}}" class="btn btn-warning" style="margin-left:100px;">EState Edit</a>
                           <br/>
                            <h4>if you want to add gallery to the estate click bellow</h4>
                            <a href="{{url('/imageview/'.$esAll->id)}}" class="btn btn-info" style="margin-left:100px;">Add EState Gallery</a>
                            <br/>
                            <h4>if you want to add services to the estate click bellow</h4>
                            <a href="{{url('/estate/services/'.$esAll->id)}}" class="btn btn-success" style="margin-left:100px;">Add EState Services</a>

                    </div>
                        @endif
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
