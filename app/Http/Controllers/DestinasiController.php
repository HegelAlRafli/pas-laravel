<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public static function index()
    {
        return view('destinasi.all', [
            'destinasis' => Destinasi::all()
        ]);
    }
    public function show(Destinasi $destinasi)
    {
        return view('destinasi.detail', [
            'destinasi' => $destinasi
        ]);
    }
}
