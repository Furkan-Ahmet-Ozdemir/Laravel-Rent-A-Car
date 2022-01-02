@extends('layouts.admin')

@section('title','Messages')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Messages </h3>

        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(  $datalist as $rs)
                        <tr>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>   <textarea name="message" rows="3"
                                          > {{$rs->message}}</textarea> </td>
                            <td><label class="badge badge-warning"><a href="{{route('admin_message_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                            <td><label class="badge badge-danger"><a href="{{route('admin_message_delete',['id'=> $rs->id])}}"
                                                                     onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection

