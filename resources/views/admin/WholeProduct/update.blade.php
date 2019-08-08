@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>WHOLE PRODUCT</b></span>
                <small>Update: {{$wholeProduct->name}}</small>
            </h1>
        </section>
        <!-- Main content -->
        <div class="row">
            <div class="col-lg-7">
                <section class="content container-fluid">
                    @include('Error')
                    @include('success')
                    @include('alert')
                    <form action="admin/wholeproduct/update/{{$wholeProduct->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{$wholeProduct->name}}" name="name" type="text" class="form-control" placeholder="Enter new whole product name">
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