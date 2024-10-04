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

    <!-- Swagger Documentation Link -->
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1:8000/api/documentation">
      <i class="fas fa-fw fa-book"></i>
      <span>API Documentation</span></a>
  </li>

      <!-- Link Users hanya untuk Admin -->
    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    @endif

    <li class="nav-item">
      <a class="nav-link" href="{{ route('media.index') }}">
         <i class="fas fa-fw fa-file-upload"></i>
         <span>Upload Media</span>
      </a>
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


  <!-- Additional Tables -->
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-clipboard-list"></i>
      <span>Orders</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Order Details</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-credit-card"></i>
      <span>Payments</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-user"></i>
      <span>Customers</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-shipping-fast"></i>
      <span>Shipping</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-industry"></i>
      <span>Suppliers</span></a>
  </li>



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  

</ul>