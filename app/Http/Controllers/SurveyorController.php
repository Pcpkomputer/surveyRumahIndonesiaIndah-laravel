<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyorController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $surveyor = DB::select("SELECT * FROM surveyor");

        return view("Surveyor.surveyor",["surveyor"=>$surveyor]);
    }

    public function create(Request $request)
    {
        return view("Surveyor.surveyor-create");
    }

    public function update(Request $request, $id){

        $surveyor = DB::select("SELECT * FROM surveyor WHERE id_surveyor=?",[$id]);

        return view("Surveyor.surveyor-update",["surveyor"=>$surveyor]);
    }

    public function delete(Request $request, $id){

        //$delete = DB::delete("DELETE FROM surveyor WHERE id_surveyor=?",[$id]);

        return redirect("/surveyor")->with("alert-danger","Berhasil menghapus surveyor.");
    }


    public function create_data(Request $request){

        if($request->hasFile("foto")){

            $imageName = time().'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/assets/surveyor'), $imageName);

            $insert = DB::insert("INSERT INTO surveyor VALUES (NULL,?,?,?,?,?)",[$request->nama,$request->notelepon,$request->email,$request->password,$imageName]);

            return redirect("/surveyor")->with("alert-danger","Berhasil menambah surveyor.");
        }
        else{

            $insert = DB::insert("INSERT INTO surveyor VALUES (NULL,?,?,?,?,NULL)",[$request->nama,$request->notelepon,$request->email,$request->password]);

            return redirect("/surveyor")->with("alert-danger","Berhasil menambah surveyor.");
        }

 
    }
}