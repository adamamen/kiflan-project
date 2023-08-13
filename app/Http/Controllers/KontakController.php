<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;
use App\Models\Kontak;

class KontakController extends Controller
{
    function index()
    {
        $title = 'Mitsubishi Promo Nasional - Kontak';
        $contact = Kontak::select('*')->get()->toArray();

        return view('kontak.index', compact('title'), [
            'contact' => $contact,
        ]);
    }

    public function sendEmail(Request $request)
    {
        $listingMobil = $this->listingMobil($request->mobil);
        $lokasi = $this->lokasi($request->lokasi);

        $data = [
            'nama' => $request->nama,
            'no_handphone' => $request->no_handphone,
            'mobil' => $listingMobil,
            'lokasi' => $lokasi,
            'message' => $request->pesan
        ];

        Mail::to('adamamen32@gmail.com')->send(new MailNotify($data));

        return back()->with('message', 'Email sent successfully!');
    }

    public function listingMobil($list)
    {
        if ($list == "1") {
            $mobil = 'XFC';
        } else if ($list == "2") {
            $mobil = 'New Pajero Sport';
        } else if ($list == "3") {
            $mobil = 'New Xpander';
        } else if ($list == "4") {
            $mobil = 'New Xpander Cross';
        } else if ($list == "5") {
            $mobil = 'Colt L300';
        }

        return $mobil;
    }

    public function lokasi($list)
    {
        if ($list == "1") {
            $lokasi = 'DKI Jakarta';
        } else if ($list == "2") {
            $lokasi = 'Bogor';
        } else if ($list == "3") {
            $lokasi = 'Depok';
        } else if ($list == "4") {
            $lokasi = 'Tangerang';
        } else if ($list == "5") {
            $lokasi = 'Bekasi';
        } else if ($list == "6") {
            $lokasi = 'Karawang';
        } else if ($list == "7") {
            $lokasi = 'Lainnya';
        }

        return $lokasi;
    }
}
