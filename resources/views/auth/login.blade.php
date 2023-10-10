@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Login</h2>
                <form>
                    <div class="user-box">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                            autofocus>
                        <label>Email</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="user-box">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required autocomplete="current-password">

                        <label>Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- <a href="login">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </a> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection