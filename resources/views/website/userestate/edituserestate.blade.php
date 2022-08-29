

@extends('layouts.app')

@section('title')
    {{es_type()[$estate->es_type]}} EState Edit
@endsection

@section('header')
    <link rel="stylesheet" href="{{asset('cus/estateall.css')}}">

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
                <li><span> / </span> </li>
                <li>
                <a href="{{url('/user/showuserdeactiveestate')}}">Deactive EStates</a>
                </li>
                <li> <span> / </span> </li>
                <li>
             <a href="{{url('/user/edit/es/'.$estate->id)}}">{{es_type()[$estate->es_type]}} estate edit</a>
</li>
                </ol>
                <div class="profile-content">
                    {!! Form::model($estate,['url' => '/user/update/es' , 'method' => 'patch','files'=>true, 'class'=>'col-md-9','style'=>'margin-left:150px;']) !!}
                    <input type="hidden" name="estate_id" value="{{ $estate->id }}"/>
                    @include('admin.es.formAdd', ['user'=>1])
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
