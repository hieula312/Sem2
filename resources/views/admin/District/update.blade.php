@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>District</b></span>
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
                    <form action="admin/district/update/{{$district->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{$district->name}}" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city">
                                @foreach($citys as $city)
                                    <option @if($city->id == $district->id_city) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
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