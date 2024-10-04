<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
    
    .text-gray-900 {
    font-size: 28px; /* Ukuran font sesuai Dashboard Title */
    font-weight: 700; /* Tebal seperti Dashboard Title */
    color: #1a73e8; /* Warna biru seperti Dashboard Title */
    text-align: center;
    margin-bottom: 10px;
}

.text-gray-900::after {
    content: "";
    display: block;
    width: 100px;
    height: 4px;
    background-color: #1a73e8; /* Garis bawah biru */
    margin: 10px auto 0;
    border-radius: 10px;
}


.btn-user {
    background-color: #1a73e8;
    border-radius: 50px;
    font-size: 16px;
    padding: 10px 20px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-user:hover {
    background-color: #155ab6;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
}



.form-control-user {
    border-radius: 30px;
    border: 1px solid #ddd;
    padding: 15px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.form-control-user:focus {
    border-color: #1a73e8;
    box-shadow: 0 0 10px rgba(26, 115, 232, 0.2);
}

.card {
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}


.small a {
    color: #1a73e8;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease, text-decoration 0.3s ease;
}

.small a:hover {
    color: #155ab6;
    text-decoration: underline;
}

.bg-login-image {
    background-image: url('/img/ikealog.png');
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease;
}

.bg-login-image:hover {
    transform: scale(1.05);
}

.container {
    padding-top: 80px; /* Sesuaikan dengan jarak yang diinginkan */
}

.bg-login-custom {
    background-image: url('/img/back1.png'); /* Ganti dengan path gambar */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* background-color: #2453a2; Warna cadangan jika gambar tidak muncul */
}



  </style>
</head>

<body class="bg-login-custom">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to Your IKEA Shopping Journey! 🛍️🛒</h1>
                  </div>
                  <form action="{{ route('login.aksi') }}" method="POST" class="user">
                    @csrf
										@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
										@endif
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">Login! 🚪 </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>