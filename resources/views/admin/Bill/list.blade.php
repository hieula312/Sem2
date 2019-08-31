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
                        <th></th>
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
                            }else{
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
                            <span id="showStatus">{{$bill->status}}</span>
                        </td>
                        <td>
                            <button id="changeStatus" data-id="{{$bill->id}}" type="submit" class="btn btn-block btn-danger">Pick Up</button>
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
        });
    </script>
@endsection
