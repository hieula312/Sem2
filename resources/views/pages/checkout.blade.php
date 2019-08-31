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
                                                                        <input value="@if(isset($user)){{$user->name}}@else{{old('name')}}@endif" name="name" type="text" placeholder="Name*">
                                                                        <input type="hidden" name="totalPrice" id="totalPrice">
                                                                        <input type="hidden" name="checkUser" id="checkUser" value=@if(isset($user)){{1}}@else{{0}}@endif>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="@if(isset($user)){{$user->email}}@else{{old('email')}}@endif" name="email" type="email" placeholder="Email Address*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <input value="@if(isset($user)){{$user->phoneNumber}}@else{{old('tel')}}@endif" id="tel" name="tel" type="tel" placeholder="Phone*">
                                                                        <input type="hidden" value="2" name="checkTel" id="checkTel">
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
                                                                            <option @if(isset($user)) @if($user->customerCity == $city->name) selected @endif @endif  value="{{$city->id}}">{{$city->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="district" id="district">
                                                                            @if(isset($user))
                                                                                @foreach($districts as $district)
                                                                                    @if($user->customerDistrict == $district->name)
                                                                                        <option value={{$district->id}}>{{$district->name}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <option value="0">Select Your District</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="subdistrict" id="subdistrict">
                                                                            @if(isset($user))
                                                                                @foreach($subdistricts as $subdistrict)
                                                                                    @if($user->customerSubdistrict == $subdistrict->name)
                                                                                        <option data-num={{$subdistrict->shippingfee}} value={{$subdistrict->id}}>{{$subdistrict->name}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <option value="0">Select Your Sub District</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="aa-checkout-single-bill">
                                                                        <select name="deliveryType" id="deliveryType">
                                                                            <option data-num="0" selected value="0">Select Type of Delivery</option>
                                                                            @foreach($deliveryTypes as $deliveryType)
                                                                            <option @if(old('deliveryType') == $deliveryType->id) selected @endif data-num={{($deliveryType->factor)}} value={{$deliveryType->id}}>{{$deliveryType->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="aa-checkout-single-bill">
                                                                        @if(isset($user))
                                                                            <input value="{{$user->address}}" type="text" name="address" placeholder="Detail Address*">
                                                                        @else
                                                                            <input value="{{old('address')}}" type="text" name="address" placeholder="Detail Address*">
                                                                        @endif
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
                                                            <hr style=" height:1px ; background-color: #ff6666;">
                                                            <div class="row">
                                                                <div class="col-lg-4"></div>
                                                                <div class="col-lg-4 text-center">
                                                                    <a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                                                                    <b>OR</b> <a href="register">Register</a>
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
    @include('layout.SelectLocationScript')
@endsection