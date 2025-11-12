@extends('pages.auth.layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3 class="text-center mt-0 m-b-15">
                <a href="{{ route('login') }}" class="logo logo-admin">
                    {{-- <img src="{{ asset('assets/images/logo.png') }}" height="24" alt="logo"> --}}
                    LOGIN
                </a>
            </h3>

            <div class="p-3">
                {{-- Form login --}}
                <form class="form-horizontal m-t-20" action="{{ route('login.post') }}" method="POST">
                    @csrf

                    {{-- Email --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="email" name="email" required placeholder="Email"
                                value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="password" name="password" required placeholder="Password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Remember Me --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                        </div>
                    </div>

                    {{-- Tombol Login --}}
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">
                                Log In
                            </button>
                        </div>
                    </div>

                    {{-- Link Register --}}
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-sm-12 text-center m-t-20">
                            <a href="{{ route('register') }}" class="text-muted">
                                <i class="mdi mdi-account-circle"></i>
                                <small>Create an account ?</small>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
