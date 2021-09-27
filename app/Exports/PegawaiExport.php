<?php

namespace App\Exports;

use App\Models\pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    public function collection()
    {
        return pegawai::all();
    }
}
