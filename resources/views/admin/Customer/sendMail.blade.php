@extends('admin.layout.index')
@section('content')
    <section class="content-header col-lg-7" style="margin-bottom: 15px;">
        <h1 style="border-bottom: 2px solid black;">
            <span><b>SEND MAIL</b></span>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-7">
                @include('Error')
                @include('success')
                @include('alert')
                <form action="admin/customer/sendMail" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Title</label>
                        <input value="{{old('title')}}" name="title" type="text" class="form-control" placeholder="Enter type product name">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea  rows="8" name="body" id="editor" placeholder="Enter body of email">{{old('body')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Send Mail</button>
                </form>
            </div>
        </div>
    </section>
    <!-- STYLE -->
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