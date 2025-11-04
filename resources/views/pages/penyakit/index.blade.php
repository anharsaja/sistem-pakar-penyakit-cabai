@extends('layouts.app')

@section('title', 'Data Gejala')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Penyakit</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <h4 class="mt-0 header-title">Daftar Penyakit</h4>
            <p class="text-muted m-b-30 font-14">5 data penyakit yang digunakan pada sistem pakar</p>

            <div class="table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Penyakit</th>
                                <th>Saran Penanganan</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyakits as $index => $penyakit)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $penyakit->kode }}</td>
                                    <td>{{ $penyakit->nama_penyakit }}</td>
                                    <td>
                                        {{-- tampilkan semua saran penanganan --}}
                                        @if ($penyakit->saranPenanganan->isNotEmpty())
                                            <ul class="mb-0">
                                                @foreach ($penyakit->saranPenanganan as $saran)
                                                    <li>{{ $saran->saran }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-muted">Belum ada saran</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <a href="#"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="#" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach

                            @if ($penyakits->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Belum ada data penyakit.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
