@extends('layouts.admin')
@section('title','Edit Category')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Category </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label >Parent</label>
                            <select class="form-control select2" name="parent_id" style="width: 100%">
{{--                                <option value="{{$data->parent_id}}" selected="selected"></option>--}}

                                @foreach(  $datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif >
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title" value="{{$data->title}}" {{--placeholder="Title"--}}>
                        </div>

                        <div class="form-group">
                            <label >Keywords</label>
                            <input type="text" class="form-control"name="keywords" value="{{$data->keywords}}" {{--placeholder="Keywords"--}}>
                        </div>

                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control"name="description" value="{{$data->description}}" {{--placeholder="Description"--}}>
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width:100%">
                                <option selected="selected"> {{$data->status}} </option>
                                <option> False </option>
                                <option> True </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Edit Category </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
