<div class="col-md-4" >
            <div class="profile-sidebar dis2">
              <h2 style="margin:10px;color:#fff"> Advanced search </h2>
                  <div class="profile-usermenu" >
                    {!! Form::open(['url'=>'search','action'=>'post'])!!}
                   {{ csrf_field() }}
                    <ul class="nav-link nav nav-pills nav-sidebar flex-column">
                       <li class="itemsearch">
                        {!! Form::text('es_price_from',null, ['class'=>'form-control','placeholder'=>'Price from'])!!}
                       </li>
                       <li class="itemsearch">
                       {!! Form::text('es_price_to',null, ['class'=>'form-control','placeholder'=>'Price to'])!!}
                       </li>
                       <li class="itemsearch">
                        {!! Form::select('es_rooms',es_room_number(), null, ['class'=>'form-control','placeholder'=>'Number of rooms'],['height'=>'1200px'])!!}
                       </li>
                       <li class="itemsearch">
                      {!! Form::select('es_type',es_type(), null, ['class'=>'form-control','placeholder'=>'Type'],['high'=>'1200px'])!!}
                       </li>
                       <li class="itemsearch">
                      {!! Form::select('es_rent',es_rent(), null, ['class'=>'form-control','placeholder'=>'Rent'])!!}
                       </li>
                       <li class="itemsearch">
                         {!! Form::text('es_sequar', null, ['class'=>'form-control' ,'placeholder'=>'Sequar'])!!}
                       </li>
                       <li class="itemsearch" >
                       {!! Form::submit("search", ['class'=>'banner_btn',
           'style'=>'width:100%;font-size:25px;background-color:#ffed52;font-size: larger;
  font-weight: bold;' ])!!}
                       </li>
                    </ul>
                    {!! Form::close()!!}
                 </div>
              <hr>
              <hr>
              <br>
          </div>
        </div>