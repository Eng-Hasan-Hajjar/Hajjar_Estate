@extends('layouts.app')
@section('title')
All Estates
@endsection
@section('header')
 {!! Html::style('cus/esall.css') !!}
 
 <style type="text/css">
    hr{
        margin-top: 10px;
        margin-bottom: 10px;
    } 
    .container-fluid{
      margin-top:20px; background-color:#1a5996 ;padding:20px;
    }
      .dis{
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 10px;
    } 
    .formcontrol{
        height:1200px;
    }
       .dis2{
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: : 33px;
        padding-right: : 10px;
        margin-bottom: 10px;
        background-color: #1a5996;
    } 
      .itemsearch{
        font-weight:800px;
        margin-bottom: 8px;
        background-color: #1a5996;
        width: 100%;
        height: 60px;
     
    } 
      .breadcrumb{
      background-color: #000; border: 5px solid #eeff00;
      
    }
  .breadcrumb-item2{
      color: #fff;
  }
 </style>

@endsection
@section('content')

    @include('website.es.pages')

 <div class="container-fluid col-md-12"  >
    <div class="container dis col-md-12" >  
      <div class="row profile"  >
                @include('website.es.advanceSearch')
        <div class="col-md-8">
           <ol class="breadcrumb">
                <li class="breadcrumb-item"><a style="color:#eeff00" href="{{url('/')}}">Home</a> </li>
                @if(isset($array))
                 @if(!empty($array))
                    @foreach ($array as $key => $value)
                        <li class="breadcrumb-item" ><a style="color:#fff" href="{{url('/search?'.$key.'='.$value)}}">
                            {{search_name_field()[$key]}} ->
                            @if($key=='es_type') {{es_type()[$value]}}
                            @elseif($key=='es_rent') {{es_rent()[$value]}}
                            @elseif($key=='es_place') {{es_place()[$value]}}
                            @else {{$value}}
                            @endif
                         </a></li>
                    @endforeach 
                  @endif
               @endif
            </ol>
            <div class="profile-content container-fluid" >
                @include('website.es.sharefile')
            </div>
        </div>
    </div>
</div>
                <div >
                    {{$esAll->appends(Request::except('page'))}}
                </div>
<center>
<strong>Powered by <a href="/" target="_blank">Hasan IT</a></strong>
</center>
<br>
<br>
 </div>
@endsection