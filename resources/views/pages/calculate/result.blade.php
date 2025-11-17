@extends('layouts.app')

@section('title', 'Bobot Penyakit')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Result</li>
                    </ol>
                </div>
                <h4 class="page-title">Sistem Pakar Penyakit Cabai</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <h4 class="mt-0 header-title">Calculate Result</h4>
            <p class="text-muted m-b-30 font-14">
                Berikut adalah hasil perhitungan metode Certainty Factor (CF) untuk penyakit tanaman cabai
            </p>

            <div class="container">
                <h4>Hasil Diagnosa</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Penyakit</th>
                            <th>Tingkat Keyakinan (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $result['penyakit'] }}</td>
                                <td>{{ $result['cf'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($topResult)
                    <h3>Penyakit dengan kemungkinan terbesar:</h3>
                    <h2>{{ $topResult['penyakit'] }} ({{ $topResult['cf'] }}%)</h2>

                    <h4>Deskripsi:</h4>
                    <p>{{ $topResult['deskripsi'] }}</p>

                    <h4>Langkah Penanganan:</h4>
                    @foreach ($topResult['penanganan'] as $s)
                        <li>{{ $s }}</li>
                    @endforeach
                @endif


                <!-- Grafik -->
                <div class="mt-5">
                    <h5 class="mb-3">Visualisasi Hasil Diagnosa</h5>
                    <canvas id="cfChart" height="120"></canvas>
                </div>

                <a href="{{ route('calculate.index') }}" class="btn btn-primary mt-4">Kembali</a>
            </div>

        </div>
    </div>

    <!-- Tambahkan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('cfChart').getContext('2d');

        const labels = @json(array_column($results, 'penyakit'));
        const dataValues = @json(array_column($results, 'cf'));

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Tingkat Keyakinan (%)',
                    data: dataValues,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Grafik Tingkat Keyakinan Terhadap Penyakit',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 10,
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
