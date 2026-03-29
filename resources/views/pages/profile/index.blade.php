@extends('layouts.app')

@section('title', 'Data Gejala')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Gejala</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <div class="page has-sidebar-left height-full">
                <div class="container-fluid relative animatedParent animateOnce p-lg-5">
                    <div class="row no-gutters">
                        <div class="col-md-4 b-r">
                            <div class="text-center p-5 mt-5">
                                {{-- <figure class="avatar avatar-lg"> --}}
                                    {{-- <img src="assets/images/users/user.png" alt=""> --}}
                                {{-- </figure> --}}
                                <div>
                                    <h4 class="p-t-10">{{ $user->name }}</h4>
                                </div>
                                <a href="#" class="btn btn-success  mt-3">Edit Profile</a>
                                <div class="mt-5">
                                    <ul class="social social list-inline">
                                        <li class="list-inline-item"><a href="#" class="grey-text"><i
                                                    class="icon-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="grey-text"><i
                                                    class="icon-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="grey-text"><i
                                                    class="icon-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="p5 b-b">
                                <div class="pl-4 mt-4">
                                    <h5>User Information</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="p-4">
                                            <h4 class="text-black">Email</h4>
                                            <span>{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-4">
                                            <h4 class="text-black">Phone Number</h4>
                                            <span>0092-333-456734</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="p-4">
                                            <h4 class="text-black">Address</h4>
                                            <span>7C Street, Main Market New York City</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="p5 b-b">
                                <div class="pl-4 mt-4">
                                    <h5>Personal Information</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="p-4">
                                            <h4 class="text-black">Facebook</h4>
                                            <span>Facebook.com/paper-panel</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-4">
                                            <h4 class="text-black">Phone Number</h4>
                                            <span>0092-333-456734</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
