<div id="sideNavs" class="sideBar_wrapper sideBar_close">
    <!-- sideBar close -->
    <button id="sideBarClose" type="button" class="sideBar_close_btn float-right">x</button>
    <!-- sideBar nav-->
    <nav class="sideBar_nav">
        <!-- sideBar logo -->
        <a class="logo d-block text-center" href="index.html">HR</a>
        <!-- sideBar content -->
        <ul class="navbar-nav">
            <!-- sideBar item -->
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active':'' }}" href="{{ route('admin.dashboard') }}"><i class="fa fa-fw fa-user-circle text-success"></i>
                    <span class="mx-2">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/head') ? 'active':'' }}" href="{{ route('admin.head') }}"><i class="fas fa-heading"></i>
                    <span class="mx-2">Heading</span></a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fas fa-envelope text-info"></i>
                    <span class="mx-2">Contact Message</span></a>
            </li>

            <!-- divider -->
            <hr class="divider_line">
            <h6 class="divider_header">all page</h6>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/home-page') ? 'active':'' }}" href="{{ route('admin.home') }}"><i class="fas fa-home text-primary"></i>
                    <span class="mx-2">Home Page</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="far fa-address-card text-warning"></i>
                    <span class="mx-2">About Page</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fas fa-award text-info"></i>
                    <span class="mx-2">Pricing Page</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fas fa-cart-plus text-danger"></i>
                    <span class="mx-2">Product Page</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fab fa-bootstrap text-secondary"></i>
                    <span class="mx-2">Blog Page</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="fas fa-phone-square text-success"></i>
                    <span class="mx-2">Contact Page</span></a>
            </li>

        </ul>
    </nav>
</div>
