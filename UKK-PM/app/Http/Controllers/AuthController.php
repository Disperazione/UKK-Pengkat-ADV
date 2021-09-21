<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function login(Request $req)
    {
		$req->validate([
			'username' => 'required',
			'password'=> 'required'
		]);
		$username = $req->username;
		$password = $req->password;

	

        $credentials = $req->only(['username','password']);
        if (auth()->guard('petugas')->attempt($credentials)) {
            return redirect()->route('petugas.dashboard');
        }else if (auth()->guard('masyarakat')->attempt($credentials)) {
            return redirect()->route('proses.pengaduan');
        }else{
            return back()->with('error','Username atau Password tidak cocok');    
        }
       
		
    
    }

    public function logout()
    {
    	if (Auth::guard('masyarakat')->check()) {
    		Auth::guard('masyarakat')->logout();
    	} else if(Auth::guard('petugas')->check()) {
    		Auth::guard('petugas')->logout();
    	}
    	return redirect()->route('index');    	
    }
}
