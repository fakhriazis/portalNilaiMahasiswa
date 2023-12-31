<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas = DB::table('bobot')->orderBy('id_bobot')->paginate(10);
        return view('kelas.index', compact('kelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);

        Bobot::create($request->all());

        return redirect()->route('kelas.index')
            ->with('success', 'Data Kelas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bobot  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Bobot $kelas)
    {
        //

        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bobot  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Bobot $kelas)
    {
        //
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bobot $id_kelas)
    {
        //
        $validatedData = $request->validate([
            'id_kelas' => 'required',
            'id_komponen' => 'required',
            'bobot' => 'required',
        ]);

        Bobot::where('id_bobot', '=', $id_kelas)->update($validatedData);

        dd($id_kelas);

        return redirect()->route('dashboard')
            ->with('success', 'Data Kelas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bobot $kelas)
    {
        //
        DB::beginTransaction();
        try {
            DB::table('jadwal')
                ->where('id_kelas', '=', $kelas)
                ->delete();
            $kelas->delete();
            DB::commit();
            return redirect()->route('kelas.index')
                ->with('success', 'Data Kelas deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('kelas.index')
                ->with('failed', 'Data Kelas fail deleted');
        }
    }
}
