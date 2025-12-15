<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        return response()->json(Kelas::with(['siswa', 'guru'])->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas = Kelas::create($request->all());

        return response()->json(['message' => 'Kelas dibuat', 'data' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());

        return response()->json(['message' => 'Kelas diperbarui', 'data' => $kelas]);
    }

    public function destroy($id)
    {
        Kelas::findOrFail($id)->delete();

        return response()->json(['message' => 'Kelas dihapus']);
    }
}
