<nav class="navbar navbar-expand-lg navbar-dark bg-dark modern-navbar shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="Asset/img/Logo.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
      <span class="fw-semibold">Dixie Store.id</span>
    </a>

    <!-- Toggler (mobile menu button) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarContent">

      <!-- 🔍 Search Bar -->
      <form class="d-flex mx-lg-2 my-2 my-lg-0 flex-grow-1" role="search" action="search.php" method="get">
        <input class="form-control search-input" type="search" name="q" placeholder="Cari produk..." aria-label="Search">
      </form>


      <!-- Menu -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>

      <!-- Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
          Categories
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Gaming Gear</a></li>
          <li><a class="dropdown-item" href="#">PC Components</a></li>
          <li><a class="dropdown-item" href="#">Accessories</a></li>
        </ul>
      </li> -->

        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-sign-in"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
