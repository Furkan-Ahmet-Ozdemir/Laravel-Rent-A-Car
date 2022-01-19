<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class HomeController extends Controller
{

    public function index(){
        return view('admin.index');
    }

    public function login()
    {
//        $setting = Setting::first();
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if( $request->isMethod('post'))
        {
            $credentials = $request->only('email','password','id','role');
            if (Auth::attempt($credentials)){
//                $a = $request->role;
//                $contains = Str::contains($a, 'admin');
                if ($request->role == 'admin'){
                    return route('admin_home');
                }
                else
                    return redirect()->intended('home');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home');
    }

//    public function login(){
//        return view('admin.login');
//    }
//
//    public function logincheck(Request $request)
//    {
//        if ($request->isMethod('post'))
//        {
//            $credentials = $request->only('email','password');
//            if (Auth::attempt($credentials)) {
//                $request->session()->regenerate();
//                return redirect()->intended('home');
//            }
//            return back()->withErrors([
//                'email' => 'The provided credentials do not match our records.',
//            ]);
//        }
//        else{
//            return redirect('login');
//        }
//    }
//
//    public function logout(Request $request){
//       Auth::logout();
//       $request->session()->invalidate();
//        $request->session()->regenerateToken();
//
//        return redirect()->route('home');
//    }

//    public function __construct()
//    {
//        $this->middleware('admin');
//    }


    public function register(){
        return view('admin.register');
    }

    public function registercheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $var = $request->only('name','email','password1','password');
            if($var['password'] == $var['password1']){
                $isUser = DB::table('users')->where('email', $var['email'])->value('id');
                if($isUser){
                    return view('admin.register');
                }else{
                    $data = new User();
                    $data->name = $request->input('name');
                    $data->email = $request->input('email');
                    $data->password = Hash::make($request->input('password'));
                    $data->save();
                    return redirect()->route('login');
                }
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }


}
