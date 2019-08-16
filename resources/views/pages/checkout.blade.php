@extends('layout.index')
@section('title', 'Cart')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="client_asset/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Checkout Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="">
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
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Name*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" placeholder="Email Address*">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="tel" placeholder="Phone*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select>
                                                                        <option value="0">Select Your City</option>
                                                                        <option value="1">Long Bien</option>
                                                                        <option value="2">Ba Dinh</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select>
                                                                        <option value="0">Select Your District</option>
                                                                        <option value="1">Long Bien</option>
                                                                        <option value="2">Ba Dinh</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <select>
                                                                        <option value="0">Select Your Sub District</option>
                                                                        <option value="1">Sai Dong</option>
                                                                        <option value="2">Viet Hung</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Detail Address*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3">Note*</textarea>
                                                                </div>
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
                                                    <td>{{$cart->totalPrice}}$</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping fee</th>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>{{$cart->totalPrice}}$</td>
                                                </tr>
                                                </tfoot>
                                                 @endif
                                            </table>
                                        </div>
                                        <h4><b>Payment Method</b></h4>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                                            <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
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

@endsection