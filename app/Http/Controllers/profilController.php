<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class profilController extends Controller
{
    public function afficher_profil(Request $request){
        $id = $request->id ;
        $data = profil::where('id_user','=',$id)->first();
        return view('profil',compact('data'));
    }

    public function update_profil(Request $request){
        $id = $request->id ;
        $data = profil::where('id_user','=',$id)->first();
        return view('profil_update',compact('data'));
    }
    //
}
