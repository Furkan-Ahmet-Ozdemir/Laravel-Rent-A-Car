@extends('layouts.admin')
@section('title','Edit Comments ')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Comments </h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Comment</th>
                <th>Car Id</th>
                <th>User Id</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach(  $datalist as $rs)
                <tr>
                    <td>{{$rs->comment}}</td>
                    <td>{{$rs->car_id}}</td>
                    <td>{{$rs->user_id}}</td>
                    <td> <a href="">{{$rs->status}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
