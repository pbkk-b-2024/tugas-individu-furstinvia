<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <img src="{{ asset('img/logo.png') }}" alt="Brand Image" class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
      </div>
      <div class="sidebar-brand-text mx-3">IKEA</div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard </span></a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('barang') }}">
        <i class="fas fa-fw fa-couch"></i>
        <span>Products</span></a>
    </li>
  
      @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kategori') }}">
        <i class="fas fa-fw fa-tags"></i>
        <span>Categories </span></a>
    </li>
      @endif
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  
    
  
  </ul>