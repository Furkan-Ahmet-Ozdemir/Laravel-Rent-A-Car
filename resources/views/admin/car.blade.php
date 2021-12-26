@extends('layouts.admin')

@section('title','Car')

@section('content')
    <div class="content-wrapper">
{{--{{dd($datalist)}}--}}
        <div class="page-header">
            <h3 class="page-title"> Cars </h3>
            <a href="{{route('admin_car_add')}}"   type="button" class="btn btn-primary btn-rounded btn-fw"> ADD </a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th>Price</th>
                        <th>Model Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(  $datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->category->title}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" width="100" height="100" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('admin_image_add',['car_id'=>$rs->id])}}" ONCLICK="return !window.open(this.href,'','  width=500,height=700')"> Gallery</a> </td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->model_name}}</td>
                            <td>{{$rs->status}}</td>
                            <td><label class="badge badge-warning"><a href="{{route('admin_car_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>
                            <td><label class="badge badge-danger"><a href="{{route('admin_car_delete',['id'=> $rs->id])}}"
                                                                     onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection

