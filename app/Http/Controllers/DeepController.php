<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tab;

class DeepController extends Controller
{
    //
    public function present(Request $req){
     //return Tab::all(); for view perpous from Database

     $tab = new Tab;
     $tab->name = $req->name;
     $tab->title = $req->title;
     $tab->address = $req->address;

     $result = $tab->save();

     if($result){
         return ["Result"=>"Data has been Saved"];
     } else {
        return ["Result"=>"Operation Failed"];
     }
 }
    public function update(Request $req){

        $tab = Tab::find($req->id);

        $tab->name = $req->name;
        $tab->title = $req->title;
        $tab->address = $req->address;


        $result = $tab->save();

        if($result){

            return ["Result"=>"Data has been Updated"];

        } else {
            return ["Result"=>"Data updation failed"];
        }


    }



}
