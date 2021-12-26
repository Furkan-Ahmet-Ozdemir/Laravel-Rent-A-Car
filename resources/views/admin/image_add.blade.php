@extends('layouts.admin')

@section('title','Add Image')

@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Image </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
{{--                        <h3 class="page-title" style="padding-bottom: 20px;">Car : {{$data->title}}</h3>--}}
                    <form class="forms-sample" action="{{route('admin_image_store',['car_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title"  placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" class="form-control"name="image">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Add Image </button>
                    </form>

                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(  $images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" width="60" height="60" alt="">
                                @endif
                            </td>
                            <td><label class="badge badge-danger"><a href="{{route('admin_image_delete',['id'=> $rs->id,'car_id'=>$data->id])}}"
                                                                     onclick="return confirm('Delete ! Are you sure ?')">DELETE</a>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
