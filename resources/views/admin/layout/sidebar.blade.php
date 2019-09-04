<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="admin_asset/dist/img/avatar<?php if($user->sex == 'M'){echo 'M';}else{echo 'F';}?>.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$user->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">LIST OPTION</li>
            <!-- Optionally, you can add icons to the links -->
            <!-- WHOLE PRODUCT -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Whole Product</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="admin/wholeproduct/list">List whole product</a></li>
                    <li><a href="admin/wholeproduct/add">Add new whole product</a></li>
                </ul>
            </li>
            <!-- TYPE PRODUCT -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Type Product</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/typeproduct/list">List type product</a></li>
                    <li><a href="admin/typeproduct/add">Add new type product</a></li>
                </ul>
            </li>
            <!-- PRODUCT -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Product</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/product/list">List product</a></li>
                    <li><a href="admin/product/add">Add new product</a></li>
                </ul>
            </li>
            <!-- BILL -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Bill</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/bill/list">List bill</a></li>
                </ul>
            </li>
            <!-- BILL DETAIL -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Bill Detail</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/billdetail/list">List Bill Detail</a></li>
                </ul>
            </li>
            <!-- SLIDE -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Slide</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/slide/list">List Slide</a></li>
                    <li><a href="admin/slide/add">Add new Slide</a></li>
                </ul>
            </li>
            <!-- POST -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Mail</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/customer/listMail">List Sended Mail</a></li>
                </ul>
            </li>
            <!-- CITY -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>City</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/city/list">List City</a></li>
                    <li><a href="admin/city/add">Add new City</a></li>
                </ul>
            </li>
            <!-- DISTRICT -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>District</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/district/list">List District</a></li>
                    <li><a href="admin/district/add">Add new District</a></li>
                </ul>
            </li>
            <!-- SUBDISTRICT -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Subdistrict</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/subdistrict/list">List Subdistrict</a></li>
                    <li><a href="admin/subdistrict/add">Add new Subdistrict</a></li>
                </ul>
            </li>
            <!-- TYPE DELIVERY -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Delivery type</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/deliverytype/list">List Type Delivery</a></li>
                    <li><a href="admin/deliverytype/add">Add new Type Delivery</a></li>
                </ul>
            </li>
            <!-- Customer -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Customer</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/customer/list">List Customer</a></li>
                    <li><a href="admin/customer/follower">List Follower</a></li>
                </ul>
            </li>
            <!-- EMPLOYEE -->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Employee</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/employee/list">List Employee</a></li>
                    <li><a href="admin/employee/add">Add new Employee</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
