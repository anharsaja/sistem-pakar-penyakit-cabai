@extends('layouts.app')

@section('title', 'Data Gejala')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Biodata</li>
                    </ol>
                </div>
                <h4 class="page-title">Biodata Pakar</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <h4 class="mt-0 header-title">Informasi Pakar</h4>
            {{-- <p class="text-muted m-b-30 font-14">17 Gejala yang digunakan pada sistem pakar</p> --}}

            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <p>
                        Data dan informasi dalam sistem pakar ini diperoleh melalui beberapa metode, yaitu observasi, studi literatur, serta wawancara dengan narasumber ahli, yaitu Ibu Ir. Oktarina, M.P. yang merupakan akademisi di Fakultas Pertanian Universitas Muhammadiyah Jember. Wawancara dilakukan untuk menggali informasi terkait penyakit pada tanaman cabai, termasuk gejala-gejala yang muncul serta bobot masing-masing gejala. Seluruh data yang digunakan dalam sistem ini telah divalidasi dan merupakan data terbaru pada tahun 2024, sehingga dapat digunakan sebagai dasar yang akurat dalam proses diagnosis pada sistem pakar yang dikembangkan.
                    </p>
                    <img src="assets/images/okta.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
