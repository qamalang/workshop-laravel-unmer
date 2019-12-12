<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route("dashboard") }}">MQA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route("dashboard") }}">Q</a>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a class="nav-link" href="{{ route("dashboard") }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Manajemen Komunitas</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Tambah Komunitas</a></li>
                    <li><a class="nav-link" href="">Daftar Komunitas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Manajemen Crew</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Tambah Crew</a></li>
                    <li><a class="nav-link" href="">Daftar Crew</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
