<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class PelaporanController extends Controller
{
    public function __construct()
    {
        $this->storage="/public/pdf/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelaporans = Pelaporan::get();
        $tittle = "test";
        return view('laporan.index', with(['tittle' => $tittle]),  ['pelaporans'=>$pelaporans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tittle = "Laporan";
        return view('laporan.tambah', with(['tittle' => $tittle]));
    }

    public function detail($id)
    {
        $tittle = "Detail Laporan";
        $pelaporans = Pelaporan::find($id);
        return view('laporan.detail', with(['tittle'=>$tittle]), ['pelaporans'=>$pelaporans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
          $request -> all(),
        [
            'deskripsi*' => 'required',
            'file*' => 'file',
        ]);
        if ($validator->fails()) {
            dd($validator);
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        $files = $request->file('file');
        $deskripsi = $request->input('deskripsi');
        $filename = [];
        foreach ($files as $file){
            $filename = $file->getFilename();
            Storage::putFileAs($this->storage, $file, $filename);
            $filenameArr[] = $filename;
        }
        // dd($files, $deskripsi);
        $data = array_map(function ($filenameArr, $deskripsi) {
            return [
                'deskripsi' => $deskripsi,
                'file' => $filenameArr,
            ];
        }, $filenameArr, $deskripsi);

        foreach ($data as $entry) {
            Pelaporan::create([
                'keterangan' => $entry['deskripsi'],
                'file' => $entry['file'],
                'status' => 0
            ]);
        }


        // Redirect ke halaman index
        return redirect()->route('pelaporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelaporan $pelaporan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaporan $pelaporan)
    {
        //
    }
}
