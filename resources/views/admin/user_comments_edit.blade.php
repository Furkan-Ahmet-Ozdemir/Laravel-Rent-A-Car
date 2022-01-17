@extends('layouts.admin')
@section('title','Edit Comments ')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Comments </h3>
        </div>
        <form action="{{route('admin_comments_update',['id'=>$data->id])}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="text-custom-black fw-500 fs-14">Comment</label>
                        <textarea rows="4" name="comment" class="form-control form-control-custom" placeholder="Comment">{{$data->comment}}</textarea>

                    </div>
                    <div class="form-group">
                        <label >Car Id</label>
                        <input type="number" class="form-control"name="car_id" value="{{$data->car_id}}" >
                    </div>

                    <div class="form-group">
                        <label >Status</label>
                        <input type="text" class="form-control"name="status" value="{{$data->status}}" >
                    </div>

                    <div class="form-group" hidden>
                        <label hidden >Rate</label>
                        <input type="text" class="form-control"name="rate" value="{{$data->rate}}" hidden >
                    </div>

                    <button type="submit" class="btn-first btn-submit">Save</button>
                </div>
            </div>
        </form>






    </div>
@endsection
