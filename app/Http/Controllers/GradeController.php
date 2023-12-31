<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Komponen;
use App\Models\Nilai;
use App\Models\Standard_nilai;
use App\Models\Kontrak;
use App\Models\Mahasiswa;
use App\Models\Mata_kuliah;
use Illuminate\Http\Request;
use App\Models\Ref_mata_kuliah;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index()
    {
        return view('grade.index');
    }

    public function showMhsMatkul($id_matkul, $id_kelas, $id_semester)
    {
        $listMhs = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'mahasiswa.jenis_kelamin', 'kelas.id_kelas', 'kelas.id_semester')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('dosen_ampu.id_dosen', '=', '1')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->where('kelas.id_semester', '=', $id_semester)
            ->get();

        //query menampilkan informasi mata kuliah
        $data_matkul = Mata_kuliah::select('mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'kelas.id_kelas', 'kelas.id_semester', 'kontrak.id_kontrak')
            ->join('dosen_ampu', 'dosen_ampu.id_mata_kuliah', '=', 'mata_kuliah.id_mata_kuliah')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->join('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->where('kelas.id_semester', '=', $id_semester)
            ->limit('1')
            ->get();

        $bobot = Bobot::select('bobot.id_bobot', 'bobot.id_kelas', 'bobot.id_komponen', 'bobot.bobot')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->get();

        $cekBobot = Bobot::select(DB::raw('SUM(bobot.bobot) as countBobot'))
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->get();


        // dd($data_matkul);
        // var_dump($listMhs);
        return view('grade.showMhsMatkul', compact(['data_matkul'], ['listMhs'], ['bobot'], ['cekBobot']));
    }

    public function bobotNilai($id_matkul, $id_kelas)
    {
        $komponen = Komponen::select('*')
            ->get();
        $temp[] = $komponen;
        $komponen_array = $temp[0];
        // dd($komponen_array);

        //query menampilkan informasi mata kuliah
        $id_matkul = Mata_kuliah::select('mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'kelas.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_mata_kuliah', '=', 'mata_kuliah.id_mata_kuliah')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->join('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->limit('1')
            ->get();

        $list_bobot = Bobot::select('bobot.id_bobot', 'kelas.id_kelas', 'komponen.id_kompenen', 'bobot.bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->get();

        $temp_bobot[] = $list_bobot;
        $list_bobot_array[] = $temp_bobot[0];
        // dd($list_bobot_array);

        // dd($id_matkul);

        return view('grade.bobotNilai', compact(['id_matkul'], ['komponen_array'], ['list_bobot_array']));
    }

    public function updateBobotNilai($id_matkul, $id_kelas)
    {
        $komponen = Komponen::select('*')
            ->get();
        $temp[] = $komponen;
        $komponen_array = $temp[0];
        // dd($komponen_array);

        //query menampilkan informasi mata kuliah
        $id_matkul = Mata_kuliah::select('mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'kelas.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_mata_kuliah', '=', 'mata_kuliah.id_mata_kuliah')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->join('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->limit('1')
            ->get();

        $list_bobot = Bobot::select('bobot.id_bobot', 'kelas.id_kelas', 'komponen.id_kompenen', 'bobot.bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->orderBy('komponen.id_kompenen', 'ASC')
            ->get();

        $temp_bobot[] = $list_bobot;
        $list_bobot_array[] = $temp_bobot[0];
        // dd($list_bobot_array);

        // dd($id_matkul);

        return view('grade.updateBobotNilai', compact(['id_matkul'], ['komponen_array'], ['list_bobot_array']));
    }

    public function storeBobot(Request $request, $id_kelas)
    {

        for ($i = 0; $i < count($request->bobot); $i++) {
            $data = array(
                'id_kelas' => $id_kelas,
                'id_komponen' => $request->id_komponen[$i],
                'bobot' => $request->bobot[$i],
            );
            $insert_bobot[] = $data;
        }

        Bobot::insert($insert_bobot);
        // dd($request->all());
    }

    public function update($id_bobot, Request $request)
    {
        $request->validate([
            'id_matkul' => 'required',
            'id_kelas' => 'required',
            'id_komponen' => 'required',
            'id_bobot' => 'required',
            'bobot' => 'required',
        ]);

        $id_Matkul = $request->input('id_matkul'); //id_Matkul "M Besar" untuk menampung input
        $id_Kelas = $request->input('id_kelas'); //id_Kelas "K Besar" untuk menampung input
        $id_komponen = $request->input('id_komponen');
        $temp_id_bobot = $request->input('id_bobot');
        $bobot = $request->input('bobot');

        for ($i = 0; $i < count($bobot); $i++) {
            DB::table('bobot')
                ->where('id_kelas', $id_Kelas)
                ->where('id_bobot', $temp_id_bobot[$i])
                ->update([
                    'id_kelas' => $id_Kelas[$i],
                    'id_komponen' => $id_komponen[$i],
                    'bobot' => $bobot[$i],
                ]);
        }

        $id_kelas = $id_Kelas[0]; //id_kelas "k kecil" untuk parameter
        $id_matkul = $id_Matkul[0]; //id_matkul "m kecil" untuk parameter

        // dd($id_Matkul, $id_Kelas, $temp_id_bobot, $id_komponen, $bobot, $id_matkul, $id_kelas);



        return redirect()->route('viewUpdateBobot', compact(['id_matkul'], ['id_kelas']))->with('success', 'Post updated successfully');
    }

    public function ubah()
    {
        return view('grade.test');
    }

    public function previewNilai($id_matkul, $id_kelas, $id_kontrak)
    {

        //===== using CTE

        $nilaiAkhir = DB::table('vna2')
            ->select(
                'vna2.nim',
                'vna2.nama_mahasiswa',
                'vna2.id_kelas',
                'vna2.idktr',
                'vna2.partisipatif',
                'vna2.proyek',
                'vna2.tugas',
                'vna2.quiz',
                'vna2.uts',
                'vna2.uas',
                'vna2.nilai_akhir',
                'standard_nilai.nilai_indeks_huruf as mutu',
                'standard_nilai.indeks'
            )
            ->leftJoin('standard_nilai', function ($join) {
                $join->on('standard_nilai.id_kelas', '=', 'vna2.id_kelas')
                    ->on('vna2.nilai_akhir', '>=', 'standard_nilai.start_nilai')
                    ->on('vna2.nilai_akhir', '<=', 'standard_nilai.end_nilai');
            })
            ->where('vna2.id_kelas', '=', $id_kelas)
            ->groupBy('vna2.nim')
            ->groupBy('vna2.nama_mahasiswa')
            ->groupBy('vna2.id_kelas')
            ->groupBy('vna2.idktr')
            ->groupBy('vna2.partisipatif')
            ->groupBy('vna2.proyek')
            ->groupBy('vna2.tugas')
            ->groupBy('vna2.quiz')
            ->groupBy('vna2.uts')
            ->groupBy('vna2.uas')
            ->groupBy('vna2.nilai_akhir')
            ->groupBy('standard_nilai.nilai_indeks_huruf')
            ->groupBy('standard_nilai.indeks')
            ->get();

        // dd($nilaiAkhir);
        //===============

        $listMhs = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kontrak.id_kontrak')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('dosen_ampu.id_dosen', '=', '1')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->get();

        //query menampilkan informasi mata kuliah
        $data_matkul = Mata_kuliah::select('mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'kelas.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_mata_kuliah', '=', 'mata_kuliah.id_mata_kuliah')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->join('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->limit('1')
            ->get();

        $list_bobot = Bobot::select('bobot.id_bobot', 'kelas.id_kelas', 'komponen.id_kompenen', 'komponen.nama_komponen', 'bobot.bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->orderBy('komponen.id_kompenen', 'ASC')
            ->get();

        $temp[] = $list_bobot;
        $list_bobot_array[] = $temp[0];
        // dd($list_bobot_array);

        // dd($listMhs); // kirim parameter id_kontrak ke storeGradeNilai !!!!!!!!!!!!
        $tableName = 'Bobot';
        $nama_kolom = DB::select("SELECT column_name FROM information_schema.columns WHERE table_name = ?", [$tableName]);
        // dd($nama_kolom);

        //data chart perolehan nilai======================================================
        $perolehanNilai = DB::select(DB::raw("
                SELECT
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('A', 'A-')) AS A,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('B+', 'B', 'B-')) AS B,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('C', 'C-')) AS C,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('D')) AS D,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('E')) AS E,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('BL')) AS BL,
                    (SELECT COUNT(mutu) as jml FROM vna WHERE id_kelas = $id_kelas AND mutu IN ('K')) AS K
                "));

        $nilai = [];

        foreach ($perolehanNilai as $row) {
            $nilaiA = $row->A;
            $nilaiB = $row->B;
            $nilaiC = $row->C;
            $nilaiD = $row->D;
            $nilaiE = $row->E;
            $nilaiBL = $row->BL;
            $nilaiK = $row->K;
        }

        // $qqq = $nilai;
        // dd($nilaiAkhir);

        $standard_nilai = Standard_nilai::select('*')
            ->where('id_kelas', $id_kelas)
            ->get();

        $temp2[] = $standard_nilai;
        $standard_nilai_array[] = $temp2[0];

        // dd($list_bobot_array, $standard_nilai, $standard_nilai_array);

        return view('grade.previewNilai', compact(['data_matkul'], ['listMhs'], ['list_bobot_array'], ['nama_kolom'], ['nilaiAkhir'], ['perolehanNilai'], ['nilai'], ['nilaiA'], ['nilaiB'], ['nilaiC'], ['nilaiD'], ['nilaiE'], ['nilaiBL'], ['nilaiK'], ['standard_nilai_array']));
    }

    public function storeGradeDetail($nim, $id_kelas, $id_kontrak)
    {
        $mahasiswa_select_1 = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'semester.semester', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
            ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
            ->where('mahasiswa.nim', '=', $nim)
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->where('kontrak.id_kontrak', '=', $id_kontrak)
            ->limit('1')
            ->get();


        //list data mahasiswa beserta data kelas dan semester
        // $mahasiswa = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'semester.semester', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot', 'komponen.nama_komponen')
        //     ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
        //     ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
        //     ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
        //     ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
        //     ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
        //     ->where('mahasiswa.nim', '=', $nim)
        //     ->where('kelas.id_kelas', '=', $id_kelas)
        //     ->get();

        //list data mahasiswa beserta data kelas dan semester "2"
        // $mahasiswa = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'semester.semester', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot', 'komponen.nama_komponen', 'assessment.jenis_assessment')
        //     ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
        //     ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
        //     ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
        //     ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
        //     ->leftjoin('penilaian', 'penilaian.id_bobot', '=', 'bobot.id_bobot')
        //     ->leftjoin('assessment', 'assessment.id_assessment', '=', 'penilaian.id_assessment')
        //     ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
        //     ->where('mahasiswa.nim', '=', $nim)
        //     ->where('kelas.id_kelas', '=', $id_kelas)
        //     ->orderBy('komponen.id_kompenen', 'asc')
        //     // ->limit('1')
        //     ->get();

        $mahasiswa = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'bobot.id_bobot', 'kontrak.id_kontrak', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'bobot.id_komponen', 'bobot', 'komponen.nama_komponen')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->where('kontrak.id_kontrak', '=', $id_kontrak)
            // ->groupBy('komponen.nama_komponen', 'mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot.bobot', 'assessment.jenis_assessment', 'bobot.id_komponen')
            // ->limit('1')
            ->get();


        //list bobot
        $list_bobot = Bobot::select('bobot.id_bobot', 'kelas.id_kelas', 'komponen.id_kompenen', 'bobot.bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->get();

        $temp[] = $list_bobot;
        $list_bobot_array[] = $temp[0];

        //list komponen
        $komponen = Komponen::select('*')
            ->get();
        $temp[] = $komponen;
        $komponen_array = $temp[0];

        // dd($mahasiswa);

        return view('grade.inputDetailNilai', compact(['mahasiswa'], ['mahasiswa_select_1'], ['list_bobot_array'], ['komponen_array']));
    }

    public function detailNilai($nim, $id_kelas, $id_kontrak)
    {
        $mahasiswa_select_1 = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'semester.semester', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
            ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
            ->where('mahasiswa.nim', '=', $nim)
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->where('kontrak.id_kontrak', '=', $id_kontrak)
            ->limit('1')
            ->get();

        $mahasiswa = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'bobot.id_bobot', 'kontrak.id_kontrak', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'bobot.id_komponen', 'bobot', 'komponen.nama_komponen')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('bobot', 'bobot.id_kelas', '=', 'kelas.id_kelas')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->where('kontrak.id_kontrak', '=', $id_kontrak)
            // ->groupBy('komponen.nama_komponen', 'mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kelas.id_kelas', 'kelas.nama_kelas', 'bobot.id_bobot', 'bobot.id_komponen', 'bobot.bobot', 'assessment.jenis_assessment', 'bobot.id_komponen')
            // ->limit('1')
            ->get();

        $data_nilai = Nilai::select(
            'nilai.id_nilai',
            'nilai.id_kontrak',
            'komponen.nama_komponen',
            'bobot.bobot',
            'nilai.id_bobot',
            'kontrak.id_kelas',
            'kontrak.nim',
            'mahasiswa.nama_mahasiswa',
            'mata_kuliah.kode_mata_kuliah',
            'mata_kuliah.nama_mata_kuliah',
            'mata_kuliah.sks',
            'nilai.nilai'
        )
            ->join('kontrak', 'kontrak.id_kontrak', '=', 'nilai.id_kontrak')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('bobot', 'bobot.id_bobot', '=', 'nilai.id_bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->where('kontrak.id_kelas', '=', $id_kelas)
            ->where('kontrak.id_kontrak', '=', $id_kontrak)
            ->get();

        //list bobot
        $list_bobot = Bobot::select('bobot.id_bobot', 'kelas.id_kelas', 'komponen.id_kompenen', 'bobot.bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('kelas', 'kelas.id_kelas', '=', 'bobot.id_kelas')
            ->where('kelas.id_kelas', '=', $id_kelas)
            ->get();

        $temp[] = $list_bobot;
        $list_bobot_array[] = $temp[0];

        //list komponen
        $komponen = Komponen::select('*')
            ->get();
        $temp[] = $komponen;
        $komponen_array = $temp[0];

        // dd($data_nilai);
        return view('grade.editDetailNilai', compact(['mahasiswa'], ['mahasiswa_select_1'], ['list_bobot_array'], ['komponen_array'], ['data_nilai']));
    }

    public function inputDetailNilai(Request $request)
    {

        for ($i = 0; $i < count($request->id_bobot); $i++) {
            $data = array(
                'id_kontrak' => $request->id_kontrak[$i],
                'id_bobot' => $request->id_bobot[$i],
                'nilai' => $request->nilai[$i],
                'nilaixbobot' => $request->nilai[$i] * $request->bobot[$i] / 100,
                'is_nilai' => $request->is_nilai[$i]
            );
            $insert_data[] = $data;
        }

        Nilai::insert($insert_data);
        return redirect()->route('previewGrade');
    }


    public function update2($id_bobot, Request $request)
    {
        $request->validate([
            'id_matkul' => 'required',
            'id_kelas' => 'required',
            'id_komponen' => 'required',
            'id_bobot' => 'required',
            'bobot' => 'required',
        ]);

        $id_Matkul = $request->input('id_matkul'); //id_Matkul "M Besar" untuk menampung input
        $id_Kelas = $request->input('id_kelas'); //id_Kelas "K Besar" untuk menampung input
        $id_komponen = $request->input('id_komponen');
        $temp_id_bobot = $request->input('id_bobot');
        $bobot = $request->input('bobot');

        for ($i = 0; $i < count($bobot); $i++) {
            DB::table('bobot')
                ->where('id_kelas', $id_Kelas)
                ->where('id_bobot', $temp_id_bobot[$i])
                ->update([
                    'id_kelas' => $id_Kelas[$i],
                    'id_komponen' => $id_komponen[$i],
                    'bobot' => $bobot[$i],
                ]);
        }

        $id_kelas = $id_Kelas[0]; //id_kelas "k kecil" untuk parameter
        $id_matkul = $id_Matkul[0]; //id_matkul "m kecil" untuk parameter

        // dd($id_Matkul, $id_Kelas, $temp_id_bobot, $id_komponen, $bobot, $id_matkul, $id_kelas);

        //cek jumlah mahasiswa di kelas terkait
        $cek_Mhs = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kontrak.id_kontrak', 'kontrak.id_kelas', 'nilai.nilai', 'bobot.id_bobot', 'bobot.bobot', 'nilai.nilaixbobot')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('nilai', 'nilai.id_kontrak', '=', 'kontrak.id_kontrak')
            ->join('bobot', 'bobot.id_bobot', '=', 'nilai.id_bobot')
            ->where('kontrak.id_kelas', $id_Kelas)
            ->orderBy('mahasiswa.nama_mahasiswa', 'ASC')
            ->get();

        // dd(count($bobot));
        for ($i = 0; $i < count($cek_Mhs); $i++) {
            for ($j = 0; $j < count($bobot); $j++) {
                DB::table('nilai')
                    ->where('id_kontrak', $cek_Mhs[$i]->id_kontrak)
                    ->where('id_bobot', $cek_Mhs[$i]->id_bobot)
                    ->update([
                        'id_kontrak' => $cek_Mhs[$i]->id_kontrak,
                        'id_bobot' => $cek_Mhs[$i]->id_bobot,
                        // 'nilai' => $cek_Mhs[$i]->nilai,
                        'nilaixbobot' => $cek_Mhs[$i]->nilai * $cek_Mhs[$i]->bobot / 100
                    ]);
            }
        }

        return redirect()->route('viewUpdateBobot', compact(['id_matkul'], ['id_kelas']))->with('success', 'Post updated successfully');
    }

    public function editDetailNilai($id_kelas, Request $request)
    {
        $request->validate([
            'id_kontrak' => 'required',
            'id_bobot' => 'required',
            'nilai' => 'required',
            'is_nilai' => 'required'
        ]);

        $id_Kontrak = $request->input('id_kontrak'); //id_Kontrak "K Besar" untuk menampung input
        // $id_Kelas = $request->input('id_kelas'); //id_Kelas "K Besar" untuk menampung input
        $temp_id_bobot = $request->input('id_bobot');
        $nilai = $request->input('nilai');
        $is_nilai = $request->input('is_nilai');

        // $id_kelas = $id_Kelas[0]; //id_kelas "k kecil" untuk parameter
        $id_kontrak = $id_Kontrak[0]; //id_kontrak "k kecil" untuk parameter

        // dd($id_Matkul, $id_Kelas, $temp_id_bobot, $id_komponen, $bobot, $id_matkul, $id_kelas);

        //cek jumlah mahasiswa di kelas terkait
        $cek_Mhs = Mahasiswa::select('mahasiswa.nim', 'mahasiswa.nama_mahasiswa', 'kontrak.id_kontrak', 'kontrak.id_kelas', 'nilai.nilai', 'bobot.id_bobot', 'bobot.bobot', 'nilai.nilaixbobot', 'nilai.is_nilai')
            ->join('kontrak', 'kontrak.nim', '=', 'mahasiswa.nim')
            ->join('nilai', 'nilai.id_kontrak', '=', 'kontrak.id_kontrak')
            ->join('bobot', 'bobot.id_bobot', '=', 'nilai.id_bobot')
            ->where('kontrak.id_kelas', $id_kelas)
            ->where('kontrak.id_kontrak', $id_kontrak)
            ->orderBy('mahasiswa.nama_mahasiswa', 'ASC')
            ->get();

        // dd(count($bobot));
        for ($i = 0; $i < count($cek_Mhs); $i++) {
            for ($j = 0; $j < count($nilai); $j++) {
                DB::table('nilai')
                    ->where('id_kontrak', $cek_Mhs[$i]->id_kontrak)
                    ->where('id_bobot', $cek_Mhs[$i]->id_bobot)
                    ->update([
                        'id_kontrak' => $cek_Mhs[$i]->id_kontrak,
                        'id_bobot' => $cek_Mhs[$i]->id_bobot,
                        'nilai' => $nilai[$i],
                        'nilaixbobot' => $nilai[$i] * $cek_Mhs[$i]->bobot / 100,
                        'is_nilai' => 1
                    ]);
            }
        }

        //Mengkonversi integer menjadi string untuk dijadikan parameter
        $nim = (string)$cek_Mhs[0]->nim;

        // dd($nim);
        return redirect()->route('detailNilai', compact(['nim'], ['id_kelas'], ['id_kontrak']))->with('success', 'Post updated successfully');
    }

    public function updateStandarNilai($id_matkul, $id_kelas)
    {
        $id_matkuliah = Mata_kuliah::select('mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'kelas.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_mata_kuliah', '=', 'mata_kuliah.id_mata_kuliah')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->join('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
            ->where('mata_kuliah.id_mata_kuliah', '=', $id_matkul)
            ->limit('1')
            ->get();

        $standard_nilai2 = Standard_nilai::select('*')
            ->where('id_kelas', $id_kelas)
            ->get();

        // dd($id_matkul, $id_kelas, $id_matkuliah, $standard_nilai2);
        return view('grade.UpdateStandarNilai', compact(['id_matkul'], ['id_kelas'], ['id_matkuliah'], ['standard_nilai2']));
    }


    public function viewNilaiMahasiswa($nim)
    {

        $nilaiAkhir = DB::table('vna_mutu_indeks_smt')
            ->select(
                'mahasiswa.nama_mahasiswa',
                'semester.semester',
                'mata_kuliah.kode_mata_kuliah',
                'mata_kuliah.nama_mata_kuliah',
                'mata_kuliah.sks',
                'kelas.id_kelas',
                'vna_mutu_indeks_smt.idktr',
                'vna_mutu_indeks_smt.nim',
                'vna_mutu_indeks_smt.nama_mahasiswa',
                'vna_mutu_indeks_smt.partisipatif',
                'vna_mutu_indeks_smt.proyek',
                'vna_mutu_indeks_smt.tugas',
                'vna_mutu_indeks_smt.quiz',
                'vna_mutu_indeks_smt.uts',
                'vna_mutu_indeks_smt.uas',
                'vna_mutu_indeks_smt.nilai_akhir',
                'vna_mutu_indeks_smt.indeks',
                // DB::raw('mk.sks * vna.indeks as SKSXAM'),
                'vna_mutu_indeks_smt.mutu',
            )
            ->join('semester', 'semester.id_semester', '=', 'vna_mutu_indeks_smt.id_semester')
            ->join('kelas', 'kelas.id_kelas', '=', 'vna_mutu_indeks_smt.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'vna_mutu_indeks_smt.nim')
            ->where('mahasiswa.nim', $nim)
            ->get();

        $biodata_mhs = Kontrak::select('mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mata_kuliah.nama_mata_kuliah')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('mahasiswa.nim', $nim)
            ->limit(1)
            ->get();

        // dd($nilaiAkhir);

        return view('grade.gradeMahasiswa', compact(['nilaiAkhir'], ['biodata_mhs']));
    }

    public function viewDetailNilaiMahasiswa($nim, $id_kontrak, $id_kelas)
    {
        $detailNilai = DB::table('kontrak')
            ->select(
                'kontrak.nim',
                'mahasiswa.nama_mahasiswa',
                'vna_mutu_indeks_smt.idktr',
                'mata_kuliah.nama_mata_kuliah',
                'semester.semester',
                'komponen.nama_komponen',
                'nilai.nilai',
                'bobot.bobot',
                'nilai.nilaixbobot',
                'vna_mutu_indeks_smt.nilai_akhir',
                'vna_mutu_indeks_smt.mutu'
            )
            ->join('nilai', 'nilai.id_kontrak', '=', 'kontrak.id_kontrak')
            ->join('bobot', 'bobot.id_bobot', '=', 'nilai.id_bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('vna_mutu_indeks_smt', 'vna_mutu_indeks_smt.idktr', '=', 'kontrak.id_kontrak')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
            ->where('kontrak.nim', $nim)
            ->where('kontrak.id_kontrak', $id_kontrak)
            ->get();

        $detaillNilaiLimit1 = DB::table('kontrak')
            ->select(
                'kontrak.nim',
                'mahasiswa.nama_mahasiswa',
                'vna_mutu_indeks_smt.idktr',
                'mata_kuliah.nama_mata_kuliah',
                'semester.semester',
                'komponen.nama_komponen',
                'nilai.nilai',
                'bobot.bobot',
                'nilai.nilaixbobot',
                'vna_mutu_indeks_smt.nilai_akhir',
                'vna_mutu_indeks_smt.mutu'
            )
            ->join('nilai', 'nilai.id_kontrak', '=', 'kontrak.id_kontrak')
            ->join('bobot', 'bobot.id_bobot', '=', 'nilai.id_bobot')
            ->join('komponen', 'komponen.id_kompenen', '=', 'bobot.id_komponen')
            ->join('vna_mutu_indeks_smt', 'vna_mutu_indeks_smt.idktr', '=', 'kontrak.id_kontrak')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->join('semester', 'semester.id_semester', '=', 'kelas.id_semester')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
            ->where('kontrak.nim', $nim)
            ->where('kontrak.id_kontrak', $id_kontrak)
            ->limit(1)
            ->get();

        $biodata_mhs = Kontrak::select('mahasiswa.nama_mahasiswa', 'mahasiswa.nim', 'mata_kuliah.nama_mata_kuliah')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
            ->where('kontrak.id_kontrak', $id_kontrak)
            ->get();

        $standard_nilai = Standard_nilai::select('*')
            ->where('id_kelas', $id_kelas)
            ->get();

        $temp2[] = $standard_nilai;
        $standard_nilai_array[] = $temp2[0];

        // $dataArray[] = $detailNilai;

        // dd($biodata_mhs);
        return view('grade.gradeDetailMahasiswa', compact(['detailNilai'], ['detaillNilaiLimit1'], ['standard_nilai_array'], ['biodata_mhs']));
    }

    public function indexMahasiswa()
    {
        $mahasiswa = DB::table('vna2')
            ->select('nim', 'nama_mahasiswa')
            ->whereNotNull('nilai_akhir')
            ->groupBy('nim', 'nama_mahasiswa')
            ->limit(15)
            ->get();

        // dd($mahasiswa);

        return view('dashboard.indexMahasiswa', compact(['mahasiswa']));
    }
}
