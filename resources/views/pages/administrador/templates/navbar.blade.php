<nav class="main-header navbar navbar-expand navbar-dark navbar-light sticky-top change_dark background-blue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('/') }}" class="nav-link text-white">Inicio</a>
        </li>
    </ul>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="btn btn-danger btn-sm text-white ml-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @role('superadmin')
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown">
                    <i class="far fa-bell"></i>
                    {{-- @if(count($logs) > 0)
                        <span class="badge badge-danger navbar-badge" id="totalNotRead">{{ $notReadLogs->count() }}</span>
                    @else
                        <span class="badge badge-danger navbar-badge" id="totalNotRead">0</span>
                    @endif --}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div style="overflow: auto; max-height: 350px; overflow-x: hidden;" id="log-box">
                    </div>
                </div>
            </li>
        @endrole
    </ul>
</nav>