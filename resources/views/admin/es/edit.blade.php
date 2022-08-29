@extends('admin.layouts.layout')

@section('title')
       Add estate
@endsection
@section('header')


{!! Html::style('cus/css/select2.css') !!}


@endsection



@section('content')
     
       <form method="post" action="{{ route('es.update', $id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

       @include('admin.es.formAddEstate')

   	     </form>



@endsection




@section('footer')


 {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">
    
    $('.select2').select2();

  </script>

@endsection