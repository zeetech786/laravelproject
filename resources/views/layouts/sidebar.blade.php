<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('layouts.dashboard') }}" class="brand-link">
        <img src={{ asset('images/mobile-phone-1917737_640.jpg') }} alt="AdminLTE" class="brand-image img-circle elevation-3" style="">
        <span class="brand-text font-weight-light">Daud IT Service</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.show') }}" class="nav-link" >
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('companies.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            System
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('companies.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Crud</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('users/excel') }}" class="nav-link" >
                        <i class="nav-icon fas fa-file-excel"></i>
                        <p>
                            Execel Import & E-Mail
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('yajra') }}" class="nav-link" >
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Yajra DataTable Crud
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <a href="{{ route('logout') }}" class="nav-link"><i class="nav-icon far fa-circle text-danger"></i>
                                         <p>
                                            Logout
                                        </p>
                                </a>
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
