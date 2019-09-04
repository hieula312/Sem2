@extends('layout.index')
@section('title', 'Register')
@section('content')
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="checkBill" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Billing Details -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <b>Check Order</b>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        @include('Error')
                                                        @include('alert')
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input value="" name="id" type="text" placeholder="Fill your bill ID*">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input value="" name="otp" type="text" placeholder="Fill your bill OTP*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <input type="submit" value="Checking Now" class="aa-browse-btn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
