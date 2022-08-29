
<div class="container-fluid container dis col-md-12">

        <div class="row profile col-md-12" style="display:inline;margin: 1px;padding:50px ;">

                    @if(\Illuminate\Support\Facades\Auth::user())
                        <div class="profile-sidebar" style="padding:12px; margin-top: 1px;border-radius: 20px;background-color:#000; border: 5px solid #eeff00;">
                            <div class="side-header" style="">
                            <h4 style="font-weight:900;color:#ffffff">
                                    User Choices
                                </h4>
                            </div>
                            <div class="profile-usermenu">
                                <ul class="nav"style="margin-left:10px;font-size:20px;font-weight:900; font-color:red;color:red">
                                    <li  style="color: red;" class="icon-edit {{setActive(['user','editsetting'])}}">
                                        <a style="margin:10px; font-size: 18px" href="{{url('/user/editsetting')}}"> PersonalInfo Update  ||   </a>
                                    </li>
                                    <li class="icon-check {{setActive(['user','showuseractiveestate'])}}">
                                        <a style=" margin-left:10px;font-size: 18px" href="{{url('/user/showuseractiveestate')}}"> Active EStates   ||  </a>
                                        <label style="float: right;background-color: #dddddd;width:50px; height: 30px; text-align: center;padding-top: 6px;margin-left:10px; ">{{estateforusercount(Auth::user()->id,0)}}</label>

                                    </li>
                                    <li class="icon-clock-o {{setActive(['user','showuserdeactiveestate'])}}">
                                        <a style=" margin-left:10px; font-size: 18px" href="{{url('/user/showuserdeactiveestate')}}"> Deactive EStates  ||  </a>
                                        <label style="float: right;background-color: #dddddd;width:50px; height: 30px;  text-align: center; padding-top: 6px;margin-left:10px;">{{estateforusercount(Auth::user()->id,1)}}</label>
                                    </li>
                                    <li class="icon-plus {{setActive(['user','create','estate'])}}">
                                        <a style=" margin-left:10px; font-size: 18px" href="{{url('adminpannel/es/create')}}">   ||  Add EState </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    @endif

        </div>

        <div class="row profile col-md-12"style="display:inline;border-radius: 10px;">
                    <div class="" style="background-color:black;border-radius: 20px; border: 5px solid #eeff00;">
                            <h4 style="margin:0px;font-weight:900;padding:10px;color:#ffffff">
                            Estates Choices
                            </h4>
                            <div class="nav" style="margin:10px;font-size:20px;font-weight:900;padding:10px; font-color:red;color:red">
                                        <a href="{{url('/forRent')}}">
                                        <i class="glyphicon glyphicon-user"></i>
                                        For Rent  </a>
                                        <p  style="font-size:20px">   |     | </p>

                                        <a href="{{url('/forBuy')}}" >
                                    <i class="glyphicon glyphicon-user"></i>
                                        For Buy </a>
                                        <p  style="font-size:20px">   |     | </p>
                                        <a href="{{url('/forMortgage')}}" >
                                    <i class="glyphicon glyphicon-user"></i>
                                        For mortgage </a>
                                        <p  style="font-size:20px">   | </p>
                            </div>
                            <!-- END MENU -->
                    </div>
        </div>

</div>










