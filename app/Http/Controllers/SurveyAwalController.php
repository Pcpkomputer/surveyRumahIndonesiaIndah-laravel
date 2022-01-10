<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SurveyAwalController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $surveyawal = DB::select("SELECT surveyawal.*,surveyor.nama FROM surveyawal 
        INNER JOIN surveyor ON surveyor.id_surveyor=surveyawal.id_surveyor");

        return view("SurveyAwal.surveyawal",["surveyawal"=>$surveyawal]);
    }

    // public function create(Request $request)
    // {
    //     return view("Surveyor.surveyor-create");
    // }

    // public function update(Request $request, $id){

    //     $surveyor = DB::select("SELECT * FROM surveyor WHERE id_surveyor=?",[$id]);

    //     return view("Surveyor.surveyor-update",["surveyor"=>$surveyor]);
    // }

    // public function delete(Request $request, $id){

    //     $delete = DB::delete("DELETE FROM surveyor WHERE id_surveyor=?",[$id]);

    //     return redirect("/surveyor")->with("alert-primary","Berhasil menghapus data surveyor.");
    // }


    // public function create_data(Request $request){

    //     if($request->hasFile("foto")){

    //         $imageName = time().'.'.$request->foto->getClientOriginalExtension();
    //         $request->foto->move(public_path('/assets/surveyor'), $imageName);

    //         $insert = DB::insert("INSERT INTO surveyor VALUES (NULL,?,?,?,?,?)",[$request->nama,$request->notelepon,$request->email,$request->password,$imageName]);

    //         return redirect("/surveyor")->with("alert-primary","Berhasil menambah data surveyor.");
    //     }
    //     else{

    //         $insert = DB::insert("INSERT INTO surveyor VALUES (NULL,?,?,?,?,NULL)",[$request->nama,$request->notelepon,$request->email,$request->password]);

    //         return redirect("/surveyor")->with("alert-primary","Berhasil menambah data surveyor.");
    //     }

 
    // }


    // public function update_data(Request $request, $id){

    //     if($request->hasFile("foto")){

    //         $file = DB::select("SELECT * FROM surveyor WHERE id_surveyor=?",[$id]);

    //         if(empty($file[0]->foto)==false){
    //                if(File::exists(public_path('assets/surveyor/'.$file[0]->foto))){
    //                     File::delete(public_path('assets/surveyor/'.$file[0]->foto));
    //                 }
    //         }
        
    //         $imageName = time().'.'.$request->foto->getClientOriginalExtension();
    //         $request->foto->move(public_path('/assets/surveyor'), $imageName);

    //         $insert = DB::insert("UPDATE surveyor SET nama=?,notelepon=?,email=?,password=?,foto=? WHERE id_surveyor=?",[$request->nama,$request->notelepon,$request->email,$request->password,$imageName,$id]);

    //         return redirect("/surveyor")->with("alert-primary","Berhasil mengubah data surveyor.");

    //     }
    //     else{

    //         $insert = DB::insert("UPDATE surveyor SET nama=?,notelepon=?,email=?,password=? WHERE id_surveyor=?",[$request->nama,$request->notelepon,$request->email,$request->password,$id]);

    //         return redirect("/surveyor")->with("alert-primary","Berhasil mengubah data surveyor.");

    //     }
    // }
}