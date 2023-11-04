<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Periode;
use App\Models\Koperasi;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


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

     public function detail_api($id) {
        // $active = "active";
        // $user = auth()->user();
        // $profile = Koperasi::where('user_id', $user->id)->first();
        // $records = Periode::whereNull('deleted_at')->first();
        $pelaporans = Pelaporan::find($id);
        // $records = Periode::whereNull('deleted_at')->first();
        // $periode = Periode::where('id', $pelaporans->periode_id)->first();
        // $tittle = "Detail Laporan";

        return response()->json([
            // 'tittle'=>$tittle,
            'pelaporans'=> $pelaporans,
            // 'records'=> $records,
            // 'periode'=>$periode,
            // 'user'=>$user,
            // 'profile'=>$profile
        ],200);
        // return view('laporan.detail', with(['tittle'=>$tittle]), ['pelaporans'=>$pelaporans, 'records'=> $records, 'periode'=>$periode, 'user'=>$user, 'profile'=>$profile]);
     }

    public function index()
    {
        $active = "active";
        $user = auth()->user();
        $profile = Koperasi::where('user_id', $user->id)->first();
        if ($user->role == 'user'){
            $koperasi = Koperasi::where('user_id', $user->id)->first();
            return redirect()->route('profile.detail',['id' => $koperasi->id]);
        }
        $pelaporans = Pelaporan::whereHas('periode', function ($query) {
            $query->whereNull('deleted_at');
        })->get();
        $pelaporanAll = Pelaporan::get();
        // dd($pelaporanAll);
        $periode_id = "0";
        $periode = Periode::where('id', $periode_id)->first();
        $tittle = "test";
        $records = Periode::whereNull('deleted_at')->first();
        $title = 'Akhiri Periode';
        $text = "Apakah anda yakin untuk mengakhiri periode?";
        $periodenotnull = Periode::whereNotNull('deleted_at')->get();
        confirmPeriode($title, $text);
        return view('laporan.index', with(['tittle' => $tittle]), ['pelaporans'=>$pelaporans, 'records'=> $records, 'periodenotnull' => $periodenotnull, 'periode' => $periode, 'pelaporanAll' => $pelaporanAll, 'user'=>$user, 'active' => $active, 'profile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $profile = Koperasi::where('user_id', $user->id)->first();
        $periode = Periode::whereNull('deleted_at')->get();
        $tittle = "Laporan";
        return view('laporan.tambah', with(['tittle' => $tittle]) ,['periode' => $periode, 'user' => $user, 'profile' => $profile]);
    }

    public function detail($id)
    {
        $active = "active";
        $user = auth()->user();
        $profile = Koperasi::where('user_id', $user->id)->first();
        $records = Periode::whereNull('deleted_at')->first();
        $pelaporans = Pelaporan::find($id);
        $records = Periode::whereNull('deleted_at')->first();
        $periode = Periode::where('id', $pelaporans->periode_id)->first();
        $tittle = "Detail Laporan";
        return view('laporan.detail', with(['tittle'=>$tittle]), ['pelaporans'=>$pelaporans, 'records'=> $records, 'periode'=>$periode, 'user'=>$user, 'profile'=>$profile]);
    }

    public function updateRevisi(Request $request)
    {
        $data = Pelaporan::find($request->id);
        $data->update([
            'keterangan_verifikator' => $request->keterangan,
            'status' => 1,
        ]);
        Alert::success('Berhasil', 'Laporan Berhasil Diupdate');
        return redirect()->back();
    }

    public function updateRevisiTrue(Request $request)
    {
        $data = Pelaporan::find($request->id);
        $data->update([
            'keterangan_verifikator' => $request->keterangan,
            'status' => 2,
        ]);
        Alert::success('Berhasil', 'Laporan Berhasil Diupdate');
        return redirect()->back();
    }

    public function updateRevisiToZero(Request $request)
    {
        $validator = Validator::make(
            $request -> all(),
          [
            'file' => 'file',
          ]);
          if ($validator->fails()) {
              dd($validator);
              return redirect()
                  ->back()
                  ->withErrors($validator)
                  ->withInput();
          }
          $data = Pelaporan::find($request->id);
          if (Storage::exists($this->storage, $data->file )) {
              Storage::delete($this->storage, $data->file );
        }

        $files = $request->file('file');
        $filename =  time()."_".$files->getClientOriginalName();
        Storage::putFileAs($this->storage, $files, $filename);
        $data->update([
            'keterangan' => $request->keterangan,
            'file' => $filename,
            'status'=> 0,
        ]);
        Alert::success('Berhasil', 'Laporan Berhasil Diupdate');
        return redirect()->back();






    }

    public function showPelaporan(Request $request)
    {
        $user = auth()->user();
        if($request->periode_id == ""){
            return redirect()->route('pelaporan.index');
        }
        $tittle = "Detail Laporan";

        $pelaporanAll = Pelaporan::where('periode_id', $request->periode_id)->get();
        $records = Periode::whereNull('deleted_at')->first();
        $periode = Periode::where('id', $request->periode_id)->first();
        $title = 'Akhiri Periode';
        $text = "Apakah anda yakin untuk mengakhiri periode?";
        confirmPeriode($title, $text);
        $periodenotnull = Periode::whereNotNull('deleted_at')->get();
        return view('laporan.index', with(['tittle' => $tittle]), ['pelaporanAll'=>$pelaporanAll, 'records'=> $records, 'periodenotnull' => $periodenotnull, 'periode' => $periode, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $profile = Koperasi::where('user_id', $user->id)->first();
        if($request !=null){
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
        $records = Periode::whereNull('deleted_at')->first();
        $user = auth()->user();
        $koperasi = Koperasi::where('user_id',$user->id )->first();
        foreach ($files as $file)
        {
            $filename =  time()."_".$file->getClientOriginalName();
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
    try{
        foreach ($data as $entry) {
            $err = Pelaporan::create([
                'keterangan' => $entry['deskripsi'],
                'file' => $entry['file'],
                'periode_id' => $records->id,
                'koperasi_id' => $koperasi->id,
                'status' => 0
            ]);

        }

        Alert::success('Berhasil', 'Laporan Berhasil Ditambahkan');
        // Redirect ke halaman index
        return redirect()->route('profile.detail', ['id' => $profile->id]);
    }catch (\Exception $e) {
    Alert::error('Gagal', 'Laporan Gagal Ditambahkan: ' . $e->getMessage());
    return redirect()->back();
    }
}else{
     return redirect()->back();
}
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
