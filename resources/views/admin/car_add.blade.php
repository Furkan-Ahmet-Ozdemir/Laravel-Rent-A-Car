@extends('layouts.admin')

@section('title','Add Car')

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
            <h3 class="page-title"> Add Car </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('admin_car_create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label >Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%">
{{--                                <option value="0" selected="selected"> Main Category </option>--}}
                                @foreach(  $datalist as $rs)
                                    <option value="{{$rs->id}}">{{/*\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,*/$rs->title/*)*/}}</option>
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
                            <label >Transmission Type</label>
                            <input type="text" class="form-control"name="transmission_type"  placeholder="Transmission Type">
                        </div>

                        <div class="form-group">
                            <label >Fuel Type</label>
                            <input type="text" class="form-control"name="fuel_type"  placeholder="Fuel Type">
                        </div>

                        <div class="form-group">
                            <label >Baggage</label>
                            <input type="text" class="form-control"name="baggage"  placeholder="Baggage">
                        </div>









                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" class="form-control"name="image">
                        </div>


                        <div class="form-group">
                            <label >Detail</label>
                            <div id="a" name="detail"></div>
                            <script>
                                $('#a').summernote({
                                    placeholder: 'Details',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <label >Price</label>
                            <input type="number" class="form-control"name="price"  placeholder="Price">
                        </div>

                        <div class="form-group">
                            <label >Passenger</label>
                            <input type="number" class="form-control"name="passenger"  placeholder="Passenger">
                        </div>

                        <div class="form-group">
                            <label >Car Type</label>
                            <input type="text" class="form-control"name="car_type"  placeholder="Car Type">
                        </div>

                        <div class="form-group">
                            <label >Brand Name</label>
                            <input type="text" class="form-control"name="brand_name"  placeholder="Brand Name">
                        </div>

                        <div class="form-group">
                            <label >Model Name</label>
                            <input type="text" class="form-control"name="model_name"  placeholder="Model Name">
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width: 100%">
                                <option selected="selected"> False </option>
                                <option> True </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Add Car </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
