<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Mobil;
use App\Models\Gallery;

class XpanderCrossController extends Controller
{
    public function index()
    {
        $title = 'Mitsubishi Promo Nasional - New Xpander';
        $mobil = Mobil::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'New Xpander Cross')->get()->toArray();
        $gallery = Gallery::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'New Xpander Cross')->get()->toArray();
        $contact = Kontak::select('*')->get()->toArray();

        return view('mobil_penumpang.new_xpander_cross.index', compact('title'), [
            'contact' => $contact,
            'mobil' => $mobil,
            'gallery' => $gallery
        ]);
    }
}
