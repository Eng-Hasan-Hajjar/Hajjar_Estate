@extends('admin.layouts.layout')

@section('title')
   Statistics Of The EState Addition Year {{$year}}
@endsection

@section('header')


@endsection


@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Statistics Of The EState Addition</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/uestateyear/statics')}}">  Statistics Of The EState Addition Year {{$year}}</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                {!!  Form::open(['url'=>'/adminpanel/estateyear/statics','method'=>'POST']) !!}
                <select class="select2" style="width: 100px; margin-bottom: 75px;margin-left: 50px" name="year">
                    @for($i=2015;$i<2100;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <input type="submit" name="submit" value="Show Statistics" class="btn btn-warning" style="margin-left: 50px"/>
                {!! Form::close() !!}
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">EStates FlowChart</h5>

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

    </section>






@endsection



@section('footer')
    <script>
        $('.select2').select2();
    </script>

    <script>
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


    </script>


@endsection
