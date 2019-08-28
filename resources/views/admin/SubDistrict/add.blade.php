@extends('admin.layout.index')
@section('content')
        <section class="content-header col-lg-7" style="margin-bottom: 15px;">
            <h1 style="border-bottom: 2px solid black;">
                <span><b>SubDistrict</b></span>
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
                    <form action="admin/subdistrict/add" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city" id="city">
                                @foreach($citys as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <select class="form-control" name="district" id="district">
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Enter the subdistrict name">
                        </div>
                        <div class="form-group">
                            <label>Shipping Fee</label>
                            <input value="{{old('shippingfee')}}" name="shippingfee" type="number" class="form-control" placeholder="Enter shipping fee of subdistrict">
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
@section('script')
    <script>
        $(document).ready(function () {
            $('#city').change(function () {
                var id = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getDistrictAd')}}",
                    method: 'POST',
                    data: {id:id, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#district').html(data.output);
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

