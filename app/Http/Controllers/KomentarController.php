<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentars = Komentar::all();
        return view('frontend.contactAdmin', compact('komentars'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Komentar $komentar)
    {
        //
    }
    public function edit(Komentar $komentar)
    {
        //
    }
    public function update(Request $request, Komentar $komentar)
    {
        //
    }
    public function destroy(Komentar $komentar)
    {
        //
    }
}
