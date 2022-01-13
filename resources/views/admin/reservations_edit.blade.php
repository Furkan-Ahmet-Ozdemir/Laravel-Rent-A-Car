@extends('layouts.admin')

@section('title','Laravel E-yer Sitesi')
@section('content')
<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title"> Reservation Edit </h3>

    </div>
{{--    <form action="{{route('admin_reservations_update',['id'=>$data->id])}}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="form-group">--}}

{{--                    <div class="form-group">--}}
{{--                        <label >Car Id</label>--}}
{{--                        <input type="text" name="car_id" value="{{$data->car_id}}" >--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label >Amount</label>--}}
{{--                        <input type="text" name="car_id" value="{{$data->amount}}" >--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label >User Id</label>--}}
{{--                        <input type="text" name="car_id" value="{{$data->user_id}}" >--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="fs-14 text-custom-black fw-500">Pick Up Date/Time</label>--}}
{{--                        {{$data->rezPickUp}}--}}
{{--                        <input type="text" name="rezPickUp" --}}{{--class="form-control form-control-custom"--}}{{-- value="{{$data->rezPickUp}}" required>--}}
{{--                    </div>--}}


{{--                    <input type="datetime-local" name="rezDateTime" class="form-control form-control-custom datepickr" value="{{$data->rezDateTime}}" required>--}}
{{--                    {{$data->rezDateTime}}--}}

{{--                    <label class="fs-14 text-custom-black fw-500">Pick Off</label>--}}
{{--                    <input type="text" name="rezPickOf" class="form-control form-control-custom" value="{{$data->rezPickOf}}" required>--}}

{{--                    <label class="fs-14 text-custom-black fw-500">Drop Off Date/Time</label>--}}
{{--                    <div class="input-group group-form">--}}
{{--                        <input type="datetime-local" name="retDateTime" class="form-control form-control-custom datepickr" value="{{$data->retDateTime}}" required>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <button type="submit" class="btn-first btn-submit full-width btn-height">Submit</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

    <form action="{{route('admin_reservations_update',['id'=>$data->id])}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Car Id</label>
                    <div class="input-group group-form">
                        <input type="text" name="car_id" value="{{$data->car_id}}" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">User Id</label>
                    <div class="input-group group-form">
                        <input type="text" name="user_id" value="{{$data->user_id}}" >
                    </div>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label class="fs-14 text-custom-black fw-500">Amount</label>--}}
{{--                    <div class="input-group group-form">--}}
{{--                        <input type="number" name="price" value="{{$data->price}}" >--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label class="fs-14 text-custom-black fw-500">Amount</label>--}}
{{--                    <div class="input-group group-form">--}}
{{--                        <input type="number" name="amount" value="{{$data->amount}}" >--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Pick Up</label>
                    <div class="input-group group-form">
                        <input type="text" name="rezPickUp" class="form-control form-control-custom"
                               placeholder="city,distirct or specific airpot" value="{{$data->rezPickUp}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Pick Up Date/Time</label>
                    <div> <h6 style="color: #0b0b0b">{{$data->rezDateTime}} </h6> </div>
                    <div class="input-group group-form">
                        <input type="datetime-local" name="rezDateTime" class="form-control form-control-custom datepickr"
                               placeholder="mm/dd/yy" value="{{$data->rezDateTime}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Drop Off</label>
                    <input type="text" name="rezPickOf" class="form-control form-control-custom"
                           placeholder="city,distirct or specific airpot" value="{{$data->rezPickOf}}" required>
                </div>
                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Drop Off Date/Time</label>
                    <div> <h6 style="color: #0b0b0b">{{$data->retDateTime}} </h6> </div>
                    <div class="input-group group-form">
                        <input type="datetime-local" name="retDateTime" class="form-control form-control-custom datepickr"
                               placeholder="mm/dd/yy" value="{{$data->retDateTime}}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="fs-14 text-custom-black fw-500">Satus</label>
                    <div class="input-group group-form">
                        <input type="text" name="note"  @if('$data->note'!='') value="{{$data->note}}" @endif required>
                    </div>
                </div>

                <button type="submit" class="btn-first btn-submit full-width btn-height">Submit</button>
            </div>
        </div>
    </form>
{{--            <tbody>--}}
{{--            @foreach(  $datalist as $rs)--}}
{{--                <tr>--}}
{{--                    <td>{{$rs->id}}</td>--}}
{{--                    <td>{{$rs->user_id}}</td>--}}
{{--                    <td>{{$rs->car_id}}</td>--}}
{{--                    <td>{{$rs->rezPickUp}}</td>--}}
{{--                    <td>{{$rs->rezPickOf}}</td>--}}
{{--                    <td>{{$rs->rezDateTime}}</td>--}}
{{--                    <td>{{$rs->retDateTime}}</td>--}}
{{--                    <td>{{$rs->amount}}</td>--}}
{{--                    <td>{{$rs->status}}</td>--}}
{{--                    <td><label class="badge badge-warning"><a href="{{route('admin_car_edit',['id'=> $rs->id])}}" >EDIT</a></label></td>--}}
{{--                    <td><label class="badge badge-danger"><a href="{{route('admin_car_delete',['id'=> $rs->id])}}"--}}
{{--                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
</div>
@endsection


