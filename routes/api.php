<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\pegawaiController; 
use App\Http\Controllers\ApiPegawai;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\cutiController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\informasiController;




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get('/pegawaiShow',[pegawaiController::class,'ApiPegawaiShow']);;    
    Route::post('/pegawaiTambah',[pegawaiController::class,'ApiPegawaiTambah']);;
    Route::post('/ApiCutiTambah',[cutiController::class,'ApiCutiTambah']);;
    Route::post('/ApiJabatanAdd',[jabatanController::class,'ApiJabatanAdd']);;
    Route::get('/ApiInformasiShow',[informasiController::class,'ApiInformasiShow']);;

    //crud student
    // Route::post('/create', [FormController::class, 'create']);
    // Route::get('/edit/{id}', [FormController::class, 'edit']);
    // Route::post('/edit/{id}', [FormController::class, 'update']);
    // Route::get('/delete/{id}', [FormController::class, 'delete']);

    //crud score with relation to student
    // Route::post('/create-score-student', [ScoreController::class, 'create']);

    Route::get('/logout', [AuthController::class, 'logout']);
});



Route::post('/login', [AuthController::class, 'login']);



//Route::get('/pegawaiShow',[pegawaiController::class,'ApiPegawaiShow']);;
