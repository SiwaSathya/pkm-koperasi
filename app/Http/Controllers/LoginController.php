<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('login');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('pelaporan.index');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Kata sandi cocok, maka lakukan otentikasi
            Auth::login($user);
            $request->session()->regenerate();
            Alert::success('Berhasil', 'Silahkan Masuk');
            return  redirect()->route('pelaporan.index');
        } else {
            Alert::error('Gagal', 'Gagal Login: ');
            session()->flash('error', 'Email atau Password Salah');
            return redirect('/');
        }

    }

    public function forgetPassword(Request $request)
{
    $validator = Validator::make(
        $request -> all(),
      [
        'old_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required',
      ]);
      if ($validator->fails()) {
          dd($validator);
          return redirect()
              ->back()
              ->withErrors($validator)
              ->withInput();
      }

    $email = $request->input('email');
    $password=$request->input('old_password');
    $user = User::where('email', $email)->first();
    // $result= Hash::check($password, $user->password);
    // $resultnew = ;
    // dd($resultnew);

    if ( Hash::check($password, $user->password) && $request->input('new_password') === $request->input('confirm_password')) {
        $user->password = Hash::make($request->input('new_password'));
         // Mengganti password
        $user->save();
        Alert::success('Berhasil', 'Kata Sandi Berhasil Diubah');
        Auth::logout(); // Logout penggunaa
        return redirect('/')->with('success', 'Password berhasil diubah dan Anda telah logout.');
    }else{
        Alert::error('Gagal', 'Gagal Merubah Password');
        return redirect()->back();
    }

    return redirect()->route('koperasi.index');;

}

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
