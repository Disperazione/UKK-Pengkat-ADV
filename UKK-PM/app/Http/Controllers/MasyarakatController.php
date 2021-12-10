<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Http;

class MasyarakatController extends Controller
{
    

public function dashboard()
{
    $user = Auth::guard('masyarakat')->user();
        // $tab = 'proses';
        $pengaduan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','proses')->orderBy('created_at','DESC')->paginate(5);

        $user = Auth::guard('masyarakat')->user();
        // $tab = 'tanggapi';
        $tanggapan = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','selesai')->orderBy('created_at','DESC')->paginate(5);

        $user = Auth::guard('masyarakat')->user();
        // $tab = 'tolak';
        $tolak = Pengaduan::where('id_masyarakat','=',$user->id)->where('status','=','0')->orderBy('created_at','DESC')->paginate(5);

   

        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
  ),
));
$response = curl_exec($curl);
$provinsi = json_decode($response);
        
        return view('masyarakat.dashboard',compact('user','pengaduan','tanggapan','tolak','provinsi'));

}
   

    public function history($id)
    {   
        // dd($id);
        $history  = Pengaduan::where('id_masyarakat',$id)->Where('status','selesai')->orderBy('created_at','ASC')->paginate(3);
        // dd($history);

            return view('masyarakat.history_pengaduan',compact('history'));
    }





    public function index()
    {   
        $masyarakat = Masyarakat::paginate(5);
        return view('petugas.masyarakat.index',compact('masyarakat'));
        
    }

   

    public function edit($id)
    {
        $masyarakat = Masyarakat::find($id);

        return view('petugas.masyarakat.edit',compact('masyarakat'));

    }
    public function update(Request $request,$id)
    {
        // dd($id);
        $request->validate([
            'nik' => 'required|min:10',
            'nama' => 'required',
            'username' => 'required',
            // 'password' => 'required',
            'telp' => 'required',
             ]);
            if ($request->password === null) {
                Masyarakat::find($id)->update([
                   'nik' => $request->nik,
                   'nama' => $request->nama,
                   'username' => $request->username,
                   'telp' => $request->telp,
                ]);

                return redirect()->route('data.masyarakat')->with('success','Berhasil update Data Masyarakat '.$request->nama.'');

            }else{
                Masyarakat::find($id)->update([
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'telp' => $request->telp,
                 ]);
                return redirect()->route('data.masyarakat')->with('success','Berhasil update Data Masyarakat '.$request->nama.'');

            }
    }
    public function destroy($id)
    {

        // $masyarakat->delete();  

        Masyarakat::destroy($id);

        
      //  return redirect()->route('siswa.index')->with(['success'=>'Berhasil menambah data siswa']);
       return redirect()->route('data.masyarakat')->with('success','Berhasil Delete Data  ');

        }

}

