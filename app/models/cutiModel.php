<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cutiModel extends Model
{

    protected $table = "t_cuti";
    protected $primaryKey = 'id_cuti';
    protected $fillable = [
        'cuti'
    ];

    public function allData(){
        return  DB::table('t_cuti')->get();
      }
      
      public function detailData($id_cuti){
          return  DB::table('t_cuti')->where('id_cuti', $id_cuti)->first();
  
      }
      public function editData($id_cuti,$data){
        return  DB::table('t_cuti')  ->where('id_cuti',$id_cuti) ->update($data);
    }
  
    public function deleteData($id_cuti){
        return  DB::table('t_cuti')  ->where('id_cuti',$id_cuti) ->delete();
    }

    public function addData($data){
        return  DB::table('t_cuti')->insert($data);
    }
}
