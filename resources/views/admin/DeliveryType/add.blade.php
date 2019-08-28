@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>Delivery Type</b></span>
                <small>Add</small>
            </h1>
        </section>
        <!-- Main content -->
        <div class="row">
            <div class="col-lg-7">
                <section class="content container-fluid">
                    @include('Error')
                    @include('success')
                    @include('alert')
                    <form action="admin/deliverytype/add" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Enter the delivery type name">
                        </div>
                        <div class="form-group">
                            <label>Abbreviation</label>
                            <input value="{{old('abbr')}}" name="abbr" type="text" class="form-control" placeholder="Enter the abbreviation of delivery type">
                        </div>
                        <div class="form-group">
                            <label>Factor</label>
                            <input value="{{old('factor')}}" name="factor" type="text" class="form-control" placeholder="Enter the factor of delivery type">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Add new</button>
                    </form>
                </section>
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

