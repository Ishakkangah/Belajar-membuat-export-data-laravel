<?php

namespace Database\Seeders;

use App\Models\pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pegawai::create([
            'name' => 'ishak angah',
            'alamat' => 'kayuagung oki',
            'tanggal_lahir' => '1999-10-10',
            'nomor_hp' => '089666035046',
        ]);
    }
}
