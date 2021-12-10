@extends('layouts.admin')

@section('title','Laravel E-yer Sitesi')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Category </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label >Parent</label>
                            <select class="form-control select2" name="parent_id" style="width: 100%">
                                <option value="0" selected="selected"> Main Category </option>
                                @foreach(  $datalist as $rs)
                                    <option value="{{$rs->parent_id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title"  placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label >Keywords</label>
                            <input type="text" class="form-control"name="keywords"  placeholder="Keywords">
                        </div>

                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control"name="description"  placeholder="Description">
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width: 100%">
                                <option selected="selected"> False </option>
                                <option> True </option>
                            </select>
                        </div>



                        <button type="submit" class="btn btn-primary mr-2"> Add Category </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
