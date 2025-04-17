<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-360">
            <i class="fas fa-user-injured"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rapor Kesehatan Digital<sup></sup></div>
    </a>



    <!-- Heading -->
    <div class="sidebar-heading">

    </div>






    <!-- Heading -->
    <div class="sidebar-heading">

    </div>


    <!-- Nav Item - Petugas Umum -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pu.index') }}">
            <i class="fas fa-user-md" style="font-size:20px"></i>
            <span>Pemeriksaan Umum</span></a>
    </li>

    <!-- Nav Item - Petugas Gizi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pg.index') }}">
            <i class="fas fa-utensils" style="font-size:20px;"></i>
            <span>Petugas Gizi</span></a>
    </li>

    <!-- Nav Item - Petugas Gigi dan Mulut -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pm.index') }}">
            <i class="fas fa-eye" style="font-size: 20px"></i>
            <span>Petugas Mata</span></a>
    </li>


    <!-- Nav Item - Petugas Gigi dan Mulut -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pgm.index') }}">
            <i class="fas fa-tooth" style="font-size: 20px"></i>
            <span>Petugas Gigi Dan Mulut</span></a>
    </li>

    <!-- Nav Item - Identitas Diri -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('id.index') }}">
            <i class="fas fa-user-friends" style="font-size: 20px"></i>
            <span>Identitas Diri</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Data Kuisioner -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dk.index') }}">
            <i class="fas fa-tasks" style="font-size: 20px"></i>
            <span>Data Kuesioner</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - About -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ab.index') }}">
            <i class="fas fa-info-circle" style="font-size: 20px"></i>
            <span>About</span></a>
    </li>


    <!-- Nav Item - App gallery -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('app.index') }}">
            <i class="fas fa-fw fa-table" style="font-size: 20px"></i>
            <span>App Gallery</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    </div>
</ul>
