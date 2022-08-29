@extends('admin.layouts.layout')
@section('title')
   Info of estate
@endsection  
@section('content')

<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
<a href="{{ route('es.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Name - {{ $data->es_name }} </h3>
 <h3>Price - {{ $data->es_price }}</h3>
 <h3>Sequare - {{ $data->es_sequar }}</h3>
 <h3>Place - {{es_place()[$data->es_place]}} </h3>
 <h3>Number rooms - {{ $data->es_rooms }}</h3>
 <h3>Type - {{es_type()[$data->es_type]}}</h3>
 <img src="{{ URL::to('/') }}/images/{{ $data->es_image }}" class="img-thumbnail" />


</div>
@endsection
