<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;

class ApiPegawai extends Controller
{
    public function create(Request $request){
  
        $pegawai = new guru();
        
        $pegawai->nip = $request->input('nip');
        $pegawai->nama_peg = $request->input('jabatan_id');
        $pegawai->mengajar = $request->input('mengajar');
        $pegawai->no_tlp = $request->input('no_tlp');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->tgl_masuk = $request->input('tgl_masuk');
        $pegawai->tmp_lahir = $request->input('tmp_lahir');
        $pegawai->agama = $request->input('agama');
        $pegawai->pendidikan = $request->input('pendidikan');
        $pegawai->password = $request->input('password');
        $pegawai->password = $request->input('password');
        $pegawai->foto = $request->input('foto');

        $pegawai->save();
        return response()->json($pegawai);
    }

    public function show(){

        $pegawai = guru::all();
        return response()->json($pegawai);
    }

    public function showById($id_pegawai)
    {
        $pegawai = guru::find($id_pegawai);
        return response()->json($pegawai);
    }

    public function updateById(Request $request, $id){

        $pegawai->nip = $request->input('nip');
        $pegawai->nama_peg = $request->input('jabatan_id');
        $pegawai->mengajar = $request->input('mengajar');
        $pegawai->no_tlp = $request->input('no_tlp');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->tgl_masuk = $request->input('tgl_masuk');
        $pegawai->tmp_lahir = $request->input('tmp_lahir');
        $pegawai->agama = $request->input('agama');
        $pegawai->pendidikan = $request->input('pendidikan');
        $pegawai->password = $request->input('password');
        $pegawai->password = $request->input('password');
        $pegawai->foto = $request->input('foto');

        $pegawai-> save();
        return response()->json($pegawai);

    }

    public function deleteById(Request $request, $id){

        $pegawai = guru::find($id);
        $pegawai->delete();
        return response()->json($pegawai);  
    }

}
