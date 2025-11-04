@extends('layouts.app')

@section('title', 'Data Gejala')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bobot Pakar</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <h4 class="mt-0 header-title">Bobot Penyakit dari Pakar</h4>
            <p class="text-muted m-b-30 font-14">Berikut adalah data yang diambil dari hasil studi pustaka diperoleh dari pakar terkait dengan bobot nilai penyakit pada tanaman cabai</p>

            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th>MB (Measure of Belief)</th>
                                <th>MD (Measure of Disbelief)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bobotpakars as $index => $bobot)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $bobot->penyakit->nama_penyakit ?? '-' }}</td>
                                    <td>{{ $bobot->gejala->nama_gejala ?? '-' }}</td>
                                    <td>{{ $bobot->mb}}</td>
                                    <td>{{ $bobot->md}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Belum ada data bobot pakar</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
