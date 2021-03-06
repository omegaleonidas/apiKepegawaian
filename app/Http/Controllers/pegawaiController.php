<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pegawaiModel;

class pegawaiController extends Controller
{
    public function __construct(){
        $this-> pegawaiModel = new pegawaiModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'pegawai' => $this->pegawaiModel->alldata(),
        ];
       // return   response()->json($data);
     return view ('pegawai.v_pegawai',$data);
    }
    
    public function print(){

        
        return view ('v_print');
    }

    public function detailpegawai($id_pegawai){

        if( !$this->pegawaiModel->detailData($id_pegawai)){
            abort(404);
        }
        $data = [
            'pegawai' => $this->pegawaiModel->detailData($id_pegawai),
        ];
        return view ('pegawai.v_detail_pegawai',$data);

    }

    public function tambah(){

        $agama = [
            'agama' => $this->pegawaiModel->AllDataAgama(),
        ];
        $dataJabatan = [
            'jabatan' => $this->pegawaiModel->allDataJabatan(),
        ];
   
        return view ('pegawai.v_pegawaiTambah',$agama,$dataJabatan);
    }

    public function insert(){
        

       Request()->validate([
            'nip' => 'required|unique:t_pegawai|min:5|max:255',
            'nama_pegawai' => 'required',
            'jabatan_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
            'tmp_lahir' => 'required',
            'gender' => 'required',
            'id_agama' => 'required',
            'pendidikan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png| max:1024',
        ],[

            'nip.required' => 'wajib di isi!',
            'nip.unique' => ' nip sudah ada! ',
            'nip.min' =>' nip kurang 5 huruf!',
            'nip.max' => ' nip lebih dari 255',
            'nama_pegawai.required' => ' wajib di isi',
            'jabatan_id.required' => ' wajib di isi',
            'email.required' => ' wajib di isi',
            'no_tlp.required' => ' wajib di isi',
            'alamat.required' => ' wajib di isi',
            'tgl_masuk.required' => ' wajib di isi',
            'tmp_lahir.required' => ' wajib di isi',
            'gender.required' => ' wajib di isi',
            'id_agama.required' => ' wajib di isi',
            'pendidikan.required' => ' wajib di isi',
            'foto.required' => ' wajib di isi',
            'foto.mimes' => ' harus bertype jpg,jpeg,bmp,png ',
        ]
    );

    //jika falidasi tidak ada maka simpan data
    //upload foto 


    $file= Request()->foto;
    $fileName = Request()->nip . '.' . $file->extension();
    $file->move(public_path('foto_pegawai'), $fileName);

    $data = [
        'nip' => Request()->nip,
        'nama_pegawai' =>  Request()->nama_pegawai,
        'jabatan_id' =>  Request()->jabatan_id,
        'email' =>  Request()->email,
        'no_tlp' =>  Request()->no_tlp,
        'alamat' =>  Request()->alamat,
        'tgl_masuk' => Request()->tgl_masuk,
        'tmp_lahir' => Request()->tmp_lahir,
        'gender' =>  Request()->gender,
        'id_agama' =>  Request()->id_agama,
        'pendidikan' =>  Request()->pendidikan,
        'foto'=>  $fileName,

    ];
    $this->pegawaiModel->addData($data);
    return redirect()->route('pegawai')->with('pesan','Data berhasil di simpan');
    }


    public function edit($id_pegawai){

        $data['pegawai'] = $this->pegawaiModel->detailData($id_pegawai);
        $data['agama'] = $this->pegawaiModel->AllDataAgama();
        $data['jabatan'] = $this->pegawaiModel->AllDataJabatan();
        
        return view('pegawai.v_pegawaiEdit', $data);

    }
    public function update($id_pegawai){

        Request()->validate([
            'nip' => 'required|min:5|max:255',
            'nama_pegawai' => 'required',
            'jabatan_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
            'tmp_lahir' => 'required',
            'gender' => 'required',
            'id_agama' => 'required',
            'pendidikan' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png| max:1024',
        ],[

            'nip.required' => 'wajib di isi!',
           
            'nip.min' =>' nip kurang 5 huruf!',
            'nip.max' => ' nip lebih dari 255',
            'nama_pegawai.required' => ' wajib di isi',
            'jabatan_id.required' => ' wajib di isi',
            'email.required' => ' wajib di isi',
            'no_tlp.required' => ' wajib di isi',
            'alamat.required' => ' wajib di isi',
            'tgl_masuk.required' => ' wajib di isi',
            'tmp_lahir.required' => ' wajib di isi',
            'gender.required' => ' wajib di isi',
            'id_agama.required' => ' wajib di isi',
            'pendidikan.required' => ' wajib di isi',
            
         
        ]
    );
     //jika falidasi tidak ada maka simpan data
     //upload foto 
 
     if(Request()-> foto <> ""){

        $file= Request()->foto;
        $fileName = Request()->nip . '.' . $file->extension();
        $file->move(public_path('foto_pegawai'), $fileName);
    
        $data = [
            'nip' => Request()->nip,
            'nama_pegawai' =>  Request()->nama_pegawai,
            'jabatan_id' =>  Request()->jabatan_id,
            'email' =>  Request()->email,
            'no_tlp' =>  Request()->no_tlp,
            'alamat' =>  Request()->alamat,
            'tgl_masuk' => Request()->tgl_masuk,
            'tmp_lahir' => Request()->tmp_lahir,
            'gender' =>  Request()->gender,
            'id_agama' =>  Request()->id_agama,
            'pendidikan' =>  Request()->pendidikan,
           
        ];
        $this ->pegawaiModel->editData($id_pegawai,$data);
       

     }else{

     
        $data = [
            'nip' => Request()->nip,
            'nama_pegawai' =>  Request()->nama_pegawai,
            'jabatan_id' =>  Request()->jabatan_id,
            'email' =>  Request()->email,
            'no_tlp' =>  Request()->no_tlp,
            'alamat' =>  Request()->alamat,
            'tgl_masuk' => Request()->tgl_masuk,
            'tmp_lahir' => Request()->tmp_lahir,
            'gender' =>  Request()->gender,
            'id_agama' =>  Request()->id_agama,
            'pendidikan' =>  Request()->pendidikan,
         
    
        ];
        $this ->pegawaiModel->editData($id_pegawai,$data);
     }
 
   
     return redirect()->route('pegawai')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_pegawai){


        $pegawai  = $this->pegawaiModel->detailData($id_pegawai);
        if($pegawai-> foto <> ""){
            unlink(public_path('foto_pegawai'). '/'. $pegawai->foto); 
        }
        $this ->pegawaiModel->deleteData($id_pegawai);
        return redirect()->route('pegawai')->with('pesan','Data berhasil di hapus');
     }

     public function ApiPegawaiShow(){

        $data = [
            'pegawai' => $this->pegawaiModel->alldata(),
        ];
        return   response()->json($data);
     }
    


     public function ApiPegawaiTambah(){


            $data = [
                'pegawai' => $this->pegawaiModel->alldata(),
            ];
        

        Request()->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jabatan_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
            'tmp_lahir' => 'required',
            'gender' => 'required',
            'id_agama' => 'required',
            'pendidikan' => 'required',
            'foto' => 'required',
        ],
    );

    //jika falidasi tidak ada maka simpan data
    //upload foto 

    // $filename = $request->input('foto');
    // $path= $request->file('foto')->move(public_path("/"),$filename);
    // $photoURL = url('/'.$filename);
    
    $data = [
        'nip' => Request()->nip,
        'nama_pegawai' =>  Request()->nama_pegawai,
        'jabatan_id' =>  Request()->jabatan_id,
        'email' =>  Request()->email,
        'no_tlp' =>  Request()->no_tlp,
        'alamat' =>  Request()->alamat,
        'tgl_masuk' => Request()->tgl_masuk,
        'tmp_lahir' => Request()->tmp_lahir,
        'gender' =>  Request()->gender,
        'id_agama' =>  Request()->id_agama,
        'pendidikan' =>  Request()->pendidikan,
        'foto'=>  Request()->foto,

    ];

    $this->pegawaiModel->addData($data);
    if ($data) {
            
        return response()->json([
            'success' => true,
            'message' => 'absen Berhasil Disimpan!',
            'data' => $data
        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'absen Gagal Disimpan!',
        ], 400);
    }


//     $pegawai = new pegawaiModel();
//     $pegawai->nip = $request->input('nip');
//     $pegawai->nama_pegawai = $request->input('nama_pegawai');
//     $pegawai->jabatan_id = $request->input('jabatan_id');
//     $pegawai->email = $request->input('email');
//     $pegawai->no_tlp = $request->input('no_tlp');
//     $pegawai->alamat = $request->input('alamat');
//     $pegawai->tgl_masuk = $request->input('tgl_masuk');
//     $pegawai->tmp_lahir = $request->input('tmp_lahir');
//     $pegawai->id_agama = $request->input('id_agama');
//     $pegawai->gender = $request->input('gender');
//     $pegawai->pendidikan = $request->input('pendidikan');
//     $filename = $request->input('foto');
//     $path= $request->file('foto')->move(public_path("/"),$filename);
//     $photoURL = url('/'.$filename);
//     $pegawai ->foto = $path;
    
//   //  $pegawai->foto = $request->input('foto');

//     $pegawai->save();
//     return response()->json( [$pegawai, "url" => $photoURL  ],201);



}

public function ApiPegawaiEdit($id_pegawai)
{
 
    Request()->validate([
        'nip' => 'required',
        'nama_pegawai' => 'required',
        'jabatan_id' => 'required',
        'email' => 'required',
        'no_tlp' => 'required',
        'alamat' => 'required',
        'tgl_masuk' => 'required',
        'tmp_lahir' => 'required',
        'gender' => 'required',
        'id_agama' => 'required',
        'pendidikan' => 'required',
       
    ]
);
 //jika falidasi tidak ada maka simpan data
 //upload foto 

 if(Request()-> foto <> ""){

    $file= Request()->foto;
    $fileName = Request()->nip . '.' . $file->extension();
    $file->move(public_path('foto_pegawai'), $fileName);

    $data = [
        'nip' => Request()->nip,
        'nama_pegawai' =>  Request()->nama_pegawai,
        'jabatan_id' =>  Request()->jabatan_id,
        'email' =>  Request()->email,
        'no_tlp' =>  Request()->no_tlp,
        'alamat' =>  Request()->alamat,
        'tgl_masuk' => Request()->tgl_masuk,
        'tmp_lahir' => Request()->tmp_lahir,
        'gender' =>  Request()->gender,
        'id_agama' =>  Request()->id_agama,
        'pendidikan' =>  Request()->pendidikan,
       
    ];
    $this ->pegawaiModel->editData($id_pegawai,$data);
   

 }
   
   if ($data) {
            
    return response()->json([
        'success' => true,
        'message' => 'absen Berhasil Disimpan!',
        'data' => $data
    ], 201);
} else {
    return response()->json([
        'success' => false,
        'message' => 'absen Gagal Disimpan!',
    ], 400);
}

}



   
}
