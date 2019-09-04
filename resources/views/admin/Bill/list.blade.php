@extends('admin.layout.index')
@section('content')
    @include('alert')
    <section class="content-header">
        <h1>
            <span>Bill</span>
            <small>List</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Customer Address</th>
                        <th>Customer Telephone</th>
                        <th>Date order</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Delivery Type</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Bill Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->customerName}}</td>
                        <td>{{$bill->customerAddress}} - {{$bill->customerSubdistrict}} - {{$bill->customerDistrict}} - {{$bill->customerCity}}</td>
                        <td>{{$bill->customerPhoneNumber}}</td>
                        <td>
                            <?php
                            $time = new \Carbon\Carbon($bill->created_at);
                            if($time->isToday()){
                                echo "Today - ".$time->format('jS F Y h:i:s A');
                            }
                            else if($time->isYesterday()){
                                echo "Yesterday - ".$time->format('jS F Y h:i:s A');
                            }
                            else{
                                echo $time->diffForHumans(\Carbon\Carbon::now())." - ".$time->format('h:i A jS F');
                            }
                            ?>
                        </td>
                        <td>{{$bill->total}}$</td>
                        <td>
                            <?php
                                if($bill->payment == 0){
                                    echo "COD";
                                }else{
                                    echo "Paypal";
                                }
                            ?>
                        </td>
                        <td>{{$bill->deliveryType}}</td>
                        <td>{{$bill->note}}</td>
                        <td>
                            {{csrf_field()}}
                            <button id="changeStatus{{$bill->id}}" data-id="{{$bill->id}}" type="submit" class="btn btn-block btn-danger changeStatus">
                                <?php
                                if($bill->status == 1){
                                    echo "Confirm";
                                }else if($bill->status == 2){
                                    echo "Processing";
                                }else if($bill->status == 3){
                                    echo "Packaging";
                                }else if($bill->status == 4){
                                    echo "Dispatching";
                                }else{
                                    echo "Delivery";
                                }
                                ?>
                            </button>
                        </td>
                        <td>
                            <a  href="admin/billdetail/list?idBill={{$bill->id}}"><button type="submit" class="btn btn-block btn-primary">See detail</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- STYLE -->
@endsection
@section('script')
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
    <!-- DataTables -->
    <script src="admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin_asset/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable({});
            
            $(document).ready(function () {
                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = true;

                var pusher = new Pusher('167dbf995abf10d6ce5e', {
                    cluster: 'ap1',
                    forceTLS: true
                });

                var channel = pusher.subscribe('order');
                channel.bind('order-event', function(data) {
                    if(data.bill.status == 2){
                        $('#changeStatus'+data.bill.id).html('Processing');
                    }else if(data.bill.status == 3){
                        $('#changeStatus'+data.bill.id).html('Packaging');
                    }else if(data.bill.status == 4){
                        $('#changeStatus'+data.bill.id).html('Dispatching');
                    }else{
                        $('#changeStatus'+data.bill.id).html('Delivery');
                    }
                })

                $('.changeStatus').click(function (e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('orderProcess')}}",
                        method: 'POST',
                        data: {id:id, _token:_token},
                        dataType: 'json',
                        success: function (data) {
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
                })
            })
        });
    </script>
@endsection
