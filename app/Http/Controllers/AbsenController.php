<?php

namespace App\Http\Controllers;

use Carbon;
use App\Siswa;
use App\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::paginate(20);
        return view('absen.index', ['absen' => $absen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataSiswa = Siswa::all();
        return view('absen.add')->with('dataSiswa',$dataSiswa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list = Siswa::where('nomor_induk',$request->nomor_induk)->first();

        if($list){
            $absen = new Absen;
            $absen->nomor_induk = $list->nomor_induk;
            $absen->nama = $list->name;
            $absen->kelas = $list->kelas;

            $absen->save();
            $pesan = 'Data berhasil ditambahkan';
        } else{
            $pesan = 'Error, Nomor Induk tidak terdaftar';
        }

        return redirect('absen')->with('message',$pesan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $absen = Absen::where('nomor_induk',$id)->first();
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absen = Absen::where('nomor_induk',$id)->first();
        return view('absen.edit')->with('absen',$absen);
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
        $this->validate($request, [
            'nomor_induk' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $absen = Absen::where('nomor_induk',$id)->first();
        $absen->nomor_induk = $request->nomor_induk;
        $absen->nama = $request->nama;
        $absen->kelas = $request->kelas;

        $absen->save();
        return redirect('absen')->with('message','Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absen = Absen::find($id);
        $absen->delete();
        return redirect('absen')->with('message','Data telah dihapus!');
    }
}
