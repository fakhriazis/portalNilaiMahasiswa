<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-5 col-md-6 mt-4 mb-4">
                    <div class="card card z-index-2 ">
                        <div class="container mt-2">
                            <div class="row">
                                {{-- <div class="col-sm-10">
                                    <h4 align="center"><b>Biodata Mahasiswa</b></h4>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    @foreach($biodata_mhs as $dn)
                                    <h5>Nama : {{ $dn->nama_mahasiswa }}</h5>
                                    <h5>NIM : {{ $dn->nim }}</h5>
                                    <h5>Mata Kuliah : {{ $dn->nama_mata_kuliah }}</h5>
                                    @endforeach
                                </div>
                            </div>
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
                <div class="col-lg-12 col-md-6 mb-2">
                    <div class="card card z-index-2 ">
                        <div class="container mt-2">
                            <table class="table table-hover">
                                <tr>
                                    {{-- <td  align="center"><br>No</td>
                                    <td  align="center"><br>Kode</td> --}}
                                    <td  align="center"><br><h6>Komponen</h6></td>
                                    <td  align="center"><br><h6>Nilai Komponen</h6></td>
                                    <td  align="center"><br><h6>Bobot</h6></td>
                                    <td  align="center"><br><h6>nilaiXbobot</h6></td>
                                    {{-- <td  align="center"><br><h5>Total</h5></td>
                                    <td  align="center"><br><h5>Predikat</h5></td> --}}
                                </tr>
                                {{-- <tr>
                                    <td align="center">Partisipatif</td>
                                    <td align="center">Proyek</td>
                                    <td align="center">Tugas</td>
                                    <td align="center">Quiz</td>
                                    <td align="center">UTS</td>
                                    <td align="center">UAS</td>
                                </tr> --}}
                                @php
                                    $no = 1;
                                    $i = 0;
                                @endphp
                                    {{-- @php
                                        $detailNilai
                                    @endphp --}}
                                    @foreach($detailNilai as $nilai)
                                        <tr>
                                            {{-- <td align="center">{{ $no++; }}</td> --}}
                                            @if($nilai->bobot > 0)
                                            <td align="center">{{ $nilai->nama_komponen}}</td>
                                            <td align="center" name="nilai_total">{{ $nilai->nilai }}</td>
                                            <td align="center" name="nilai_mutu">{{ $nilai->bobot }}%</td>
                                            <td align="center" name="nilai_mutu">{{ $nilai->nilaixbobot }}</td>
                                            {{-- <td align="center" name="nilai_mutu">{{ $nilai->nilai_akhir }}</td>
                                            <td align="center" name="nilai_mutu">{{ $nilai->mutu }}</td> --}}
                                            @endif
                                            {{-- <td align="center" name="nilai_mutu">{{ $nilai->SKSXAM }}</td> --}}
                                            {{-- <td align="center" name="aksi">
                                                <a href="/grade/mahasiswa-detail-nilai/{{ $nilai->nim }}/{{ $nilai->idktr }}">
                                                    <button class="fa fa-eye"></button>
                                                </a>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6 mb-4">
                        {{-- <div class="card card z-index-2 ">
                            <div class="container mt-2">
                                <table class="table table-hover">
                                    <tr>
                                        <td  align="center"><br><h6>Total Nilai</h6></td>
                                        <td  align="center"><br><h6>Predikat</h6></td>
                                    </tr>
                                    @php
                                        $no = 1;
                                        $i = 0;
                                    @endphp
                                        @foreach($detaillNilaiLimit1 as $nilai)
                                            <tr>
                                                <td align="center" name="nilai_mutu">{{ $nilai->nilai_akhir }}</td>
                                                <td align="center" name="nilai_mutu">{{ $nilai->mutu }}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card card z-index-2 ">
                            <div class="container mt-2">
                                <table class="table table-hover">
                                    <tr>
                                        <td  align="center"><br><h6>Total Nilai</h6></td>
                                        <td  align="center"><br><h6>Predikat</h6></td>
                                    </tr>
                                    @php
                                        $no = 1;
                                        $i = 0;
                                    @endphp
                                        {{-- @php
                                            $detailNilai
                                        @endphp --}}
                                        @foreach($detaillNilaiLimit1 as $nilai)
                                            <tr>
                                                <td align="center" name="nilai_mutu">{{ $nilai->nilai_akhir }}</td>
                                                <td align="center" name="nilai_mutu">{{ $nilai->mutu }}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        {{-- <div class="card card z-index-2 ">
                            <div class="container mt-2">
                                <table class="table table-hover">
                                    <tr>
                                        <td  align="center"><br><h6>Total Nilai</h6></td>
                                        <td  align="center"><br><h6>Predikat</h6></td>
                                    </tr>
                                    @php
                                        $no = 1;
                                        $i = 0;
                                    @endphp
                                        @foreach($detaillNilaiLimit1 as $nilai)
                                            <tr>
                                                <td align="center" name="nilai_mutu">{{ $nilai->nilai_akhir }}</td>
                                                <td align="center" name="nilai_mutu">{{ $nilai->mutu }}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div> --}}
                    </div>
                </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    {{-- <script>
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

    </script> --}}
    @endpush
</x-layout>
