<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertsona;
use App\Models\etxea;

class PertsonaController extends Controller
{
    public function add_pertsona(Request $request){

        $request->validate([
            'izena' => 'required|min:3',
            'abizena' => 'required|min:3',
        ]);
    
        $per = new pertsona;
        $per->izena = $request->izena;
        $per->abizena = $request->abizena;
        $per->etxea_id = $request->etxea;
        $per->save();
    
        return redirect('/pertsonak');
    }

    
    public function show_pertsona(){
        $pertso = pertsona::all();
        $etxe = etxea::all();
        return view('pertsonak', ['pertso' => $pertso, 'etxe' => $etxe]);
  
        //return view('etxeak', ['etxe' => $etxe]);
    }

    
    public function delete_pertsona($id){
        $perts = pertsona::find($id);
        $perts->delete();
        return redirect('/pertsonak');
    }

/*
    public function editshow($id){
        $etxe = Etxea::find($id);   
        $etxedanak = Etxea::all();
        return view('etxeaedit', ['etxe' => $etxe, 'etxedanak' => $etxedanak]);
    }
    */
}
