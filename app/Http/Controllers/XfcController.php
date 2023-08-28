<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Mobil;
use App\Models\Gallery;

class XfcController extends Controller
{
    public function index()
    {
        $title = 'Mitsubishi Promo Nasional - XFC';
        $mobil = Mobil::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'XFC')->get()->toArray();
        $gallery = Gallery::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'XFC')->get()->toArray();
        $contact = Kontak::select('*')->get()->toArray();
        // dd(substr($gallery[8]['assets'], -14, 8));
        return view('mobil_penumpang.xfc.index', compact('title'), [
            'contact' => $contact,
            'mobil' => $mobil,
            'gallery' => $gallery
        ]);
    }
}
