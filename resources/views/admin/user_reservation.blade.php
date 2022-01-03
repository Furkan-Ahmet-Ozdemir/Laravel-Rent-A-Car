@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Reservations </h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Comment</th>
                <th>Car Id</th>
                <th>User Id</th>
                <th>Pick Up Place</th>
                <th>Pick Off Place</th>
                <th>Reservation Time</th>
                <th>Return Time</th>
                <th>Days</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach(  $datalist as $rs)
                <tr>
                    <td>{{$rs->comment}}</td>
                    <td>{{$rs->car_id}}</td>
                    <td>{{$rs->user_id}}</td>
                    <td>{{$rs->rezPickUp}}</td>
                    <td>{{$rs->rezPickOf}}</td>
                    <td>{{$rs->rezDateTime}}</td>
                    <td>{{$rs->retDateTime}}</td>
                    <td>{{$rs->days}}</td>
                    <td>{{$rs->amount}}</td>
                    <td> <a href="">{{$rs->status}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
