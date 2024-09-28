<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Furstin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style>
    .category-item {
    margin-bottom: 20px;
}

.category-card {
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 15px;
    cursor: pointer;
}

.category-img {
    max-width: 100%;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.category-card:hover .category-img {
    transform: scale(1.1); /* Zoom-in effect */
}

.category-card:hover {
    transform: translateY(-10px); /* Slight move up on hover */
}

p {
    margin-top: 10px;
    font-weight: bold;
    font-size: 16px;
}

.product-item {
        margin-bottom: 30px;
    }
    
    .product-card {
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: scale(1.1);
    }

    .product-img {
        width: 100%;
        border-radius: 10px;
    }

    .popular-products .product-item {
        margin-top: 20px;
    }

    .owner-img {
        width: 100%;
        max-width: 250px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .owner-img:hover {
        transform: scale(1.1); /* Zoom-in effect on hover */
    }

    .owner-description {
        padding: 20px;
        background-color: #f8f9fc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .owner-description:hover {
        transform: translateY(-10px); /* Slight move up on hover */
    }

    .owner-description h4 {
        font-weight: bold;
    }

    .owner-description p {
        font-size: 16px;
        margin-top: 10px;
    }

    /* Container for the card background */
.card-container {
    background-color: #f8f9fa; /* Light gray background like the "white" effect */
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

/* Review Item Styles */
.review-item {
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 15px;
}

.user-img img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.user-img img:hover {
    transform: scale(1.1); /* Slightly enlarge on hover */
}

.stars .fa-star {
    color: #ccc;
    font-size: 18px;
}

.stars .fa-star.checked {
    color: #f39c12; /* Star color for checked */
}

.hover-zoom {
    cursor: pointer;
}

.navbar-nav {
    display: flex;
    align-items: center;
}

@media (max-width: 768px) {
    #darkModeToggle {
        margin-right: 0;
    }
}


#darkModeToggle {
    background: none; /* Hapus background bawaan */
    border: none; /* Hapus border bawaan */
    margin-right: 10px; /* Atur jarak antara tombol dan elemen lain */
    padding: 5px 10px;  /* Beri sedikit margin agar tidak terlalu rapat */
    font-size: 20px; /* Ukuran font untuk ikon */
    cursor: pointer; /* Ganti kursor menjadi pointer */
}

#darkModeToggle i {
    color: #ffffff; /* Warna ikon default */
}

#darkModeToggle:hover i {
    color: #f1c40f; /* Warna ikon saat hover */
}


/* Dark mode untuk sidebar */
.dark-mode .sidebar {
  background-color: #1a1a1a; /* Background sidebar gelap */
  color: #ffffff; /* Teks sidebar putih */
}

/* Dark mode untuk navbar */
.dark-mode .navbar.bg-white {
  background-color: #1a1a1a !important; /* Background hitam */
  color: #ffffff !important; /* Teks putih */
}

/* Pastikan link di sidebar dan navbar juga mengikuti */
.dark-mode .sidebar .nav-link,
.dark-mode .navbar .nav-link {
  color: #ffffff !important; /* Teks link putih */
}

/* Pastikan dropdown di navbar juga mengikuti */
.dark-mode .navbar .dropdown-menu {
  background-color: #2c2c2c !important; /* Background dropdown gelap */
  color: #ffffff !important; /* Teks dropdown putih */
}

.dark-mode .sticky-footer {
  background-color: #1a1a1a !important; /* Background hitam */
  color: #ffffff !important; /* Teks putih */
}

/* Memastikan teks di dalam footer berubah menjadi putih */
.dark-mode .sticky-footer .copyright {
  color: #ffffff !important;
}

/* Mengubah warna teks navbar menjadi putih secara default */
.navbar .nav-link {
    color: #ffffff !important; /* Teks putih */
    transition: color 0.3s ease; /* Animasi transisi */
}

/* Mengubah warna teks navbar menjadi kuning saat di-hover */
.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #ffcc00 !important; /* Teks kuning saat di-hover atau diklik */
}


/* Mengubah tampilan teks dashboard */
#dashboard-title {
    font-weight: bold;
    font-size: 2.5rem; /* Ukuran teks lebih besar */
    color: #1a73e8; /* Warna biru IKEA */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Bayangan halus */
    transition: color 0.3s ease-in-out;
}

/* Efek hover */
#dashboard-title:hover {
    text-decoration: underline;
    color: #ffcc00; /* Warna kuning saat di-hover */
}

/* Animasi fadeIn sederhana */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

#dashboard-title {
    animation: fadeIn 1s ease-in-out;
}




/* Styling untuk tabel agar tampil lebih modern */
.table {
    border-collapse: separate;
    border-spacing: 0 10px; /* Spasi antar baris tabel */
    border-radius: 12px; /* Membuat sudut tabel lebih halus */
    overflow: hidden; /* Menghindari konten keluar dari border */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut di sekitar tabel */
}

/* Styling untuk header tabel */
.table th {
    background-color: #1a73e8; /* Warna biru sesuai tema IKEA */
    color: white; /* Teks berwarna putih */
    font-weight: bold;
    text-align: center;
    padding: 15px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan di bawah header */
    letter-spacing: 0.05em; /* Spasi antar huruf */
    text-transform: uppercase; /* Huruf kapital semua */
    font-size: 14px;
}

/* Alternating row styling untuk membuat tabel lebih mudah dibaca */
.table tbody tr:nth-child(even) {
    background-color: #f9f9f9; /* Warna background untuk baris genap */
}

/* Styling untuk baris tabel */
.table td {
    padding: 15px; /* Padding dalam sel tabel */
    text-align: center;
    font-size: 14px;
    border-top: none;
    border-bottom: 1px solid #ddd; /* Border bawah setiap sel */
}

/* Hover effect untuk baris tabel */
.table tbody tr {
    transition: background-color 0.3s ease, transform 0.2s ease; /* Animasi hover */
}

.table tbody tr:hover {
    background-color: #e0f7fa; /* Warna background saat di-hover */
    transform: translateY(-3px); /* Naik sedikit saat di-hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan saat di-hover */
    cursor: pointer; /* Mengubah kursor saat hover */
}

/* Menambahkan efek hover pada teks */
.table tbody tr:hover td {
    font-weight: bold; /* Membuat teks lebih tebal saat di-hover */
    color: #007bff; /* Ubah warna teks menjadi biru saat di-hover */
}

/* Border styling */
.table-bordered td, .table-bordered th {
    border: 1px solid #ddd; /* Border halus di sekitar sel */
}

/* Rounded corners untuk border */
.table-bordered {
    border-radius: 12px;
    overflow: hidden; /* Agar border radius terlihat */
}




/* Styling untuk form */


/* Styling untuk header form */



/* Styling untuk label */
label {
    font-weight: bold;
    font-size: 14px;
    color: #333;
    margin-bottom: 5px;
}

/* Styling untuk tombol simpan */
button[type="submit"] {
    background-color: #1a73e8; /* Warna biru untuk tombol simpan */
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 50px; /* Membulatkan tombol */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Animasi saat hover */
}

button[type="submit"]:hover {
    background-color: #155ab6; /* Warna tombol saat dihover */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Efek shadow saat dihover */
}

/* Styling untuk card salam personal */
.card.shadow-sm.p-4 {
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-in-out; /* Animasi fade in */
}

.card h3 {
    font-weight: bold;
    color: #1a73e8; /* Warna teks sesuai tema IKEA */
}

.card p.lead {
    font-size: 18px;
    color: #555;
}

.card ul {
    margin-top: 10px;
}

.card ul li {
    font-size: 16px;
    margin-bottom: 5px;
    color: #333;
}




  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 id="dashboard-title" class="h3 mb-0">@yield('title')</h1>
          </div>

          @yield('contents')

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('layouts.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <script>
    const toggleButton = document.getElementById('darkModeToggle');
    const icon = toggleButton.querySelector('i');
    const currentTheme = localStorage.getItem('theme');

    // Cek apakah tema sebelumnya dark mode
    if (currentTheme === 'dark') {
        document.body.classList.add('dark-mode');
        icon.classList.replace('fa-moon', 'fa-sun'); // Ubah ikon jadi matahari
    }

    toggleButton.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');

        // Simpan preferensi tema pengguna ke localStorage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
            icon.classList.replace('fa-moon', 'fa-sun'); // Ubah ikon jadi matahari
        } else {
            localStorage.setItem('theme', 'light');
            icon.classList.replace('fa-sun', 'fa-moon'); // Ubah ikon jadi bulan
        }
    });

  </script>
  
  
  
  
  
  
  

</body>

</html>