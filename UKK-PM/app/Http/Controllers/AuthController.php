<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function login(Request $request)
    {
	    $validate = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);//

		// $username = $req->username;
		// $password = $req->password;

        
        if ($validate->fails()) {
            $respon = [
                'status' => 'error',
                'msg' => 'Validator error',
                'errors' => $validate->errors(),
                'content' => null,
            ];
            return response()->json($respon, 200);
        }
        $credentials = $request->only(['username','password']);

        // $user           =  Masyarakat::where("username", $request->username)->first();
            if (auth()->guard('petugas')->attempt($credentials)) {
                // return response()->json(['status' => 'Ini petugas','data'=>$user],200);
                $user       =       Auth::guard('petugas')->user();
                $token      =       $user->createToken('token')->plainTextToken;
               $data =  ["status" => "Login Successfully!", "message" => "Berhasil ",'url' => route('petugas.dashboard'), "login" => true, "token" => $token, "data" => $user];
            }else if (auth()->guard('masyarakat')->attempt($credentials)) {
                $user       =       Auth::guard('masyarakat')->user();
                $token      =       $user->createToken('token')->plainTextToken;
               $data  =["status" => "Login Successfully!", "message" => "Berhasil ",'url' => route('masyarakat.dashboard'), "login" => true, "token" => $token, "data" => $user];
            }else{
                // $data = ;
                return response()->json(['status' => 'Username Password Salah!'],401);

            }

            return response()->json($data,200);

        // if(is_null($user)) {
        //     return response()->json(["status" => "failed", "message" => "Failed! Account / Username Belum terdaftar!"]);
        // }

        // if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        //     $user       =       Auth::user();
        //     $token      =       $user->createToken('token')->plainTextToken;

        //     return response()->json(["status" => "success", "login" => true, "token" => $token, "data" => $user]);
        // }
        // else {
        //     return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! invalid password"]);
        // }


        // $credentials = $request->only(['username','password']);
        // if (auth()->guard('petugas')->attempt($credentials)) {
        //     return redirect()->route('petugas.dashboard');
        // }else if (auth()->guard('masyarakat')->attempt($credentials)) {
        //     return redirect()->route('proses.pengaduan');
        // }else{
        //     return back()->with('error','Username atau Password tidak cocok');    
        // }
       
		
    
    }




    public function registerForm()
    {
        return view('register');
    }




    public function registerPost(Request $request)
    {

        
        
        $validate = Validator::make($request->all(), [
            'nik' => 'required|min:10,max:16',
            'nama' => 'required',
            'telp' => 'required',
            'username' => 'required',
            'password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:5',
        ],[
            'required' =>  'Tidak boleh kosong!',
            'same' =>  'Confirm password harus sama!',
            'min:10' =>  'Min 10 character',
            'max:16' =>  'Max 16 character',
        ]);
            // return response()->json(["status" => "failed", "message" => "Registration failed!"],200);
      
        
            if ($validate->fails()) {
                $respon = [
                    'status' => 'error',
                    'msg' => 'Validator error',
                    'errors' => $validate->errors(),
                    'content' => null,
                ];
                return response()->json($respon, 400);
            }


         $masyarakat =     Masyarakat::create([
                'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
             ]);
             
             if(!is_null($masyarakat)) {
                return response()->json(["status" => "Successfully!", "message" => "Success! registration completed", "data" => $masyarakat],200);
            }
            else {
                return response()->json(["status" => "Failed!", "message" => "Registration failed!"],200);
            }   
            //  return redirect()->route('login')->with('success','Berhasil Daftar!');

    }

    // public function logout()
    // {
    // 	if (Auth::guard('masyarakat')->check()) {
    // 		Auth::guard('masyarakat')->logout();
    // 	} else if(Auth::guard('petugas')->check()) {
    // 		Auth::guard('petugas')->logout();
    // 	}
    // 	return redirect()->route('index');    	
    // }
    public function logout(Request $request) {
        if (Auth::guard('masyarakat')->check()) {
            $user = Auth::guard('masyarakat')->user();
            Auth::guard('masyarakat')->logout();
            
        }else if (Auth::guard('petugas')->check()){
            $user = Auth::guard('petugas')->user();
            Auth::guard('petugas')->logout();
        }
        
        //  $token =   auth()->user()->currentAccessToken();
        $user->tokens()->delete();
        // $token = $user->tokens()->where('tokenable_id', $user->id);
            // $user->logout();
            
       $respon = [
           'msg' => ' logged out Successfully',
           'data' => $user,
        //    'token' => $token
        ];
        return response()->json($respon, 200);
    }

    public function logoutall(Request $request) {
        $user = $request->auth()->guard('masyarakat');
        $user->tokens()->delete();
        $respon = [
            'status' => 'success',
            'msg' => 'Logout successfully',
            'errors' => null,
            'content' => null,
        ];
        return response()->json($respon, 200);
    }
}
