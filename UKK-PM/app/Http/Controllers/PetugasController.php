<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Carbon\Carbon;


class PetugasController extends Controller
{
    



    public function dashboard()
    {
        $admin = Auth::guard('petugas')->user();

        $masyarakat = Masyarakat::all()->count();
        $petugas = Petugas::all()->count();
        $pengaduan = Pengaduan::all()->count();


        $month_now = Carbon::now()->isoFormat('MMMM');
        $proses_now = Pengaduan::where('status','proses')->whereMonth('tgl_pengaduan',Carbon::parse()->format('m'))->count();
        $tanggapi_now = Pengaduan::where('status','selesai')->whereMonth('tgl_pengaduan',Carbon::parse()->format('m'))->count();
        $tolak_now = Pengaduan::where('status','0')->whereMonth('tgl_pengaduan',Carbon::parse()->format('m'))->count();
        // dd($masyarakat);

            $proses_bulan1 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','01')->count();
            $tolak_bulan1 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','01')->count();
            $selesai_bulan1 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','01')->count();
            
            $proses_bulan2 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','02')->count();
            $tolak_bulan2 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','02')->count();
            $selesai_bulan2 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','02')->count();
            
            $proses_bulan3 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','03')->count();
            $tolak_bulan3 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','03')->count();
            $selesai_bulan3 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','03')->count();

            $proses_bulan4 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','04')->count();
            $tolak_bulan4 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','04')->count();
            $selesai_bulan4 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','04')->count();

            $proses_bulan5 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','05')->count();
            $tolak_bulan5 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','05')->count();
            $selesai_bulan5 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','05')->count();

            $proses_bulan6 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','06')->count();
            $tolak_bulan6 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','06')->count();
            $selesai_bulan6 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','06')->count();

            $proses_bulan7 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','07')->count();
            $tolak_bulan7 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','07')->count();
            $selesai_bulan7 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','07')->count();

            $proses_bulan8 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','08')->count();
            $tolak_bulan8 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','08')->count();
            $selesai_bulan8 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','08')->count();

            $proses_bulan9 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','09')->count();
            $tolak_bulan9 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','09')->count();
            $selesai_bulan9 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','09')->count();

            $proses_bulan10 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','10')->count();
            $tolak_bulan10 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','10')->count();
            $selesai_bulan10 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','10')->count();

            $proses_bulan11 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','11')->count();
            $tolak_bulan11 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','11')->count();
            $selesai_bulan11 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','11')->count();

            $proses_bulan12 = Pengaduan::where('status','proses')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','12')->count();
            $tolak_bulan12 = Pengaduan::where('status','0')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','12')->count();
            $selesai_bulan12 = Pengaduan::where('status','selesai')->whereYear('tgl_pengaduan',Carbon::now()->format('Y'))->whereMonth('tgl_pengaduan','12')->count();

            
            $proses = [$proses_bulan1,$proses_bulan2,$proses_bulan3,$proses_bulan4,$proses_bulan5,$proses_bulan6,$proses_bulan7,$proses_bulan8,$proses_bulan9,$proses_bulan10,$proses_bulan12];
            $tolak = [$tolak_bulan1,$tolak_bulan2,$tolak_bulan3,$tolak_bulan4,$tolak_bulan5,$tolak_bulan6,$tolak_bulan7,$tolak_bulan8,$tolak_bulan9,$tolak_bulan10,$tolak_bulan11,$tolak_bulan12];
            $selesai = [$selesai_bulan1,$selesai_bulan2,$selesai_bulan3,$selesai_bulan4,$selesai_bulan5,$selesai_bulan6,$selesai_bulan7,$selesai_bulan8,$selesai_bulan9,$selesai_bulan10,$selesai_bulan11,$selesai_bulan12];
    

        // dd(json_encode($proses));
        return view('petugas.dashboard',compact('admin','proses','tolak','selesai','masyarakat','petugas','pengaduan','proses_now','tanggapi_now','tolak_now'));
    }


    public function index()
    {   
        $petugas = Petugas::paginate(5);
        return view('petugas.petugas.index',compact('petugas'));
        
    }

    public function create()
    {
        $petugas = Petugas::all();
        return view('petugas.petugas.create',compact('petugas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required|in:petugas,admin',
            'telp' => 'required',
        ]);

        Petugas::create(
            [
                'nama_petugas' =>$request->nama_petugas,
                'username' =>$request->username,
                'password' => Hash::make($request->password),
                'level' =>$request->level,
                'telp' =>$request->telp,
            ]
        );
        return redirect()->route('data.petugas')->with(['success' => 'Data Petugas '.$request->id.'Berhasil Di Tambah']);

    }


    public function edit($id)
    {
        $petugas = Petugas::find($id);

        return view('petugas.petugas.edit',compact('petugas'));

    }
    public function update(Request $request,$id)
    {
        // dd($id);
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            // 'password' => 'required',
            'level' => 'required',
            'telp' => 'required',
             ]);
            if ($request->password === null) {
                Petugas::find($id)->update([
                   'nama_petugas' => $request->nama_petugas,
                   'username' => $request->username,
                   'password' => $request->password,
                   'level' => $request->level,
                   'telp' => $request->telp,
                ]);

                return redirect()->route('data.petugas')->with('success','Berhasil update Data Petugas '.$request->nama_petugas.'');

            }else{
                Petugas::find($id)->update([
                    'nama_petugas' => $request->nama_petugas,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'level' => $request->level,
                    'telp' => $request->telp,
                 ]);
                return redirect()->route('data.petugas')->with('success','Berhasil update Data Petugas '.$request->nama_petugas.'');

            }
    }
    public function destroy(Request $request, $id)
    {
        Petugas::find($id)->delete($request->all());
        return redirect()->route('data.petugas')->with(['success' => 'Data Petugas '.$request->nama_petugas.'Berhasil Di Hapus']);
    }

}
