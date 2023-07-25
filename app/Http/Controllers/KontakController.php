<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    function index()
    {
        $title = 'Kontak';
        $contact = Kontak::select('*')->get()->toArray();

        return view('kontak.index', compact('title'), [
            'contact' => $contact,
        ]);
    }
}
