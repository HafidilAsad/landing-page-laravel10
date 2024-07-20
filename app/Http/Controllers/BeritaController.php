<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $data = BeritaModel::get();
        return view ('berita.index', ['data' => $data]);
    }

    public function tambah()
    {
        return view ('berita.tambah');
    }
}
