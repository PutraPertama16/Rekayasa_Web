<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 3 kelas
        $kelasA = Kelas::create(['nama_kelas' => 'Kelas 1A']);
        $kelasB = Kelas::create(['nama_kelas' => 'Kelas 1B']);
        $kelasC = Kelas::create(['nama_kelas' => 'Kelas 2A']);

        // 3 guru
        $guru1 = Guru::create([
            'nama' => 'Bu Siti',
            'mengajar_kelas_id' => $kelasA->id,
        ]);

        $guru2 = Guru::create([
            'nama' => 'Pak Budi',
            'mengajar_kelas_id' => $kelasB->id,
        ]);

        $guru3 = Guru::create([
            'nama' => 'Bu Rina',
            'mengajar_kelas_id' => $kelasC->id,
        ]);

        // 5 siswa
        Siswa::create([
            'nama' => 'Adrian',
            'nis' => '1001',
            'kelas_id' => $kelasA->id,
        ]);

        Siswa::create([
            'nama' => 'Dewi',
            'nis' => '1002',
            'kelas_id' => $kelasA->id,
        ]);

        Siswa::create([
            'nama' => 'Rafli',
            'nis' => '2001',
            'kelas_id' => $kelasB->id,
        ]);

        Siswa::create([
            'nama' => 'Salsa',
            'nis' => '3001',
            'kelas_id' => $kelasC->id,
        ]);

        Siswa::create([
            'nama' => 'Rehan',
            'nis' => '3002',
            'kelas_id' => $kelasC->id,
        ]);
    }
}
