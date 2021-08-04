<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Kategori;
use App\Models\UploadFile;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $files = UploadFile::orderBy('created_at', 'ASC')->get();
        return view('frontend.index', compact('kategoris', 'files'));
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
    public function file($id)
    {
        $file = UploadFile::find($id);
        return view('frontend.file', compact('file'));
    }
    // public function exportPDF()
    // {
    //     $file = UploadFile::get();
    //     $pdf = PDF::loadView('sembako', compact('datas'));
    //     return $pdf->download('laporan_sembako_'.date('Y-m-d_H-i-s').'.pdf');
    // }
    // public function cetak_pdf()
    // {
    //     $file = UploadFile::where('file', 'file');
    //     $pdf = PDF::loadview('mahasiswa.mahasiswa_pdf', ['file' => $file]);
    //     return $pdf->download('laporan-mahasiswa-pdf.pdf');
    // }


}
