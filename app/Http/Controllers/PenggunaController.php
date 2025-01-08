<?php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:tb_pengguna,email',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,operator',
        ]);

        $pengguna = new Pengguna();
        $pengguna->email = $request->email;
        $pengguna->password = Hash::make($request->password);
        $pengguna->role = $request->role;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'email' => 'required|email|unique:tb_pengguna,email,' . $pengguna->id_pengguna,
            'password' => 'nullable|min:6',
            'role' => 'required|in:admin,operator',
        ]);

        $pengguna->email = $request->email;
        if ($request->password) {
            $pengguna->password = Hash::make($request->password);
        }
        $pengguna->role = $request->role;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
