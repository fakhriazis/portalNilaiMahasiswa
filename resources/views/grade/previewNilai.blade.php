<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div>
                    @foreach($data_matkul as $matkul)
                    <h1>{{ $matkul->kode_mata_kuliah }} - {{ $matkul->nama_mata_kuliah }} - {{ $matkul->sks }} SKS</h1>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 mt-4 mb-4">
                    <div class="card card z-index-2 ">
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h4 align="center"><b>Bobot Penilaian</b></h4>
                                </div>
                                <div class="col-2 center">
                                    @foreach($data_matkul as $data_mk)
                                    <a href="/grade/update_bobot_nilai/{{ $data_mk->id_mata_kuliah }}/{{ $data_mk->id_kelas }}">
                                        <button class="fa fa-edit center"></button>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <td>Partisipatif</td>
                                        <td>Proyek</td>
                                        <td>Tugas</td>
                                        <td>Quiz</td>
                                        <td>UTS</td>
                                        <td>UAS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($list_bobot_array as $bobot)
                                        @for($i=0; $i<=5; $i++)
                                        @if($bobot[$i]->bobot == 0)
                                            <td>-</td>
                                        @else
                                            <td align="center">{{ $bobot[$i]->bobot }}%</td>
                                        @endif
                                        @endfor
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 mt-4 mb-4">
                    <div class="card card z-index-2 ">
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h4 align="center"><b>Standar Penilaian</b></h4>
                                </div>
                                <div class="col-2 center">
                                    @foreach($data_matkul as $data_mk)
                                    <a href="/grade/update_standar_nilai/{{ $data_mk->id_mata_kuliah }}/{{ $data_mk->id_kelas }}">
                                        <button class="fa fa-edit center"></button>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <td align="center">A</td>
                                        <td align="center">A-</td>
                                        <td align="center">B+</td>
                                        <td align="center">B</td>
                                        <td align="center">B-</td>
                                        <td align="center">C+</td>
                                        <td align="center">C</td>
                                        <td align="center">D</td>
                                        <td align="center">E</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($standard_nilai_array as $sn)
                                    <tr>
                                        @for($i=0;$i<9;$i++)
                                        <td align="center">{{ $sn[$i]->start_nilai }}</td>
                                        @endfor
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="card card z-index-2 ">
                        <div class="container mt-2">
                            @foreach($list_bobot_array as $bobot)
                                {{-- @if ($bobot[0]->bobot > 0)
                                    <p>Bobot Partisipatif {{ $bobot[0]->bobot }}%</p>
                                @endif
                                @if ($bobot[1]->bobot > 0)
                                    <p>Bobot Proyek {{ $bobot[1]->bobot }}%</p>
                                @endif
                                @if ($bobot[2]->bobot > 0)
                                    <p>Bobot Tugas {{ $bobot[2]->bobot }}%</p>
                                @endif
                                @if ($bobot[3]->bobot > 0 )
                                    <p>Bobot Quiz {{ $bobot[3]->bobot }}%</p>
                                @endif
                                @if ($bobot[4]->bobot > 0)
                                    <p>Bobot UTS {{ $bobot[4]->bobot }}%</p>
                                @endif
                                @if ($bobot[5]->bobot > 0)
                                    <p>Bobot UAS {{ $bobot[5]->bobot }}%</p>
                                @endif --}}
                            @endforeach
                            <table class="table table-hover">
                                @php
                                    $counter = 0;
                                @endphp
                                @if($bobot[0]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                @if($bobot[1]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                @if($bobot[2]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                @if($bobot[3]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                @if($bobot[4]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                @if($bobot[5]->bobot > 0)
                                    @php $counter++; @endphp
                                @endif
                                <tr>
                                    <td rowspan="2" align="center"><br>No</td>
                                    <td rowspan="2" align="center"><br>NIM</td>
                                    <td rowspan="2" align="center"><br>Nama</td>
                                    <td colspan="{{ $counter }}" align="center">Detail</td>
                                    <td rowspan="2" align="center"><br>Nilai Total</td>
                                    <td rowspan="2" align="center"><br>Nilai Mutu</td>
                                    <td rowspan="2" align="center"><br>Aksi</td>
                                </tr>
                                <tr>
                                    @if($bobot[0]->bobot > 0)
                                    <td align="center">Partisipatif</td>
                                    @endif
                                    @if($bobot[1]->bobot > 0)
                                    <td align="center">Proyek</td>
                                    @endif
                                    @if($bobot[2]->bobot > 0)
                                    <td align="center">Tugas</td>
                                    @endif
                                    @if($bobot[3]->bobot > 0)
                                    <td align="center">Quiz</td>
                                    @endif
                                    @if($bobot[4]->bobot > 0)
                                    <td align="center">UTS</td>
                                    @endif
                                    @if($bobot[5]->bobot > 0)
                                    <td align="center">UAS</td>
                                    @endif
                                </tr>
                                @php
                                    $no = 1;
                                    $i = 0;
                                @endphp
                                    @foreach($nilaiAkhir as $nilai)
                                        <tr>
                                            <td align="center">{{ $no++; }}</td>
                                            <td align="center">{{ $nilai->nim }}</td>
                                            <td>{{ $nilai->nama_mahasiswa}}</td>
                                            @if($counter > 0)
                                                @foreach($list_bobot_array as $bobot)
                                                    @if ($bobot[0]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                        <td align="center">{{ $nilai->partisipatif}}</td>
                                                    @endif
                                                    @if ($bobot[1]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                        <td align="center">{{ $nilai->proyek}}</td>
                                                    @endif
                                                    @if ($bobot[2]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                        <td align="center">{{ $nilai->tugas}}</td>
                                                    @endif
                                                    @if ($bobot[3]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                    <td align="center"> {{ $nilai->quiz}}</td>
                                                    @endif
                                                    @if ($bobot[4]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                        <td align="center"> {{ $nilai->uts}}</td>
                                                    @endif
                                                    @if ($bobot[5]->bobot > 0)
                                                        @php
                                                            $name = 'bobot[]';
                                                        @endphp
                                                        <td align="center"> {{ $nilai->uas}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                            <td align="center" name="nilai_total">{{ $nilai->nilai_akhir }}</td>
                                            <td align="center" name="nilai_mutu">{{ $nilai->mutu }}</td>
                                            <td align="center" name="aksi">
                                                @if($nilai->nilai_akhir >= 0)
                                                <a href="/grade/mahasiswa/edit/{{ $nilai->nim }}/{{ $nilai->id_kelas }}/{{ $nilai->idktr }}">
                                                    <button class="fa fa-edit"></button>
                                                </a>
                                                @else
                                                <a href="/grade/mahasiswa/input/{{ $nilai->nim }}/{{ $nilai->id_kelas }}/{{ $nilai->idktr }}">
                                                    <button class="fa fa-edit"></button>
                                                </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Perolehan Nilai Mahasiswa</h6>
                                <p class="text-sm ">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 "> Nilai rata-rata persemester </h6>
                                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today
                                    sales. </p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 mt-4 mb-3">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Completed Tasks</h6>
                                <p class="text-sm ">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm">just updated</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");
        var $A = <?php echo json_encode($nilaiA)?>;
        var $B = <?php echo json_encode($nilaiB)?>;
        var $C = <?php echo json_encode($nilaiC)?>;
        var $D = <?php echo json_encode($nilaiD)?>;
        var $E = <?php echo json_encode($nilaiE)?>;
        var $BL = <?php echo json_encode($nilaiBL)?>;
        var $K = <?php echo json_encode($nilaiK)?>;

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["A", "B", "C", "D", "E", "BL", "K"],
                datasets: [{
                    label: "Jumlah",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [$A, $B, $C, $D, $E, $BL, $K],
                    maxBarThickness: 5
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["2019", "May", "2020", "Jul", "2021", "Sep", "2022", "Nov", "2023"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [3.3, 3.4, 3.5, 3.2, 3.6, 3.7, 3.4, 3.1, 3.5],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script>
    @endpush
</x-layout>
