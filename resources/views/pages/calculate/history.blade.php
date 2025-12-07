@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">History</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <div class="card-body">
                <h4 class="mt-0 header-title">Calculate Penyakit</h4>
                <p class="text-muted m-b-30 font-14">
                    Hasil perhitungan penyakit pada tanaman cabai dengan metode certainty factor (CF)
                </p>

                <div class="row row-cols-1 row-cols-md-5 g-4">
                    @forelse($histories as $history)
                        <div class="col">
                            <div class="card h-100 shadow-sm">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $history->disease->nama_penyakit ?? '-' }}</h5>

                                    <p class="mb-1"><strong>CF:</strong> {{ $history->result_cf }}%</p>
                                    <p class="mb-1"><strong>User:</strong> {{ $history->user->name }}</p>

                                    <p class="text-muted">
                                        {{ \Carbon\Carbon::parse($history->consulted_at)->format('d M Y H:i') }}
                                    </p>

                                    <a href="{{ route('calculate.history.show', $history->id) }}"
                                        class="btn btn-primary btn-sm w-100">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    @empty

                        <div class="col-12">
                            <div class="alert alert-info">
                                Belum ada riwayat konsultasi.
                            </div>
                        </div>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
@endsection
