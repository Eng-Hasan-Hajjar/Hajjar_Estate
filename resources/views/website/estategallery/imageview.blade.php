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
            <div class="col-lg-12 col-sm-12 col-11 main-section">

                <h1 class="text-center text-info">Multiple Upload Images For EState</h1>
                <br>
                <br>
                <br>
                <div class="form-group ref">

                    <form method="post" action="{{url('imageview/submit/')}}" enctype="multipart/form-data">
                        @csrf
                        <input name="es_id" type="hidden" value="{{$id}}"/>
                        <div class="row">
                            <div class="col-md-3" align="right">
                                <h4>SelectImage</h4>
                            </div>
                            <div class="col-md-6" >
                                <input type="file" name="file[]" id="file" accept="image/*" multiple/>
                            </div>
                            <div class="col-md-3" >
                            <a href="{{url('SingelBuilding/'.$id)}}" class="btn btn-info" >Back</a>

                            <input type="submit" name="upload" value="Upload" class="btn btn-success">
                            </div>

                        </div>
                    </form>

                    <br/>
                    <div class="progress">
                        <div class="progress-bar" style="width: 0%; "  aria-valuenow="" aria-valuemin="0" aria-valuemax="100">

                        </div>

                    </div>
                    <br/>
                    <div id="success" class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer')
    <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>



    <script>
        $(document).ready(function (){
            $('form').ajaxForm({
                beforeSend:function (){
                    $('#success').empty();
                    $('.progress-bar').text('0%');
                    $('.progress-bar').css('width','0');

                },

                uploadProgress:function(event, postion, total,percentComplete){
                    $('.progress-bar').text(percentComplete + '0');
                    $('.progress-bar').css('width',percentComplete + '0%');
                },

                success:function(data) {
                    if(data.success){
                        // $('#success').html('<div class="text-success text-center">'+data.success+'</div><br/>');
                        $('#success').append(data.image);
                        $('.progress-bar').text('Uploaded');
                        $('.progress-bar').css('width', '100%');
                        $('.progress-bar').css('height', '20px');
                        $('.progress-bar').css('padding-bottom', '5px');
                    }
                }
            });
        });
    </script>
@endsection
