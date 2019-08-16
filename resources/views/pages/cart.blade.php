@extends('layout.index')
@section('title', 'Cart')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="client_asset/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Cart Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="cart-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-view-area">
                        <div class="cart-view-table">
                            <form action="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        @if(request()->session()->has('cart'))
                                        <tbody>
                                        <?php $count = 0; $price=0; ?>
                                        @foreach($cart->items as $item)
                                        <?php
                                            $count++;
                                            if($item['item']['promotion_price'] == 0){
                                                $price = $item['item']['unit_price'];
                                            }
                                            else{
                                                $price = $item['item']['promotion_price'];
                                            }
                                        ?>
                                        <tr>
                                            <td><a>{{$count}}</fa></a></td>
                                            <td><a href="#"><img src="images/product/{{$item['item']['image']}}" alt="ProductImage"></a></td>
                                            <td><a class="aa-cart-title">{{$item['item']['name']}}</a></td>
                                            <td>
                                                {{$price}}$
                                            </td>
                                            <td><input class="aa-cart-quantity" type="number" value="{{$item['qty']}}"></td>
                                            <td>
                                                <?php $total= $price * $item['qty']; ?>
                                                {{$total}}$
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" class="aa-cart-view-bottom">
                                                <div class="aa-cart-coupon">
                                                    <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                                                    <input class="aa-coupon-code" type="text" placeholder="Coupon">
                                                </div>
                                                <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                                            </td>
                                        </tr>
                                        </tbody>
                                        @endif
                                    </table>
                                </div>
                            </form>
                            <!-- Cart Total view -->
                            @if(request()->session()->has('cart'))
                            <div class="cart-view-total">
                                <h4>Cart Totals</h4>
                                <table class="aa-totals-table">
                                    <tbody>
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
                                        <td>
                                            <b>
                                                {{$cart->totalPrice}}$
                                            </b>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{route('getCheckout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
@endsection
@section('script')

@endsection