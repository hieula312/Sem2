@extends('admin.layout.index')
@section('content')
    <div class="col-lg-8">
        <section class="content-header" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>TYPE PRODUCT</b></span>
                <small>Update: {{$typeProduct->name}}</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            @include('Error')
            @include('success')
            @include('alert')
            <form action="admin/typeproduct/update/{{$typeProduct->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{$typeProduct->name}}" name="name" type="text" class="form-control" placeholder="Enter new type product name">
                </div>
                <div class="form-group">
                    <label>Abrreviation</label>
                    <input value="{{$typeProduct->name}}" name="abbreviation" type="text" class="form-control" placeholder="Enter abrreviation of product name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea  rows="5" name="description" id="editor" placeholder="Enter new description of type product">{{$typeProduct->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Update now</button>
            </form>
        </section>
        <!-- STYLE -->
    </div>
@endsection
@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
@section('css')
    <style>
        .ck-editor__editable_inline{
            height: 20vh;
        }
        .btn{
            width: 30%;
        }
    </style>
@endsection