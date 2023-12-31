<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div>
                    <h1>IK495 - ETIKA PROFESI - 2 SKS</h1>
                </div>
            <div>
                <button type="button" class="btn btn-success">Export</button>
                <button type="button" class="btn btn-secondary">Import</button>
                <button type="button" class="btn btn-secondary">Bobot Nilai</button>
                <button type="button" class="btn btn-info">
                    <a href="/grade/edit_nilai">Edit</a>
                </button>
            </div>
            <div class="row mb-4">
                <div class="row">
                    <table class="table table-dark table-striped">
                        <tr>
                            <td rowspan="2" align="center"><br>No</td>
                            <td rowspan="2" align="center"><br>Nim</td>
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
                            <td>1</td>
                            <td>1707885</td>
                            <td>Fakhri Azis Basiri</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1707886</td>
                            <td>Luqman Arif</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A-</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1707887</td>
                            <td>Dicky Kurniawan</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1707888</td>
                            <td>Ingka Fitria Maysarah</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1707889</td>
                            <td>Nisrina Dewi Ambarwati</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>1707885</td>
                            <td>Kartika Pratiwi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>1707886</td>
                            <td>Puspita Ayu</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>1707887</td>
                            <td>Eko Setiawn</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>1707888</td>
                            <td>Ahmad Setiadi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B-</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>1707889</td>
                            <td>Agung Kuncoro</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C+</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>1707885</td>
                            <td>Fakhri Azis Basiri</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>1707886</td>
                            <td>Luqman Arif</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A-</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>1707887</td>
                            <td>Dicky Kurniawan</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>1707888</td>
                            <td>Ingka Fitria Maysarah</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>1707889</td>
                            <td>Nisrina Dewi Ambarwati</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>1707885</td>
                            <td>Kartika Pratiwi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>1707886</td>
                            <td>Puspita Ayu</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>1707887</td>
                            <td>Eko Setiawn</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>1707888</td>
                            <td>Ahmad Setiadi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B-</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>1707889</td>
                            <td>Agung Kuncoro</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C+</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>1707885</td>
                            <td>Fakhri Azis Basiri</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>1707886</td>
                            <td>Luqman Arif</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">A-</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>1707887</td>
                            <td>Dicky Kurniawan</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>1707888</td>
                            <td>Ingka Fitria Maysarah</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>1707889</td>
                            <td>Nisrina Dewi Ambarwati</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>1707885</td>
                            <td>Kartika Pratiwi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>1707886</td>
                            <td>Puspita Ayu</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B+</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>1707887</td>
                            <td>Eko Setiawn</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">95</td>
                            <td align="center">A</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>1707888</td>
                            <td>Ahmad Setiadi</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">B-</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>1707889</td>
                            <td>Agung Kuncoro</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">90</td>
                            <td align="center">91</td>
                            <td align="center">91</td>
                            <td align="center">95</td>
                            <td align="center">C+</td>
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
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Mata Kuliah</h6>
                                    <p class="text-sm mb-0">
                                        {{-- <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">30 done</span> this month --}}
                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-secondary"></i>
                                        </a>
                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                            aria-labelledby="dropdownTable">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                    action</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                    else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Mata Kuliah</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jml Mahasiswa </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Completion</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/logo-xd.svg"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div> --}}
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">IK494 - KEWIRAUSAHAAN - 2 SKS</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 30 </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">60%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info w-60"
                                                            role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/logo-atlassian.svg"
                                                            class="avatar avatar-sm me-3" alt="atlassian">
                                                    </div> --}}
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">IK491 - KAPITA SELEKTA - 3 SKS</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 30 </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">10%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info w-10"
                                                            role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/logo-slack.svg"
                                                            class="avatar avatar-sm me-3" alt="team7">
                                                    </div> --}}
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">IK495 - ETIKA PROFESI - 2 SKS</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 30 </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">100%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success w-100"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm"><a href="/grade">Edit</a></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/logo-spotify.svg"
                                                            class="avatar avatar-sm me-3" alt="spotify">
                                                    </div> --}}
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">IK533 - SISTEM INFORMASI GEOGRAFIS - 2 SKS</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 30 </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">100%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success w-100"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/logo-jira.svg"
                                                            class="avatar avatar-sm me-3" alt="jira">
                                                    </div> --}}
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">IK534 - SISTEM INFORMASI AKUNTANSI - 2 SKS</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 30 </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">25%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info w-25"
                                                            role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="25"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button type="button" class="btn btn-danger btn-sm"><a href="/grade">Edit</a></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                    data: [10, 15, 5, 0, 0, 0, 0],
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
