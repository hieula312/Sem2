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
                                    <a class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="client_asset/img/flag/english.jpg" alt="english flag">ENGLISH
                                    </a>
                                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                                        {{--<li><a href="#"><img src="client_asset/img/flag/french.jpg" alt="">FRENCH</a></li>--}}
                                        {{--<li><a href="#"><img src="client_asset/img/flag/english.jpg" alt="">ENGLISH</a></li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                            <!-- / language -->

                            <!-- start currency -->
                            <div class="aa-currency">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-usd"></i>USD
                                    </a>
                                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                                        {{--<li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>--}}
                                    {{--</ul>--}}
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
                                <li><a href="checkOrder">Check Order</a></li>
                                @if(!\Illuminate\Support\Facades\Auth::check())
                                <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                @endif
                                @if(!\Illuminate\Support\Facades\Auth::check())
                                    <li><a href="register">Register</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <li class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <?php $name = getName($user->name) ?>
                                        <span>Hi {{$name}}</span>
                                        <span class="caret"></span>
                                    </a>
                                    <ul id="Hieu-dropdown" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li style="width: 100%"><a href="#">Edit Inf</a></li>
                                        <li style="width: 100%"><a href="logout">Log out</a></li>
                                    </ul>
                                </li>
                                 @endif
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
                                <div class="col-lg-12 no-padding">
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <a class="aa-cartbox-checkout aa-primary-btn Hieu-cart" href="{{route('showCart')}}">Cart Detail</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a class="aa-cartbox-checkout aa-primary-btn Hieu-cart" href="{{route('getCheckout')}}">Check Out</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="search" method="get">
                                {{csrf_field()}}
                                <input required type="text" name="search" id="search" placeholder="Search here ex. 'Teddy Bear' ">
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
