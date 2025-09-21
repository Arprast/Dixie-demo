<nav class="navbar navbar-expand-lg navbar-dark bg-dark modern-navbar shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="Index.php">
      <img src="Asset/img/Logo.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
      <span class="fw-semibold">Dixie Store.id</span>
    </a>

    <!-- Toggler (mobile menu button) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        
        <!-- Beranda -->
        <li class="nav-item">
          <a class="nav-link active" href="#">Beranda</a>
        </li>

        <!-- 🔍 Search Icon -->
        <li class="nav-item">
          <a class="nav-link" href="#" id="searchToggle">
            <i class="fa fa-search"></i>
          </a>
        </li>

        <!-- Search Form (hidden by default) -->
        <li class="nav-item d-none" id="searchFormContainer">
          <form class="d-flex ms-2" role="search" action="search.php" method="get">
            <input class="form-control form-control-sm" type="search" name="q" placeholder="Cari produk..." aria-label="Search">
          </form>
        </li>

        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Produk
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Game</a></li>
            <li><a class="dropdown-item" href="#">Top Up Via Login</a></li>
            <li><a class="dropdown-item" href="#">Pencarian</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
          </ul>
        </li>

        <!-- Cara Top Up -->
        <li class="nav-item">
          <a class="nav-link" href="#">Cara Top Up</a>
        </li>

        <!-- Masuk -->
        <li class="nav-item">
          <a class="nav-link" href="Login.php"><i class="fa fa-sign-in"></i> Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.getElementById("searchToggle").addEventListener("click", function(e) {
    e.preventDefault();
    const searchForm = document.getElementById("searchFormContainer");
    searchForm.classList.toggle("d-none");
  });
</script>

<!-- Font Awesome (icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">