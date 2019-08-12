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
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
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
            <!-- Customer -->
            <li class="treeview">
                <a><i class="fa fa-link"></i> <span>Customer</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/customer/list">List Customer</a></li>
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
