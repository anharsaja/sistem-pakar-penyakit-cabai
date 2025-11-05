@extends('layouts.app')

@section('title', 'Data Gejala')

@section('content')

    <div class="row">
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Calculate Penyakit</h4>
                    <p class="text-muted m-b-30 font-14">
                        Hasil perhitungan penyakit pada tanaman cabai dengan metode certainty factor (CF)
                    </p>

                    <!-- Input jumlah gejala -->
                    <div class="form-group">
                        <label for="jumlahGejala" class="fw-500">Masukkan Jumlah Gejala:</label>
                        <input type="number" id="jumlahGejala" class="form-control" min="1" max="20"
                            placeholder="Contoh: 3">
                    </div>

                    <hr>

                    <!-- Tempat munculnya form gejala -->
                    <form id="formGejalaContainer"></form>

                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk generate form dinamis -->
    <script>
        document.getElementById('jumlahGejala').addEventListener('input', function() {
            const jumlah = parseInt(this.value) || 0;
            const container = document.getElementById('formGejalaContainer');

            // Kosongkan container
            container.innerHTML = '';

            // Generate form sesuai jumlah gejala
            for (let i = 1; i <= jumlah; i++) {
                const formGroup = `
        <div class="form-group row align-items-center">
            <div class="col-md-8">
            <h6 class="text-muted fw-400 mb-2">Pilih Gejala ${i}</h6>
            <select name="gejala_id[]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                <option value="">-- Pilih Gejala --</option>
                @foreach ($gejalas as $gejala)
                    <option value="{{ $gejala->id }}">{{ $gejala->nama_gejala }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-4">
                <h6 class="text-muted fw-400 mb-2">Nilai CF</h6>
                <input type="number" step="0.01" min="0" max="1" class="form-control" name="cf_value[]" placeholder="0 - 1">
            </div>
        </div>
        `;
                container.insertAdjacentHTML('beforeend', formGroup);
            }

            // Inisialisasi ulang select2 jika digunakan
            if (typeof $ !== 'undefined' && $.fn.select2) {
                $('.select2').select2();
            }
        });
    </script>
@endsection
