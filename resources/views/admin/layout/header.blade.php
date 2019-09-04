<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="admin/homepage" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>ARTS ADMIN</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{--<!-- Messages: style can be found in dropdown.less-->--}}
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="admin/customer/sendMail">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
                {{--<!-- /.messages-menu -->--}}

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning" id="numNoti">
                            @if(isset($notifications))
                                {{intval($num)}}
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu" id="menuNoti">
                        {{csrf_field()}}
                        @if(isset($notifications))
                        @foreach($notifications as $noti)
                        <?php
                            $now = \Carbon\Carbon::now();
                            $DBtime = $noti->created_at;
                            $interval = $now->diffForHumans($DBtime);
                        ?>
                        <li @if($noti->seen == 0) style="background-color: #ecf0f5;" @endif>
                            <a data-seen="{{$noti->seen}}" id="{{$noti->id}}" class= "notiLink" target="_blank" href="{{$noti->link}}">
                                <p>{{$noti->message}}</p>
                                <i class="fa fa-comment text-aqua"></i><small>{{$interval}}</small>
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </li>
                <!-- Customer Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="admin_asset/dist/img/avatar<?php if($user->sex == 'M'){echo 'M';}else{echo 'F';}?>.jpg" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{$user->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="admin_asset/dist/img/avatar<?php if($user->sex == 'M'){echo 'M';}else{echo 'F';}?>.jpg" class="img-circle" alt="User Image">
                            <p>
                                {{$user->name}}
                                <small><?php if($user->level == 2){echo "Employee";}else{echo "Admin";}?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a  class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="admin/signout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
