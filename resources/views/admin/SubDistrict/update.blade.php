@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>SubDistrict</b></span>
                <small>Update</small>
            </h1>
        </section>
        <!-- Main content -->
        <div class="row">
            <div class="col-lg-7">
                <section class="content container-fluid">
                    @include('Error')
                    @include('success')
                    @include('alert')
                    <form action="admin/subdistrict/update/{{$subdistrict->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city" id="city">
                                @foreach($citys as $city)
                                    <option @if($city->id == $subdistrict->District->City->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <select class="form-control" name="district" id="district">
                                @foreach($districts as $district)
                                    <option @if($district->id == $subdistrict->District->id) selected @endif value="{{$district->id}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{$subdistrict->name}}" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Shipping Fee</label>
                            <input value="{{$subdistrict->shippingfee}}" name="shippingfee" type="number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Update now</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .btn{
            width: 30%;
        }
    </style>
@endsection