<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Topik;
use App\Models\UploadFile;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('topik_id')){
            $kategoris = Kategori::all();
            $keyword = $request->topik_id;
            $files = UploadFile::where('topik_id', 'like', "%" . $keyword . "%")->paginate(10);
            $topiks = Topik::all();
        } else{
            $kategoris = Kategori::all();
            $files = UploadFile::orderBy('created_at', 'ASC')->get();
            $topiks = Topik::all();
        }
        return view('frontend.index', compact('kategoris', 'files', 'topiks'));
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function contactUs()
    {
        return view('frontend.contactUs');
    }
    public function kirimPesan()
    {
        return view('frontend.contactUs');
    }
    public function kategori($id)
    {
        $kategori = Kategori::find($id);
        $files = UploadFile::orderBy('created_at', 'ASC')->get();
        return view('frontend.kategori', compact('kategori', 'files'));
    }
    public function topik(Request $request, $id)
    {
        // $topik = Topik::find($id);
        $keyword = $request->topik_id;
        $topik = Topik::where('topik_id', 'like', "%" . $keyword . "%")->paginate(10);
        $files = UploadFile::orderBy('created_at', 'ASC')->get();
        return view('frontend.topik', compact('topik', 'files'));
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
        $topiks = Topik::where('nama', 'like', "%" . $keyword . "%")->paginate(10);
        return view('frontend.topik', compact('topiks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function exportPDF()
    {
        $file = UploadFile::get();
        $pdf = PDF::loadView('sembako', compact('file'));
        return $pdf->download('laporan_sembako_'.date('Y-m-d_H-i-s').'.pdf');
    }
    // public function cetak_pdf()
    // {
    //     $file = UploadFile::where('file', 'file');
    //     $pdf = PDF::loadview('mahasiswa.mahasiswa_pdf', ['file' => $file]);
    //     return $pdf->download('laporan-mahasiswa-pdf.pdf');
    // }


}
