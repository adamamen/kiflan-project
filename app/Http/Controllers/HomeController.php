<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Kontak;

class HomeController extends Controller
{
    function index()
    {
        $title = 'Mitsubishi Promo Nasional';
        $home = Home::select('*')->get()->toArray();
        $contact = Kontak::select('*')->get()->toArray();

        return view(
            'home.index',
            compact('title'),
            [
                'home' => $home,
                'contact' => $contact,
            ]
        );
    }
}
