<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div>
                    @foreach($id_matkul as $matkul)
                    <h1>{{ $matkul->kode_mata_kuliah }} - {{ $matkul->nama_mata_kuliah }} - {{ $matkul->sks }} SKS</h1>
                    @endforeach
                </div>
                <div class="container">
                    <div class="card mt-2 mb-4">
                        {{-- <div class="card-header">
                            Pilih bobot mana yang akan digunakan
                        </div> --}}
                        <div class="card-body">
                            <h5>Pilih bobot yang akan digunakan</h5>
                                @foreach ($list_bobot_array as $bobot)
                                    @if ($bobot[0]->bobot > 0)
                                        <p> {{ $bobot[0]->bobot }}</p>
                                    @endif
                                    @if ($bobot[1]->bobot > 0)
                                        <p>{{ $bobot[1]->bobot }}</p>
                                    @endif
                                    @if ($bobot[2]->bobot > 0)
                                        <p>{{ $bobot[2]->bobot }}</p>
                                    @endif
                                    @if ($bobot[3]->bobot > 0)
                                        <p>{{ $bobot[3]->bobot }}</p>
                                    @endif
                                    @if ($bobot[4]->bobot > 0)
                                        <p>{{ $bobot[4]->bobot }}</p>
                                    @endif
                                    @if ($bobot[5]->bobot > 0)
                                        <p>{{ $bobot[5]->bobot }}</p>
                                    @endif
                                @endforeach
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="partisipatif" onclick="clickPartisipatif()" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Partisipatif</label>
                            </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="proyek" onclick="clickProyek()" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Proyek</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tugas" onclick="clickTugas()" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Tugas</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="quiz" onclick="clickQuiz()" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Quiz</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="uts" onclick="clickUts()" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">UTS</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="uas" onclick="clickUas()" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">UAS</label>
                              </div>
                              <div class="mt-2">
                                {{-- awal yang bisa --}}
                                @foreach($id_matkul as $data_id)
                                <form method="POST" action="/grade/bobot_nilai/store_bobot/{{ $data_id->id_kelas }}">
                                @endforeach
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6" style="display: none" id="idFormPartisipatif">
                                            <label class="form-label">Partisipatif</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[0]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 col-md-6" style="display: none" id="idFormProyek">
                                            <label class="form-label">Proyek</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[1]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 col-md-6" style="display: none" id="idFormTugas">
                                            <label class="form-label">Tugas</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[2]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 col-md-6" style="display: none" id="idFormQuiz">
                                            <label class="form-label">Quiz</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[3]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 col-md-6" style="display: none" id="idFormUts">
                                            <label class="form-label">UTS</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[4]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 col-md-6" style="display: none" id="idFormUas">
                                            <label class="form-label">UAS</label>
                                            <input type="number" name="id_komponen[]" value="{{ $komponen_array[5]->id_kompenen }}" hidden>
                                            <input type="number" name="bobot[]" class="form-control border border-2 p-2" value='0' placeholder="0-100">
                                            @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        </div>
                                    <div>
                                        <button type="submit" class="btn bg-gradient-dark">Submit</button>
                                    </div>
                                </form>
                                {{-- akhir yang bisa --}}
                              </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mb-4">
                    <div class="row">
                        <table class="table table-dark table-striped">
                            <tr>
                                <td rowspan="2" align="center"><br>No</td>
                                <td rowspan="2" align="center"><br>NIM</td>
                                <td rowspan="2" align="center"><br>Nama</td>
                                <td colspan="7" align="center">Detail</td>
                                <td rowspan="2" align="center"><br>Nilai Mutu</td>
                            </tr>
                            <tr>
                                <td align="center">Partisipatif</td>
                                <td align="center">Proyek</td>
                                <td align="center">Tugas</td>
                                <td align="center">Quiz</td>
                                <td align="center">UTS</td>
                                <td align="center">UAS</td>
                                <td align="center">Nilai Total</td>
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td>1707885</td>
                                <td>Fakhri Azis Basiri</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">2</td>
                                <td>1707886</td>
                                <td>Luqman Arif</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">3</td>
                                <td>1707887</td>
                                <td>Dicky Kurniawan</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">4</td>
                                <td>1707888</td>
                                <td>Ingka Fitria Maysarah</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">5</td>
                                <td>1707889</td>
                                <td>Nisrina Dewi Ambarwati</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">6</td>
                                <td>1707885</td>
                                <td>Kartika Pratiwi</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">7</td>
                                <td>1707886</td>
                                <td>Puspita Ayu</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">8</td>
                                <td>1707887</td>
                                <td>Eko Setiawn</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">9</td>
                                <td>1707888</td>
                                <td>Ahmad Setiadi</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td align="center">10</td>
                                <td>1707889</td>
                                <td>Agung Kuncoro</td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"><input type="text" name="" id="" size="2" value=""></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                        </table>
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
                        <div class="col-lg-4 col-md-6 mt-4 mb-4">
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
                        </div>
                        <div class="col-lg-4 mt-4 mb-3">
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
                        </div>
                    </div>
                </div> --}}
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
            text.style.display = "block";
        } else {
            text.style.display = "none";
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
