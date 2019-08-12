@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>Slide</b></span>
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
                    <form action="admin/slide/add" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Enter the slide name">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input value="{{old('image')}}"  name="image" type="file" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>New:&nbsp</label>
                            <label class="radio-inline">
                                <input name="priority" value="1" checked type="radio">Yes
                            </label>
                            <label class="radio-inline">
                                <input name="priority" value="0" type="radio">No
                            </label>
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

