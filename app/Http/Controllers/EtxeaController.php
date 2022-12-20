<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etxea;

class EtxeaController extends Controller
{
    public function add_etxea(Request $request){

        $request->validate([
            'izena' => 'required|min:3',
        ]);
    
        $etxe = new etxea;
        $etxe->izena = $request->izena;
        $etxe->save();
    
        return redirect('/etxeak');
    }

    
    public function show_etxea(){
        $etxe = etxea::all();
        return view('etxeak', ['etxe' => $etxe]);
    }

    
    public function delete_etxea($id){
        $etxe = etxea::find($id);
        $etxe->delete();
        return redirect('/etxeak');
    }

    public function aldatuetxea($id){
        $etxe = etxea::find($id);
        return view('etxeakeditatu', ['etxe' => $etxe]);
    }

    public function aldatuetxeadb(Request $request, $id){
        $etxe = etxea::find($id);
        $etxe->izena = $request->izena;
        $etxe->save();
        return redirect('/etxeak');
    }
}
