<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;


class LoginController extends Controller
{
    public function getAuthLogin(){
        return view('pages.login');
    }
    public function postAuthLogin(Request $request){
        $arr = [
            'username' => $request->username,
            'password' =>$request->password,
        ];
         //dd($arr);
         //dd(Auth::attempt($arr));
        if (Auth::attempt($arr)) {
            $request->session()->put('user', $request->username);
            $id = $request->session()->get('user');
            $puttype = DB::table('user')->where('username','=',$id)->select('type')->first();
            $request->session()->put('type', $puttype->type);
            $type = $request->session()->get('type');
            if($type == '0'){
                return redirect('home/');
            }else if($type == '1'){
                return redirect('technicians/');
            }else if($type == '2'){
                return redirect('account');
            }
            //  
        }else{
            return view('pages.login')->with('fails','Đăng nhập thất bại');  
            // dd('thất bại');   
        }
    }
    public function postAuthLogout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('login');
        
    }
}
