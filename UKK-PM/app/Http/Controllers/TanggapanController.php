<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

use Carbon\Carbon;


class TanggapanController extends Controller
{
    public function tanggapanPost(Request $request)
    {
        // dd($request);


        $request->validate([
            'tanggapan' => 'required|max:350',
        ],[
            'required' => 'Tidak boleh kosong',
            'max' => 'Tidak boleh lebih '
        ]);


        Pengaduan::find($request->id_pengaduan)->update([
            'status' => 'selesai',
         ]);

                 Tanggapan::create([
                    'id_pengaduan' => $request->id_pengaduan,
                    'id_petugas' => $request->id_petugas,
                    'tgl_tanggapan' => Carbon::now(),
                    'tanggapan' => $request->tanggapan,
                    'created_at' => Carbon::now(),
                 ]);
                 return redirect()->route('data.pengaduan')->with('pesan','Berhasil di tanggapi!');

        
    }
    public function tanggapanTolak($id)
    {
        // dd($request);


        


        Pengaduan::find($id)->update([
            'status' => '0',
         ]);

         return redirect()->back()->with('pesan','Berhasil  Tolak tanggapan!');

                

        
    }
}
