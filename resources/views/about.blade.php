<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT. Hutan Rindang Banua</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    /* ===== NAVBAR STYLE ===== */
    .navbar {
  background: transparent;
  transition: all 0.4s ease;
  z-index: 1000;
}
.navbar .nav-link {
  color: #f5f5f5 !important;
  font-weight: 600;
  letter-spacing: 0.5px;
  transition: color 0.3s ease;
}
.brand-gradient {
  background: linear-gradient(90deg, #C3E3B6, #A0C49D, #FFD27D);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 700;
  font-size: 1.3rem;
  letter-spacing: 0.5px;
}
.navbar.scrolled {
  background: linear-gradient(90deg, rgba(18, 43, 35, 0.95), rgba(42, 85, 76, 0.95));
  box-shadow: 0 4px 25px rgba(0,0,0,0.3);
  padding: 0.7rem 2rem !important;
  backdrop-filter: blur(8px);
}
.navbar.scrolled .nav-link {
  color: #f8f9fa !important;
}
.dropdown-menu {
  min-width: 220px;
  padding: 0.5rem 0;
  border: none;
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  border-radius: 12px;
  transform: translateY(-10px);
  opacity: 0;
  transition: all 0.3s ease;
}
.dropdown-menu.show {
  transform: translateY(0);
  opacity: 1;
}
.dropdown-item:hover {
  background: linear-gradient(90deg, #345C4D, #5D9C80);
  color: #fff;
  border-radius: 8px;
}
.navbar-toggler {
  border: none;
}
.navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255,0.9%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
    /* ===== ABOUT SECTION ===== */
    .about-section {
      position: relative;
      background: url('{{ asset('images/forest.jpg') }}') center/cover no-repeat;
      color: white;
      text-align: left;
      padding: 200px 80px;
    }
    .about-section h1 {
      font-size: 4rem;
      font-weight: 800;
    }
    .about-section p {
      font-size: 1.2rem;
      max-width: 800px;
    }
    .about-overlay {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.4);
      z-index: 1;
    }
    .about-content {
      position: relative;
      z-index: 2;
    }
    
  </style>
</head>

<body>

<!-- ==================== NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg fixed-top py-3">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:50px; margin-right:12px;">
      <span class="brand-gradient">PT. HUTAN RINDANG BANUA</span>
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">

        <!-- ABOUT dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ABOUT
          </a>
          <ul class="dropdown-menu shadow-sm rounded-3 border-0" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item" href="#about-section">About PT. Hutan Rindang Banua</a></li>
            <li><a class="dropdown-item" href="#our-people">Our People</a></li>
            <li><a class="dropdown-item" href="#voluntary-carbon-market">Voluntary Carbon Market</a></li>
          </ul>
        </li>

        <!-- THE PROJECT dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle" href="#" id="projectDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            THE PROJECT
          </a>
          <ul class="dropdown-menu shadow-sm rounded-3 border-0" aria-labelledby="projectDropdown">
            <li><a class="dropdown-item" href="#climate">Climate</a></li>
            <li><a class="dropdown-item" href="#community">Community</a></li>
            <li><a class="dropdown-item" href="#biodiversity">Biodiversity</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link px-3" href="#news">NEWS & STORIES</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#resources">RESOURCES</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- ==================== HERO SECTION ==================== -->
<section id="hero" class="hero-section d-flex align-items-center justify-content-center text-center text-light">
  <!-- Overlay gradient -->
  <div class="hero-overlay"></div>

  <!-- Konten -->
  <div class="container position-relative z-3">
    <h5 class="fw-semibold text-success mb-2 animate__animated animate__fadeInDown">WELCOME TO</h5>
    <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInUp">
      PT. HUTAN RINDANG BANUA
    </h1>
    <p class="lead mx-auto animate__animated animate__fadeIn animate__delay-1s" style="max-width: 750px;">
      Dedicated to protecting and restoring Indonesia’s tropical peatland forests for a sustainable future.
    </p>

    <a href="#about-section" class="btn btn-success px-4 py-2 rounded-pill shadow-lg mt-3 animate__animated animate__fadeInUp animate__delay-1s">
      Explore More
    </a>
  </div>

  <!-- Wave transition bawah -->
  <div class="hero-wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#002a18" fill-opacity="1"
        d="M0,192L80,213.3C160,235,320,277,480,282.7C640,288,800,256,960,229.3C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
      </path>
    </svg>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
/* ==================== HERO STYLE ==================== */
.hero-section {
  background: url('{{ asset('images/hutan.jpg') }}') center/cover no-repeat;
  height: 100vh;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

/* Overlay gradient elegan */
.hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0, 40, 20, 0.6) 0%, rgba(0, 0, 0, 0.9) 100%);
  z-index: 1;
}

/* Teks */
.hero-section .container {
  z-index: 2;
  position: relative;
  color: #f8f9fa;
}

/* Tombol */
.hero-section .btn-success {
  background: linear-gradient(135deg, #009e60, #004d2b);
  border: none;
  transition: all 0.4s ease;
}
.hero-section .btn-success:hover {
  transform: scale(1.08);
  box-shadow: 0 0 20px rgba(0, 255, 150, 0.4);
}

/* Wave bawah */
.hero-wave {
  position: absolute;
  bottom: 0;
  width: 100%;
  line-height: 0;
  z-index: 3;
}

/* Animasi smooth parallax */
.hero-section::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.2);
  animation: moveBg 20s infinite linear alternate;
}

@keyframes moveBg {
  0% { background-position: center top; }
  100% { background-position: center bottom; }
}

/* Scroll Navbar */
.navbar.scrolled {
  background-color: rgba(0, 50, 30, 0.95);
  box-shadow: 0 2px 10px rgba(0,0,0,0.3);
  transition: 0.4s ease;
}
</style>

<script>
  window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (navbar) navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
</script>


<!-- ==================== PROJECT DESCRIPTION SECTION ==================== -->
<section id="project-description" 
         style="background: linear-gradient(180deg, #f6fbff 0%, #eaf7f0 100%);
                padding: 120px 80px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Background pattern lembut -->
    <div style="position:absolute; top:0; left:0; right:0; bottom:0;
                background: url('https://www.transparenttextures.com/patterns/paper-fibers.png');
                opacity: 0.2;"></div>
   <!-- Judul besar -->
<div class="row justify-content-center text-center mb-5 position-relative" data-aos="fade-up" data-aos-delay="100">
  <div class="col-lg-10">
    <h2 style="
      font-weight: 700;
      font-size: 2.4rem;
      line-height: 1.6;
      background: linear-gradient(90deg, #1e3c88, #3b8d6d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: 0.5px;
      text-shadow: 0 3px 8px rgba(0,0,0,0.1);">
      Proyek ini menunjukkan bagaimana konservasi skala besar dapat dicapai 
      dan dijalankan secara berkelanjutan melalui dukungan pendanaan 
      dari sektor swasta melalui 
      <span style="color:#2c59af;">Pasar Karbon Sukarela (VCM)</span>
    </h2>
  </div>
</div>


    <!-- Isi teks dua kolom -->
<div class="row justify-content-center position-relative" data-aos="fade-up" data-aos-delay="300">
  <div class="col-lg-8">
    <p style="color:#2f2f2f; font-size:1.1rem; line-height:1.9; text-align:justify;
              margin-bottom: 25px; opacity: 0.9;">
      Proyek ini dimulai untuk mencegah konversi kawasan hutan yang direncanakan menjadi 
      perkebunan akasia skala industri. Dengan membentuk proyek konservasi ini, 
      KMP berhasil mencegah pelepasan emisi gas rumah kaca yang akan terjadi 
      jika proyek ini tidak dilakukan.
    </p>
    <p style="color:#2f2f2f; font-size:1.1rem; line-height:1.9; text-align:justify;
              opacity: 0.9;">
      Selain bertujuan untuk mencegah deforestasi yang disebabkan oleh emisi gas rumah kaca, 
      proyek ini juga memiliki misi untuk melindungi keanekaragaman hayati hutan serta 
      meningkatkan taraf hidup, kesejahteraan, dan peluang ekonomi masyarakat 
      yang tinggal di sekitar kawasan hutan.
    </p>
  </div>
</div>
        <!-- Tombol Load More -->
        <div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="500">
          <a href="#!" 
             class="btn rounded-pill px-5 py-3 fw-semibold"
             style="
                border: none;
                background: linear-gradient(90deg, #1e3c88, #3b8d6d);
                color: #fff;
                box-shadow: 0 8px 20px rgba(30, 60, 136, 0.3);
                transition: all 0.3s ease;
                letter-spacing: 0.5px;">
            <i class="bi bi-plus-circle me-2"></i>LOAD MORE
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tambahkan ini di bawah (kalau belum ada di halaman kamu) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
  });

  // Efek hover tombol
  document.querySelectorAll('#project-description .btn').forEach(btn => {
    btn.addEventListener('mouseenter', () => {
      btn.style.transform = 'translateY(-5px) scale(1.05)';
      btn.style.boxShadow = '0 12px 25px rgba(30, 60, 136, 0.4)';
    });
    btn.addEventListener('mouseleave', () => {
      btn.style.transform = 'translateY(0) scale(1)';
      btn.style.boxShadow = '0 8px 20px rgba(30, 60, 136, 0.3)';
    });
  });
</script>


  </div>
</section>
<!-- ==================== IMPACT SECTION ==================== -->
<section id="impact-section" class="py-5" style="background-color: #f9fcfa;">
  <div class="container">
    <div class="row align-items-center">

      <!-- Kiri: Deskripsi -->
      <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1200">
        <div class="mb-4">
          <div class="d-flex align-items-start mb-4">
            <i class="bi bi-sun-fill fs-3 text-primary me-3"></i>
            <div>
              <h5 class="fw-bold text-primary mb-1">Climate</h5>
              <p class="text-muted mb-0">Preventing carbon emissions by protecting carbon-rich peatlands.</p>
            </div>
          </div>

          <div class="d-flex align-items-start mb-4">
            <i class="bi bi-people-fill fs-3 text-danger me-3"></i>
            <div>
              <h5 class="fw-bold text-danger mb-1">Community</h5>
              <p class="text-muted mb-0">Partnering with local communities for transformative change.</p>
            </div>
          </div>

          <div class="d-flex align-items-start">
            <i class="bi bi-tree-fill fs-3 text-success me-3"></i>
            <div>
              <h5 class="fw-bold text-success mb-1">Biodiversity</h5>
              <p class="text-muted mb-0">Protecting species of high conservation value.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Kanan: Carousel Gambar -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
        <div id="impactCarousel" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/orangutan.jpg') }}" class="d-block w-100" alt="Orangutan" style="height: 450px; object-fit: cover;">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/forest.jpg') }}" class="d-block w-100" alt="Forest" style="height: 450px; object-fit: cover;">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/community.jpg') }}" class="d-block w-100" alt="Community" style="height: 450px; object-fit: cover;">
            </div>
          </div>

          <!-- Tombol navigasi -->
          <button class="carousel-control-prev" type="button" data-bs-target="#impactCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#impactCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>
</section>
</body>
</html>
