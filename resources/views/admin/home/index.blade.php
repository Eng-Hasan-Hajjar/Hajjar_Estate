 @extends('admin.layouts.layout')

 



 @section('content')



 {{--<div style="min-height: 185px;">--}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Main Controll Panel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{url('/adminpanel')}}">Main Controll Panel</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      {{--<div class="container-fluid">--}}
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Messages</span>
                <span class="info-box-number">
                  {{$contactCount}}
                  <small>SMS</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-building"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Active EState</span>
                <span class="info-box-number">{{$estateCountActive}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-anchor"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Deactive EState</span>
                <span class="info-box-number">{{$estateCountDeactive}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Members number</span>
                <span class="info-box-number">{{$usersCount}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">EStates FlowChart</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>EStates FlowChart In A Year</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->

                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">


            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">EStates Map</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="map" style="height: 325px; overflow: hidden">
                      <div class="map"></div>
                    </div>
                  </div>
                    <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                        <div class="description-block mb-4">

                            <br>
                            <div class="sparkbar pad" data-color="#fff">Active EStates</div>
                            <h5 class="description-header">{{$estateCountActive}}</h5>
                        </div>
                        <br>
                        <!-- /.description-block -->
                        <div class="description-block mb-4">
                            <div class="sparkbar pad" data-color="#fff">Deactive EStates</div>
                            <h5 class="description-header">{{$estateCountDeactive}}</h5>
                        </div>
                        <br>
                        <!-- /.description-block -->
                        <div class="description-block">
                            <div class="sparkbar pad" data-color="#fff">All EStates</div>
                            <h5 class="description-header">{{$estateCountDeactive+$estateCountActive}}</h5>
                        </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">

             <div class="col-md-6">
               <!-- TABLE: LATEST ORDERS -->
               <div class="card">
                 <div class="card-header border-transparent">
                   <h3 class="card-title">Latest Messages</h3>

                   <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                       <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove">
                       <i class="fas fa-times"></i>
                     </button>
                   </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                   <div class="table-responsive">
                     <table class="table m-0">
                       <thead>
                       <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>ContactType</th>
                         <th>E-Mail</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($latestContacts as $contact)
                       <tr>
                         <td><a href="{{url('/adminpanel/contact/'.$contact->id.'/edit')}}">{{$contact->id}}</a></td>
                         <td>{{$contact->contact_name}}</td>
                         <td>
                             <span class="badge badge-success">{{contact()[$contact->contact_type]}}</span>
                         </td>
                         <td>
                           <div class="sparkbar" data-color="#00a65a" data-height="20">
                               <a href="{{url('/adminpanel/contact/'.$contact->id.'/edit')}}">
                               {{$contact->contact_email}}
                               </a></div>

                         </td>
                       </tr>
                       @endforeach
                       </tbody>
                     </table>
                   </div>
                   <!-- /.table-responsive -->
                 </div>
                 <!-- /.card-body -->
                 <div class="card-footer clearfix">
                   <a href="{{url('/adminpanel/contact')}}" class="btn btn-sm btn-info float-right">All Messages</a>
                   {{--<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-left">View All Orders</a>--}}
                 </div>
                 <!-- /.card-footer -->
               </div>
               <!-- /.card -->
             </div>
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach($latestUsers as $user)
                      <li>
                        <img src="{{url('Admin/dist/img/user1-128x128.jpg')}}" alt="{{$user->name}}" title="{{$user->name}}">
                        <a class="users-list-name" href="{{url('/adminpanel/users/'.$user->id.'/edit')}}">{{$user->name}}</a>
                        <span class="users-list-date">{{$user->created_at}}</span>
                      </li>
                      @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{url('/adminpanel/users')}}">View All Members</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

          </div>
          <!-- /.col -->
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Recently Added EStates</h3>

                      <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                          </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">
                      @foreach($latestEStates as $estate)
                          <li class="item">
                              <div class="product-img">
                                  <img src="{{checkIfImageexist($estate->image)}}" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                  <a href=""><span class ="product-title">{{estatetype()[$estate->estatetypeid]}}:</span>
                                      <span class="product-title">{{$estate->price}}$:</span>
                                      <span class="product-title">{{$estate->space}}square</span>
                                      <span class="badge badge-warning float-right">{{$estate->created_at}}</span>
                                      <span class="product-description">
                                        {{$estate->estate_small_dis}}
                                      </span></a>
                              </div>
                          </li>
                          @endforeach
                          <!-- /.item -->
                      </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                      <a href="{{url('/adminpanel/estates')}}" class="uppercase">View All EStates</a>
                  </div>
                  <!-- /.card-footer -->
              </div>

          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      {{--</div><!--/. container-fluid -->--}}
    </section>
    <!-- /.content -->
@endsection

@section('footer')

<script type="text/javascript">
    //-----------------------
    //- MONTHLY SALES CHART -
    //-----------------------

    // Get context with jQuery - using jQuery's .get() method.
    var salesChartCanvas = $('#salesChart').get(0).getContext('2d')


    var salesChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label               : 'Digital Goods',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [
                    @foreach($new as $c)
                    @if(is_array($c))
                    {{$c['counting']}},
                    @else
                    {{$c}},
                    @endif
                    @endforeach
                ]
            }
        ]
    }

    var salesChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines : {
                    display : false,
                }
            }],
            yAxes: [{
                gridLines : {
                    display : false,
                }
            }]
        }
    }

    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas, {
            type: 'line',
            data: salesChartData,
            options: salesChartOptions
        }
    )

    //---------------------------
    //- END MONTHLY SALES CHART -
    //---------------------------

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
        labels: [
            'Chrome',
            'IE',
            'FireFox',
            'Safari',
            'Opera',
            'Navigator',
        ],
        datasets: [
            {
                data: [700,500,400,600,300,100],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }
        ]
    }
    var pieOptions     = {
        legend: {
            display: false
        }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'doughnut',
        data: pieData,
        options: pieOptions
    })
    /* jVector Maps
     * ------------
     * Create a world map with markers
     */
    $('#world-map-markers').mapael({
            map: {
                name : "usa_states",
                zoom: {
                    enabled: true,
                    maxLevel: 10
                },
            },
        }
    );

    $('#world-map-markers').vectorMap({
        map              : 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity     : 0.7,
        hoverColor       : false,
        backgroundColor  : 'transparent',
        regionStyle      : {
            initial      : {
                fill            : 'rgba(210, 214, 222, 1)',
                'fill-opacity'  : 1,
                stroke          : 'none',
                'stroke-width'  : 0,
                'stroke-opacity': 1
            },
            hover : {
                'fill-opacity': 0.7,
                cursor: 'pointer'
            },
            selected: {
                fill: 'yellow'
            },
            selectedHover: {}
        },
        markerStyle: {
            initial: {
                fill  : '#00a65a',
                stroke: '#dddddd'
            }
        },
        markers: [
            @foreach($mapping as $map)
            {
                latLng: [{{$map->latitude}},{{$map->longitude}}],
                name  : '{{estatetype()[$map->estatetypeid]}}'
            },
            @endforeach
        ]
    });
</script>

<script>
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 36.20124, lng: 37.16117};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu55dhvD8NYS6SW3icAqvmnkyBozeq7k&callback=initMap">
</script>


@endsection
