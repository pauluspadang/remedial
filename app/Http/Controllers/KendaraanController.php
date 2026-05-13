<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = Kendaraan::all();
        return view('kendaraan.index', compact('data'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect('/kendaraan');
    }

    public function edit($id)
    {
        $k = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('k'));
    }

    public function update(Request $request, $id)
    {
        $k = Kendaraan::findOrFail($id);
        $k->update($request->all());
        return redirect('/kendaraan');
    }

    public function destroy($id)
    {
        $k = Kendaraan::findOrFail($id);
        $k->delete();
        return redirect('/kendaraan');
    }
}