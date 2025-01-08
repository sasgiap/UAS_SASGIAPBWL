<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    // Show all Dusun records
    public function index()
    {
        $dusun = Dusun::all(); // Fetch all Dusun records
        return view('dusun.index', compact('dusun'));
    }

    // Show the form for creating a new Dusun
    public function create()
    {
        return view('dusun.create');
    }

    // Store a new Dusun record
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_dusun' => 'required|string|unique:tb_dusun,nama_dusun|max:100',
        ]);

        // Create the Dusun record
        Dusun::create($request->all());

        // Redirect with success message
        return redirect()->route('dusun.index')->with('success', 'Dusun berhasil ditambahkan!');
    }

    // Show the form for editing the Dusun
    public function edit($id)
    {
        // Find Dusun by ID
        $dusun = Dusun::findOrFail($id);
        
        // Return the edit view with Dusun data
        return view('dusun.edit', compact('dusun'));
    }

    // Update the Dusun record
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_dusun' => 'required|string|max:100|unique:tb_dusun,nama_dusun,' . $id . ',id_dusun',
        ]);

        // Find Dusun by ID and update it
        $dusun = Dusun::findOrFail($id);
        $dusun->update($request->all());

        // Redirect with success message
        return redirect()->route('dusun.index')->with('success', 'Dusun berhasil diperbarui!');
    }

    // Delete the Dusun record
    public function destroy($id)
    {
        // Find Dusun by ID and delete it
        $dusun = Dusun::findOrFail($id);
        $dusun->delete();

        // Redirect with success message
        return redirect()->route('dusun.index')->with('success', 'Dusun berhasil dihapus!');
    }
}
