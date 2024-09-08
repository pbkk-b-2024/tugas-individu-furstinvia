@extends('layouts.app')

@section('title', 'IKEA Dashboard 🛒')

@section('contents')
  {{-- <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Monthly Revenue Boost 💵</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">1,678,999</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                early Growth Snapshot 📈</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">20,415,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress Tracker 🔥
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Requests in Queue ⏳</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="container mb-5">
    <h2 class="text-center my-5">Top Category Picks</h2>
    <div class="row justify-content-center">
        <!-- Category Item 1 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/cushions1.png') }}" class="img-fluid category-img" alt="Cushions">
                <p class="text-center">Cushions</p>
            </div>
        </div>
        <!-- Category Item 2 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/sofa.png') }}" class="img-fluid category-img" alt="Sofas">
                <p class="text-center">Sofas</p>
            </div>
        </div>
        <!-- Category Item 3 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/desk.png') }}" class="img-fluid category-img" alt="Home desks">
                <p class="text-center">Home desks</p>
            </div>
        </div>
        <!-- Category Item 4 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/rak.png') }}" class="img-fluid category-img" alt="Chest of drawers">
                <p class="text-center">Chest of drawers</p>
            </div>
        </div>
        <!-- Category Item 5 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/chair.png') }}" class="img-fluid category-img" alt="Non-upholstered chairs">
                <p class="text-center">Chair</p>
            </div>
        </div>
        <!-- Category Item 6 -->
        <div class="col-lg-2 col-md-4 col-sm-6 category-item">
            <div class="category-card">
                <img src="{{ asset('img/mat.png') }}" class="img-fluid category-img" alt="Mattresses">
                <p class="text-center">Mattresses</p>
            </div>
        </div>
    </div>
    <h2 class="text-center my-5">Popular Products</h2>
    <div class="row justify-content-center popular-products">
        <!-- Product Item 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6 product-item">
            <div class="product-card">
                <img src="{{ asset('img/key.png') }}" class="img-fluid product-img" alt="Product 1">
                <p class="text-center">KNÖLIG <br> 149.000</p>
            </div>
        </div>
        <!-- Product Item 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6 product-item">
            <div class="product-card">
                <img src="{{ asset('img/lamp.png') }}" class="img-fluid product-img" alt="Product 2">
                <p class="text-center">ÅRSTD <br> 75.000</p>
            </div>
        </div>
        <!-- Product Item 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6 product-item">
            <div class="product-card">
                <img src="{{ asset('img/pot.png') }}" class="img-fluid product-img" alt="Product 3">
                <p class="text-center">FEJKA <br> 120.000</p>
            </div>
        </div>
        <!-- Product Item 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6 product-item">
            <div class="product-card">
                <img src="{{ asset('img/jam.png') }}" class="img-fluid product-img" alt="Product 4">
                <p class="text-center">SKÄRIG <br> 199.000</p>
            </div>
        </div>
    </div>
  

    <h2 class="text-center my-5">User Feedback and Reviews</h2>
    <div class="row justify-content-center">
        <!-- First Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 1">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Gayu Baruwa</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 4; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                    <span class="fa fa-star"></span> <!-- 4 stars rating -->
                </div>
                <p class="text-muted">"Very comfortable, great quality!"</p>
            </div>
        </div>

        <!-- Second Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 2">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Alya Salsabilla</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                </div>
                <p class="text-muted">"Amazing design and perfect size!"</p>
            </div>
        </div>

        <!-- Third Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 3">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Nabhyla Niagara</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 3; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for($i = 4; $i <= 5; $i++)
                        <span class="fa fa-star"></span>
                    @endfor
                </div>
                <p class="text-muted">"Good, but could be softer."</p>
            </div>
        </div>

        <!-- Fourth Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 4">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Yasmin Putri</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                </div>
                <p class="text-muted">"Perfect for my living room!"</p>
            </div>
        </div>
    </div>

    <!-- New Section: Company Owner -->
    <h2 class="text-center my-5">Company Owner</h2>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 text-center">
            <!-- Photo Section -->
            <img src="{{ asset('img/furstin.png') }}" class="img-fluid owner-img" alt="Owner Photo">
        </div>
        <div class="col-lg-6 col-md-6 card-container">
            <!-- Paragraph Section -->
            <div class="owner-description">
                <h4>Furstin Aprilavia Putri</h4>
                <p>Hello, I am Furstin Aprilavia Putri from PBKK B class with student ID 5025221234. This is my project, an IKEA e-commerce website! I am using Bootstrap and MySQL as the database. All products and categories here are directly sourced from the IKEA website. Thank you! 😊</p>
            </div>
        </div>
    </div>
</div>


  <!-- Content Row -->
{{-- 
  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Promo Of The Month 💥</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          
          <div class="mt-4 text-center">
            <img src="{{ asset('img/shop.png') }}" class="img-fluid" alt="Login Image">
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Company Owner 🚀</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="mt-4 text-center">
            <img src="{{ asset('img/furstin.png') }}" class="img-fluid" alt="Login Image">
          </div>
          
        </div>
      </div>
    </div>
  </div> --}}

  
    
@endsection