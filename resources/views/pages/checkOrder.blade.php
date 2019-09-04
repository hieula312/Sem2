@extends('layout.index')
@section('title', 'Check Order')
@section('content')
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
                                        @if(isset($bill))
                                            <?php
                                                $count = 0;
                                            ?>
                                        @foreach($bill as $item)
                                             <?php
                                             $count++;
                                             ?>
                                        <div class="panel panel-default aa-checkout-coupon">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a style="text-align: center" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$item->id}}">
                                                        <input type="hidden" class="BillId" value="{{$item->id}}">
                                                        ORDER NO: {{$item->id}}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne{{$item->id}}" class="panel-collapse collapse @if($count == 1) in @endif ">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 trackingInf">
                                                                <p>
                                                                    <b>Shipping type:</b>
                                                                    <span>{{$item->deliveryType}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 trackingInf">
                                                                <p>
                                                                    <b>Status:</b>
                                                                    <span id="status{{$item->id}}">
                                                                        <?php
                                                                        if($item->status == 1){
                                                                            echo "Confirm";
                                                                        }else if($item->status == 2){
                                                                            echo "Processing";
                                                                        }else if($item->status == 3){
                                                                            echo "Packaging";
                                                                        }else if($item->status == 4){
                                                                            echo "Dispatching";
                                                                        }else{
                                                                            echo "Delivery";
                                                                        }
                                                                        ?>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 trackingInf">
                                                                <p>
                                                                    <b>Expected Date:</b>
                                                                    <span>Today</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body body2">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="content">
                                                                <div class="content3" id="content3{{$item->id}}">
                                                                    <div id="confirm" class="trackingCon{{$item->id}} trackingCon{{$item->id}}1" data-value=1>
                                                                        <div class="imgcircle finish">
                                                                            <img src="images/tracking/confirm.png" alt="confirm order">
                                                                        </div>
                                                                        <span class="line finish"></span>
                                                                        <p>Confirmed Order</p>
                                                                    </div>
                                                                    <div id="process" class="trackingCon{{$item->id}} trackingCon{{$item->id}}2" data-value=2>
                                                                        <div class="imgcircle @if($item->status > 1) finish @else delay @endif">
                                                                            <img src="images/tracking/process.png" alt="process order">
                                                                        </div>
                                                                        <span class="line @if($item->status > 1) finish @else delay @endif"></span>
                                                                        <p>Processing Order</p>
                                                                    </div>
                                                                    <div id="package" class="trackingCon{{$item->id}} trackingCon{{$item->id}}3" data-value=3>
                                                                        <div class="imgcircle @if($item->status > 2) finish @else delay @endif ">
                                                                            <img src="images/tracking/package.png" alt="packageing">
                                                                        </div>
                                                                        <span class="line @if($item->status > 2) finish @else delay @endif"></span>
                                                                        <p>Packaging</p>
                                                                    </div>
                                                                    <div id="dispatch" class="trackingCon{{$item->id}} trackingCon{{$item->id}}4" data-value=4>
                                                                        <div class="imgcircle @if($item->status > 3) finish @else delay @endif">
                                                                            <img src="images/tracking/dispatch.png" alt="dispatch product">
                                                                        </div>
                                                                        <span class="line @if($item->status > 3) finish @else delay @endif"></span>
                                                                        <p>Dispatched Item</p>
                                                                    </div>
                                                                    <div id="delivery" class="trackingCon{{$item->id}} trackingCon{{$item->id}}5" data-value=5>
                                                                        <div class="imgcircle @if($item->status > 4) finish @else delay @endif">
                                                                            <img src="images/tracking/delivery.png" alt="delivery">
                                                                        </div>
                                                                        <p>Product Delivered</p>
                                                                    </div>
                                                                    <div class="clear @if($item->status > 4) finish @else delay @endif"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
    <script>
        $(function () {

            $(document).ready(function () {
                // $('.trackingCon08839462').each(function(i){
                //     alert(typeof $(this).attr('data-value'));
                // })
                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = true;

                var pusher = new Pusher('167dbf995abf10d6ce5e', {
                    cluster: 'ap1',
                    forceTLS: true
                });

                var channel = pusher.subscribe('order');
                channel.bind('order-event', function(data) {
                    $(".BillId").each(function(i) {
                        if($(this).val() == data.bill.id){
                            var id = data.bill.id;
                            var x = '';
                            if(data.bill.status == 2){
                                x = "Processing";
                            }if(data.bill.status == 3){
                                x = "Packaging";
                            }if(data.bill.status == 4){
                                x = "Dispatching";
                            }if(data.bill.status == 5){
                                x = "Delivery";
                            }
                            $('#status'+id).html(x);
                            $(".trackingCon"+id).each(function(i){
                                if(parseInt($(this).attr('data-value')) == parseInt(data.bill.status)){
                                    $(".trackingCon"+id+data.bill.status).find(".imgcircle").attr('class', 'imgcircle finish');
                                    $(".trackingCon"+id+data.bill.status).find("span").attr('class', 'line finish');
                                }
                            })
                        }
                    });
                })
            })
        });
    </script>
@endsection
@section('css')
    <link href="css/Tracking.css" rel="stylesheet">
    <style>
        .panel-heading{
            background-color: #98d091 !important;
        }
        .panel-body{
            background-color: #b5e6ae !important;
        }
        .body2{
            background-color: #F5F5F5 !important;
        }
        .panel-heading h4{
            font-size: 25px !important;
            color: black !important;
            font-weight: 900 !important;
            font-family: "Lato", sans-serif !important;
        }
    </style>
@endsection