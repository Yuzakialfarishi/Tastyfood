<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('berita.index', compact('data'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $validate['gambar'] = $request->gambar->store('berita', 'public');
        }

        Berita::create($validate);
        return redirect()->route('berita.index');
    }

    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('berita.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Berita::findOrFail($id);

        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $validate['gambar'] = $request->gambar->store('berita', 'public');
        }

        $data->update($validate);

        return redirect()->route('berita.index');
    }

    public function destroy($id)
    {
        Berita::destroy($id);
        return back();
    }
}
