<?php

namespace Database\Seeders;

use App\Models\Perawatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perawatans')->truncate();

        $data = [
            [ 'nama' => 'Tekanan Ban' ],
            [ 'nama' => 'BBM' ],
            [ 'nama' => 'Rem' ],
            [ 'nama' => 'Lampu-lampu' ],
            [ 'nama' => 'Oli Gardan' ],
            [ 'nama' => 'Oli Mesin' ],
            [ 'nama' => 'oli Transmisi' ],
            [ 'nama' => 'Oli Rem' ],
            [ 'nama' => 'Oli Power stering' ],
            [ 'nama' => 'Tali kipas' ],
            [ 'nama' => 'Radiator' ],
            [ 'nama' => 'Kunci-kunci' ],
            [ 'nama' => 'KIR, STNK' ],
            [ 'nama' => 'Cuci Kendaraan' ],
            [ 'nama' => 'Cat/Bodi' ],
        ];

        foreach ($data as $datum) {
           Perawatan::create($datum);
        }

    }
}
