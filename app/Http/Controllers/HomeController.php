<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
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
        $car = DB::table('cars')->where('id',$slug)->get();
        $random = DB::table('cars')->where('category_id',$car[0]->category_id)->whereNotIn('id',[$slug])->get();
        return view('home.carDetail',['categories'=> $categories,'car'=>$car,'settings'=>$settings,'random'=>$random]);
    }

    public function login(){
        return view('admin.login');
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
            return view('admin.login');

        }

    }

    public function logout(){
        return view('admin.login');
    }


}
