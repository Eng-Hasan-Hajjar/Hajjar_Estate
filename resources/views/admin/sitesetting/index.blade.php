@extends('admin.layouts.layout')

@section('title')
Site Settings Update
@endsection

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Site Settings Update</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/adminpannel/sitesitting')}}">Site Settings Update</a></li>
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
        <div class="card-header">
          <h3 class="card-title">Site Settings Update</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

    <form action="{{ url('adminpannel/sitesitting')}}" method="post" enctype="multipart/form-data">
       @csrf
             @foreach($sitesetting as $hasan)

                   <div class="form-group row">
                         <div class="container">
                              <div class="row" style="border-bottom:1px solid lightgray;padding:2px;">
                                   <div class="col-md-4">
                                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ $hasan->slug }}</label>
                                   </div>
                                 <div class="col-md-8">
                                   @if($hasan['type'] == 0)
                                    {!! Form::text( $hasan->nameseting, $hasan->value,['class'=>'form-control']) !!}
                                   @elseif($hasan['type'] == 3)
                                       @if($hasan->value != '')
                                             <div  style="width: 500px;height: 300px">
                                                 <img src="{{url('/website/slider/Capture.PNG')}}"  style="width: 100%;height: 100%" alt="Image" class="img-fluid">
                                             </div>

                                            {{$hasan->value}}
                                         @endif

                                           {!! Form::file( $hasan->nameseting,['class'=>'form-control']) !!}



                                     @else
                                         {!! Form::textarea( $hasan->nameseting, $hasan->value,['class'=>'form-control','style'=>'height:100px']) !!}
                                   @endif
                                   @error($hasan->nameseting)
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $hasan->nameseting }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                              </div>
                         </div>
                   </div>

             @endforeach
             <div class="container">
               <div class="row">
                         <div class="col-md-10"></div>
                         <div class="col-md-2">
                             <button type="submit" name="submit" value="submit" style="float:left; font-size:17px;font-weight: bold;" class="btn btn-primary">
                               <i class="fas fa-save"></i>
                               Save SiteSetting
                             </button>
                         </div>
                </div>
             </div>
   </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
