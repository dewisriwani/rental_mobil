<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    function index()
    {
        $merkData = merk::get();

        return view('pages.merk.index',['merkData' => $merkData]);
    }

    function create()
    {
        return view('pages.merk.create');
    }
    function store(Request $request)
    {
        $merkData = new Merk;
        $merkData->merk = $request->merk;
        $merkData->save();
        return redirect()->to('/merk')->with('success', 'data sukses disimpan');
    }

    function formEdit($id)
    {
        $merkData = merk::find($id);
        return view('pages.merk.form_edit', ['merkData' => $merkData]);
    }

    function update($id, request $request)
    {
     $merkData = merk::find($id);
     $merkData->merk = $request->merk;
     $merkData->save();

     return redirect()->to('/merk')->with('success', 'Data merk sukses diubah');

    }

    function delete($id)
    {
        $merkData = merk::find($id);
        $merkData->delete();

        return redirect()->to('/merk')->with('success', 'Data merk sukses dihapus');
    }

}