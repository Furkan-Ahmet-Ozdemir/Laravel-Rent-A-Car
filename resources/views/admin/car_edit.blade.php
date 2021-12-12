@extends('layouts.admin')
@section('title','Edit Car')
@section('boostrap_js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <style>
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Car </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="{{route('admin_car_update',['id'=>$data->id])}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label >Parent</label>
                            <select class="form-control select2" name="category_id" style="width: 100%">

                                @foreach(  $datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif >{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title" value="{{$data->title}}" >
                        </div>

                        <div class="form-group">
                            <label >Keywords</label>
                            <input type="text" class="form-control"name="keywords" value="{{$data->keywords}}" >
                        </div>

                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control"name="description" value="{{$data->description}}" >

                        </div>

                        <div class="form-group">
                            <label >Detail</label>
                            <div id="summernote" class="form-control" name="detail" value="{{$data->detail}}"></div>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Details',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <label >Detail</label>
                            <input type="number" class="form-control"name="price"  value="{{$data->price}}">
                        </div>

                        <div class="form-group">
                            <label >Passenger</label>
                            <input type="number" class="form-control"name="passenger"  value="{{$data->passenger}}">
                        </div>

                        <div class="form-group">
                            <label >Car Type</label>
                            <input type="text" class="form-control"name="car_type"  value="{{$data->car_type}}">
                        </div>

                        <div class="form-group">
                            <label >Brand Name</label>
                            <input type="text" class="form-control"name="brand_name"  value="{{$data->brand_name}}">
                        </div>

                        <div class="form-group">
                            <label >Model Name</label>
                            <input type="text" class="form-control"name="model_name"  value="{{$data->model_name}}">
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width:100%">
                                <option selected="selected"> {{$data->status}} </option>
                                <option> False </option>
                                <option> True </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Edit Car </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
