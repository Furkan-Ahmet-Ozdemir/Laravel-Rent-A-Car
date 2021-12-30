@extends('layouts.admin')
@section('title','Edit Faq')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Faq </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="{{route('admin_faq_update',['id'=>$faqdata->id])}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="question" value="{{$faqdata->question}}" >
                        </div>

                        <div class="form-group">
                            <label >Keywords</label>
                            <input type="text" class="form-control"name="answer" value="{{$faqdata->answer}}" >
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <select class="form-control select2" name="status" style="width:100%">
                                <option selected="selected"> {{$faqdata->status}} </option>
                                <option> False </option>
                                <option> True </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2"> Edit Faq </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
