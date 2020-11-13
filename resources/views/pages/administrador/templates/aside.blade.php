<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 change_dark background-blue">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link d-flex flex-column align-items-center pl-0 text-white" style="box-shadow: 0 14px 28px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.22)!important;">
        <span class="brand-text font-weight-light"><b>Panel de control</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel my-3 pb-3 d-flex flex-column align-items-center pr-3">
            <div class="info d-flex flex-column text-center">
                <span href="#" class="d-block text-white" style="white-space: normal;">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="javascript:void(0);" class="nav-link text-white">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Datos</p>
                        </a>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:void(0);" class="nav-link text-white">
                        <i class="fas fa-medal"></i>
                        <p>
                        Componentes
                        <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Ver todos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Agregar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="javascript:void(0);" class="nav-link text-white">
                        <i class="fas fa-archive"></i>
                        <p>
                        Categorías
                        <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Ver todos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Agregar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @role('superadmin')
                    <li class="nav-item has-treeview">
                        <a href="javascript:void(0);" class="nav-link text-white">
                            <i class="fas fa-boxes"></i>
                            <p>
                            Subcategorías
                            <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <i class="fas fa-list-alt nav-icon"></i>
                                    <p>Ver todos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Agregar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
