<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Inertia App</title>

     <!-- Muat CSS dari folder public -->
     <link href="/css/bootstrap.css" rel="stylesheet">
     <link href="/css/font-awesome.min.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="/css/responsive.css" rel="stylesheet">
     <!-- Link untuk Google Font Montserrat -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

     <style>
body {
    font-family: 'Montserrat', sans-serif;
}

/* Tambahkan gaya untuk heading atau elemen tertentu */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700; /* Bold */
}

p, a, li, span {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400; /* Regular */
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

/* Modal Content */
.modal {
  background-color: white;
  border-radius: 8px;
  padding: 20px;
  width: 400px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  position: relative;
}

/* Modal Header */
.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ddd;
  margin-bottom: 10px;
}

.modal-title {
  font-size: 18px;
  font-weight: bold;
}

/* Close Button */
.close {
  background: none;
  border: none;
  font-size: 24px;
  cursor: pointer;
}

.modal-body {
  font-size: 16px;
}

.modal-footer {
  text-align: right;
  border-top: 1px solid #ddd;
  margin-top: 10px;
  padding-top: 10px;
}

.modal-footer .btn {
  padding: 8px 16px;
}

.transformation-stories {
  margin-top: 50px; /* Tambahkan jarak antara carousel dan section ini */
  padding: 40px 0;
}

.transformation-box {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease;
}

.transformation-box img {
  max-width: 100%; /* Gambar responsif */
  height: auto;
  margin-bottom: 15px;
}

.transformation-box h5 {
  font-size: 1.2rem;
  color: #30529D;
}

.transformation-box p {
  font-size: 1rem;
  color: #666;
}

.transformation-box:hover {
  transform: translateY(-10px); /* Efek hover */
}

.explore-button {
  background-color: #ffcc00;
  color: #30529D;
  padding: 10px 15px;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
}

.explore-button:hover {
  background-color: #ffb900;
}

.product-box {
  background-color: white; /* Biru tua IKEA */
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-bottom: 30px;
  text-align: center;
}

/* Hover effect untuk product box */
.product-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Styling untuk product image */
.product-img {
  max-width: 100%;
  border-radius: 8px;
  margin-bottom: 15px;
  transition: transform 0.3s ease;
}

/* Zoom effect untuk product image saat hover */
.product-box:hover .product-img {
  transform: scale(1.1);
}

/* Styling untuk judul produk */
.detail-box h5 {
  font-size: 18px;
  font-weight: bold;
  color: #30529d;
  margin-bottom: 10px;
}

/* Styling untuk deskripsi produk */
.detail-box p {
  color: #30529d;
  font-size: 14px;
  margin-bottom: 5px;
}

/* Styling untuk harga produk */
.product-price {
  font-size: 16px;
  font-weight: bold;
  color: #30529d;
  margin-bottom: 10px;
}



/* Styling untuk tombol add to cart */
.btn-box .add-to-cart {
  background-color: #ffcc00;
  color: #30529d;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: bold;
  transition: background-color 0.3s ease;
  text-decoration: none;
}

/* Hover effect untuk tombol add to cart */
.btn-box .add-to-cart:hover {
  background-color: #ffb900;
}
/* Animasi floating untuk naik turun */
@keyframes float-up-down {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-40px); /* Naik 10px */
  }
  100% {
    transform: translateY(0px); /* Kembali ke posisi awal */
  }
}

/* Kelas khusus untuk gambar di About Us */
.about-us-img-box {
  animation: float-up-down 3s ease-in-out infinite; /* Menerapkan animasi float */
  transition: transform 0.3s ease;
}

/* Hover effect untuk memberikan interaksi lebih */
.about-us-img-box:hover {
  transform: translateY(-15px); /* Naik lebih tinggi saat hover */
}

.btn-view-all {
  background-color: #002f6c !important; /* Biru tua IKEA */
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-view-all:hover {
  background-color: #abc5fc !important; /* Warna biru yang lebih gelap saat dihover */
  color: #ffcc00; /* Warna kuning IKEA pada hover */
}

/* Custom class for the service boxes */
.service-box {
    background-color: #30529D !important; /* Dark blue IKEA color with !important */
    color: #fff !important; /* White text for contrast */
  padding: 20px;
  border-radius: 8px;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

/* Hover effect for the service boxes */
.service-box:hover {
  background-color: #001f4c; /* Even darker blue on hover */
  transform: translateY(-10px); /* Lift the box slightly */
}



/* Gradient text untuk heading */
.highlighted-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 3rem;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(45deg, #fff, #abc5fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, text-shadow 0.3s ease;
  }

  /* Hover efek untuk heading */
  .highlighted-text:hover {
    transform: scale(1.1);
    text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.4);
  }

  /* Shadow untuk paragraph */
  .styled-paragraph {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.2rem;
    font-weight: 400;
    color: #eaeaea;
    text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.2);
    transition: color 0.3s ease, text-shadow 0.3s ease;
  }

  /* Hover efek untuk paragraph */
  .styled-paragraph:hover {
    color: #ffda00;
    text-shadow: 1px 1px 10px rgba(255, 255, 0, 0.8);
  }

  /* Button styling */
  .ikea-button {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: #ffda00;
    color: #1a1a1a;
    border: none;
    padding: 12px 25px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.15);
    display: inline-flex;
    align-items: center;
  }

  /* Hover efek untuk button */
  .ikea-button:hover {
    background-color: #ffb200;
    color: #ffffff;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
  }

  /* Menambah ikon di dalam button */
  

.ikea-logo {
  font-family: 'Montserrat', sans-serif;  /* Menggunakan font Montserrat */
  font-weight: 700;  /* Bold untuk kesan tegas dan estetik */
  color: #2C3E50;  /* Warna dark slate (gelap tapi elegan) */
  font-size: 2rem;  /* Ukuran font sedang, estetik */
  letter-spacing: 0.05rem;  /* Sedikit jarak antar huruf untuk kesan rapi */
  text-transform: uppercase;  /* Membuat semua huruf kapital */
  padding-left: 5px;
}
        /* Custom style for navbar links */
        .custom-nav-link {
            font-family: 'Montserrat', sans-serif;  /* Menggunakan font Montserrat */
            font-weight: 700;
  color: #30529D !important; /* Memastikan warna hitam diterapkan */
}

.custom-nav-link:hover {
  color: #76a1f7 !important; /* Warna saat hover menjadi abu-abu */
}


        </style>
    @vite('resources/js/app.js')
</head>
<body>
    @inertia
</body>
</html>
