<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Mobil;
use App\Models\Gallery;

class ColtL300Controller extends Controller
{
    public function index()
    {
        $title = 'Mitsubishi Promo Nasional - New Xpander';
        $mobil = Mobil::select('*')->where('kategori', '=', 'truk_dan_bus')->where('jenis', '=', 'Colt L300')->get()->toArray();
        $gallery = Gallery::select('*')->where('kategori', '=', 'truk_dan_bus')->where('jenis', '=', 'Colt L300')->get()->toArray();
        // dd(substr($gallery[0]['assets'],));
        $contact = Kontak::select('*')->get()->toArray();

        return view('truk_dan_bus.colt_l300.index', compact('title'), [
            'contact' => $contact,
            'mobil' => $mobil,
            'gallery' => $gallery
        ]);
    }
}
// assets/img/Colt L300 Images/Exterior/Exterior_1.jpeg