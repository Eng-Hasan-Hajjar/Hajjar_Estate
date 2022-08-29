@extends('admin.layouts.layout')




@section('title')
       Add user
@endsection

@section('header')





@endsection



@section('content')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}"> Home </a></li>

              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/users')}}"> Control of members </a></li>
              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/users/create')}}"> Add new user </a></li>

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
                

              </h3>
            </div>



      <form method="POST" action="{{ url('/adminpannel/users')}}">
          @include('admin.user.formAddUser')
      </form>


            </div>
            </div>
            </div>
    </section>


@endsection




@section('footer')




@endsection