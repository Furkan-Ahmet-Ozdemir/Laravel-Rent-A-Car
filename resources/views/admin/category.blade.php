@extends('layouts.admin')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Categories </h3>
            <a href="{{route('admin_category_add')}}"   type="button" class="btn btn-primary btn-rounded btn-fw"> ADD </a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PARENT</th>
                        <th>TITLE</th>
                        <th>STATUS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(  $datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{/*\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,*/$rs->title/*)*/}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->status}}</td>
                            <td><label class="badge badge-warning"><a href="{{route('admin_category_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>

                            <td><label class="badge badge-danger"><a href="{{route('admin_category_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection

