<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function index(){
        $categories = DB::table('categories')->where('status','True')->pluck('title')->toArray();
        return view('home.index')->with('categories',$categories);
    }
    public function home(){
        $categories = DB::table('categories')->where('status','True')->pluck('title')->toArray();
        return view('home.home')->with('categories',$categories);
    }
    public function contact(){
        $categories = DB::table('categories')->where('status','True')->pluck('title')->toArray();
        return view('home.contact')->with('categories',$categories);
    }

    public function about(){
        $categories = DB::table('categories')->where('status','True')->pluck('title')->toArray();
        return view('home.about')->with('categories',$categories);
    }

    public function faq(){
        $categories = DB::table('categories')->where('status','True')->pluck('title')->toArray();
        return view('home.faq')->with('categories',$categories);
    }

    public function cars(){
        return view('home.cars');
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
