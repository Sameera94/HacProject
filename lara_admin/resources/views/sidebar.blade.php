<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ asset('assets/index.html') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="{{ asset('assets/index2.html') }}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Menu</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li><a href="insert"><i class="fa fa-circle-o"></i>Add Menu</a></li>
                </ul>

                <ul class="treeview-menu">
                    <li><a href="viewDiningMenu"><i class="fa fa-circle-o"></i>View Menu</a></li>
                </ul>

            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Menu</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li><a href="insert"><i class="fa fa-circle-o"></i>Add Menu</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Stock</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/stock/"><i class="fa fa-circle-o"></i> Manage Stock</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Shops</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/shop/admin/index/"><i class="fa fa-circle-o"></i>Manage Shops</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Incentive</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/incentive/"><i class="fa fa-circle-o"></i>Manage Incentives</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Target</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/target/"><i class="fa fa-circle-o"></i>Manage Target</a></li>

                </ul>
            </li>



            <li class="header">LABELS</li>
            <li><a href="/salesperson/dashboard/"><i class="fa fa-circle-o text-red"></i> <span>Sales person sidebar</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>