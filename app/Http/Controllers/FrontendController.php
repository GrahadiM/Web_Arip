<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\SubTopik;
use App\Models\Topik;
use App\Models\UploadFile;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('subtopik_id')){
            $kategoris = Kategori::all();
            $keyword = $request->subtopik_id;
            $files = UploadFile::where('subtopik_id', 'like', "%" . $keyword . "%")->paginate(10);
            $subtopiks = SubTopik::all();
        } else{
            $kategoris = Kategori::all();
            $files = UploadFile::orderBy('created_at', 'ASC')->get();
            $subtopiks = SubTopik::all();
        }
        return view('frontend.index', compact('kategoris', 'files', 'subtopiks'));
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function contactUs()
    {
        return view('frontend.contactUs');
    }
    public function contactPost(Request $request)
    {

        // dd($request->all());
        $request->validate([
            "nama" => "required",
            "email" => "required",
            "subjek" => "required",
            "detail" => "required",
        ]);

        Komentar::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "subjek" => $request->subjek,
            "detail" => $request->detail,
        ]);
    	
    	return redirect()->back()->with('status', 'Upload Komentar Berhasil!');
    }
    public function kategori($id)
    {
        $kategori = Kategori::find($id);
        $files = UploadFile::orderBy('created_at', 'ASC')->get();
        return view('frontend.kategori', compact('kategori', 'files'));
    }
    public function topik()
    {
        $topiks = Topik::all();
        return view('frontend.allTopik', compact('topiks'));
    }
    public function subtopik($id)
    {
        $topik = Topik::find($id);
        $subtopiks = SubTopik::all();
        return view('frontend.subtopik', compact('topik', 'subtopiks'));
    }
    public function allfile(Request $request, $id)
    {
        $subtopik = SubTopik::find($id);
        $allfile = UploadFile::orderBy('created_at', 'ASC')->get();
        $files = $allfile;
        return view('frontend.allfile', compact('files', 'subtopik'));
    }
    public function file($id)
    {
        $file = UploadFile::find($id);
        // dd($file);
        return view('frontend.file', compact('file'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $subtopiks = SubTopik::where('nama', 'like', "%" . $keyword . "%")->paginate(10);
        return view('frontend.topik', compact('subtopiks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
