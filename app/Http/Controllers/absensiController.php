<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\absensimodel;

class absensiController extends Controller
{
    public function __construct(){
        $this-> absensiModel = new absensiModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensi.v_absensi',$data);
    }

    public function detailAbsensi($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];
        return view ('absensi.v_detailabsensi',$data);

    }

    public function edit($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];

        return view ('absensi.v_absensiEdit',$data);
    }




    public function update($id_absensi){

        Request()->validate([
             'id_pegawai' => 'required',
             'tanggal' => 'required',
             'jam_masuk' => 'required',
             'jam_selesai' => 'required',
             'alamat' => 'required',
             'keterangan' => 'required',
             
         ],[
 
             'id_pegawai.required' => 'wajib di isi!',
              'tanggal.required' => ' wajib di isi',
              'jam_masuk.required' => ' wajib di isi',
              'jam_selesai.required' => ' wajib di isi',
              'alamat.required' => ' wajib di isi',
              'keterangan.required' => ' wajib di isi',
                          
         ]
     );
 
     //jika falidasi tidak ada maka simpan data

        
        $data = [
            'id_pegawai' => Request()->id_pegawai,
            'tanggal' => Request()-> tanggal,
            'jam_masuk' => Request()-> jam_masuk ,
            'jam_selesai' => Request()-> jam_selesai ,
            'alamat' => Request()-> alamat ,
            'keterangan' => Request()-> keterangan ,
         
    
        ];
        $this ->absensiModel->editData($id_absensi,$data);
     
 
   
     return redirect()->route('absensi')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_absensi){


        $absensi  = $this->absensiModel->detailData($id_absensi);
     
        $this ->absensiModel->deleteData($id_absensi);
        return redirect()->route('absensi')->with('pesan','Data berhasil di hapus');
     }

     public function dataAbsensi(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensi.v_absensi',$data);
    }
     public function ApiAbsensiShow()
     {
       $data = [
           'absensi' => $this ->absensiModel->alldata(),
        ];

       if ($data) {
            
        return response()->json([
            'success' => true,
            'message' => 'informasi ditampilkan !',
            'data' => $data
        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'informasi tidak ditampilkan',
        ], 400);
    }

     }

   
}
