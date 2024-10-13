<template>
    <div>
      <div class="hero_area">
  
        <div class="hero_bg_box">
          <div class="bg_img_box">
            <!-- Menggunakan gambar dari public/images -->
            <img :src="imageUrl('1p.png')" alt="Hero Background">
          </div>
        </div>
  
       <!-- Header section -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="/">
                <span class="ikea-logo highlighted-text"> MY IKEA PROJECT </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link custom-nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link custom-nav-link" href="/products"> Product </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link custom-nav-link" href="/dashboard"> Dashboard </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link custom-nav-link" href="#" @click.prevent="logout">Logout </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <!-- Contact Button -->

<!-- Modal Structure -->


  
        <!-- Slider section -->
        <section class="slider_section">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Carousel Inner -->
    <div class="carousel-inner">
      <!-- First Slide -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <!-- Judul dengan gradient dan shadow -->
                <h1 class="highlighted-text">✨ Living Room <br> Makeover 🛋️</h1>
                <!-- Paragraf dengan shadow dan hover efek -->
                <p class="styled-paragraph">
                  Upgrade your space with modern, minimalistic designs 🌿
                </p>
                <div class="btn-box">
                  <!-- Button dengan warna kuning IKEA dan hover efek -->
                  <a href="" class="btn1 ikea-button" style="background-color: #30529D; color: white;"> Get Yours Now! 🛒🔥</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img :src="imageUrl('l1.png')" alt="Slider Image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Slide -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <!-- Judul dengan gradient dan shadow -->
                <h1 class="highlighted-text">🛏️ Cozy <br> Bedroom Setup🌙 </h1>
                <!-- Paragraf dengan shadow dan hover efek -->
                <p class="styled-paragraph">
                    From beds to nightstands, find everything for your perfect sleep 💫
                </p>
                <div class="btn-box">
                    <a href="" class="btn1 ikea-button" style="background-color: #30529D; color: white;"> Get Yours Now! 🛒🔥</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img :src="imageUrl('b2.png')" alt="Slider Image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Third Slide -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1 class="highlighted-text">✨ Functional <br> Workspace 💼 </h1>
                <!-- Paragraf dengan shadow dan hover efek -->
                <p class="styled-paragraph">
                    Stay productive with functional and stylish office furniture  🚀
                </p>
                <div class="btn-box">
                  <!-- Button dengan warna kuning IKEA dan hover efek -->
                  <a href="" class="btn1 ikea-button" style="background-color: #30529D; color: white;"> Get Yours Now! 🛒🔥</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img :src="imageUrl('wr1.png')" alt="Slider Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
  </div>
</section>
      </div>
  
      <!-- Service Section -->
      <section class="service_section layout_padding">
        <div class="service_container">
          <div class="container">
            <div class="heading_container heading_center">
              <h2> Our <span style="color:#30529D;"> Services 💼 </span> </h2>
              <p> Explore our wide range of affordable furniture and home solutions, designed to make every space in your home both stylish and functional </p>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="box service-box">
                  <div class="img-box">
                    <img :src="imageUrl('ser.png')" alt="Service 1">
                  </div>
                  <div class="detail-box">
                    <h5 style="color: white;"> Furniture Assembly 🛠️</h5>
                    <p style="color: white;"> Get simple, step-by-step guides to help you assemble your new IKEA furniture easily and efficiently. 📝</p>
                    <a href=""> Read More </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box service-box">
                  <div class="img-box">
                    <img :src="imageUrl('ser2.png')" alt="Service 2">
                  </div>
                  <div class="detail-box">
                    <h5 style="color: white;">Design Consultation 🎨</h5>
                    <p style="color: white;"> Our experts will help you create the perfect space with stylish IKEA furniture designed just for you. 💡</p>
                    <a href=""> Explore Now </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box service-box">
                  <div class="img-box">
                    <img :src="imageUrl('ser3.png')" alt="Service 3">
                  </div>
                  <div class="detail-box">
                    <h5 style="color: white;"> Home Delivery 🚚</h5>
                    <p style="color: white;"> Enjoy fast, reliable delivery of your IKEA purchases straight to your doorstep with our trusted service. 📦</p>
                    <a href=""> Learn More </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-box" >
              <a href="" class="btn-view-all"> View All </a>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section class="about_section layout_padding" style="background: linear-gradient(to right, #ecf1fd, #30529d);">
        <div class="container">
          <div class="heading_container heading_center">
            <h2> About <span style="color:#30529D;"> Us </span> </h2>
            <p> Transform Your Home with IKEA 🏡✨</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="img-box about-us-img-box">
                <img :src="imageUrl('uss.png')" alt="About Us">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <h3> We Are IKEA </h3>
                <p style="color: white;"> At IKEA, we believe that your home is a reflection of who you are. Our mission is to bring stylish, functional, and sustainable furniture to every corner of your living space. 🛋️ 
                  <br>
                  <br>
                  From innovative storage solutions to cozy living room essentials, we're here to help you create a home that feels truly yours. 🌱</p>
                <a href="" class="btn-view-all"> Read More </a>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Add other sections similarly -->
    </div>
  </template>
  
  <script>
  export default {
    name: 'Home',
    methods: {
      imageUrl(filename) {
        return `/images/${filename}`;
      },
      logout() {
      // Arahkan user ke route logout Laravel
      window.location.href = '/logout';
    }
    },
    mounted() {
      const scripts = [
        '/js/jquery-3.4.1.min.js',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        '/js/bootstrap.js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        '/js/custom.js'
      ];
  
      scripts.forEach(src => {
        const script = document.createElement('script');
        script.src = src;
        script.async = true;
        document.body.appendChild(script);
      });
    }
  };
  </script>
  
  
 
  