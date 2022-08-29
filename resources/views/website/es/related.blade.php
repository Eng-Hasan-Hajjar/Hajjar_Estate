@if(count((array)$esinfo) > 0)
    <div class="row">
@foreach( $esinfo  as $key => $e)
<div class="col-md-6"style="font-weight: 900;"> 
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing"style="background:#ffed52">
                        <div class="media col-sm-12"style="background:#ffed52"style="font-weight: bolder;">
                        	   <div class="col-sm-4"style="font-weight: bolder;">
                            <a class="pull-left"style="font-weight: bolder;">
                          <img src="{{ URL::to('/') }}/images/{{ $e->es_image }}" class="img-thumbnail" style="margin:10px;" />
                                </div>
                            <div class="media-body col-sm-8">
                                <a href="#" target="_parent"></a>
                                <h2 class="media-heading" style="font-weight: bolder;color:#423b04"> the price: $ {{$e->es_price}}</h2>
                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353"style="font-weight: bolder;">
                                    <li>the sequare: {{$e->es_sequar}} SqFt </li>
                                </ul>
                                <p >Discription : {{$e->es_small_dis}}</p>
                                <p style="margin-bottom:10px"> <span >Name:  {{$e->es_name}}  </span></p>
                               
                              <a href="{{url('/SingelBuilding/'.$e->id)}}" class="btn btn-block bg-gradient-info btn-xs  colorHasan"
                               role="button" 
                              style="background-color:#423b04; color:white;margin-bottom:10px">Show Detail 
                              <span class="fa fa-arrow-circle-o-left" style="..."></span> </a>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div>
    @endforeach
      </div><!-- End row -->
    <div class="clearfix"></div>
@else
    <div class="alert alert-danger">
      "not found yet"  
    </div>
@endif