<template>
  <div>
    <div class="hero_area">
      <div class="hero_bg_box">
        <div class="bg_img_box">
          <img :src="imageUrl('1p.png')" alt="Hero Background" />
        </div>
      </div>

      <!-- Header section -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="/">
              <span class="ikea-logo highlighted-text"> MY IKEA PROJECT </span>
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
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
                  <a class="nav-link custom-nav-link" href="#" @click.prevent="logout"> Logout </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <!-- Slider section -->
      <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <!-- Carousel Inner -->
          <div class="carousel-inner">
            
            <!-- First Slide (Promotional Campaign) -->
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1 class="highlighted-text">Transform Your Space with IKEA 🌟 </h1>
                      <p class="styled-paragraph">
                        Discover modern and minimalist furniture that combines style and functionality for every corner of your home.
                      </p>
                      <div class="btn-box">
                        <a href="#" class="btn1 ikea-button" style="background-color: #30529D; color: white;">
                          Slide For More!
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img :src="imageUrl('c22.png')" alt="Slider Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second Slide (Product Boxes) -->
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <!-- Loop through products and display each in a box -->
                  <div class="col-md-4" v-for="product in products" :key="product.id">
                    <div class="product-box">
                      <div class="">
                        <img :src="imageUrl(product.image)" alt="Product Image" class="product-img" />
                      </div>
                      <div class="detail-box">
                        <h5>{{ product.name }}</h5>
                        <p style="color: #30529D;">{{ product.description }}</p>
                        <p class="product-price" style="color: #30529D;">{{ product.price }}</p>
                        <div class="btn-box" style="display: flex; justify-content: center;">
                          <a href="#" class="add-to-cart">Add to Cart 🛒</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <!-- Third Slide (IKEA Ideas and Inspiration) -->
            

          </div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            
          </ol>
        </div>
      </section>
    <!-- Room Transformation Stories Section (Below the carousel) -->
    <section class="transformation-stories">
        <div class="container">
          <div class="heading_container heading_center">
            <h2 style="color: #30529D;">What Our Customers Are Saying</h2>
            <br>
          </div>
          <div class="row">
            <!-- Story 1 -->
            <div class="col-md-4">
              <div class="transformation-box">
                <img :src="imageUrl('pp1.png')" alt="Living Room Transformation" class="transformation-img" />
                <h5>Furstin</h5>
                <p>IKEA's furniture is affordable and stylish. I love how easy it is to assemble everything. Their designs are simple yet functional.</p>
              </div>
            </div>
            <!-- Story 2 -->
            <div class="col-md-4">
              <div class="transformation-box">
                <img :src="imageUrl('pp2.png')" alt="Bedroom Transformation" class="transformation-img" />
                <h5>Aprilavia</h5>
                <p>The quality of IKEA's products always impresses me. Their modern designs fit perfectly in my home. Highly recommend for small spaces.</p>
              </div>
            </div>
            <!-- Story 3 -->
            <div class="col-md-4">
              <div class="transformation-box">
                <img :src="imageUrl('pp3.png')" alt="Office Transformation" class="transformation-img" />
                <h5>Putri</h5>
                <p>Shopping at IKEA has been a delightful experience. I found everything I needed at a great price. The store layout is very intuitive.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

  <script>
  export default {
    name: 'Product',
    data() {
      return {
        products: [
          {
            id: 1,
            name: 'Chair Modern',
            description: 'Comfortable and stylish chair for modern living.',
            image: 'p1.png',
            price: '$199',
          },
          {
            id: 2,
            name: 'Sofa Minimalist',
            description: 'Minimalist sofa with elegant design for your living room.',
            image: 'p2.png',
            price: '$399',
          },
          {
            id: 3,
            name: 'Table Scandinavian',
            description: 'Scandinavian table perfect for modern homes.',
            image: 'p3.png',
            price: '$299',
          },
        ],
      };
    },
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
  
  
 
  