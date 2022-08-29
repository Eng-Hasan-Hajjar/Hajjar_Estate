@extends('admin.layouts.layout')




@section('title')
       Edit user
       {{$user->name}}
@endsection

@section('header')





@endsection



@section('content')

{{Form::model($user, ['route' => ['adminpannel.users.edit', $user->id,$estateactive], 'method' => 'PATCH']) );}}
       @include('admin.user.form');
{{ Form::close() }}    


<!--


<div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Active EStates</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Deactive EStates</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>EState Name</td>
                                        <td>EState Price</td>
                                        <td>EState Location</td>
                                        <td>EState Space</td>
                                        <td>EState Investment</td>
                                        <td>Created At</td>
                                        <td>EState Status</td>
                                    </tr>
                                    @foreach($estateactive as $active)
                                        <tr>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{estatetype()[$active->estatetypeid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{$active->price}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{neighbourhoodarray()[$active->neighbourhoodid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{$active->space}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{investmenttype()[$active->investmenttypeid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$active->id.'/edit')}}">{{$active->created_at}}</a></td>
                                            <td>
                                                <a href="{{url('/adminpannel/change_status/'.$active->id.'/0')}}">EState Deactive</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div  style="margin:50px 40%;">
                                            {{$estateactive->appends(Request::except('page'))->render()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>EState Name</td>
                                        <td>EState Price</td>
                                        <td>EState Location</td>
                                        <td>EState Space</td>
                                        <td>EState Investment</td>
                                        <td>Created At</td>
                                        <td>EState Status</td>
                                    </tr>
                                    @foreach($estatedeactive as $deactive)
                                        <tr>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{estatetype()[$deactive->estatetypeid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{$deactive->price}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{neighbourhoodarray()[$deactive->neighbourhoodid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{$deactive->space}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{investmenttype()[$deactive->investmenttypeid]}}</a></td>
                                            <td><a href="{{url('/adminpannel/es/'.$deactive->id.'/edit')}}">{{$deactive->created_at}}</a></td>
                                            <td>
                                                <a href="{{url('/adminpannel/change_status/'.$deactive->id.'/1')}}">EState Active</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div  style="margin:50px 40%;">
                                            {{$estatedeactive->appends(Request::except('page'))->render()}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.tab-pane -->


                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
--->

@endsection




@section('footer')




@endsection