<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Mobil;
use App\Models\Gallery;

class PajeroController extends Controller
{
    public function index()
    {
        $title = 'Mitsubishi Promo Nasional - New Pajero';
        $mobil = Mobil::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'New Pajero')->get()->toArray();
        $gallery = Gallery::select('*')->where('kategori', '=', 'mobil_penumpang')->where('jenis', '=', 'New Pajero')->get()->toArray();
        $contact = Kontak::select('*')->get()->toArray();

        return view('mobil_penumpang.new_pajero.index', compact('title'), [
            'contact' => $contact,
            'mobil' => $mobil,
            'gallery' => $gallery
        ]);
    }
}
// assets/img/New Pajero Images/Interior/Interior_1.jpg