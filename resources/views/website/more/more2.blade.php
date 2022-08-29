@extends('layouts.app')

@section('title')
     EState Gallery
@endsection
@section('header')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu55dhvD8NYS6SW3icAqvmnkyBozeq7k&callback=initMap"
  type="text/javascript"></script>
 {!! Html::style('cus/esall.css') !!}
 <style type="text/css">
      .breadcrumb{
      background-color: black;
      color:#ffed52;
      border: 5px solid #eeff00;
    }
    .ref{
      font-size: 24px;      background-color:#000000;     padding: 10px;  
           margin: 12px  ;color:#ffed52; border: 5px solid #eeff00;
    }

 </style>
 @endsection

@section('content')
    <div class="container ref" style="margin:100px  ;">
        <div class="row ref">
        <p class="card-text mb-3 para"> Wellcome to your in our project for Estate..
                  </p>
        </div>
    </div>


@endsection
@section('footer')



  
@endsection
