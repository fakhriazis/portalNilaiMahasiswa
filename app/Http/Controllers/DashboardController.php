<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Dosen_ampu;
use App\Models\Kontrak;
use App\Models\Nilai;
use App\Models\Kelas;
use App\Models\Mhs_kontrak_matkul;
use App\Models\Ref_mata_kuliah;
use App\Models\Ref_semester;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah mata kuliah yang di ampu dosen
        $countMk = Dosen_ampu::join('dosen', 'dosen_ampu.id_dosen', '=', 'dosen.id_dosen')
            ->join('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
            ->where('dosen_ampu.id_dosen', '=', '1')
            ->where('kelas.id_semester', '=', '3')
            ->select(DB::Raw('COUNT(id_mata_kuliah) as count_mk'))
            ->get();

        // $countMk = Kontrak::select(DB::Raw('COUNT(nim) as count_mk'))
        //     ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
        //     ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
        //     ->join('dosen', 'dosen.id_dosen', 'dosen_ampu.id_dosen')
        //     ->where('dosen.id_dosen', '=', '1')
        //     ->get();

        // //Hitung jumlah mahasiswa yang di ajar dosen
        // $countMahasiswa = Kontrak::where('id_kelas', '=', '4')
        //     ->select(DB::Raw('COUNT(nim) as count_mhs'))
        //     ->get();

        $countMahasiswa = Kontrak::select(DB::Raw('COUNT(nim) as count_mhs'))
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->join('dosen_ampu', 'dosen_ampu.id_dosen_ampu', '=', 'kelas.id_dosen_ampu')
            ->join('dosen', 'dosen.id_dosen', 'dosen_ampu.id_dosen')
            ->where('dosen.id_dosen', '=', '1')
            ->where('kelas.id_semester', '=', '3')
            ->get();

        //Menampilkan data detail mata kuliah yang di ampu dosen
        $dashboard = DB::table('dashboard_v2')
            ->select('*')
            ->where('id_semester', '=', '3')
            ->where('id_dosen', '=', '1')
            ->get();

        // dd($dashboard[0]->semester);

        // $dashboard = Dosen_ampu::leftJoin('kelas', 'kelas.id_dosen_ampu', '=', 'dosen_ampu.id_dosen_ampu')
        //     ->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah', '=', 'dosen_ampu.id_mata_kuliah')
        //     ->leftJoin('semester', 'semester.id_semester', '=', 'kelas.id_semester')
        //     ->leftJoin('kontrak', 'kontrak.id_kelas', '=', 'kelas.id_kelas')
        //     ->join('mahasiswa', 'mahasiswa.nim', '=', 'kontrak.nim')
        //     ->join('dosen', 'dosen.id_dosen', '=', 'dosen_ampu.id_dosen')
        //     ->where('dosen_ampu.id_dosen', '=', '1')
        //     ->groupBy('kelas.id_kelas', 'dosen_ampu.id_mata_kuliah', 'dosen.nama_dosen', 'mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', 'semester.semester')
        //     ->select('kelas.id_kelas', 'dosen.nama_dosen', 'mata_kuliah.id_mata_kuliah', 'mata_kuliah.kode_mata_kuliah', 'mata_kuliah.nama_mata_kuliah', 'mata_kuliah.sks', DB::Raw('COUNT(mahasiswa.nim) as jml'), 'semester.semester')
        //     ->get();

        $countPresentase = Nilai::select('*')
            ->join('kontrak', 'kontrak.id_kontrak', '=', 'nilai.id_kontrak')
            ->join('kelas', 'kelas.id_kelas', '=', 'kontrak.id_kelas')
            ->where('kelas.id_kelas', '=', 4)
            ->get();

        // $dashboard = Dosen_ampu::join('dosen', 'dosen_ampu.id_dosen', '=', 'dosen.id_dosen')
        //     ->join('ref_mata_kuliah', 'dosen_ampu.id_matakuliah', '=', 'ref_mata_kuliah.id_matkul')
        //     ->leftJoin('mhs_kontrak_matkul', 'mhs_kontrak_matkul.id_matkul', '=', 'ref_mata_kuliah.id_matkul')
        //     ->join('ref_semester', 'ref_semester.id_semester', '=', 'dosen_ampu.id_semester') //menampilkan data mata kuliah berdasarkan semester
        //     ->groupBy('ref_mata_kuliah.kode_matkul', 'ref_mata_kuliah.nama_matkul', 'ref_mata_kuliah.sks', 'ref_semester.semester', 'ref_mata_kuliah.id_matkul')
        //     ->select('kode_matkul', 'nama_matkul', 'sks', DB::Raw('COUNT(mhs_kontrak_matkul.id_mahasiswa) as jml'), 'semester', 'ref_mata_kuliah.id_matkul')
        //     ->get();

        //data chart perolehan nilai======================================================
        $perolehanNilai = DB::select("
            SELECT
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('A', 'A-')) AS A,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('B+', 'B', 'B-')) AS B,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('C', 'C-')) AS C,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('D')) AS D,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('E')) AS E,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('BL')) AS BL,
                (SELECT COUNT(mutu) as jml FROM dashboard_dosen_ampu WHERE id_dosen = 1 AND mutu IN ('K')) AS K;
             ");

        $nilai = [];

        foreach ($perolehanNilai as $row) {
            $nilai['A'] = $row->A;
            $nilai['B'] = $row->B;
            $nilai['C'] = $row->C;
            $nilai['D'] = $row->D;
            $nilai['E'] = $row->E;
            $nilai['BL'] = $row->BL;
            $nilai['K'] = $row->K;
        }

        //========================================================================

        // dd($row->A, $row->B, $row->C, $row->D, $row->E, $row->BL, $row->K);
        // dd($nilai);
        // dd($countMahasiswa);
        return view(
            'dashboard.index',
            compact(['dashboard'], ['countMk'], ['countMahasiswa'], ['perolehanNilai'], ['nilai'])
        );
    }
}
