<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;

class jalurController extends Controller
{
    public function index()
    {
        return view('controllerjalur');
    }
    public function menampilkanDataModel()
    {
        $dataSekolah = jalur::$sekolah;
        $dataKelas = jalur::$kelas;
        return view('modeljalur', compact('dataSekolah', 'dataKelas'));
    }

}