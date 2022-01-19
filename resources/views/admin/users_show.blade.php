@extends('layouts.admin')

@section('title','Users')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Users </h3>

        </div>
        <div class="card">

            <div class="card-body">
                <table class="table mt-3">
                    <th rowspan="10">
                    <td>
                        @if( $data->profile_photo_path )
                            <img src="{{ Storage::url($data->profile_photo_path) }}" height="300" style="border-radius:50px " alt="">
                        @endif
                    </td>
                    </th>
                    <tr>
                        <th scope="col">ID</th><td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Name</th><td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th><td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th><td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th><td>{{$data->adress}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date</th><td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th><td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}} <a href="{{ route('admin_user_role_delete', ['userid' => $data->id,'roleid' => $row->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{ route('admin_user_role_add',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select class="form-control" id="formGroupDefaultSelect" name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <button type="submit" class="btn btn-success">Add Role</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


