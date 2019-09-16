<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin_asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="admin_asset/dist/css/skins/skin-blue.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!--[endif]-->
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   @include('admin.layout.header')
   @include('admin.layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layout.footer')
    @include('admin.layout.controlsidebar')
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_asset/dist/js/adminlte.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
@yield('script')
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
        channel.bind('comment-event', function (data) {
            var background = '';
            if(data.notification.seen == 0){
               background = "style=\"background-color: #ecf0f5;\"";
            }
            var time = moment().startOf(data.comment.created_at).fromNow();
            var LiTag = " <li "+ background +" >\n" +
                "                                    <a data-seen=\""+data.notification.seen+"\" id=\""+data.notification.id+"\" class= \"notiLink\" target=\"_blank\" href=\""+data.notification.link+"\">\n" +
                "                                        <p>" + data.notification.message + "</p>\n" +
                "                                        <i class=\"fa fa-comment text-aqua\"></i> <small>" + time + "</small>\n" +
                "\n" +
                "                                    </a>\n" +
                "                                </li>";
            var x = $('#numNoti').html();
            x++;
            $('#numNoti').val(x);
            $('#numNoti').html(x);
            $('#menuNoti').prepend(LiTag);
            ClickNoti();
        });

        var channel1 = pusher.subscribe('bill');
        channel1.bind('bill-event', function (data) {
            var background = '';
            if(data.notification.seen == 0){
                background = "style=\"background-color: #edf2fa;\"";
            }
            var time = moment().startOf(data.bill.created_at).fromNow();
            var LiTag = " <li "+ background +" >\n" +
                "                                    <a data-seen=\""+data.notification.seen+"\" id=\""+data.notification.id+"\" class= \"notiLink\" target=\"_blank\" href=\""+data.notification.link+"\">\n" +
                "                                        <p>" + data.notification.message + "</p>\n" +
                "                                        <i class=\"fa fa-comment text-aqua\"></i> <small>" + time + "</small>\n" +
                "\n" +
                "                                    </a>\n" +
                "                                </li>";
            var x = $('#numNoti').html();
            x++;
            $('#numNoti').val(x);
            $('#numNoti').html(x);
            $('#menuNoti').prepend(LiTag);
            ClickNoti();
        });

        ClickNoti();

        function ClickNoti(){
            $('.notiLink').click(function () {
                if($(this).attr('data-seen') == 1){
                    return true;
                }
                $(this).parent().css('background-color', '');
                var id = $(this).attr('id');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('updateNoti')}}",
                    method: 'POST',
                    data: {id:id, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        var x = $('#numNoti').html();
                        x--;
                        $('#numNoti').val(x);
                        $('#numNoti').html(x);
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
        }
    });
</script>
</body>
@yield('css')
</html>
<style>
    .treeview span:hover{
        cursor: pointer;
    }
    ul{
        text-decoration: none;
    }
    li{
        list-style-type: none;
    }
    .alert-success ul{
        padding-left: 0px;
    }
    .alert-danger ul{
        padding-left: 0px;
    }
    #menuNoti{
        height: 500px;
        overflow: auto;
        overflow-x: hidden;
    }
</style>
