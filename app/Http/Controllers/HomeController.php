<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->where('status','True')->get();
        return view('home.index')->with('categories',$categories);
    }
    public function home(){
        $categories = DB::table('categories')->where('status','True')->get();
        return view('home.home')->with('categories',$categories);
    }
    public function contact(){
        $categories = DB::table('categories')->where('status','True')->get();
        return view('home.contact')->with('categories',$categories);
    }

    public function about(){
        $categories = DB::table('categories')->where('status','True')->get();
        return view('home.about')->with('categories',$categories);
    }

    public function faq(){
        $categories = DB::table('categories')->where('status','True')->get();
        $datalist = Faq::get();
        return view('home.faq',['categories'=> $categories,'datalist' => $datalist]);
    }

    public function cars(){
        $categories = DB::table('categories')->where('status','True')->get();
        $cars = DB::table('cars')->get();
        return view('home.cars',['categories'=> $categories,'cars'=>$cars]);
    }
    public function carType($slug){
        $categories = DB::table('categories')->where('status','True')->get();
        $cars = DB::table('cars')->where('category_id',$slug)->where('status','True')->get();
        return view('home.cars',['categories'=> $categories,'cars'=>$cars]);
    }
    public function carDetail($slug){
        $categories = DB::table('categories')->where('status','True')->get();
        $settings = DB::table('settings')->get();
        $car = DB::table('cars')->where('slug',$slug)->get();
        $random = DB::table('cars')->where('category_id',$car[0]->category_id)->whereNotIn('slug',[$car[0]->slug])->get();
        return view('home.carDetail',['categories'=> $categories,'car'=>$car,'settings'=>$settings,'random'=>$random]);
    }

    public function login(){
        return view('home.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('home.login');
        }
    }
    public function logout(){
        return view('admin.login');
    }


    public function register(){
        return view('home.register');
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
                    return redirect()->route('admin_login');
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
