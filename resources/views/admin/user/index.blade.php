@extends('admin.layouts.layout')




@section('title')
   control of members
@endsection

@section('header')

<!-- DataTables -->
{{Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}
 {{Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}


@endsection




@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="jumbotron text-center">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1> control of members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}"> Home </a></li>

           
              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/users')}}"> Control of user </a></li>
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
          <div class="card" >
            <div class="card-header">
              <h3 class="card-title">All Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" >
              <table id="data" class="table table-bordered table-hover">
                <thead>

                  <tr>
                  <th>#</th>
                  <th>user name</th>
                  <th>email</th>
                  <th>created_at</th>
                  <th>roll</th>
                  <th>updated_at</th>

                  <th>control</th>
                  <th>delete</th>

                  </tr>
                 </thead>   



                 <tbody>
                 
     
        @foreach($data as $row)
        
  <tr>
   <td>{{ $row-> id }}</td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->email}}</td>
   <td>{{ $row->created_at}}</td>
   <td> @if($row->admin!=1) "non admin"
        @else "admin"
        @endif 
   </td>
   <td>{{ $row->updated_at }}</td>

   </td>
            @if(\Illuminate\Support\Facades\Auth::user()->id == $row-> id || \Illuminate\Support\Facades\Auth::user()->id == 1 )
              <td>
                  <a href="{{route('users.show',$row->id)}}" class="btn btn-primary">Show</a>
                  <a href="{{route('users.edit',$row->id)}}" class="btn btn-warning">Edit</a>
              </td>

              <td>
                  @if(\Illuminate\Support\Facades\Auth::user()->id != $row-> id  && \Illuminate\Support\Facades\Auth::user()->id == 1)
                   <form method="get" class="delete_form" action="
                                           {{action('UsersController@destroy',$row->id)}}">
                        {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                   @endif
              </td>
            @endif
  

  </tr>
 @endforeach


                 </tbody>
        
              </table>
              {!! $data->links() !!}
            </div>
            <!-- /.card-body -->
          </div>
        




        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->






@endsection




@section('footer')

<!-- DataTables -->
{{Html::script('admin/plugins/datatables/jquery.dataTables.min.js')}}
{{Html::script('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}
{{Html::script('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}
{{Html::script('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}


@endsection