<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    public function store(Request $request)
{
    $request->validate([
        'subject' => 'required',
        'nama' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Kontak::create($request->all());

    return back()->with('success', 'Pesan berhasil dikirim!');
}

}
