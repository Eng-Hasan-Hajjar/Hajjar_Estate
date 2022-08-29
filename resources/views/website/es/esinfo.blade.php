@extends('layouts.app')
@section('title')
Information of the estate: {{$esinfo->es_name}}
@endsection
@section('header')
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu55dhvD8NYS6SW3icAqvmnkyBozeq7k&callback=initMap"
  type="text/javascript"></script>
 {!! Html::style('cus/esall.css') !!}
 <style type="text/css">
    hr{
        margin-top: 10px;
        margin-bottom: 10px;
    } 
      .dis{
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 10px;
    } 
       .dis2{
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: : 33px;
        padding-right: : 10px;
        margin-bottom: 10px;
    } 
      .itemsearch{
        
        margin-bottom: 12px;
    } 
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







        <div class="col-md-12" style="margin-top:20px; background-color:#1a5996 ;padding:20px">
           <ol class="breadcrumb ">
                <li><a href="{{url('/')}}" class="ref  btn">Home    </a> </li>
                <li><a href="{{url('/ShowAllBuilding')}}" class="ref  btn">   All estate</a> </li>
                <li><a href="{{url('/SingleBuilding/'.$esinfo->id)}}" class="ref  btn"> name:   {{$esinfo->es_name}}</a> </li>
           </ol>





            <div class="profile-content ">
              <h1 class="ref" >
                The name: 
                {{$esinfo->es_name}}
              </h1>
              <hr>
           
              <div class="ref" role="">
                <a href="{{url('/search?es_price'.$esinfo->es_price)}}" class="btn ref"> Price: {{$esinfo->es_price}} 
                </a>
                  <a href="{{url('/search?es_sequar='.$esinfo->es_sequar)}}" class="btn ref"> Sequar: {{$esinfo->es_sequar}} 
                </a>
                  <a href="{{url('/search?es_place='.$esinfo->es_place)}}" class="btn ref "> Place: {{es_place()[$esinfo->es_place]}} 
                </a>
                  <a href="{{url('/search?es_rooms='.$esinfo->es_rooms)}}" class="btn ref "> Number of rooms: {{$esinfo->es_rooms}} 
                </a>
                  <a href="{{url('/search?es_type='.$esinfo->es_type)}}" class="ref  btn"> Type: {{es_type()[$esinfo->es_type]}} 
                </a>
                  <a href="{{url('/search?es_rent='.$esinfo->es_rent)}}" class=" ref btn "> Type of operation: {{es_rent()[$esinfo->es_rent]}} 
                </a>
              </div>
              <p class="ref">
                Discription : 
                {!! nl2br($esinfo->es_larg_dis)!!}
              </p>
            <div style="margin-top:20px;">
              @include('website.es.images',$esinfo)
             </div>
             <div class="ref" style="padding:15px;">
                    <p class="">
                        Main Image : 
                    </p>
                    <img src="{{ URL::to('/') }}/images/{{ $esinfo->es_image }}" class="ref" style=" height:900px; border: 5px solid #eeff00;margin:3px;"  />
             </div>  
                @include('website.es.pages')
                <div id="googleMap" style="width:100%;height:400px;">
                </div>
            </div>
            <br>
                <p style="font-size: 28px; color: blue" class="breadcrumb" >
                the related Estates to your search
                </p>
              <div class="profile-content">
               @include('website.es.related',['esinfo'=>$same_rent])
               @include('website.es.related',['esinfo'=>$same_type])
                </div>
        </div>
@endsection
@section('footer')
    <script>
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 36.20124, lng: 37.16117};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('googleMap'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
@endsection