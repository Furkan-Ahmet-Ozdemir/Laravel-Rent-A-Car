@extends('layouts.admin')

@section('title','Users')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Users </h3>

        </div>
        <table class="table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Role</th>
                <th>Phone</th>
                <th>Foto</th>
            </tr>
            </thead>
            <tbody>
            @foreach(  $datalist as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->name}}</td>
                    <td>{{$rs->email}}</td>
                    <td>{{$rs->phone}}</td>
                    <td>
                        <img src="{{Storage::url($rs->profile_photo_path)}}" style="width: 30px;height: 30px;">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




@endsection


