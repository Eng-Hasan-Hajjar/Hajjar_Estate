  
                        @csrf

                        <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> 
                           
                            <div class="col-md-6">
                             {!!Form::text("name" , null ,['class'=>'form-control'])!!}
                               

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    @if(!isset($showforuser))
                            <div class="form-group row">
                                {{--<label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>--}}

                                <div class="col-md-12">
                                    {!! Form::select("admin",['0'=>'user','1'=>'admin'],null,['class'=>'form-control','placeholder'=>'Role']) !!}
                                    @error('admin')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    @endif







                    <div class="form-group row">
{{--        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>--}}

        <div class="col-md-12">
            {!! Form::text("email",null,['class'=>'form-control','placeholder'=>'E-Mail']) !!}
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    @if(!isset($user))

    <div class="form-group row">
        {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        <div class="col-md-12">
            <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

        <div class="col-md-12">
            <input id="password-confirm" placeholder="ENter Password Again" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    @endif
    <div class="form-group row mb-0" style="margin-right: 10px">

        <div class="col-md-3 offset-md-4">
            <button type="submit" style="width:100px" class="btn btn-primary">
                {{ __('Enter') }}
            </button>
        </div>
    </div>
    <div class="clearfix"></div>


















                        
    @if(!isset($showforuser))
    <div class="form-group row">
        {{--<label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>--}}

        <div class="col-md-12">
            {!! Form::select("admin",['0'=>'user','1'=>'admin'],null,['class'=>'form-control','placeholder'=>'Role']) !!}
            @error('admin')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @endif











<!--

                        <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('admin') }}</label> 
                           
                            <div class="col-md-6">
                             {!!Form::select("admin" , ['0'=>'user','1'=>admin] , null ,['class'=>'form-control'])!!}
                               

                            
                            </div>
                        </div>

-->


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                @if(!isset($user))
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
               @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
               