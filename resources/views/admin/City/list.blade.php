@extends('admin.layout.index')
@section('content')
    @include('alert')
    <section class="content-header">
        <h1>
            <span>City</span>
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
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citys as $city)
                    <tr>
                        <td>{{$city->id}}</td>
                        <td>{{$city->name}}</td>
                        <td>
                            <a  href="admin/city/update/{{$city->id}}"><button type="submit" class="btn btn-block btn-primary">Update</button></a>
                        </td>
                        <td>
                            <a href="admin/city/delete/{{$city->id}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a>
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
