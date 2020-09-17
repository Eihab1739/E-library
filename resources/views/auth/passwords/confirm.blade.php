@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
            <div class="card w-50 my-5 shadow-sm">
                <div class="card-header bt">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}                    

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group mt-2">
                            {{-- <label for="password">{{ __('Password') }}</label> --}}
                            
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group">
                            
                            <button type="submit" class="btn bt-block btn-primary">
                                {{ __('Confirm Password') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        
                        </div>
                    </form>
                </div>
            </div>        
    </div>
</div>
@endsection
