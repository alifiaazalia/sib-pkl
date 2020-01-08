<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriPemohonController extends Controller
{
    public function index()
    {
        $data_diri_pemohon = \App\DataDiriPemohon::all();
        return view('datadiripemohon.index',['data_diri_pemohon' => $data_diri_pemohon]);
    }
}
