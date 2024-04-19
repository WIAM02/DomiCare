<?php

namespace App\Http\Controllers;
use App\Models\profil;

use Illuminate\Http\Request;

class partenaireController extends Controller
{
    public function add_service(Request $request){
        $id = $request->id ;
        $data = profil::where('id_user','=',$id)->first();
        return view('add_service',compact('data'));
    }
}
