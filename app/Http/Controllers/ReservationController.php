<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

//use MongoDB\Driver\Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Reservation();
        $data->user_id = Auth::user()->id;
        $data->car_id = $request->car_id;
        $data->rezPickUp = $request->input('rezPickUp');
        $data->rezPickOf = $request->input('rezPickOf');

        $data->rezDateTime = Carbon::parse($request->input('rezDateTime'));
        $data->retDateTime = Carbon::parse($request->input('retDateTime'));
        $data->ip = $request->ip();
        $a = $data->rezDateTime->diffInHours($data->retDateTime);
        $now = Carbon::now();
        if( $data->rezDateTime->gt($now)){
            if($data->retDateTime->gt($data->rezDateTime)){
                $data->price = $request->input('price');
                $data->amount = $a * ($data->price/24);
                $data->days = round($a);
                $data->save();
                Alert::success('Başarılı', 'Ürün başarıyla kiralandı');
                return Redirect::back();
            }else{
                Alert::error('Hata', 'Bırakma tarihi kiralama tarihinden büyük olamaz.');
                return Redirect::back();
            }
        }else{
            Alert::error('Hata', 'Eski tarihli kiralama yapılamaz');
            return Redirect::back();
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function showAdmin(Reservation $reservation)
    {
        $datalist = Reservation::get();
        return view('admin.user_reservations',['datalist' => $datalist]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
