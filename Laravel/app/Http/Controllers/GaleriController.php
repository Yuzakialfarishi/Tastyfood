<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:3000' // max 3MB
        ]);

        $path = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'foto' => $path
        ]);

        return back()->with('success', 'Foto berhasil ditambahkan!');
    }
}
