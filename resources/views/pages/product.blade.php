@extends('layout.index')
@section('title', 'Detail Product')
@section('content')
    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container"><img width="250px" height="300px" src="images/product/{{$product->image}}" class="simpleLens-big-image"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3><b>{{$product->name}}</b></h3>
                                        <div class="aa-price-block">
                                            <?php $product->unit_price = number_format($product->unit_price, 2)?>
                                            <span class="aa-product-price">{{$product->unit_price}}$</span>
                                            @if($product->promotion_price > 0)
                                                <?php $product->promotion_price = number_format($product->promotion_price, 2)?>
                                                <span class="aa-product-price"><del>{{$product->promotion_price}}$</del></span>
                                            @endif
                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                        </div>
                                        <p>{!! $product->description !!}</p>
                                        <div class="aa-prod-quantity">
                                            {{csrf_field()}}
                                            <span>Quantity: </span>
                                            <input class="aa-cart-quantity productNum" min="1" id="productNum{{$product->id}}" type="number" value="1">
                                            <p class="aa-prod-category">
                                                Category: <a href="typeProduct/{{$product->TypeProduct->id}}">{{$product->TypeProduct->name}}</a>
                                            </p>
                                            <input type="hidden" value="{{$product->id}}" id="idProduct">
                                            <br>
                                            <a id="selectCart" class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Description</a></li>
                                <li><a href="#review" data-toggle="tab">Reviews</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <div class="tab-pane fade " id="review">
                                    <div class="aa-product-review-area">
                                        <h4>2 Reviews for T-Shirt</h4>
                                        <ul class="aa-review-nav">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="client_asset/img/testimonial-img-3.jpg" alt="girl image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                                                        <div class="aa-product-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-o"></span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="client_asset/img/testimonial-img-3.jpg" alt="girl image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                                                        <div class="aa-product-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-o"></span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4>Add a review</h4>
                                        <div class="aa-your-rating">
                                            <p>Your Rating</p>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                            <a href="#"><span class="fa fa-star-o"></span></a>
                                        </div>
                                        <!-- review form -->
                                        <form action="" class="aa-review-form">
                                            <div class="form-group">
                                                <label for="message">Your Review</label>
                                                <textarea class="form-control" rows="3" id="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                            </div>

                                            <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related product -->
                        <div class="aa-product-related-item">
                            <h3><b>RELATED PRODUCTS</b></h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                @foreach($relatedProducts as $item)
                                <!-- start single product item -->
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
                                            <a class="buyProduct" id="buy{{$item->id}}" href="#" data-toggle="modal"   data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$item->id}}">
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
                            <!-- quick view modal -->
                            @foreach($relatedProducts as $item)
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
                                                                <p>{!!  $item->description !!}</p>
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
                            <!-- / quick view modal -->
                            <!-- add cart modal -->
                            @foreach($relatedProducts as $item)
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
                        <!-- / add cart modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / product category -->
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