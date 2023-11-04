<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasi;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class KoperasiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $profile = Koperasi::where('user_id', $user->id)->first();
        if ($user->role == 'user'){
            $koperasi = Koperasi::where('user_id', $user->id)->first();
            return redirect()->route('profile.detail',['id' => $koperasi->id]);
        }
        $koperasis = Koperasi::get();
        $tittle = "test";
        return view('koperasi.index', ['tittle' => $tittle, 'koperasis' => $koperasis, 'user' => $user, 'profile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
            'nama_koperasi' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'catatan' => 'required',
          ]);
          if ($validator->fails()) {
              dd($validator);
              return redirect()
                  ->back()
                  ->withErrors($validator)
                  ->withInput();
          }
            try{
                $password = Hash::make("password");
                $user = User::create([
                    'name' => $request->nama_koperasi,
                    'email' => $request->email,
                    'role' => "user",
                    'password' => $password,
                ]);


                if ($request->status_koperasi === "1. Aktif"){
                    $isaktif = 1;
                }else{
                    $isaktif = 0;
                }


                Koperasi::create([
                    'user_id' => $user->id,
                    'badan_hukum_tanggal' => $request->badan_hukum_tanggal,
                    'badan_hukum_nomor' => $request->badan_hukum_nomor,
                    'badan_hukum_pengesahan_id' => $request->badan_hukum_pengesahan_id,
                    'tempat' => $request->tempat,
                    'pembuat_akta' => $request->pembuat_akta,
                    'npwp' => $request->npwp,
                    'alamat' => $request->alamat,
                    'provinsi' => $request->provinsi,
                    'kabupaten_kota' => $request->kabupaten,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan_desa' => $request->kelurahan,
                    'kode_pos' => $request->kode_pos,
                    'no_hp' => $request->no_hp,
                    'no_tlp' => $request->no_tlp,
                    'no_fax' => $request->no_fax,
                    'website' => $request->website,
                    'catatan' => $request->catatan,
                    'status_koperasi' => $request->status_koperasi,
                    'koperasi_skala_besar' => $request->koperasi_skala_besar,
                    'kelompok' => $request->kelompok,
                    'sektor_usaha' => $request->sektor_usaha,
                    'bentuk' => $request->bentuk,
                    'jenis' => $request->jenis,
                    'isaktif' => $isaktif,
                ]);


                Alert::success('Berhasil', 'Koperasi Berhasil Ditambahkan');
                return redirect()->route('koperasi.index');
            }catch (\Exception $e) {
                Alert::error('Gagal', 'Koperasi Gagal Ditambahkan: ' . $e->getMessage());
                return redirect()->back();
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
