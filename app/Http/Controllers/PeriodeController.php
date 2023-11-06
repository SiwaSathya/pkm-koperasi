<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tahun' => 'required',
            'tgl_awal' => 'required|date',
            'tgl_akhir' => 'required|date',
          ]);
          if ($validator->fails()) {
              dd($validator);
              return redirect()
                  ->back()
                  ->withErrors($validator)
                  ->withInput();
          }

          try{
            Periode::create([
                'tahun' => $request->tahun,
                'tgl_awal' => $request->tgl_awal,
                'tgl_akhir' => $request->tgl_akhir,
            ]);


            Alert::success('Berhasil', 'Periode Berhasil Dibuat');
            return redirect()->back();
        }catch (\Exception $e) {
            Alert::error('Gagal', 'Periode Gagal Dibuat: ' . $e->getMessage());
            return redirect()->back();
            }
    }

    public function setDeletedatNotNull()
    {
        $dataToUpdate = Periode::whereNull('deleted_at')->get();

        // Loop melalui setiap data dan ubah nilai deleted_at
        foreach ($dataToUpdate as $data) {
            $data->update(['deleted_at' => Carbon::now()]);
        }

        return redirect()->route("pelaporan.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $periode)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(Periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periode $periode)
    {
        //
    }
}
