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
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        @if(request()->session()->has('cart'))
                                        <tbody>
                                        @foreach($cart->items as $item)
                                        <tr id="Container{{$item['item']['id']}}">
                                            <td><a href="#"><img src="images/product/{{$item['item']['image']}}" alt="ProductImage"></a></td>
                                            <td><a class="aa-cart-title">{{$item['item']['name']}}</a></td>
                                            <td>
                                                {{$item['price']}}$
                                            </td>
                                            <td >
                                                {{csrf_field()}}
                                                <input id="quantity{{$item['item']['id']}}" data-id = "{{$item['item']['id']}}" class="aa-cart-quantity" min="1" max="{{$item['item']['unit']}}" type="number" value="{{$item['qty']}}">
                                            </td>
                                            <td>
                                                <span id="PriceContainer{{$item['item']['id']}}"> <?php $total= $item['price'] * $item['qty']; ?>
                                                    {{$total}}$</span>
                                            </td>
                                            <td>
                                                    {{csrf_field()}}
                                                    <span data-id="{{$item['item']['id']}}" class="fa fa-trash-o deleteProduct" id="deleteProduct{{$item['item']['id']}}"></span>
                                            </td>
                                        </tr>
                                        @endforeach
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
                                        <td>
                                            <span id="totalSubPrice">{{$cart->totalPrice}}$</span>
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
    @include('layout.ChangeValueProductScript')
@endsection
