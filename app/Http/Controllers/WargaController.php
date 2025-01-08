<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{
    public function index()
    {
        $rows = Warga::with('warga')->get();
        return view('warga.index', compact('rows'));
    }

    public function create()
    {
        $warga = warga::all();
        return view('warga.create', compact('warga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'warga_id' => 'required|exists:tb_warga,id_warga',
        ]);

        Warga::create($request->all());
        return redirect()->route('warga.index')->with('success', 'Warga berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $row = Warga::findOrFail($id);
        $warga = warga::all();
        return view('warga.edit', compact('row', 'warga'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'warga_id' => 'required|exists:tb_warga,id_warga',
        ]);
        $warga->role = $request->role;
        $warga->save();


        $row = Warga::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('warga.index')->with('success', 'Warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $row = Warga::findOrFail($id);
        $row->delete();
        return redirect()->route('warga.index')->with('success', 'Warga berhasil dihapus.');
    }
}
