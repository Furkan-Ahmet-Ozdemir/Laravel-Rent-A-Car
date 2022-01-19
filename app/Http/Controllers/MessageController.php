<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;


class MessageController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Message();
        $data->name     = $request->input('name');
        $data->email    = $request->input('email');
        $data->phone    = $request->input('phone');
        $data->subject  = $request->input('subject');
        $data->message  = $request->input('message');
        $data->status   = $request->input('status');
        $data->ip       = $request->ip();
        $data->save();
        return redirect()->route('home_contact');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $datalist = Message::get();
        return view('admin.message',['datalist' => $datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message,$id)
    {
        $data = DB::table('messages')->find($id);
        return view('admin.message_edit',['messagedata'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message,$id)
    {
        $data = DB::table('messages')->find($id);


        $data->name     = $request->input('name');
        $data->email    = $request->input('email');
        $data->phone    = $request->input('phone');
        $data->subject  = $request->input('subject');
        $data->message  = $request->input('message');
        $data->status   = $request->input('status');
        $data->ip       = $request->ip();


        $data->save();
        return redirect()->route('admin_message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message,$id)
    {
        $data = Message::find($id);
        $data->delete();
        return redirect()->route('admin_message');
    }

}
