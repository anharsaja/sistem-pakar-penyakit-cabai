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
            <h4 class="mt-0 header-title">Daftar Gejala</h4>
            <p class="text-muted m-b-30 font-14">17 Gejala yang digunakan pada sistem pakar</p>

            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Gejala</th>
                                @foreach ($penyakits as $penyakit)
                                    <th>{{ $penyakit->kode ?? 'P' . $penyakit->id }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejalas as $gejala)
                                <tr>
                                    <th>{{ $gejala->kode ?? 'G' . $gejala->id }}</th>
                                    @foreach ($penyakits as $penyakit)
                                        @php
                                            // Cari relasi pivot antara penyakit dan gejala
                                            $pivot = $penyakit->gejalas->firstWhere('id', $gejala->id);
                                        @endphp
                                        <td>{{ $pivot ? $pivot->pivot->bobot : '-' }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
