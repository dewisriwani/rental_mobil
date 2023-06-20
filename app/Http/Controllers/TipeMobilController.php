<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipe_mobil.index',['tipeMobilData' => $tipeMobilData]);
    }
    function create()
    {
        return view('pages.tipe_mobil.create');
    }
    function store(request $request)
    {
        $tipeMobilData = new TipeMobil;
        $tipeMobilData->tipe = $request->tipe;
        $tipeMobilData->save();

        return redirect()->to('/tipemobil')->with(['success','Data tipe berhasil ditambahkan']);
    }

    function formedit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.form_edit', ['tipeMobilData' => $tipeMobilData]);
    
    }

    function update($id, request $request)
    {
        $tipeMobilData = TipeMobil::find($id); 
        $tipeMobilData->tipe=$request->tipe;
        $tipeMobilData->save();

        return redirect()->to('/tipemobil')->with('success','Data tipe berhasil diupdate');
    }

    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();

        return redirect()->to('/tipemobil')->with('success','Data tipe berhasil dihapus');

    }
}
