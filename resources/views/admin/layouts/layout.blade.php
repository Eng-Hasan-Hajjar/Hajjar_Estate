<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>

    control panel
    |
    @yield('title')


  </title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    {{!! Html::style('admin/plugins/fontawesome-free/css/all.min.css')!!}}

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
    {{!! Html::style('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')!!}}
  
  <!-- iCheck -->
    {{!! Html::style('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')!!}}
  
  <!-- JQVMap -->
    {{!! Html::style('admin/plugins/jqvmap/jqvmap.min.css')!!}}
  
  <!-- Theme style -->
    {{!! Html::style('admin/dist/css/adminlte.min.css')!!}}

  <!-- overlayScrollbars -->
    {{!! Html::style('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}}
 
  <!-- Daterange picker -->
    {{!! Html::style('admin/plugins/daterangepicker/daterangepicker.css')!!}}

  <!-- summernote -->
    {{!! Html::style('admin/plugins/summernote/summernote-bs4.css')!!}}
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@yield('header')


</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{Request::root()}}/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{Request::root()}}/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{Request::root()}}/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/adminpannel')}}" class="brand-link">
      <img src="{{Request::root()}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Control pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Request::root()}}/admin/dist/img/user3-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     
       
       








@include('/admin/layouts/nav')








      













        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>





 <div class="content-wrapper">

@include('/admin/layouts/message')

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


@yield('content')

</div>













  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





<!-- jQuery -->
 {!! Html::script('admin/plugins/jquery/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->
 {!! Html::script('admin/plugins/jquery-ui/jquery-ui.min.js') !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
 {!! Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
<!-- ChartJS -->
 {!! Html::script('admin/plugins/chart.js/Chart.min.js') !!}
<!-- Sparkline -->
 {!! Html::script('admin/plugins/sparklines/sparkline.js') !!}
<!-- JQVMap -->
 {!! Html::script('admin/plugins/jqvmap/jquery.vmap.min.js') !!}
 {!! Html::script('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}
<!-- jQuery Knob Chart -->
 {!! Html::script('admin/plugins/jquery-knob/jquery.knob.min.js') !!}
<!-- daterangepicker -->
 {!! Html::script('admin/plugins/moment/moment.min.js') !!}
 {!! Html::script('admin/plugins/daterangepicker/daterangepicker.js') !!}

<!-- Tempusdominus Bootstrap 4 -->
 {!! Html::script('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}

<!-- Summernote -->
 {!! Html::script('admin/plugins/summernote/summernote-bs4.min.js') !!}

<!-- overlayScrollbars -->
 {!! Html::script('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}

<!-- AdminLTE App -->
 {!! Html::script('admin/dist/js/adminlte.js') !!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 {!! Html::script('admin/dist/js/pages/dashboard.js') !!}

<!-- AdminLTE for demo purposes -->
 {!! Html::script('admin/dist/js/demo.js') !!}

<script type="text/javascript">
 $(function(){
    setTimeout(function() {
        $("#mes").hide('blind', {}, 500)
    }, 5000);
});
</script>


@yield('footer')

</body>
</html>