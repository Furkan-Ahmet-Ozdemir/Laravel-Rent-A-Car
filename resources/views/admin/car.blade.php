@extends('layouts.admin')

@section('title','Car ')

@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Cars </h3>
            <a href="{{route('admin_car_add')}}"   type="button" class="btn btn-primary btn-rounded btn-fw"> ADD </a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Baggage</th>
                        <th>Passenger</th>
                        <th>Car Type</th>
                        <th>Brand Name</th>
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
                            <td>{{$rs->category_id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->baggage}}</td>
                            <td>{{$rs->passenger}}</td>
                            <td>{{$rs->car_type}}</td>
                            <td>{{$rs->brand_name}}</td>
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

