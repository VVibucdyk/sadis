<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agama = Agama::all();
        $kelas = Kelas::all();
        return view('siswa.add')->with(array('agama'=>$agama,'kelas'=>$kelas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa        = new Siswa;
        $siswa->name  = $request->name;
        $siswa->nomor_induk   = $request->nomor_induk;
        $siswa->kelas = $request->kelas;
        $siswa->foto  = 'default.png';

        $siswa->save();
        return redirect('siswa')->with('message','Data berhasil diedit !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);

        if(!$siswa) {
            abort(404);
        }

        return view('siswa.detailSiswa')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        $agama = Agama::all();

        if(!$siswa) {
            abort(404);
        }

        return view('siswa.edit')->with(array('siswa' => $siswa, 'kelas' => $kelas, 'agama' => $agama));
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
        $siswa = Siswa::find($id);
        $siswa->name = $request->name;
        $siswa->nomor_induk = $request->nomor_induk;
        $siswa->kelas = $request->kelas;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        if (empty($request->file('foto'))) {
            $siswa->foto = $siswa->foto;
        } else {
            if ($siswa->foto > 0) {
                unlink('uploads/foto/'.$siswa->foto);
            }
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $newName = $newName = rand(100000,1001238912).".".$ext;
            $foto->move('uploads/foto',$newName);
            $siswa->foto = $newName;
        }

        $siswa->save();
        return redirect('siswa')->with('message','Data berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa')->with('message', 'Data berhasil dihapus');
    }
}
