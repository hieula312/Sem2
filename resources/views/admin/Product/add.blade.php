@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>PRODUCT</b></span>
                <small>Add</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    @include('Error')
                    @include('success')
                    @include('alert')
                    <form action="admin/product/add" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Whole Product</label>
                            <select id="wholeProduct" class="form-control" name="wholeproduct">
                                @foreach($wholeProduct as $wp)
                                    <option value="{{$wp->id}}">{{$wp->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type Product</label>
                            {{csrf_field()}}
                            <select class="form-control" name="typeproduct" id="typeProduct">
                                @foreach($typeProduct as $tp)
                                    <option value="{{$tp->id}}">{{$tp->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Enter type product name">
                        </div>
                        <div class="form-group">
                            <label>Unit Price</label>
                            <input value="{{old('unitprice')}}" name="unitprice" type="number" class="form-control" placeholder="Enter unit price of product">
                        </div>
                        <div class="form-group">
                            <label>Promotion Price</label>
                            <input value="{{old('promotionprice')}}" name="promotionprice" type="number" class="form-control" placeholder="Enter promotion price of product">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input value="{{old('quantity')}}" name="quantity" type="number" class="form-control" placeholder="Enter quantity of product">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input value="{{old('image')}}"  name="image" type="file" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea  rows="5" name="description" id="editor" placeholder="Enter description of product">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>New:&nbsp</label>
                            <label class="radio-inline">
                                <input name="new" value="1" checked type="radio">Yes
                            </label>
                            <label class="radio-inline">
                                <input name="new" value="0" type="radio">No
                            </label>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Add new</button>
                    </form>
                </div>
            </div>
        </section>
@endsection
@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        $(document).ready(function () {
            $('#wholeProduct').change(function () {
                var id = $('#wholeProduct').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getTypeProduct')}}",
                    method: 'POST',
                    data: {id:id, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#typeProduct').html(data.output);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');

                        $('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText + '</div>');
                        console.log('jqXHR:');
                        console.log(jqXHR);
                        console.log('textStatus:');
                        console.log(textStatus);
                        console.log('errorThrown:');
                        console.log(errorThrown);
                    },
                });
            })
        })
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