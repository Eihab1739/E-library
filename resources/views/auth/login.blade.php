@extends('layouts.app')

@section('content')
<div class="container" style="min-height:82vh;background: url({{asset('images/shapes/bg-testimonials.svg')}}) center /cover" >
<div class="row justify-content-center py-5 mt-5">
    <div class="col-sm-12 col-md-8">
        <div class="card my-5 border-0 bg-secondary text-white shadow-sm">
            <div class="card-header bg-primary"><i class="ion-md-log-in"></i> {{ __('web.login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right"><i class="ion-md-mail"></i> {{ __('web.email') }}</label>

                            <input id="email" type="email" class="form-control-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right"><i class="ion-md-lock"></i> {{ __('web.password') }}</label>

                            <input placeholder="" id="password" type="password" class="form-control-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('web.remember_me') }}
                                </label>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary text-white mb-2">
                                {{ __('web.login') }}
                            </button>
                            {{--  @if (Route::has('password.request'))
                                <a class="text-white pt-2 d-inline-block" href="{{ route('password.request') }}">
                                    {{ __('web.fyp') }}
                                </a>
                            @endif  --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
