@extends('layouts.layout')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="fs-1 text-center text-capitalize">Selamat Datang {{ auth()->user()->name }}</div>
                    <!--begin::Alert-->
                    @if ($alumni == null)
                        <div class="alert alert-warning d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-warning me-3">
                                <svg id="svg-data" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <style>
                                        #svg-data {
                                            fill: rgb(230, 174, 33);
                                        }
                                    </style>
                                    <path
                                        d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                </svg>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-dark">Peringatan</h4>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <span>Harap lengkapi semua data-data anda terlebih dahulu di menu <a
                                        href="{{ route('alumni.profil') }}">Profil</a> agar terdaftar di website
                                    alumni, dan harap isi kesan dan pesan anda di menu <a
                                        href="{{ route('alumni.kesanpesan') }}">Kesan dan Pesan</a></span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    @endif
                    <!--end::Alert-->
                </div>
            </div>
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Statistik Alumni Pertahun</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart" height="100vh"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('script')
    <script>
        var ctx = document.getElementById('myAreaChart').getContext('2d');

        $(document).ready(async function() {
            try {
                // Melakukan permintaan AJAX pertama
                const res = await $.ajax({
                    url: '/admin/chart',
                    method: 'GET'
                });

                if (res.success === true) {
                    // Mengosongkan dan mengisi opsi mata_kuliah_select
                    var myChart = new Chart(ctx, {
                        type: 'bar', // atau 'area' jika Anda ingin membuat grafik area
                        data: {
                            labels: res.message.labels,
                            datasets: [{
                                label: 'Alumni per Tahun', // Ganti dengan label yang sesuai
                                data: res.message.data,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.yLabel;
                                    }
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                } else {
                    console.error('Gagal mengambil data:', res.message);
                }
            } catch (error) {
                console.error('Gagal melakukan permintaan AJAX pertama:', error);
            }
        });
    </script>
@endsection
