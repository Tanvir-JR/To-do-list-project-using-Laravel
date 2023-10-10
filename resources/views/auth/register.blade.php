@extends('layouts.app')

@section('content')
@vite('resources/sass/register.scss')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col col-md-4 col-sm-2"> -->
        <div class="row mb-3">
            <div class="register-box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Registration</h2>
                    <form class="card">
                        <div class="user-box">
                            <div class="user-box">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Name" required
                                    autocomplete="name" autofocus>
                                <label>Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="user-box">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                    autocomplete="email">
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
                                    placeholder="Password" required autocomplete="new-password">

                                <label>Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="user-box">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="password_confirm" required
                                    autocomplete="new-password">
                                <label>Confirm Password</label>

                            </div>
                        </div>

                        <!-- <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div> -->
                        <div class="submit">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>

                        @if (Route::has('login'))
                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __('Already Registered?') }}
                        </a>
                        @endif
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection