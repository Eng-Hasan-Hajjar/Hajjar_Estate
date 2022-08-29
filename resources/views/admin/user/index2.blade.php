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
  <div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>control of members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}"> Home </a></li>

              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/users')}}"> Control of members </a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-24">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-hover">
                <thead>

                  <tr>
                  <th>#</th>
                  <th>user name</th>
                  <th>email</th>
                  <th>created_at</th>
                  <th>roll</th>
                  <th>control</th>
                   </tr>
                 </thead>   



                 <tbody id="data">
                 	
                 </tbody>
        
                <tfoot>
              	<tr>
                  <th>#</th>
                  <th>user name</th>
                  <th>email</th>
                  <th>created_at</th>
                  <th>roll</th>
                  <th>control</th>
                </tr>
                </tfoot>
              </table>
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

<!-- page script -->
<script type="text/javascript">
  
 
 
        var lastIdx = null;

        $('#data thead th').each( function () {
            if($(this).index()  < 4 ){
                var classname = $(this).index() == 6  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" search '+title+'" />' );
            }else if($(this).index() == 4){
                $(this).html( '<select><option value="0"> User </option><option value="1"> Adminstrator </option></select>' );
            }

        } );

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/users/data') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'admin', name: 'admin'},
              //  {data: 'exame', name: 'exame'},
                {data: 'control', name: ''}
            ],
            "language": {
                "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 20,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "Excel file",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "info copy",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "printing",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-2" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-2" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );




</script>
@endsection