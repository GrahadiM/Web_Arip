<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Topik;
use App\Models\UploadFile;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kategoris = Kategori::all();
        $topiks = Topik::all();
        return view('frontend.uploadFile.index', compact('kategoris', 'topiks'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // "user_id" => "nullable",
            "kategori_id" => "required",
            "judul_tesis" => "required",
            "judul_tesis_en" => "required",
            "topik_id" => "required",
            "abstrak" => "required",
            "dosen_pembimbing" => "required",
            // "file" => "nullable|csv,txt,xlx,xls,pdf|max:2048",
        ]);

        if ($request->hasFile(["file"])) {
            $file = $request->file(["file"]);
            $filenameOri = $file->getClientOriginalName();
            $filename = time() . "-" . $filenameOri;

            $file->move('file/sertifikat', $filename);

            // File::delete('assets/image/spp' . $user->spp);
            UploadFile::create([
                // "user_id" => $request->user_id,
                "user_id" => auth()->user()->id,
                "kategori_id" => $request->kategori_id,
                "status" => "Non-Active",
                "judul_tesis" => $request->judul_tesis,
                "judul_tesis_en" => $request->judul_tesis_en,
                "topik_id" => $request->topik_id,
                "abstrak" => $request->abstrak,
                "dosen_pembimbing" => $request->dosen_pembimbing,
                "file" => $filename,
            ]);
        }
    	
    	return redirect()->back()->with('status', 'Upload File Berhasil!');
    }
}
