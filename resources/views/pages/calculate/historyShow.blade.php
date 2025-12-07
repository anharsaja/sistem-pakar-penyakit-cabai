@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('calculate.history') }}">History</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <div class="card-body">
                <h4 class="mt-0 header-title">History Details</h4>
                <p class="text-muted m-b-30 font-14">
                    Hasil perhitungan penyakit yang di lakukan oleh pengguna.
                </p>

                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3>{{ $history->disease->nama_penyakit }}</h3>

                        <p><strong>CF Hasil:</strong> {{ $history->result_cf }}%</p>
                        <p><strong>User:</strong> {{ $history->user->name }}</p>

                        <h5>Deskripsi Penyakit</h5>
                        <p>{{ $history->disease->description }}</p>

                        <h5>Saran Penanganan</h5>
                        <ul>
                            @foreach ($history->disease->saranPenanganan as $saran)
                                <li>{{ $saran->saran }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Gejala yang Dipilih</h5>
                        <ul>
                            @foreach ($history->symptoms as $gs)
                                <li>
                                    {{ $gs->symptom->nama_gejala }}
                                    <small class="text-muted">(CF User: {{ $gs->cf_user }})</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
