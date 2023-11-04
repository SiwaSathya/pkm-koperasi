<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Profile;
use App\Models\Koperasi;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = "test";
        return view('profile.index', with(['tittle' => $tittle]));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showDetail($id)
    {
        $user = auth()->user();
        $records = Periode::whereNull('deleted_at')->first();
        if (!empty($records) && $user->role == "user"){
            Alert::toast('Periode Telah Dibuka','info');
        }elseif(empty($records) && $user->role == "user"){
            Alert::toast('Periode Belum Dibuka','info');

        }
        $profile = Koperasi::where('user_id', $user->id)->first();
        $tittle = "Profile";
        $koperasis = Koperasi::find($id);
        $pelaporan = Pelaporan::where('koperasi_id', $id)->with('periode')->get();
        $pelaporanTimeLine = Pelaporan::where('koperasi_id', $id)
        ->with(['periode' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])
        ->orderBy('created_at', 'desc')
        ->get();
        $pelaporanRev = Pelaporan::where('koperasi_id', $id)->where('status', 2)->get();
        return view('profile.index', ['koperasis' => $koperasis, 'tittle' => $tittle, 'pelaporan' => $pelaporan, 'pelaporanRev' => $pelaporanRev, 'pelaporanTimeLine' => $pelaporanTimeLine, 'user'=>$user, 'profile'=> $profile]);
    }

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
