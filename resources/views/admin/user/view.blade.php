@extends('admin.layouts.layout')
@section('title')
   Info of User
@endsection  
@section('content')

<div class="jumbotron text-center">
 <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
<a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>Name - {{ $data->name }} </h3>
 <h3>Email - {{ $data->email}}</h3>
 <h3>Ceated_At - {{ $data->created_at }}</h3>
 <h3>Admin?  - {{ $data->admin }}</h3>


</div>
@endsection
