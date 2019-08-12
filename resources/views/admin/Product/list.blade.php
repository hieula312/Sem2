@extends('admin.layout.index')
@section('content')
    @include('alert')
    <section class="content-header">
        <h1>
            <span>TYPE PRODUCT</span>
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
                        <th>Name</th>
                        <th>Whole Product</th>
                        <th>Type Product</th>
                        <th>Unit Price</th>
                        <th>Promotion Price</th>
                        <th>Unit</th>
                        <th>Description</th>
                        <th>new</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="dataCon">
                    @foreach($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->TypeProduct->WholeProducts->name}}</td>
                        <td>{{$item->TypeProduct->name}}</td>
                        <td>{{$item->unit_price}}</td>
                        <td>{{$item->promotion_price}}</td>
                        <td>{{$item->unit}}</td>
                        <td>
                            <p>{!! $item->description !!}</p>
                            <img width="100px" src="images/product/{{$item->image}}" alt="">
                        </td>
                        <td>
                            <?php
                                if($item->new == 1){
                                    echo "Yes";
                                }else{
                                    echo "No";
                                }
                            ?>
                        </td>
                        <td>
                            <a  href="admin/product/update/{{$item->id}}"><button type="submit" class="btn btn-block btn-primary">Update</button></a>
                        </td>
                        <td>
                            {{csrf_field()}}
                           <button data-id = "{{$item->id}} " id="checkDelete{{$item->id}}"  type="button" class="btn btn-block btn-danger checkDel">Delete</button>
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
        // $(document).ready(function () {

            $(function () {
                $('#example1').DataTable({
                })
            })
            $('.checkDel').on('click', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        var id = this.getAttribute('data-id')
                        var _token = $('input[name="_token"]').val()
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{route('updateProduct')}}",
                            method: 'POST',
                            data: {id:id, token:_token},
                            dataType: 'json',
                            success: function (data) {
                                $('#dataCon').html(data.output);
                                location.reload();
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
                            }
                        })
                    }
                })
            })
    </script>
@endsection
