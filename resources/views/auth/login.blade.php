@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="card w-50 my-5 shadow-sm">
            <div class="card-header bt"><i class="ion-md-log-in"></i> {{ __('Login') }}</div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class=" col-form-label text-md-right"><i class="ion-md-mail"></i> {{ __('E-Mail Address') }}</label>                            
                            
                        <input placeholder="user@example.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

                    <div class="form-group">
                        <label for="password" class=" col-form-label text-md-right"><i class="ion-md-lock"></i> {{ __('Password') }}</label>
                        
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                            
                    </div>

                    <div class="form-group">                            
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>                            
                    </div>

                    <div class="form-group">                            
                        <button type="submit" class="btn btn-block btn-primary mb-2">
                            {{ __('Login') }}
                        </button>                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>                
            </div>                        
        </div>        
    </div>
</div>
@endsection
