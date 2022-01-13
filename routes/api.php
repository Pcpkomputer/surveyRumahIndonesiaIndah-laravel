<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post("/surveyor/riwayatsurvey/{id}", function (Request $request,$id){

    $riwayat = DB::select("SELECT surveyawal.*,surveyor.nama FROM surveyawal INNER JOIN surveyor 
    ON surveyor.id_surveyor=surveyawal.id_surveyor WHERE surveyawal.id_surveyor=? AND status IS NULL ORDER BY surveyawal.id_surveyawal DESC",[$id]);

    return $riwayat;
});

Route::post('/surveyor/insertsurveyawal', function (Request $request) {

    $payload = $request->payload;

    $year = date("Y");
    $month = date("m");
    $day = date("d");

    $id = "SRV-".$day.$month.$year."-".uniqid();


    $insert = DB::insert("INSERT INTO surveyawal VALUES (NULL,?,?,NOW(),?)",[$id,2,$payload]);
    
    return [
        "success"=>true,
        "msg"=>"Berhasil menyimpan survey awal"
    ];
});

Route::post('/surveyor/uploadfoto', function (Request $request) {
    
    $imageName = time().'.'.$request->file->getClientOriginalExtension();
    $label = $request->label;

    $lastImageName = $label.$imageName;

    $request->file->move(public_path('/assets/dokumentasi'), $lastImageName);
    
    return [
        "succes"=>true,
        "filename"=>$lastImageName
    ];
});

