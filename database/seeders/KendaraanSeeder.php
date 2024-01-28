<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kendaraans')->truncate();

        $data = [
            ['nopol' => 'Lainnya', 'nama' => '-', 'merk' => '-', 'tipe' => '-'],
            ['nopol' => 'AA9591AF', 'nama' => 'Station Wagon', 'merk' => 'TOYOTA', 'tipe' => 'BU343RTKMQSD3'],
            ['nopol' => 'AA8058XF', 'nama' => 'Station Wagon', 'merk' => 'MITSUBISHI', 'tipe' => 'FE447'],
            ['nopol' => 'AA8057XF', 'nama' => 'Station Wagon', 'merk' => 'MITSUBISHI', 'tipe' => 'FE447'],
            ['nopol' => 'AA1158XF', 'nama' => 'Station Wagon', 'merk' => 'TOYOTA', 'tipe' => 'RUSH 1.5G'],
            ['nopol' => 'AA8026XF', 'nama' => 'Station Wagon', 'merk' => 'TOYOTA', 'tipe' => 'HILUX PICK UP 2.5 DSL M/T'],
            ['nopol' => 'AA1022XF', 'nama' => 'Station Wagon', 'merk' => 'TOYOTA', 'tipe' => 'KF 80'],
            ['nopol' => 'AA9508YF', 'nama' => 'Mini Bus ( Penumpang 14 Orang Kebawah )', 'merk' => 'DAIHATSU', 'tipe' => 'LUXIO 1.5 D MT  (S402RG-ZMGFJJ JH)'],
            ['nopol' => 'AA8025XF', 'nama' => 'Truck + Attachment', 'merk' => 'TOYOTA', 'tipe' => 'DYNA 130HT'],
            ['nopol' => 'AA8073XF', 'nama' => 'Pick Up', 'merk' => 'TOYOTA', 'tipe' => 'KF60'],
            ['nopol' => 'AA8017XF', 'nama' => 'Pick Up', 'merk' => 'TOYOTA', 'tipe' => 'HILUX 2.5G DOBLE CABIN 4X4 M/T'],
            ['nopol' => 'AA6375XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'MCB'],
            ['nopol' => 'AA6559XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'MCB'],
            ['nopol' => 'AA6322XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'MCB'],
            ['nopol' => 'AA6041XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'NF11B1D'],
            ['nopol' => 'AA 6324 XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'NF125TRF'],
            ['nopol' => 'AA 6325 XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'NF125TRF'],
            ['nopol' => 'AA6090XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'GLP II'],
            ['nopol' => 'AA6948XF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'MCB'],
            ['nopol' => 'AA9620PF', 'nama' => 'Sepeda Motor', 'merk' => 'KAWASAKI', 'tipe' => 'LX150C (KLX 150S)'],
            ['nopol' => 'AA9621PF', 'nama' => 'Sepeda Motor', 'merk' => 'KAWASAKI', 'tipe' => 'LX150C (KLX 150S)'],
            ['nopol' => 'AA 9679 LF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'NF 125 TD'],
            ['nopol' => 'AA 9690 LF', 'nama' => 'Sepeda Motor', 'merk' => 'HONDA', 'tipe' => 'NF 125 TD'],
            ['nopol' => 'AA1951HF', 'nama' => 'Mobil Ambulance', 'merk' => 'MITSUBISHI', 'tipe' => 'Mitsubishi'],
            ['nopol' => 'AA9588HF', 'nama' => 'Mobil Ambulance', 'merk' => 'TOYOTA', 'tipe' => 'BUX 3'],
            ['nopol' => 'AA9598FF', 'nama' => 'Mobil Ambulance', 'merk' => 'DAIHATSU', 'tipe' => 'S401RV-ZMDEJJ-HJ'],
            ['nopol' => 'AA1964HF', 'nama' => 'Mobil Ambulance', 'merk' => 'SUZUKI', 'tipe' => 'GC415V-APV STD'],
            ['nopol' => 'AA9589KF', 'nama' => 'Mobil Pemadam Kebakaran', 'merk' => 'HINO', 'tipe' => 'HDL CARGO'],
            ['nopol' => 'AA9542AF', 'nama' => 'Mobil Tangki Air', 'merk' => 'HINO', 'tipe' => 'WU342R'],
            ['nopol' => 'AA9582AF', 'nama' => 'kendaraan bermotor khusus  lainnya (dst)', 'merk' => 'ISUZU', 'tipe' => 'TFS6Y D-MAXRODEO'],

        ];

        foreach ($data as $datum) {
            Kendaraan::create($datum);
        }
    }
}
