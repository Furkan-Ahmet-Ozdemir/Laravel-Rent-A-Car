@extends('layouts.admin')
@section('title','Edit Message')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Message </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="mb-md-80" action="{{route('admin_message_update',['id'=>$messagedata->id])}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" value="{{$messagedata->name}}" class="form-control form-control-custom" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" value="{{$messagedata->email}}" class="form-control form-control-custom" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" value="{{$messagedata->subject}}" class="form-control form-control-custom" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" value="{{$messagedata->phone}}" class="form-control form-control-custom" placeholder="Phone No." required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Message" required="">{{$messagedata->message}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="status" value="{{$messagedata->status}}" class="form-control form-control-custom" placeholder="Status" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn-first btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
