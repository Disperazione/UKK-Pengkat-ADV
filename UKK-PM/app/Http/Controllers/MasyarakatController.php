<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Hash;
use Auth;
class MasyarakatController extends Controller
{
    


    public function registerForm()
    {
        return view('register');
    }


    public function registerPost(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:10,max:15',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:5',
            'telp' => 'required',
        ],[
            'required' =>  'Tidak boleh kosong!',
            'same' =>  'Confirm password harus sama!',
            'min:10' =>  'Min 10 character',
            'max' =>  'Max 15 character',
        ]);

             Masyarakat::create([
                'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
             ]);

             return redirect()->route('login')->with('success','Berhasil Daftar!');

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

