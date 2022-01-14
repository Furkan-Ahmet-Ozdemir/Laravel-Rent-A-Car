<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Comments;
use App\Models\Car;
use App\Models\Faq;
use App\Models\Reservation;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{

    public static function getSettings(){
        return $setting = Setting::first();
    }
    public static function getCategories(){
        return $categories = DB::table('categories')->where('status','True')->get();
    }
    public function index(){
        $slider = Car::limit(4)->get();
        $cars = DB::table('cars')->limit(9)->get();
//        $slider = Car::select('title','price','image','slug','category_id')->limit(4)->get();
    //        print_r($slider);
    //        exit();
        return view('home.index',['cars'=>$cars,'slider'=>$slider]);
    }
    public function home(){

        return view('home.home');
    }
    public function contact(){

        return view('home.contact');
    }

    public function about(){
        $setting = Setting::first();
        return view('home.about')->with('setting',$setting);
    }

    public function faq(){
        $datalist = Faq::get();
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function cars(){
        $cars = DB::table('cars')->get();
        return view('home.cars',['cars'=>$cars]);
    }
    public function carType($slug){
        $cars = DB::table('cars')->where('category_id',$slug)->where('status','True')->get();
        return view('home.cars',['cars'=>$cars]);
    }
    public function carDetail($slug){
        $settings = Setting::first();
        $car = DB::table('cars')->where('slug',$slug)->get();
        $random = DB::table('cars')->where('category_id',$car[0]->category_id)->whereNotIn('slug',[$car[0]->slug])->get();
//        $sdf = DB::table('cars')->where('slug',$slug)->get('id');
//        $comments = DB::table('comments')->where('car_id',$sdf)->get();
        $comments = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.user_id')
            ->join('cars', 'comments.car_id', '=', 'cars.id')
            ->select('users.*', 'comments.*')
            ->get();
        return view('home.carDetail',['car'=>$car,'random'=>$random,'settings'=>$settings,'comments'=>$comments]);
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
            return view('home.index');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.index');
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
                    return view('home.register');
                }else{
                    $data = new User();
                    $data->name = $request->input('name');
                    $data->email = $request->input('email');
                    $data->password = Hash::make($request->input('password'));
                    $data->save();
                    return redirect()->route('home_login');
                }
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('home.login');
        }
    }



}
