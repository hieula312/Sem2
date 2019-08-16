<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                            <div class="aa-language">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="client_asset/img/flag/english.jpg" alt="english flag">ENGLISH
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><img src="client_asset/img/flag/french.jpg" alt="">FRENCH</a></li>
                                        <li><a href="#"><img src="client_asset/img/flag/english.jpg" alt="">ENGLISH</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / language -->

                            <!-- start currency -->
                            <div class="aa-currency">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-usd"></i>USD
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                        <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>(+84)-036-2655-898</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="account.html">My Account</a></li>
                                <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                                <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                                <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="homepage">
                                <span class="fa fa-shopping-cart"></span>
                                <p>Arts<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">SHOPPING CART</span>
                                <span class="aa-cart-notify" id="NumCart">@if(request()->session()->has('cart')) {{$cart->totalQty}}@else {{0}} @endif</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    <div id="CartContainer">
                                        @if(request()->session()->has('cart'))
                                        @foreach($cart->items as $cartItem)
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="images/product/{{$cartItem['item']['image']}}" alt="ProductImage"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a>{{$cartItem['item']['name']}}</a></h4>
                                                <p>{{$cartItem['qty']}} x @if($cartItem['item']['promotion_price'] == 0){{$cartItem['item']['unit_price']}}$ @else {{$cartItem['item']['promotion_price']}}$ @endif</p>
                                            </div>
                                        </li>
                                         @endforeach
                                         @endif
                                    </div>
                                    <li>
                                        <span class="aa-cartbox-total-title">
                                            Total
                                        </span>
                                        <span id="NumPrice" class="aa-cartbox-total-price">
                                            @if(request()->session()->has('cart')) {{$cart->totalPrice}}$ @endif
                                        </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="{{route('showCart')}}">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Search here ex. 'Teddy Bear' ">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
