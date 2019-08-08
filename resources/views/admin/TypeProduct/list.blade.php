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
                        <th>Description</th>
                        <th>Abbreviation</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($typeProduct as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->WholeProducts->name}}</td>
                        <td>{!! $item->description !!}</td>
                        <td>{{ $item->abbreviation }}</td>
                        <td>
                            <a  href="admin/typeproduct/update/{{$item->id}}"><button type="submit" class="btn btn-block btn-primary">Update</button></a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete?')" href="admin/typeproduct/delete/{{$item->id}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a>
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
        $(function () {
            $('#example1').DataTable({

            })
        })
    </script>
@endsection
