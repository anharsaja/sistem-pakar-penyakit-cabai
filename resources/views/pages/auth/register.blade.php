@extends('pages.auth.layouts.app')

@section('title', 'Register')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3 class="text-center mt-0 m-b-15">
                <a href="{{ route('register') }}" class="logo logo-admin">
                    REGISTER
                </a>
            </h3>

            <div class="p-3">
                <form class="form-horizontal" method="POST" action="{{ route('register.post') }}">
                    @csrf

                    {{-- Nama --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" required
                                placeholder="Nama Lengkap">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" required
                                placeholder="Email">
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

                    {{-- Konfirmasi Password --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="password" name="password_confirmation" required
                                placeholder="Konfirmasi Password">
                        </div>
                    </div>

                    {{-- Terms & Conditions --}}
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                <label class="custom-control-label font-weight-normal" for="customCheck1">
                                    I accept <a href="#" class="text-muted">Terms and Conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Tombol Register --}}
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">
                                Register
                            </button>
                        </div>
                    </div>

                    {{-- Link ke Login --}}
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20 text-center">
                            <a href="{{ route('login') }}" class="text-muted">
                                Already have an account?
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
