<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Marker;
use Carbon\Carbon;
use DataTables;
use Auth;
class PengaduanController extends Controller
{
    

    // public function tulis()
    // {
    //     $user = Auth::guard('masyarakat')->user();
    //     $pengaduan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','proses')->orderBy('created_at','DESC')->paginate(5);
    //     $tanggapan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','selesai')->orderBy('created_at','DESC')->paginate(5);
    //     $tolak = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','0')->orderBy('created_at','DESC')->paginate(5);
    //     // dd($pengaduan);
    //     $tab = 'proses';
    //     return view('masyarakat.dashboard',compact('user','pengaduan','tanggapan','tolak','tab'));
    // }
    public function proses()
    {
        $user = Auth::guard('masyarakat')->user();
        $tab = 'proses';
        $pengaduan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','proses')->orderBy('created_at','DESC')->paginate(5);
        return view('masyarakat.dashboard',compact('tab','user','pengaduan'));
    }
    public function ditanggapi()
    {
        $user = Auth::guard('masyarakat')->user();
        $tab = 'tanggapi';
        $tanggapan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','selesai')->orderBy('created_at','DESC')->paginate(5);
        return view('masyarakat.dashboard',compact('tab','user','tanggapan'));

    }
    public function tolak()
    {
        $user = Auth::guard('masyarakat')->user();
        $tab = 'tolak';
        $tolak = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','0')->orderBy('created_at','DESC')->paginate(5);
        return view('masyarakat.dashboard',compact('tab','user','tolak'));
    }


public function index()
{
    // $pengaduanProses = Pengaduan::where('status','=','proses')->orderBy('created_at','DESC')->get();



    return view('petugas.pengaduan.index');


   


}


public function ajax(Request $request)
{
    if ($request->ajax()) {
        $pengaduanProses = Pengaduan::with('Masyarakat')->where('status','=','proses')->orderBy('created_at','DESC')->get();
    return Datatables::of($pengaduanProses)
            ->addIndexColumn()
            ->editColumn('created_at', function($data){ $formatedDate = $data->created_at->diffForHumans(); return $formatedDate; })
            ->addColumn('status', function($data){ 
                
                $btn =  '<span class="badge bg-info text-light" style="font-size: 12px; " ><b>'.$data->status.'</b></span>'; 
                return $btn;
                })
         
            ->addColumn('id_masyarakat', function (Pengaduan $pengaduan) {
                return $pengaduan->Masyarakat->nama;
            })
            ->addColumn('action', function($row){
                $btn =  '<div class="list-icons">';
                $btn .=  '<div class="dropdown">';
                $btn .='<a href="#" class="list-icons-item" data-toggle="dropdown">';
                $btn .=    '<i class="icon-menu9"></i>';
                $btn .= '</a>';
                $btn .=' <div class="dropdown-menu dropdown-menu-right">';
                $btn .=   '<a href="../petugas/pengaduan/tanggapan/'.$row->id.'" class="dropdown-item"><i class="icon-pencil7 text-primary"></i>Tanggapi</a>';
                $btn .=   '<a href="../petugas/pengaduan/tolak/'.$row->id.'" class="dropdown-item"><i class="icon-close2 text-danger"></i>Tolak</a>';
                $btn .=   '<a href="../petugas/pengaduan/show/'.$row->id.'" class="dropdown-item"><i class="icon-eye"></i>Detail</a>';
                $btn .='</div>';
                $btn .='</div>';
                $btn .= '</div>';
                   
                    return $btn;
            })
            ->rawColumns(['action','status'])
            ->make(true);
}

}


public function detail($id)
{

    $showPengaduan = Pengaduan::find($id);
    return view('petugas.pengaduan.show',compact('showPengaduan'));
}


public function tanggapanDetail($id)
{
    
    $detail = Tanggapan::with('Pengaduan')->where('id_pengaduan','=',$id)->first();
    // dd($detail);

    return view('masyarakat.tanggapan',compact('detail'));

}


public function getEntri($id)
{
//  dd($id);
 $showPengaduan = Pengaduan::find($id);
 $petugas = Auth::guard('petugas')->user();
 
 return view('petugas.tanggapan.create',compact('showPengaduan','petugas'));
}

    public function postPengaduan(Request $request)
    {
        // dd($request);
        // $mas = Masyarakat::
        
        
        
        // table->string('provinsi',255)->nullable();
        //     $table->string('kabupaten',255)->nullable();
        //     $table->string('kecamatan',255)->nullable();
        //     $table->string('kelurahan',255)->nullable();
        //     $table->string('address')->nullable();
        //     $table->string('latitude', 15)->nullable();
        //     $table->string('longitude', 15)->nullable();
        
        $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'isi_laporan' => 'required|max:300',
            'judul_laporan' => 'required|min:5',
        ],[
            'required' => 'Input Tidak boleh kosong!',
            'mimes' => 'Harus jpg,png,jpeg,giv,svg',
            'max' => 'Tidak boleh lebih ',
            'min' => 'Minimal 5  '
        ]);

            $nm = $request->foto;
            $namafile = $nm->getClientOriginalName();
            $nm->move(public_path().'/img',$namafile);
    
               $pengaduan =  Pengaduan::create([
                    'tgl_pengaduan' => Carbon::now(),
                    'id_masyarakat' => Auth::guard('masyarakat')->user()->id,
                    'isi_laporan' => $request->isi_laporan,
                    'judul_laporan' => $request->judul_laporan,
                    'foto' => $namafile,
                    'status' => 'proses',
                    'created_at' => Carbon::now(),
                    ]);

                    Marker::create([
                        'provinsi' => $request->provinsi,
                        'kabupaten' => $request->kabupaten,
                        'kecamatan' => $request->kecamatan,
                        'kelurahan' => $request->kelurahan,
                        'address' => $request->address,
                        'latitude' => $request->latitude,
                        'longitude' => $request->longitude,
                        'id_pengaduan' => $pengaduan->id
                    ]);



                    return redirect()->back()->with('message','Berhasil Mengirim Pengaduan');

                //     return response()->json(
                //        [
                //            'success' => true,
                //            'message' => 'Data inserted successfully'
                //        ],200
                //    );

    }


}
