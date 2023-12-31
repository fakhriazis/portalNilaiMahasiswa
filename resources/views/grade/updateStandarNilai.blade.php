<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div>
                    @foreach($id_matkuliah as $matkul)
                    <h1>{{ $matkul->kode_mata_kuliah }} - {{ $matkul->nama_mata_kuliah }} - {{ $matkul->sks }} SKS</h1>
                    @endforeach
                </div>
                <div class="container">
                    <div class="card mt-2 mb-4">
                        {{-- <div class="card-header">
                            Pilih bobot mana yang akan digunakan
                        </div> --}}
                        <div class="card-body" align="center">
                            <h5 align="center">Form Edit Standar Nilai</h5>
                              <div class="mt-2">
                                {{-- awal yang bisa --}}
                                {{-- @foreach($list_bobot_array as $data_id) --}}
                                <form method="POST" action="" enctype = "multipart/form-data" id="form">
                                    @csrf
                                    @method('PUT')
                                        @foreach($id_matkuliah as $matkul)
                                        <input type="number" name="id_matkul" value="{{ $matkul->id_mata_kuliah }}" hidden>
                                        @endforeach
                                {{-- @endforeach --}}
                                    <div class="row">
                                        @foreach($standard_nilai2 as $bobot)
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label">{{ $bobot->nilai_indeks_huruf }} | Awal</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->start_nilai }}" placeholder="0-100">
                                            @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label">{{ $bobot->nilai_indeks_huruf }} | Akhir</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->end_nilai }}" placeholder="0-100">
                                            @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>
                                        {{-- <div class="mb-3 col-md-3">
                                            <label class="form-label">{{ $bobot->nilai_indeks_huruf }}</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->start_nilai }}" placeholder="0-100">
                                            @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}
                                        {{-- <div class="mb-3 col-md-6">
                                            <label class="form-label">A-</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6">
                                            <label class="form-label">B+</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormQuiz">
                                            <label class="form-label">B</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormUts">
                                            <label class="form-label">B-</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormUas">
                                            <label class="form-label">C+</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormUas">
                                            <label class="form-label">C</label>
                                            <input type="text" name="bobot[]" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormUas">
                                            <label class="form-label">D</label>
                                            <input type="text" name="D" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}

                                        {{-- <div class="mb-3 col-md-6" style="display: block" id="idFormUas">
                                            <label class="form-label">E</label>
                                            <input type="text" name="E" class="form-control border border-2 p-2" value="{{ $bobot->nilai_indeks_huruf }}" placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div> --}}
                                        @endforeach
                                    <div>
                                        <button type="submit" class="btn bg-gradient-dark">SUBMIT</button>
                                    </div>
                                </form>
                                {{-- akhir yang bisa --}}
                              </div>
                        </div>
                    </div>
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

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["A", "B", "C", "D", "E", "BL", "K"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [3, 5, 2, 0, 0, 0, 0],
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

        function clickPartisipatif() {
            var checkBox = document.getElementById("partisipatif");
            var text = document.getElementById("idFormPartisipatif");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function clickProyek() {
            var checkBox = document.getElementById("proyek");
            var text = document.getElementById("idFormProyek");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function clickTugas() {
            var checkBox = document.getElementById("tugas");
            var text = document.getElementById("idFormTugas");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function clickQuiz() {
            var checkBox = document.getElementById("quiz");
            var text = document.getElementById("idFormQuiz");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function clickUts() {
            var checkBox = document.getElementById("uts");
            var text = document.getElementById("idFormUts");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function clickUas() {
            var checkBox = document.getElementById("uas");
            var text = document.getElementById("idFormUas");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function myFunction2() {
        var checkBox = document.getElementById("myCheck2");
        var text = document.getElementById("text2");
        if (checkBox.checked == true){
                text.style.display = "none";
            } else {
                text.style.display = "block";
            }
        }

        function myFunction3() {
        var checkBox = document.getElementById("myCheck3");
        var text = document.getElementById("text3");
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
        }
    </script>
    @endpush
</x-layout>
