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
                                <div class="tab-pane fade" id="description">
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <div class="tab-pane fade in active"" id="review">
                                    <div class="aa-product-review-area">
                                        <ul class="aa-review-nav" id="reviewContainer">
                                            @if(isset($comments))
                                            @foreach($comments as $item)
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/UserDef.jpg" alt="ProfileImage">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <?php
                                                        $now = \Carbon\Carbon::now();
                                                        $DBtime = $item->created_at;
                                                        $interval = $now->diffForHumans($DBtime);
                                                        $star = '';
                                                        for($i = 0; $i < 5; $i++){
                                                            if($i < intval($item->rate)){
                                                                $star .= '<span class="fa fa-star"></span>';
                                                            }else{
                                                                $star .= '<span class="fa fa-star-o"></span>';
                                                            }
                                                        }
                                                        ?>
                                                        <h4 class="media-heading"><strong>{{$item->name}}</strong> - <span>{{$interval}}</span></h4>
                                                        <div class="aa-product-rating">
                                                            {!! $star !!}
                                                        </div>
                                                        <p>{{$item->message}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        <hr style="height: 1px; color: #ddd">
                                        <h4><b>Add review</b></h4>
                                        <label for="rating">Your rate:</label>
                                        <div class="col-lg-12 no-padding" style="height: 40px">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            </div>
                                        </div>
                                        <form action="" class="col-lg-12 no-padding aa-review-form" style="margin-top: 0px;">
                                            <!-- review form -->
                                            @if(!\Illuminate\Support\Facades\Auth::check())
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input required type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            @endif
                                            <input type="hidden" name="rate" id="rate" value="0">
                                            <div class="form-group">
                                                <label for="message">Your Review:</label>
                                                <textarea required class="form-control" name="message" rows="3" id="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-5"></div>
                                                    <div class="col-lg-2">
                                                        <button id="submitComment" type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
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
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
    <script>
        $(document).ready(function () {
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('167dbf995abf10d6ce5e', {
                cluster: 'ap1',
                forceTLS: true
            });

            var channel = pusher.subscribe('comment');
            channel.bind('comment-event', function(data) {
                var time = moment().startOf(data.comment.created_at).fromNow();
                var star = '';
                for(var i = 0; i < 5; i++){
                    if(i < parseInt(data.comment.rate)){
                        star += '<span class="fa fa-star"></span>';
                    }else{
                        star += '<span class="fa fa-star-o"></span>';
                    }
                }
                var liTag = " '\n" +
                    "                    <li>\n" +
                    "                        <div class=\"media\">\n" +
                    "                            <div class=\"media-left\">\n" +
                    "                                <a href=\"#\">\n" +
                    "                                <img class=\"media-object\" src=\"images/UserDef.jpg\" alt=\"ProfileImage\">\n" +
                    "                                </a>\n" +
                    "                            </div>\n" +
                    "                            <div class=\"media-body\">\n" +
                    "                                <h4 class=\"media-heading\"><strong>"+data.comment.name+"</strong> - <span>"+time+"</span></h4>\n" +
                    "                                <div class=\"aa-product-rating\">"+star+"</div>\n" +
                    "                                <p>"+data.comment.message+"</p>\n" +
                    "                            </div>\n" +
                    "                        </div>\n" +
                    "                    </li>\n" +
                    "                "
                $('#reviewContainer').prepend(liTag);
            });

            $('input[name=rating]').change(function () {
                $('#rate').val($(this).val());
            });

            $(document).on('click','#submitComment', function (e) {
                e.preventDefault();
                var rate = $('#rate').val();
                var idProduct = $('#idProduct').val();
                var name = $('#name').val();
                var message = $('#message').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('addComment')}}",
                    method: 'POST',
                    data: {id:idProduct, _token:_token, rate:rate, name:name, message:message},
                    dataType: 'json',
                    success: function (data) {
                        $('#name').val('');
                        $('#message').val('');
                        Swal.fire(
                            'Your comment is created success',
                            '',
                            'success',
                        );
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');

                        $('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText + '</div>');
                        console.log('jqXHR:');
                        console.log(jqXHR);
                        console.log('textStatus:');
                        console.log(textStatus);
                        console.log('errorThrown:');
                        console.log(errorThrown);
                    },
                });
            });
        });
    </script>
    @include('layout.CartScript')
@endsection
@section('css')
    <style>
        .aa-cart-quantity {
            padding: 5px;
            width: 50px;
        }
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        .rating {
            border: none;
            float: left;
        }

        .rating > input { display: none; }
        .rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating > .half:before {
            content: "\f089";
            position: absolute;
        }

        .rating > label {
            color: #ddd;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #ff6600;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #f99c5d;  }
    </style>
@endsection