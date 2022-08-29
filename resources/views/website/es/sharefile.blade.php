@if(count((array)$esAll) > 0)
    <div class="row" style="background:#000; border: 5px solid #eeff00;padding-top:20px;">
@foreach( $esAll  as $key => $e)
 	@if($key % 3 == 0 && $key != 0)
 		<div class="clearfix"></div>
 	@endif     
                <div class="col-md-6"style="font-weight: 900;"> 
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing"style="background:#d0d957">
                        <div class="media col-sm-12"style="background:#d0d957"style="font-weight: bolder;">
                        	   <div class="col-sm-4"style="font-weight: bolder;">
                            <a class="pull-left"style="font-weight: bolder;">
                          <img src="{{ URL::to('/') }}/images/{{ $e->es_image }}" class="img-thumbnail" style="margin:10px;" />
                                </div>
                            <div class="media-body col-sm-8">
                                <a href="#" target="_parent"></a>
                                <h2 class="media-heading" style="font-weight: bolder;color:#423b04">the price: $ {{$e->es_price}}</h2>
                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353"style="font-weight: bolder;">
                                    <li>the sequare:  {{$e->es_sequar}} SqFt </li>
                                </ul>
                                <p  style="font-weight: bolder;color:#423b04" >Discription : {{$e->es_small_dis}}</p>
                                <p style="margin-bottom:10px"> <span >Name:  {{$e->es_name}}  </span></p>
                                <hr>
                                <p  style="font-weight: bolder;color:#423b04">The operation :@if($e->es_rent== 0) "for buy"
                                                    @elseif ($e->es_rent== 1) "for rent"
                                                    @elseif ($e->es_rent== 2)  "for mort"
                                                    @endif </p>
                                 <hr>
                                <p  style="font-weight: bolder;color:#423b04">The Type :@if($e->es_type== 0) "flat"
                                                  @elseif ($e->es_type== 1) "villa"
                                                  @elseif ($e->es_type== 2)  "normal"
                                                @endif</p>

<hr>
                              <a href="{{url('/SingelBuilding/'.$e->id)}}" class="btn btn-block bg-gradient-info btn-xs  colorHasan"
                               role="button" 
                              style="background-color:#000; color:white;margin-bottom:10px">Show Detail 
                              <span class="fa fa-arrow-circle-o-left" style="..."></span> </a>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div>
    @endforeach
      </div><!-- End row -->
    <div class="clearfix">
    </div>
@else
    <div class="alert alert-danger">
      "not found yet"  
    </div>
@endif