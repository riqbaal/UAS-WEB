<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Helm Iqbal - Premium Helm Store</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      .navbar-custom {
        background-color: #8B0000;
      }
      .hero-section {
        background-color: #f3f4f6;
        border-radius: 15px;
        padding: 2rem;
      }
      .card {
        border: 1px solid #8B0000;
        border-radius: 10px;
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
      .price-tag {
        color: #8B0000;
        font-weight: bold;
        font-size: 1.2rem;
      }
      .footer {
        background-color: #8B0000;
        color: white;
        padding: 1rem 0;
      }
      .btn-dark-red {
        background-color: #8B0000;
        color: white;
      }
      .btn-outline-dark-red {
        border: 1px solid #8B0000;
        color: #8B0000;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">Toko Helm Iqbal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </li>
            <li class="nav-item ms-2">
              <a href="<?= base_url() ?>auth/logout" class="btn btn-danger">Logout</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>chart" class="nav-link">Cart <span class="badge bg-warning">3</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required />
              </div>
              <button type="submit" class="btn btn-dark-red w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Hero Section -->
      <div class="row hero-section mb-5 align-items-center">
        <div class="col-md-6 animate__animated animate__fadeInLeft">
          <span class="badge bg-dark-red mb-3">Premium Helmet Store</span>
          <h1 class="display-4 fw-bold mb-3 text-dark-red">Discover Your Perfect <br>Helmet Style</h1>
          <p class="lead mb-4 text-muted">Temukan koleksi helm berkualitas dengan harga terbaik sejagad Jambi</p>
          <div class="d-flex gap-3">
            <a href="#products" class="btn btn-dark-red btn-lg shadow-sm">
              <i class="fas fa-shopping-bag me-2"></i>Explore Products
            </a>
            <a href="#about" class="btn btn-outline-dark-red btn-lg">
              <i class="fas fa-info-circle me-2"></i>Learn More
            </a>
          </div>
        </div>
        <div class="col-md-6 animate__animated animate__fadeInRight">
          <div class="search-form bg-white shadow-sm rounded p-4">
            <h2 class="h4 mb-4 text-dark-red">
              <i class="fas fa-search me-2"></i>Find Your Helmet
            </h2>
            <form action="">
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text bg-dark-red text-white">
                    <i class="fas fa-helmet-safety"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Brand (Arai, Njs, Nhk, Kyt)" />
                </div>
              </div>
              <button class="btn btn-dark-red w-100">Search</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Products Section -->
      <h2 class="h3 mb-4" id="products">pilihan produk</h2>
      <div class="row g-4 mb-5">
        <!-- Product Cards -->
        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm1.jpg" class="card-img-top" alt="helm full face" />
            <div class="card-body">
              <h5 class="card-title">helm full face</h5>
              <p class="price-tag mb-3">Rp 900.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">Add to Cart</a>
                <button class="btn btn-outline-dark-red"><i class="fas fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm2.jpg" class="card-img-top" alt="helm half face" />
            <div class="card-body">
              <h5 class="card-title">half face</h5>
              <p class="price-tag mb-3">Rp 700.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">Add to Cart</a>
                <button class="btn btn-outline-dark-red"><i class="fas fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm3.jpg" class="card-img-top" alt="helm retro" />
            <div class="card-body">
              <h5 class="card-title">helm retro</h5>
              <p class="price-tag mb-3">Rp 500.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">Add to Cart</a>
                <button class="btn btn-outline-dark-red"><i class="fas fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm4.jpg" class="card-img-top" alt="helm cross" />
            <div class="card-body">
              <h5 class="card-title">helm cross</h5>
              <p class="price-tag mb-3">Rp 1.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">Add to Cart</a>
                <button class="btn btn-outline-dark-red"><i class="fas fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <p class="mb-0">©2024 Toko Helm Iqbal. All Rights Reserved.</p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>