<?php

namespace App\Http\Controllers;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.table',[
            'pegawais' => pegawai::latest()->paginate(10),
        ]);
    }


    public function exportPegawai() 
    {
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }
}
