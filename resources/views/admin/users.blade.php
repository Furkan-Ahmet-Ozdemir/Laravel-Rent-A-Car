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
                <th>Photo</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Adress</th>

                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach(  $datalist as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>
                        <img @if($rs->profile_photo_path) src="{{Storage::url($rs->profile_photo_path)}}" @endif style="width: 30px;height: 30px;">
                    </td>
                    <td>{{$rs->name}}</td>
                    <td>{{$rs->role}}</td>

                    <td>{{$rs->email}}</td>
                    <td>{{$rs->phone}}</td>
                    <td>{{$rs->address}}</td>


                    <td><label class="badge badge-warning"><a href="{{route('admin_user_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                    <td><label class="badge badge-danger"><a href="{{route('admin_user_delete',['id'=> $rs->id])}}"
                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>



                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




@endsection


