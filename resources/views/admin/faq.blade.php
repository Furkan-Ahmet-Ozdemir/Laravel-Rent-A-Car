@extends('layouts.admin')

@section('title','Car')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> FAQ </h3>
            <a href="{{route('admin_faq_store')}}"   type="button" class="btn btn-primary btn-rounded btn-fw"> ADD </a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(  $datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->question}}</td>
                            <td>
                                {{$rs->answer}}
                            </td>
                            <td>{{$rs->status}}</td>
                            <td><label class="badge badge-warning"><a href="{{route('admin_faq_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                            <td><label class="badge badge-danger"><a href="{{route('admin_faq_delete',['id'=> $rs->id])}}"
                                                                     onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection

