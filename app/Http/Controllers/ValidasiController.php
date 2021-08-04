<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\UploadFile;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function index()
    {
        $files = UploadFile::orderBy('created_at', 'ASC')->get();
        return view('frontend.validasi.index', compact('files'));
    }
    public function edit($id)
    {
        $file = UploadFile::find($id);
        $kategoris = Kategori::all();
        return view('frontend.validasi.update', compact('file', 'kategoris'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "status" => "required",
        ]);
        $validasi = UploadFile::find($id);
        $validasi->update([
            "status" => $request->status,
        ]);
    	
    	return redirect()->route('validasi.index')->with('status', 'Data Created!')->with('status', 'Upload File Berhasil!');
    }
    public function destroy($id)
    {
        //
    }
}
