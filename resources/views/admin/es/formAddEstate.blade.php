
      
     <div class="form-group">
  {!! Form::label('es_name', 'Estate name :',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_name', $data->es_name, ['class'=>' col-md-6'])!!}
        </div>
                
     <div class="form-group">
  {!! Form::label('es_price', 'Price :',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_price', $data->es_price, ['class'=>' col-md-6'])!!}
        </div>

 <div class="form-group">
          {!! Form::label('es_rent', 'Rent:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::select('es_rent',es_rent(), null, ['class'=>'col-md-6'])!!}
        </div>
        
        <div class="form-group">
          {!! Form::label('es_image', 'Image for Estate:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::file('es_image',null , ['class'=>'col-md-6'])!!}
        </div>
           <div class="form-group">
          {!! Form::label('es_sequar', 'Sequar:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_sequar', $data->es_sequar, ['class'=>'col-md-6'])!!}
        </div>
           <div class="form-group">
          {!! Form::label('es_type', 'Type:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::select('es_type',es_type(), null, ['class'=>'col-md-6'])!!}
       
       </div>
           <div class="form-group">
          {!! Form::label('es_rooms', 'Number of rooms:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::select('es_rooms', es_room_number(),null, ['class'=>'col-md-6'])!!}
       
       </div>
           <div class="form-group">
          {!! Form::label('es_place', 'Place:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::select('es_place',es_place(), null, ['class'=>'select2  col-md-6 '])!!}
       
       </div>
          <div class="form-group">
        {!! Form::label('es_status', 'Status:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
        {!! Form::select('es_status',status(), null, ['class'=>'col-md-6'])!!}
      </div>
   
           <div class="form-group">
          {!! Form::label('es_meta', 'Meta:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_meta', $data->es_meta, ['class'=>'col-md-6'])!!}
        </div>
          <div class="form-group">
          {!! Form::label('es_langtuide', 'Langtuide:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_langtuide', $data->es_langtuide, ['class'=>'col-md-6'])!!}
        </div>
          <div class="form-group">
          {!! Form::label('es_latitude', 'Latitude:',['class'=>' col-md-4 col-form-label text-md-right '] ) !!}
          {!! Form::text('es_latitude', $data->es_latitude, ['class'=>'col-md-6'])!!}
        </div>
             <!-- Text Area -->
        <div class="form-group">
            {!! Form::label('es_small_dis', 'Small description :', ['class' => 'col-lg-4 control-label']) !!}
            <div class="col-lg-12">
                {!! Form::textarea('es_small_dis', $data->es_small_dis, ['class' => 'col-md-12', 'rows' => 3]) !!}
                <span class="help-block">
                A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>
          <div class="form-group">
          {!! Form::label('es_larg_dis', 'Discription:',['class'=>' col-md-4 control-label '] ) !!}
           <div class="col-lg-12">
          {!! Form::textarea('es_larg_dis', $data->es_larg_dis, ['class'=>'col-md-12'])!!}
        </div>
        </div>
      



                     <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Add Estate', ['class' => 'btn btn-primary  pull-right'] ) !!}
            </div>
        </div>

 
