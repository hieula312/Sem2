@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>Delivery Type</b></span>
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
                    <form action="admin/deliverytype/update/{{$deliveryType->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{$deliveryType->name}}" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Abbreviation</label>
                            <input value="{{$deliveryType->abbr}}" name="abbr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Factor</label>
                            <input value="{{$deliveryType->factor}}" name="factor" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Update now</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#image').change(function (e) {
                readURL(this);
                $('#checkImg').val(1);
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
@section('css')
    <style>
        .btn{
            width: 30%;
        }
    </style>
@endsection