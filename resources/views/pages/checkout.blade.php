@extends('layout.index')
@section('title', 'Check out')
@section('content')

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="order" method="post">
                            {{csrf_field()}}
                            <div class="row">
                            <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Billing Details -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <b>Billing Details</b>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            @include('ErrorClient')
                                                            @include('alert')
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="{{old('name')}}" name="name" type="text" placeholder="Name*">
                                                                        <input type="hidden" name="totalPrice" id="totalPrice">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="{{old('email')}}" name="email" type="email" placeholder="Email Address*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="{{old('tel')}}" name="tel" type="tel" placeholder="Phone*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        {{csrf_field()}}
                                                                        <select name="city" id="city">
                                                                            <option value="0">Select Your City</option>
                                                                            @foreach($citys as $city)
                                                                            <option @if(old('city') == $city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="district" id="district">
                                                                            <option value="0">Select Your District</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="subdistrict" id="subdistrict">
                                                                            <option value="0">Select Your Sub District</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="deliveryType" id="deliveryType">
                                                                            <option data-num="0" selected value="0">Select Type of Delivery</option>
                                                                            @foreach($deliveryTypes as $deliveryType)
                                                                            <option @if(old('deliveryType') == $deliveryType->id) selected @endif data-num={{$deliveryType->price}} value={{$deliveryType->id}}>{{$deliveryType->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="{{old('address')}}" type="text" name="address" placeholder="Detail Address*">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <textarea value="{{old('note')}}" name="note" cols="8" rows="2" placeholder="Note*"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4"></div>
                                                                <div class="col-lg-4">
                                                                    <a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                                                                    OR <a href="register">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4><b>Order Summary</b></h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                @if(request()->session()->has('cart'))
                                                <tbody>
                                                @foreach($cart->items as $item)
                                                <?php
                                                    if($item['item']['promotion_price'] == 0){
                                                        $price = $item['item']['unit_price'];
                                                    }
                                                    else{
                                                        $price = $item['item']['promotion_price'];
                                                    }
                                                ?>
                                                <tr>
                                                    <td>{{$item['item']['name']}} <strong> x  {{$item['qty']}}</strong></td>
                                                    <td>
                                                        <?php $total= $price * $item['qty']; ?>
                                                        {{$total}}$
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>
                                                        <span id="subtotal">{{$cart->totalPrice}}$</span>
                                                        <input type="hidden" value="{{$cart->totalPrice}}" id="inputSubTotal">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping fee</th>
                                                    <td>
                                                        <span id="shippingfee">0$</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>
                                                        <span id="total">{{$cart->totalPrice}}$</span>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                 @endif
                                            </table>
                                        </div>
                                        <h4><b>Payment Method</b></h4>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery"><input name="payment" value="0" type="radio" id="cashdelivery" checked> Cash on Delivery </label>
                                            <label for="paypal"><input name="payment" value="1" type="radio" id="paypal" > Via Paypal </label>
                                            <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">
                                            <input type="submit" value="Place Order" class="aa-browse-btn">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
@endsection
@section('script')
    <script>
        $(document).ready(function () {

            $('#deliveryType').change(function (e) {
                e.preventDefault();
                var x = parseFloat($('#deliveryType').find(':selected').data('num')) * parseFloat($('#subdistrict').find(':selected').data('num'));
                counting(x);
            });

            $('#subdistrict').change(function (e) {
                e.preventDefault();
                var x = parseFloat($('#deliveryType').find(':selected').data('num')) * parseFloat($('#subdistrict').find(':selected').data('num'));
                counting(x);
            });

            $('#city').change(function (e) {
                e.preventDefault();
                var idCity = $(this).val();
                if(idCity == 0){
                    $('#district').val(0);
                    $('#district').html('<option selected value="0">Select Your District</option>');
                    $('#subdistrict').html('<option selected value="0">Select Your Sub District</option>');
                    $('#shippingfee').val(0);
                    $('#shippingfee').html(0 + '$');
                    counting(0);
                    return false;
                };
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getDistrict')}}",
                    method: 'POST',
                    data: {id:idCity, _token:_token},
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

            $('#district').change(function (e) {
                e.preventDefault();
                var idDistrict = $(this).val();
                if(idDistrict == 0){
                    $('#subdistrict').html('<option selected value="0">Select Your Sub District</option>');
                    $('#shippingfee').val(0);
                    $('#shippingfee').html(0 + '$');
                    counting(0);
                    return false;
                };
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getSubDistrict')}}",
                    method: 'POST',
                    data: {id:idDistrict, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#subdistrict').html(data.output);
                        $('#shippingfee').val(0);
                        $('#shippingfee').html(0 + '$');
                        counting(0);
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
        function counting(x) {
            x = x.toFixed(2);
            x = parseFloat(x);
            var y = parseFloat($('#inputSubTotal').val());
            y = y.toFixed(2);
            y = parseFloat(y);
            var z = x + y;
            $('#shippingfee').val(x);
            $('#shippingfee').html(x + '$');
            $('#total').val(z);
            $('#totalPrice').val(z);
            $('#total').html(z + '$');
        }
    </script>
@endsection