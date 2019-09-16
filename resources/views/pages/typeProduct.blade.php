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
                                <label for="">Sort by</label>
                                <select data-id = "@if(isset($typeProduct)){{$typeProduct->id}}@endif" name="filterProduct" id="filterProduct">
                                    <option value="default">Default</option>
                                    <option @if(request()->has('sort'))@if(request('sort') == 'low-to-high') selected @endif @endif value="low-to-high">Price: Low to high</option>
                                    <option @if(request()->has('sort'))@if(request('sort') == 'high-to-low') selected @endif @endif value="high-to-low">Price: High to low</option>
                                    <option @if(request()->has('sort'))@if(request('sort') == 'newest') selected @endif @endif value="newest">Newest</option>
                                    <option @if(request()->has('sort'))@if(request('sort') == 'top-selling') selected @endif @endif value="top-selling">Top of selling</option>
                                </select>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                <!-- END SORT AND SHOW BAR -->
                <!-- START BODY CONTENT -->
                <div class="aa-product-catg-body">
                            <ul class="aa-product-catg infinite-scroll" id="containerData">

                                <!-- start single product item -->
                                @foreach($products as $item)
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
                                        <a class="buyProduct" id="buy{{$item->id}}" href="#" data-toggle="modal" data-placement="top" title="Add to Cart"  data-target="#add-cart-view-modal{{$item->id}}">
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
                            @foreach($products as $item)
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
                            <!-- / quick view modal -->
                            <!-- add cart modal -->
                            @foreach($products as $item)
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
@section('script')
    @include('layout.CartScript')
    <script>
        $(document).ready(function() {
            $(document).on('change','#filterProduct', function (e) {
                e.preventDefault();
                var typeFilter = $(this).val();
                var url = window.location.href;
                if (url.indexOf('?') > -1){
                    url = url.split('?')[0];
                    if(typeFilter != 'default'){
                        url += '?sort='+typeFilter;
                    }
                }else{
                    if(typeFilter == 'default'){
                        url = url.split('?')[0];
                    }else{
                        url += '?sort='+typeFilter;
                    }
                }
                window.location.href = url;
            });
        });
    </script>
@endsection
@section('css')
    <style>
        .aa-cart-quantity {
            padding: 5px;
            width: 50px;
    </style>
@endsection