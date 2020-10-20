@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-md-4">        
        <div class="col-sm-12 col-md-8">
            <div class="card my-5 shadow-sm border-0 text-white bg-secondary">
                <div class="card-header bg-primary"><i class="ion-md-person-add"></i> {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class=" text-md-right"><i class="ion-md-text"></i> {{ __('Name') }}</label>
                            
                            <input id="name" type="text" class="form-control-lg form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="email" class=" text-md-right"><i class="ion-md-mail"></i> {{ __('E-Mail Address') }}</label>
                            
                            <input id="email" type="email" class="form-control-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group">
                            <label for="password" class=" text-md-right"><i class="ion-md-lock"></i> {{ __('Password') }}</label>
                            
                            <input id="password" type="password" class="form-control-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class=" text-md-right"><i class="ion-md-lock"></i> {{ __('Confirm Password') }}</label>
                            
                            <input  id="password-confirm" type="password" class="form-control-lg form-control" name="password_confirmation" required autocomplete="new-password">                            
                        </div>

                        <div class="form-group">                        
                            <button type="submit" class="btn btn-block btn-primary text-white">
                                {{ __('Register') }}
                            </button>                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection
