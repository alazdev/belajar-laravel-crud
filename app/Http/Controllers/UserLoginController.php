<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\ModelUser;

class UserLoginController extends Controller
{
    public function login_view(){
        Log::info(bcrypt('admin'));
        return view('login');
    }
    public function register_view(){
        return view('register');
    }
    public function login_post(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('/login')->with('alert','Password Salah !');
            }
        }
        else{
            return redirect('/login')->with('alert','Email, Belum Terdaftar!');
        }
    }
    public function register_post(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            // 'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->address = $request->address;
        $data->save();
        return redirect('/login')->with('alert-success','Kamu berhasil Register');
    }

    public function logout(){
        Session::flush();
        return redirect('/login')->with('alert','Kamu sudah logout');
    }
}
