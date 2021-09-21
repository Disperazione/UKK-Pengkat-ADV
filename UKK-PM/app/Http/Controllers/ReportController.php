<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use PDF;

class ReportController extends Controller
{
        public function laporan_masyarakat()
        {
            $masyarakat = Masyarakat::all();
            return view('petugas.masyarakat.laporan',compact('masyarakat'));
        }

        public function pdf_masyarakat()
        {
            $masyarakat = Masyarakat::all();
            $pdf = PDF::loadView('pdf.laporan_masyarakat',compact('masyarakat'));
            return $pdf->download('masyarakat-list.pdf');
        }


        public function laporan_pengaduan()
        {
            $pengaduan = Pengaduan::where('status','=','selesai')->orWhere('status','=','0')->get();
            return view('petugas.pengaduan.laporan',compact('pengaduan'));
        }

        public function pdf_pengaduan()
        {
            $pengaduan = Pengaduan::where('status','=','selesai')->orWhere('status','=','0')->get();
            $pdf = PDF::loadView('pdf.laporan_pengaduan',compact('pengaduan'));
            return $pdf->download('pengaduan-list.pdf');
        
        }
}
