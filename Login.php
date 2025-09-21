<?php include __DIR__. '/Partials/Head.php'; ?>

<?php include __DIR__. '/Komponen/Navbar.php'; ?>

 <div class="auth-card">
  <!-- Kiri (Gambar) hanya muncul di desktop -->
  <div class="auth-left d-none d-md-block">
    <img src="Asset/img/images.jpg" class="d-block w-100 carousel-img" alt="">
  </div>

  <!-- Kanan (Form) -->
  <div class="auth-right">
    <!-- LOGIN FORM -->
    <form id="loginForm" action="index.php" method="POST">
      <div class="text-center mb-4">
        <img src="Asset/img/Logo.png" class="img-responsive logo" style="height: 80px; margin-left: 15px;">
        <h3>Selamat Datang Kembali</h3>
        <p>Masuk dengan akun yang sudah terdaftar.</p>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
      </div>

      <div class="mb-3">
        <label>Password</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
          <span class="input-group-text" onclick="togglePassword()">
            <i class="bi bi-eye" id="toggleIcon"></i>
          </span>
        </div>
        </div>

       <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
        <label class="form-check-label" for="rememberMe">Ingat saya</label>
        </div>
    <div class="d-flex align-items-center">
        <button type="submit" class="btn btn-primary w-50 me-2">Masuk</button>
        <span class="mx-2 fw-bold text-light">atau</span>
        <button type="button" class="btn btn-success w-50 ms-2" onclick="toggleForm('register')">Daftar</button>
      </div>
    </form>

    <div>
    <!-- REGISTER FORM -->
    <form id="registerForm" action="register.php" method="POST" style="display:none;">
      <div class="text-center mb-4">
        <img src="Asset/img/Logo.png" class="img-responsive logo" style="height: 80px; margin-left: 15px;">
        <h3>Selamat Datang</h3>
        <p>Buat akun baru untuk top-up game favorit Anda.</p>
      </div>

      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <div class="input-group">
            <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Masukkan password" required>
            <span class="input-group-text" onclick="togglePassword('registerPassword', 'registerToggleIcon')">
            <i class="bi bi-eye" id="registerToggleIcon"></i>
            </span>
        </div>
      </div>

      <div class="d-flex align-items-center">
        <button type="submit" class="btn btn-success w-50 me-2">Daftar</button>
        <span class="mx-2 fw-bold text-light">atau</span>
        <button type="button" class="btn btn-primary w-50 ms-2" onclick="toggleForm('login')">Masuk</button>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

<script>
  // Toggle Password
  function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.remove("bi-eye");
      toggleIcon.classList.add("bi-eye-slash");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.remove("bi-eye-slash");
      toggleIcon.classList.add("bi-eye");
    }
  }

  // Toggle Login / Register
  function toggleForm(type) {
    if (type === 'register') {
      document.getElementById("loginForm").style.display = "none";
      document.getElementById("registerForm").style.display = "block";
    } else {
      document.getElementById("loginForm").style.display = "block";
      document.getElementById("registerForm").style.display = "none";
    }
  }
</script>


<?php include __DIR__. '/Partials/Foot.php'; ?>