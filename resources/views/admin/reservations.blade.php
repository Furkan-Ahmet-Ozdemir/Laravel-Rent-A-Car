@extends('layouts.admin')

@section('title','Laravel E-yer Sitesi')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Reservations </h3>

        </div>
        <table class="table">
            <thead>
            <tr>
{{--                <th>Id</th>--}}
                <th>User Id</th>
                <th>Car Id</th>
                <th>Pick Up Time</th>
                <th>Pick Off Time</th>
                <th>Rezarvation Date Time</th>
                <th>Return Date Time</th>
                <th>Amount</th>
                <th>Status</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            </thead>
            <tbody>
            @foreach(  $datalist as $rs)
                <tr>
{{--                    <td>{{$rs->id}}</td>--}}
                    <td>{{$rs->user_id}}</td>
                    <td>{{$rs->car_id}}</td>
                    <td>{{$rs->rezPickUp}}</td>
                    <td>{{$rs->rezPickOf}}</td>
                    <td>{{$rs->rezDateTime}}</td>
                    <td>{{$rs->retDateTime}}</td>
                    <td>{{$rs->amount}}</td>
                    <td>{{$rs->note}}</td>
                    <td><label class="badge badge-warning"><a href="{{route('admin_reservations_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                    <td><label class="badge badge-danger"><a href="{{route('admin_reservations_delete',['id'=> $rs->id])}}"
                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


