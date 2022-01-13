@extends('layouts.admin')
@section('title','Edit Setting ')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Settings </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                            <input type="hidden" class="form-control"name="id" value="{{$data->id}}" >
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
                            <label >company</label>
                            <input type="text" class="form-control"name="company"  value="{{$data->company}}">
                        </div>

                        <div class="form-group">
                            <label >address</label>
                            <input type="text" class="form-control" name="address"  value="{{$data->address}}">
                        </div>

                        <div class="form-group">
                            <label >phone</label>
                            <input type="text" class="form-control" name="phone"  value="{{$data->phone}}">
                        </div>

                        <div class="form-group">
                            <label >fax</label>
                            <input type="text" class="form-control" name="fax"  value="{{$data->fax}}">
                        </div>

                        <div class="form-group">
                            <label >email</label>
                            <input type="text" class="form-control" name="email"  value="{{$data->email}}">
                        </div>

                        <div class="form-group">
                            <label >smtpserver</label>
                            <input type="text" class="form-control" name="smtpserver"  value="{{$data->smtpserver}}">
                        </div>

                        <div class="form-group">
                            <label >smtpemail</label>
                            <input type="text" class="form-control" name="smtpemail"  value="{{$data->smtpemail}}">
                        </div>

                        <div class="form-group">
                            <label >smtppassword</label>
                            <input type="password" class="form-control" name="smtppassword"  value="{{$data->smtppassword}}">
                        </div>

                        <div class="form-group">
                            <label >smtpport</label>
                            <input type="text" class="form-control" name="smtpport"  value="{{$data->smtpport}}">
                        </div>

                        <div class="form-group">
                            <label >instagram</label>
                            <input type="text" class="form-control" name="instagram"  value="{{$data->instagram}}">
                        </div>

                        <div class="form-group">
                            <label >facebook</label>
                            <input type="text" class="form-control" name="facebook"  value="{{$data->facebook}}">
                        </div>

                        <div class="form-group">
                            <label >twitter</label>
                            <input type="text" class="form-control" name="twitter"  value="{{$data->twitter}}">
                        </div>

                        <div class="form-group">
                            <label >youtube</label>
                            <input type="text" class="form-control" name="youtube"  value="{{$data->youtube}}">
                        </div>

                        <div class="form-group">
                            <label >aboutus</label>
                            <textarea name="aboutus" class="form-control" rows="5">{{$data->aboutus}}</textarea>
                        </div>

                        <div class="form-group">
                            <label >contact</label>
                            <textarea  class="form-control" name="contact">{{$data->contact}}</textarea>
                        </div>

                        <div class="form-group">
                            <label >references</label>
                            <textarea  class="form-control" name="references">{{$data->references}}</textarea>
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width:100%">
                                < selected="selected"> {{$data->status}} >
                                <option> False </option>
                                <option> True </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
