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
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach(  $datalist as $rs)
                    <tr>
                        <td>{{$rs->comment}}</td>
                        <td>{{$rs->car_id}}</td>
                        <td>{{$rs->user_id}}</td>
                        <td> {{$rs->status}}</td>
                        <td><label class="badge badge-warning"><a href="{{route('admin_comments_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                        <td><label class="badge badge-danger"><a href="{{route('admin_comments_delete',['id'=> $rs->id])}}"
                                                                 onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
