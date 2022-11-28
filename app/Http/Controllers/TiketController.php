<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public static function create($id)
    {
        return view('tiket.create', [
            'destinasis' => Destinasi::find($id)
        ]);
    }
    // public function show(Tiket $tiket)
    // {
    //     return view('tiket.detail', [
    //         'destinasi' => $destinasi
    //     ]);
    // }
}
