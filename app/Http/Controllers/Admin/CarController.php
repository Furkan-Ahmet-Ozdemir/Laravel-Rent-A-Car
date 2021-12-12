<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datalist = Car::all();

         return view('admin.car',['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.car_add',['datalist'=> $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Car;
        $data->category_id   = $request->input('category_id');
        $data->title       = $request->input('title');
        $data->keywords    = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status      = $request->input('status');
        $data->image = $request->input('image');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->baggage = $request->input('baggage');
        $data->passenger = $request->input('passenger');
        $data->car_type = $request->input('car_type');
        $data->brand_name = $request->input('brand_name');
        $data->model_name = $request->input('model_name');
        $data->transmission_type = $request->input('transmission_type');
        $data->fuel_type = $request->input('fuel_type');
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->route('admin_cars');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car,$id)
    {
        $data = Car::find($id);
        $datalist =Category::all();

        return view('admin.car_edit',['data'=>$data,'datalist'=> $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car,$id)
    {
        $data = Car::find($id);
        $data->category_id   = $request->input('category_id');
        $data->title       = $request->input('title');
        $data->keywords    = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status      = $request->input('status');
        $data->image = $request->input('image');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->baggage = $request->input('baggage');
        $data->passenger = $request->input('passenger');
        $data->car_type = $request->input('car_type');
        $data->brand_name = $request->input('brand_name');
        $data->model_name = $request->input('model_name');
        $data->transmission_type = $request->input('transmission_type');
        $data->fuel_type = $request->input('fuel_type');
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->route('admin_cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        DB::table('cars')->where('id','=',$id)->delete();
        return redirect()->route('admin_cars');
    }
}
