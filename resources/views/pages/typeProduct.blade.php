@extends('layout.index')
@section('title', 'Type Product')
@section('content')
    <!-- SLIDE -->
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="client_asset/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Fashion</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">{{$typeProduct->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->
    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
             <div class="aa-product-catg-content">
                        <!-- START SORT AND SHOW BAR -->
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">
                                <form action="" class="aa-sort-form">
                                    <label for="">Sort by</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">Name</option>
                                        <option value="3">Price</option>
                                        <option value="4">Date</option>
                                    </select>
                                </form>
                                <form action="" class="aa-show-form">
                                    <label for="">Show</label>
                                    <select name="">
                                        <option value="1" selected="12">10</option>
                                        <option value="2">20</option>
                                        <option value="3">30</option>
                                    </select>
                                </form>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <!-- END SORT AND SHOW BAR -->
                        <!-- START BODY CONTENT -->
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                <!-- start single product item -->
                                @foreach($products as $product)
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="product/{{$product->id}}"><img src="images/product/{{$product->image}}" alt="{{$product->name}}"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">{{$product->name}}</a></h4>
                                            <?php $product->unit_price = number_format($product->unit_price, 2)?>
                                            <span class="aa-product-price">{{$product->unit_price}}$</span>
                                            @if($product->promotion_price > 0)
                                                <?php $product->promotion_price = number_format($product->promotion_price, 2)?>
                                                <span class="aa-product-price"><del>{{$product->promotion_price}}$</del></span>
                                            @endif
                                            <p class="aa-product-descrip">{{$product->description}}.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal{{$product->id}}"><span class="fa fa-search"></span></a>
                                        <a href="product/{{$product->id}}" data-toggle="tooltip" data-placement="top" title="View detail"><span class="fa fa-align-center"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    @if($product->promotion_price > 0)
                                        <span class="aa-badge aa-sale">SALE!</span>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <!-- quick view modal -->
                            @foreach($products as $product)
                            <div class="modal fade" id="quick-view-modal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <a href="product/{{$product->id}}" class="aa-product-img">
                                                        <img src="images/product/{{$product->image}}" class="simpleLens-big-image">
                                                    </a>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3><b>{{$product->name}}</b></h3>
                                                        <div class="aa-price-block">
                                                                <span class="aa-product-view-price">
                                                                    <?php $product->unit_price = number_format($product->unit_price, 2)?>
                                                                    <span class="aa-product-price">{{$product->unit_price}}$</span>
                                                                    @if($product->promotion_price > 0)
                                                                        <?php $product->promotion_price = number_format($product->promotion_price, 2)?>
                                                                        <span class="aa-product-price"><del>{{$product->promotion_price}}$</del></span>
                                                                    @endif
                                                                </span>
                                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                        </div>
                                                        <p>{{$product->description}}</p>
                                                        <div class="aa-prod-quantity">
                                                            <form action="">
                                                                <span>Quantity: </span>
                                                                <select name="" id="">
                                                                    <option value="0" selected="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                </select>
                                                            </form>
                                                        </div>
                                                        <div class="aa-prod-view-bottom">
                                                            <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- / quick view modal -->
                            @endforeach
                        </div>
                        <!-- END BODY CONTENT -->
                        <!-- pagination -->
                        <div class="aa-product-catg-pagination">
                            {!! $products->links() !!}
                        </div>
                        <!-- End pagination -->
                    </div>
        </div>
    </section>
    <!-- / product category -->
@endsection