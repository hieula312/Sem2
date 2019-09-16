@extends('layout.index')
@section('title', 'Home Page')
@section('content')
    <!-- SLIDE -->
    @include('layout.slide')
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start product navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <?php $count = 1; ?>
                                    @foreach($wholeProducts as $wholeProduct)
                                    <li class="<?php if($count==1){ echo 'active';} $count++;?>"><a href="#{{$wholeProduct->name}}" data-toggle="tab">{{$wholeProduct->name}}</a></li>
                                    @endforeach
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php $count1 = 1; ?>
                                    @foreach($wholeProducts as $wholeProduct)
                                    <!-- Start product category -->
                                    <div class="tab-pane fade <?php if($count1==1){ echo 'in active';} $count1++;?>" id="{{$wholeProduct->name}}">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            @foreach($productsArray[$wholeProduct->id] as $item)
                                            <li>
                                                <figure>
                                                    <a href="product/{{$item->id}}"  class="aa-product-img" ><img src="images/product/{{$item->image}}" alt="{{$item->name}}"></a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">{{$item->name}}</a></h4>
                                                        <?php $item->unit_price = number_format($item->unit_price, 2)?>
                                                        <span class="aa-product-price">{{$item->unit_price}}$</span>
                                                        @if($item->promotion_price > 0)
                                                        <?php $item->promotion_price = number_format($item->promotion_price, 2)?>
                                                        <span class="aa-product-price"><del>{{$item->promotion_price}}$</del></span>
                                                        @endif
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    {{csrf_field()}}
                                                    <a class="buyProduct" id="buy{{$item->id}}" href="#" data-toggle="modal"  data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$item->id}}">
                                                        <input type="hidden" value="{{$item->id}}" id="idProduct">
                                                        <input type="hidden" value="1" id="num">
                                                        <span class="fa fa-shopping-cart"></span>
                                                    </a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal{{$item->id}}"><span class="fa fa-search"></span></a>
                                                    <a href="product/{{$item->id}}" data-toggle="modal" data-placement="top" title="View detail"><span class="fa fa-align-center"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                @if($item->promotion_price > 0)
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end product category -->
                                    @endforeach
                                </div>
                                <!-- quick view modal -->
                                @foreach($bigsArray as $bigArray)
                                @foreach($bigArray as $item)
                                        <div data-id="{{$item->id}}" class="modal fade quick-modal" id="quick-view-modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <div class="row">
                                                            <!-- Modal view slider -->
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <a  class="aa-product-img" >
                                                                <img src="images/product/{{$item->image}}" class="simpleLens-big-image">
                                                                </a>
                                                            </div>
                                                            <!-- Modal view content -->
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div id="showError{{$item->id}}" class="alert alert-danger" style="display: none;">
                                                                    <b>
                                                                        <span class="fa fa-times"></span>
                                                                    </b>
                                                                    Product is only has <span id="UnitProduct{{$item->id}}"></span> left!
                                                                </div>
                                                                <div class="aa-product-view-content">
                                                                    <h3><b>{{$item->name}}</b></h3>
                                                                    <div class="aa-price-block">
                                                                        <span class="aa-product-view-price">
                                                                            <?php $item->unit_price = number_format($item->unit_price, 2)?>
                                                                            <span class="aa-product-price">{{$item->unit_price}}$</span>
                                                                            @if($item->promotion_price > 0)
                                                                            <?php $item->promotion_price = number_format($item->promotion_price, 2)?>
                                                                            <span class="aa-product-price"><del>{{$item->promotion_price}}$</del></span>
                                                                            @endif
                                                                        </span>
                                                                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                                    </div>
                                                                    {{--<p>{!!  $item->description !!}</p>--}}
                                                                    <div class="aa-prod-view-bottom">
                                                                        {{csrf_field()}}
                                                                        <span>Quantity: </span>
                                                                        <input class="aa-cart-quantity productNum" min="1" id="productNum{{$item->id}}" type="number" value="1">
                                                                        <input type="hidden" value="{{$item->id}}" id="idProduct">
                                                                        <a data-dismiss="modal" aria-hidden="true" id="selectCart" class="aa-add-to-cart-btn">
                                                                            <span class="fa fa-shopping-cart"></span>
                                                                            Add To Cart
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                @endforeach
                                @endforeach
                                <!-- / quick view modal -->
                                <!-- add cart modal -->
                                @foreach($bigsArray as $bigArray)
                                    @foreach($bigArray as $item)
                                        <div  class="modal fade" id="add-cart-view-modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <div class="row">
                                                            <!-- Modal view slider -->
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <a  class="aa-product-img" >
                                                                    <img src="images/product/{{$item->image}}" class="simpleLens-big-image">
                                                                </a>
                                                            </div>
                                                            <!-- Modal view content -->
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="alert alert-success" id="success{{$item->id}}">
                                                                    <b>
                                                                        <span class="fa fa-check"></span>
                                                                    </b>
                                                                        Product is added to cart

                                                                </div>
                                                                <div class="alert alert-danger" id="error{{$item->id}}" style="display: none;">
                                                                    <b>
                                                                        <span class="fa fa-times"></span>
                                                                    </b>
                                                                    Product is out of stock

                                                                </div>
                                                                <div class="aa-product-view-content">
                                                                    <h3><b>{{$item->name}}</b></h3>
                                                                    <div class="aa-price-block">
                                                                    @if($item->promotion_price > 0)
                                                                        <?php $item->promotion_price = number_format($item->promotion_price, 2)?>
                                                                        <span class="aa-product-price">{{$item->promotion_price}}$</span>
                                                                    @else
                                                                         <?php $item->unit_price = number_format($item->unit_price, 2)?>
                                                                         <span class="aa-product-price">{{$item->unit_price}}$</span>
                                                                    @endif
                                                                        <span>x&nbsp;1</span>
                                                                    </div>
                                                                    <div class="aa-prod-view-bottom">
                                                                        {{csrf_field()}}
                                                                         <a class="aa-add-to-cart-btn" data-dismiss="modal" aria-hidden="true">
                                                                             <span class="fa fa-shopping-cart">Continue</span>
                                                                         </a>
                                                                         <a class="aa-add-to-cart-btn" href="{{route('getCheckout')}}">
                                                                             <span class="fa fa-shopping-cart">Check out</span>
                                                                         </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                @endforeach
                            @endforeach
                                <!-- / add cart modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner" class="module parallax white support-area-wrapper bg-dark-60">
        <div>
            <div class="container">
                <div class="row">
                    <div class="support-area-inner">
                        <div class="support-area">
                            <div class="support-area-item col-md-3">
                                <div class="sa-icon">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
								</span>
                                </div>
                                <div class="sa-des">
                                    <h3 class="sa-title">Miễn phí giao hàng</h3>
                                    <div class="sa-subtext">Cho hóa đơn từ 499K</div>
                                </div>
                            </div>
                            <div class="support-area-item col-md-3">
                                <div class="sa-icon">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
								</span>
                                </div>
                                <div class="sa-des">
                                    <h3 class="sa-title">Miễn phí gói quà</h3>
                                    <div class="sa-subtext">Áp dụng tất cả đơn hàng bạn muốn</div>
                                </div>
                            </div>
                            <div class="support-area-item col-md-3">
                                <div class="sa-icon">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-tag fa-stack-1x fa-inverse"></i>
								</span>
                                </div>
                                <div class="sa-des">
                                    <h3 class="sa-title">Hoàn tiền 100%</h3>
                                    <div class="sa-subtext">Nếu không thấy hài lòng</div>
                                </div>
                            </div>
                            <div class="support-area-item col-md-3">
                                <div class="sa-icon">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-tag fa-stack-1x fa-inverse"></i>
								</span>
                                </div>
                                <div class="sa-des">
                                    <h3 class="sa-title">Thanh toán khi nhận</h3>
                                    <div class="sa-subtext">Giao hàng lấy tiền tại nhà</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start product navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        @foreach($popularProducts as $popular)
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="product/{{$popular->id}}"><img src="images/product/{{$popular->image}}" alt="{{$popular->name}}"></a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$popular->name}}</a></h4>
                                                    <?php $popular->unit_price = number_format($popular->unit_price, 2)?>
                                                    <span class="aa-product-price">{{$popular->unit_price}}$</span>
                                                    @if($popular->promotion_price > 0)
                                                        <?php $popular->promotion_price = number_format($popular->promotion_price, 2)?>
                                                        <span class="aa-product-price"><del>{{$popular->promotion_price}}$</del></span>
                                                    @endif
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                {{csrf_field()}}
                                                <a class="buyProduct" id="buy{{$popular->id}}" href="#" data-toggle="modal" data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$popular->id}}">
                                                    <input type="hidden" value="{{$popular->id}}" id="idProduct">
                                                    <input type="hidden" value="1" id="num">
                                                    <span class="fa fa-shopping-cart"></span>
                                                </a>
                                                <a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal{{$popular->id}}"><span class="fa fa-search"></span></a>
                                                <a href="product/{{$popular->id}}" data-toggle="modal" data-placement="top" title="View detail"><span class="fa fa-align-center"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            @if($popular->promotion_price > 0)
                                                <span class="aa-badge aa-sale">SALE!</span>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- / popular product category -->
                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->
                                        @foreach($featureProducts as $feature)
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="product/{{$feature->id}}"><img src="images/product/{{$feature->image}}" alt="{{$feature->name}}"></a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">{{$feature->name}}</a></h4>
                                                        <?php $feature->unit_price = number_format($feature->unit_price, 2)?>
                                                        <span class="aa-product-price">{{$feature->unit_price}}$</span>
                                                        @if($feature->promotion_price > 0)
                                                            <?php $feature->promotion_price = number_format($feature->promotion_price, 2)?>
                                                            <span class="aa-product-price"><del>{{$feature->promotion_price}}$</del></span>
                                                        @endif
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    {{csrf_field()}}
                                                    <a class="buyProduct" id="buy{{$feature->id}}" href="#" data-toggle="modal" data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$feature->id}}">
                                                        <input type="hidden" value="{{$feature->id}}" id="idProduct">
                                                        <input type="hidden" value="1" id="num">
                                                        <span class="fa fa-shopping-cart"></span>
                                                    </a>
                                                    <a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal{{$feature->id}}"><span class="fa fa-search"></span></a>
                                                    <a href="product/{{$feature->id}}" data-toggle="tooltip" data-placement="top" title="View detail"><span class="fa fa-align-center"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                @if($feature->promotion_price > 0)
                                                    <span class="aa-badge aa-sale">SALE!</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- / featured product category -->
                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product item -->
                                        @foreach($latestProducts as $latest)
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="product/{{$latest->id}}"><img src="images/product/{{$latest->image}}" alt="{{$latest->name}}"></a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">{{$latest->name}}</a></h4>
                                                        <?php $latest->unit_price = number_format($latest->unit_price, 2)?>
                                                        <span class="aa-product-price">{{$feature->unit_price}}$</span>
                                                        @if($latest->promotion_price > 0)
                                                            <?php $latest->promotion_price = number_format($latest->promotion_price, 2)?>
                                                            <span class="aa-product-price"><del>{{$latest->promotion_price}}$</del></span>
                                                        @endif
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    {{csrf_field()}}
                                                    <a class="buyProduct" id="buy{{$latest->id}}" href="#" data-toggle="modal" data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$latest->id}}">
                                                        <input type="hidden" value="{{$latest->id}}" id="idProduct">
                                                        <input type="hidden" value="1" id="num">
                                                        <span class="fa fa-shopping-cart"></span>
                                                    </a>
                                                    <a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal{{$latest->id}}"><span class="fa fa-search"></span></a>
                                                    <a href="product/{{$latest->id}}" data-toggle="tooltip" data-placement="top" title="View detail"><span class="fa fa-align-center"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                @if($latest->promotion_price > 0)
                                                    <span class="aa-badge aa-sale">SALE!</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FAST SHIPPING</h4>
                                <P>Enjoy out shipping policy with various package and very convenience for customer.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>3 DAYS MONEY BACK</h4>
                                <P>Can you bilieve it? Back product in three days first without any reason.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>We're alaways here to support you everytime you need. Don't hesitate if you have any quesition.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Subscribe section -->
    @include('layout.subscribe')
    <!-- / Subscribe section -->
@endsection
@section('script')
    @include('layout.CartScript')
@endsection
@section('css')
    <style>
        .aa-cart-quantity {
            padding: 5px;
            width: 50px;
    </style>
@endsection