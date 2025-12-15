<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return response()->json(Siswa::with('kelas')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswa,nis',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $siswa = Siswa::create($request->all());

        return response()->json(['message' => 'Siswa dibuat', 'data' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return response()->json(['message' => 'Siswa diperbarui', 'data' => $siswa]);
    }

    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();

        return response()->json(['message' => 'Siswa dihapus']);
    }
}
