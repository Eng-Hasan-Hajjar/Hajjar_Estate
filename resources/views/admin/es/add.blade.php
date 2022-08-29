@extends('admin.layouts.layout')




@section('title')
       Add estate
@endsection

  @section('header')


  {!! Html::style('cus/css/select2.css') !!}


  @endsection



@section('content')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add estate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}"> Home </a></li>

              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/es')}}"> Control of estates </a></li>
              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/es/create')}}"> Add new estate </a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



       <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="margin: 10px">
              <h3 class="card-title">
                
                add new estate
              </h3>
            </div>



     
        {!! Form::open(['url' => '/adminpannel/es', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!}  

          @include('admin.es.formAdd')

        {!! Form::close()  !!}
      


            </div>
            </div>
            </div>
    </section>


@endsection




@section('footer')

  {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">
    
    $('.select2').select2();

  </script>
@endsection