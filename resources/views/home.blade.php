<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Hutan Rindang Banua</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 8%;
            transition: 0.3s;
        }

        .navbar-brand {
            font-weight: 700;
            color: #2f8856 !important;
            letter-spacing: 1px;
        }

        .navbar-nav a {
            color: #333;
            font-weight: 500;
            margin-left: 20px;
            transition: 0.3s;
        }

        .navbar-nav a:hover {
            color: #3fa96b;
        }

        /* Hero */
        /* Hero Section */
.hero {
  position: relative;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding-left: 10%;
  color: white;
  text-shadow: 2px 2px 10px rgba(0,0,0,0.6);
  overflow: hidden;
}

/* Video Background */
.hero-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
  filter: brightness(0.6);
}

/* Konten Hero */
.hero-content {
  position: relative;
  z-index: 1;
}

.hero h1 {
  font-size: 4rem;
  font-weight: 700;
}

.hero p {
  font-size: 1.2rem;
  color: #d8ffd8;
  margin-bottom: 30px;
}


        .btn-custom {
            background-color: #5C7A32;
            color: white;
            border-radius: 50px;
            padding: 12px 35px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #2f8856;
            transform: scale(1.05);
        }

        /* Sidebar Sosial Media */
        .sidebar {
            position: fixed;
            top: 50%;
            right: 25px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 18px;
            z-index: 1000;
        }

        .sidebar a {
            color: #3fa96b;
            font-size: 1.4rem;
            background-color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #3fa96b;
            color: white;
        }

        /* Tentang Kami Section (gradasi style) */
        #tentang {
            background: linear-gradient(to bottom, #1a3a8a, #2e8b72);
            color: white;
            padding: 120px 10%;
        }

        #tentang h2 {
            font-weight: 700;
            margin-bottom: 30px;
        }

        #tentang ul {
            list-style: none;
            padding: 0;
        }

        #tentang li {
            margin-bottom: 18px;
            display: flex;
            align-items: start;
        }

        #tentang i {
            color: #6cffab;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Contact Section */
        #contact {
            background-color: #f8fef9;
            padding: 100px 10%;
        }

        #contact h2 {
            font-weight: 700;
            color: #2f8856;
            margin-bottom: 20px;
        }

        #contact form {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        #contact input, #contact textarea {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
        }

        #contact button {
            background-color: #3fa96b;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            color: #fff;
            transition: 0.3s;
        }

        #contact button:hover {
            background-color: #2f8856;
        }

        iframe {
            border-radius: 15px;
            width: 100%;
            height: 350px;
            border: none;
        }

        /* Footer */
        footer {
            background-color: #3fa96b;
            color: white;
            text-align: center;
            padding: 25px 0;
            font-size: 0.95rem;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            .hero {
                align-items: center;
                text-align: center;
                padding: 0 5%;
            }
            .info-box {
                width: 100%;
            }
        }
        /* ===== Corak dan Ornamen Tambahan ===== */

/* Corak halus di background hero */
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: linear-gradient(45deg, rgba(255,255,255,0.1) 1px, transparent 1px),
                    linear-gradient(-45deg, rgba(255,255,255,0.1) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none;
  z-index: 0;
}
.hero {
  position: relative;
  overflow: hidden;
}

/* Ornamen lengkung transisi antar section */
section::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: -1px;
  height: 80px;
  background: radial-gradient(ellipse at top, rgba(0,0,0,0.05), transparent 70%);
  opacity: 0.4;
  pointer-events: none;
}

/* Corak diagonal tipis di bagian tentang */
#tentang::before {
  content: "";
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    135deg,
    rgba(255,255,255,0.05) 0,
    rgba(255,255,255,0.05) 2px,
    transparent 2px,
    transparent 10px
  );
  pointer-events: none;
}

/* Garis aksen di atas judul section */
section h2::before {
  content: "";
  display: block;
  width: 60px;
  height: 4px;
  border-radius: 4px;
  background: linear-gradient(90deg, #2f8856, #6cffab);
  margin: 0 auto 15px auto;
}

/* Ornamen lembut pada section keunggulan */
#keunggulan {
  position: relative;
  overflow: hidden;
}
#keunggulan::before {
  content: "";
  position: absolute;
  top: -100px;
  right: -150px;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, #3fa96b30, transparent 70%);
  filter: blur(60px);
}
#keunggulan::after {
  content: "";
  position: absolute;
  bottom: -80px;
  left: -120px;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, #2f885620, transparent 70%);
  filter: blur(80px);
}

/* Corak garis halus di contact */
#contact::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: linear-gradient(90deg, rgba(63,169,107,0.03) 1px, transparent 1px),
                    linear-gradient(180deg, rgba(63,169,107,0.03) 1px, transparent 1px);
  background-size: 80px 80px;
  pointer-events: none;
}

/* Efek garis bergerak lembut */
@keyframes movePattern {
  0% { background-position: 0 0, 0 0; }
  100% { background-position: 60px 60px, -60px -60px; }
}
.hero::before {
  animation: movePattern 40s linear infinite;
}

/* Tambah wave lembut di bawah hero */
.hero::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 120px;
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="120" preserveAspectRatio="none"><path d="M0,0 C300,100 700,0 1200,80 L1200,120 L0,120 Z" fill="%23ffffff"/></svg>') no-repeat bottom;
  background-size: cover;
  pointer-events: none;
}

    </style>
</head>
<body>

  <!-- ==================== NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg fixed-top py-3">
  <div class="container-fluid">

    <!-- Logo + Brand -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:50px; margin-right:12px;">
      <span class="brand-gradient">PT. HUTAN RINDANG BANUA</span>
    </a>

    <!-- Navbar Toggler -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">

        <!-- ABOUT dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle d-flex align-items-center justify-content-between" 
             href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ABOUT
          </a>
          <ul class="dropdown-menu shadow-sm rounded-3 border-0" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item" href="{{ route('about.hrb') }}">About PT. Hutan Rindang Banua</a></li>
            <li><a class="dropdown-item" href="#our-people">Our People</a></li>
            <li><a class="dropdown-item" href="#voluntary-carbon-market">Voluntary Carbon Market</a></li>
          </ul>
        </li>

        <!-- THE PROJECT dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle d-flex align-items-center justify-content-between" 
             href="#" id="projectDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            THE PROJECT
          </a>
          <ul class="dropdown-menu shadow-sm rounded-3 border-0" aria-labelledby="projectDropdown">
            <li><a class="dropdown-item" href="#climate">Climate</a></li>
            <li><a class="dropdown-item" href="#community">Community</a></li>
            <li><a class="dropdown-item" href="#biodiversity">Biodiversity</a></li>
          </ul>
        </li>

        <!-- Other links -->
        <li class="nav-item"><a class="nav-link px-3" href="#news">NEWS & STORIES</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#resources">RESOURCES</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="#contact">CONTACT</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- ==================== CSS ==================== -->
<style>
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
</style>

<!-- Bootstrap JS Bundle (WAJIB ADA untuk dropdown berfungsi) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scroll effect -->
<script>
window.addEventListener("scroll", function() {
  const navbar = document.querySelector(".navbar");
  navbar.classList.toggle("scrolled", window.scrollY > 50);
});
</script>


    <!-- Hero -->
    <section class="hero" id="home">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung video HTML5.
  </video>

  <div class="hero-content" data-aos="fade-in">
    <h1>PROTECT <br> NATURE</h1>
    <p>“Perlindungan dan Restorasi Lahan Tropis, Menyelamatkan Kehidupan — PT. Hutan Rindang Banua”</p>
    <a href="#tentang" class="btn btn-custom">Explore More</a>
  </div>
</section>


    <!-- Sidebar Sosial -->
    <div class="sidebar">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
    </div>

  <!-- Tentang Kami (Desain Modern & Elegan, Warna Logo) -->
<section id="tentang" 
  style="background: linear-gradient(135deg, #5C7A32 0%, #A7C957 100%); 
         padding: 120px 8%; color: white; position: relative; overflow: hidden;">

  <!-- Parallax Background Daun -->
  <div class="parallax-bg" 
       style="position:absolute;top:0;left:0;width:100%;height:100%;
              background:url('{{ asset('images/f9af8b00-263c-4945-8ad2-de6ae23741af.jpg') }}') center/cover no-repeat;
              opacity:0.15; transform:translateY(0); transition:transform 0.3s ease;">
  </div>

  <div class="container position-relative" style="z-index: 2;">
    <div class="row align-items-center gy-5">

      <!-- Kolom Teks -->
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="fw-bold mb-3" style="font-size: 2.3rem; text-shadow: 0 0 15px rgba(255,255,255,0.2);">
           <span style="color:#e8ffd8;">Tentang PT. Hutan Rindang Banua</span>
        </h2>

        <p style="font-size: 1.1rem; line-height: 1.8;">
          <strong>PT. Hutan Rindang Banua</strong> adalah perusahaan yang berkomitmen tinggi terhadap
          pelestarian hutan dan pemberdayaan masyarakat sekitar. Kami percaya bahwa keseimbangan
          antara manusia dan alam merupakan kunci keberlanjutan kehidupan.
        </p>

        <div class="mt-4">
          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-tree-fill fs-4 text-light me-3"></i>
            <p class="mb-0">Restorasi dan konservasi hutan tropis di Kalimantan Selatan.</p>
          </div>
          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-people-fill fs-4 text-light me-3"></i>
            <p class="mb-0">Pemberdayaan masyarakat lokal melalui praktik ramah lingkungan.</p>
          </div>
          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-flower3 fs-4 text-light me-3"></i>
            <p class="mb-0">Perlindungan keanekaragaman hayati dan spesies langka.</p>
          </div>
        </div>
      </div>

      <!-- Kolom Gambar -->
      <div class="col-lg-6 text-center" data-aos="fade-left">
        <div class="position-relative d-inline-block">
          <img src="{{ asset('images/IMG_6907.jpg') }}" 
               alt="Hutan Rindang Banua"
               class="img-fluid rounded-4 shadow-lg border border-success border-opacity-50"
               style="max-height: 420px; object-fit: cover;">

          <!-- Overlay Transparan -->
          <div class="position-absolute bottom-0 start-0 end-0 bg-success bg-opacity-50 text-white p-3 rounded-bottom-4">
            <h5 class="mb-0 fw-semibold">“Menjaga Hutan, Menyelamatkan Kehidupan” 🌱</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Mini Card Nilai Utama -->
    <div class="row text-center mt-5 g-4" data-aos="fade-up">
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow-sm bg-light bg-opacity-10 backdrop-blur" 
             style="border:1px solid rgba(255,255,255,0.2);">
          <i class="bi bi-brightness-high-fill fs-3 text-warning mb-2"></i>
          <h6 class="fw-bold text-white">Keberlanjutan</h6>
          <p class="small text-white-50 mb-0">Mengelola sumber daya hutan dengan prinsip ramah lingkungan.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow-sm bg-light bg-opacity-10 backdrop-blur" 
             style="border:1px solid rgba(255,255,255,0.2);">
          <i class="bi bi-globe-americas fs-3 text-info mb-2"></i>
          <h6 class="fw-bold text-white">Kolaborasi</h6>
          <p class="small text-white-50 mb-0">Membangun kemitraan dengan masyarakat dan pemangku kepentingan.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow-sm bg-light bg-opacity-10 backdrop-blur" 
             style="border:1px solid rgba(255,255,255,0.2);">
          <i class="bi bi-heart-fill fs-3 text-danger mb-2"></i>
          <h6 class="fw-bold text-white">Kepedulian</h6>
          <p class="small text-white-50 mb-0">Menumbuhkan cinta terhadap alam dan kehidupan berkelanjutan.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Ornamen Cahaya -->
  <div style="position:absolute;top:-100px;right:-100px;width:400px;height:400px;
              background:radial-gradient(circle,#a7c95740,#0000);border-radius:50%;filter:blur(80px);"></div>
  <div style="position:absolute;bottom:-100px;left:-100px;width:400px;height:400px;
              background:radial-gradient(circle,#ffffff30,#0000);border-radius:50%;filter:blur(100px);"></div>
</section>

<!-- Script Animasi Parallax -->
<script>
  window.addEventListener("scroll", () => {
    const parallax = document.querySelector(".parallax-bg");
    let scrollY = window.scrollY;
    parallax.style.transform = `translateY(${scrollY * 0.4}px)`; // efek parallax halus
  });
</script>

   <!-- Bagian Estetik: Misi Proyek Kami -->
<section id="misi" style="background: linear-gradient(135deg, #f3fff4 0%, #e9f8ef 100%); padding: 120px 8%; position: relative; overflow: hidden;">
  <div class="container position-relative" style="z-index: 2;">
    <!-- Judul -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold mb-3" style="color:#3b6b36; font-size:2.6rem;">Misi Proyek Kami</h2>
      <p class="text-muted mx-auto" style="max-width:700px; font-size:1.1rem;">
        Kami berkomitmen untuk menjaga harmoni antara manusia dan alam melalui langkah-langkah nyata demi kelestarian bumi yang hijau dan berkelanjutan.
      </p>
    </div>

    <!-- Kartu Misi -->
    <div class="row justify-content-center align-items-stretch g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="mission-card text-center p-5 h-100">
          <div class="icon-circle mb-4">
            <i class="bi bi-cloud-sun-fill"></i>
          </div>
          <h5 class="fw-bold text-success mb-3">Iklim</h5>
          <p class="text-muted">
            Mengurangi emisi karbon melalui pelestarian hutan alami dan mencegah deforestasi serta kebakaran hutan.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="mission-card text-center p-5 h-100">
          <div class="icon-circle mb-4">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 class="fw-bold text-success mb-3">Komunitas</h5>
          <p class="text-muted">
            Memberdayakan masyarakat lokal melalui pelatihan, pekerjaan hijau, dan pengelolaan hutan berbasis komunitas.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="mission-card text-center p-5 h-100">
          <div class="icon-circle mb-4">
            <i class="bi bi-flower3"></i>
          </div>
          <h5 class="fw-bold text-success mb-3">Keanekaragaman Hayati</h5>
          <p class="text-muted">
            Melindungi spesies langka, memulihkan ekosistem rusak, serta mendukung keseimbangan alam untuk generasi mendatang.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Ornamen Estetik -->
  <div style="position:absolute;top:-80px;right:-80px;width:400px;height:400px;background:radial-gradient(circle,#a7c95740,#0000);border-radius:50%;filter:blur(90px);"></div>
  <div style="position:absolute;bottom:-100px;left:-100px;width:400px;height:400px;background:radial-gradient(circle,#5c7a3240,#0000);border-radius:50%;filter:blur(90px);"></div>
</section>

<style>
  #misi .mission-card {
    background: linear-gradient(145deg, #ffffff, #f4fff5);
    border-radius: 25px;
    box-shadow: 0 8px 20px rgba(47, 136, 86, 0.1);
    transition: all 0.4s ease;
    border: 1px solid rgba(47, 136, 86, 0.1);
    position: relative;
    overflow: hidden;
  }

  #misi .mission-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 15px 35px rgba(47, 136, 86, 0.25);
  }

  #misi .icon-circle {
    width: 90px;
    height: 90px;
    background: linear-gradient(145deg, #5C7A32, #A7C957);
    color: #fff;
    font-size: 2.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 6px 14px rgba(92, 122, 50, 0.4);
    transition: all 0.3s ease;
  }

  #misi .mission-card:hover .icon-circle {
    transform: rotate(8deg) scale(1.1);
    background: linear-gradient(145deg, #5C7A32, #A7C957);
  }

  #misi h5 {
    color: #3b6b36 !important;
    letter-spacing: 0.5px;
  }

  @media (max-width: 768px) {
    #misi h2 {
      font-size: 2rem;
    }
    #misi .mission-card {
      padding: 40px 20px;
    }
  }
</style>
<section class="project-section">
  <div class="container">
    <div class="section-header text-center">
      <h2>Proyek Unggulan Kami</h2>
      <p>Kami berkomitmen menjaga kelestarian alam Indonesia melalui aksi nyata di berbagai wilayah.</p>
    </div>

    <!-- Project 1 -->
    <div class="project-row">
      <div class="project-image" data-aos="fade-right">
        <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?auto=format&fit=crop&w=800&q=80" alt="Restorasi Hutan">
      </div>
      <div class="project-content" data-aos="fade-left">
        <span class="project-status aktif">Aktif</span>
        <h3>Restorasi Hutan Tropis</h3>
        <p>Mengembalikan fungsi ekosistem alami hutan tropis melalui penanaman pohon berkelanjutan dan konservasi keanekaragaman hayati.</p>
        <a href="#" class="btn-hijau">Lihat Detail</a>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-row reverse">
      <div class="project-image" data-aos="fade-left">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80" alt="Pelatihan Masyarakat">
      </div>
      <div class="project-content" data-aos="fade-right">
        <span class="project-status selesai">Selesai</span>
        <h3>Pelatihan Masyarakat</h3>
        <p>Pemberdayaan masyarakat lokal agar mandiri dalam mengelola sumber daya alam secara berkelanjutan dan ramah lingkungan.</p>
        <a href="#" class="btn-hijau">Lihat Detail</a>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-row">
      <div class="project-image" data-aos="fade-right">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80" alt="Pemantauan Alam">
      </div>
      <div class="project-content" data-aos="fade-left">
        <span class="project-status berlangsung">Berlangsung</span>
        <h3>Pemantauan Keanekaragaman</h3>
        <p>Pemantauan digital keanekaragaman hayati untuk menjaga keseimbangan ekosistem dan mencegah kepunahan spesies endemik.</p>
        <a href="#" class="btn-hijau">Lihat Detail</a>
      </div>
    </div>

    <!-- Project 4 -->
    <div class="project-row reverse">
      <div class="project-image" data-aos="fade-left">
        <img src="https://images.unsplash.com/photo-1473187983305-f615310e7daa?auto=format&fit=crop&w=800&q=80" alt="Konservasi Lahan">
      </div>
      <div class="project-content" data-aos="fade-right">
        <span class="project-status perencanaan">Perencanaan</span>
        <h3>Konservasi Lahan Gambut</h3>
        <p>Pelestarian lahan gambut untuk menjaga cadangan karbon alami dan mendukung iklim global yang stabil.</p>
        <a href="#" class="btn-hijau">Lihat Detail</a>
      </div>
    </div>
  </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f5f8f6;
}

/* ===== SECTION ===== */
.project-section {
  padding: 90px 0;
  position: relative;
}

.section-header h2 {
  font-weight: 700;
  font-size: 2.4rem;
  color: #204b2a;
}

.section-header p {
  color: #5b6d5d;
  max-width: 700px;
  margin: 10px auto 60px;
}

/* ===== PROJECT ROW ===== */
.project-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 90px;
  position: relative;
}

.project-row.reverse {
  flex-direction: row-reverse;
}

/* ===== GARIS DEKORASI ===== */
.project-row::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  height: 100%;
  width: 2px;
  background: linear-gradient(to bottom, #A7C957, #5C7A32);
  transform: translateX(-50%);
  opacity: 0.2;
}

/* ===== GAMBAR ===== */
.project-image {
  flex: 1;
  padding: 10px;
}

.project-image img {
  width: 100%;
  height: 320px;
  object-fit: cover;
  border-radius: 16px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.project-image:hover img {
  transform: scale(1.05);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}

/* ===== TEKS ===== */
.project-content {
  flex: 1;
  padding: 20px 50px;
}

.project-content h3 {
  font-size: 1.6rem;
  font-weight: 700;
  color: #204b2a;
  margin-bottom: 15px;
}

.project-content p {
  font-size: 0.95rem;
  color: #5f6f60;
  margin-bottom: 20px;
  line-height: 1.6;
}

/* ===== STATUS BADGE ===== */
.project-status {
  display: inline-block;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #fff;
  margin-bottom: 12px;
}

.aktif { background: #5C7A32; }
.selesai { background: #6c757d; }
.berlangsung { background: #ffc107; color: #222; }
.perencanaan { background: #0dcaf0; color: #222; }

/* ===== BUTTON ===== */
.btn-hijau {
  background: linear-gradient(90deg, #5C7A32, #A7C957);
  color: #fff;
  padding: 10px 22px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-hijau:hover {
  background: linear-gradient(90deg, #5C7A32, #A7C957);
  transform: scale(1.05);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
  .project-row, .project-row.reverse {
    flex-direction: column;
  }

  .project-row::before {
    display: none;
  }

  .project-content {
    padding: 30px 10px;
    text-align: center;
  }

  .project-image img {
    height: 250px;
  }
}
</style>


<!-- Bagian: Berita & Cerita -->
<section id="berita" style="background: linear-gradient(180deg, #f7fff8 0%, #ffffff 100%); padding: 120px 8%;">
  <div class="container">
    <!-- Judul -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold mb-3" style="color:#3b6b36; font-size:2.6rem;">News & Stories</h2>
      <p class="text-muted mx-auto" style="max-width:700px; font-size:1.05rem;">
        Temukan berita terbaru, kisah inspiratif, dan proyek hijau yang sedang kami jalankan demi keberlanjutan lingkungan dan masyarakat.
      </p>
    </div>

    <div class="row g-5 align-items-start">
      <!-- Berita Utama -->
      <div class="col-lg-7" data-aos="fade-right">
        <div class="news-main shadow-lg rounded-4 overflow-hidden">
          <img src="{{ asset('images/hijau.jpg') }}" class="img-fluid" alt="Berita Utama" style="object-fit: cover; height: 380px; width: 100%;">
          <div class="p-4 bg-white">
            <small class="text-success fw-semibold">13/02/25</small>
            <h4 class="fw-bold mt-2 mb-2 text-dark">Katingan Mentaya Project naik peringkat dari A ke AA dalam BeZero Carbon Rating</h4>
            <p class="text-muted mb-3">Upaya konservasi hutan tropis Kalimantan kembali mendapat pengakuan internasional melalui penilaian keberlanjutan global.</p>
            <a href="#" class="text-success fw-semibold text-decoration-none">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>

      <!-- Daftar Berita Samping -->
      <div class="col-lg-5" data-aos="fade-left">
        <div class="news-list d-flex flex-column gap-4">
          <div class="news-item p-3 rounded-3 shadow-sm bg-white hover-shadow">
            <small class="text-secondary">10/09/24</small>
            <h6 class="fw-bold mt-1 mb-1 text-dark">Transformasi Kesehatan Komunitas di Baun Bango Health Centre</h6>
            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 mt-2">Community</span>
          </div>

          <div class="news-item p-3 rounded-3 shadow-sm bg-white hover-shadow">
            <small class="text-secondary">23/05/24</small>
            <h6 class="fw-bold mt-1 mb-1 text-dark">Menangani Kebakaran Hutan: Proyek Konservasi Katingan Mentaya</h6>
            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 mt-2">Environment</span>
          </div>

          <div class="news-item p-3 rounded-3 shadow-sm bg-white hover-shadow">
            <small class="text-secondary">15/04/24</small>
            <h6 class="fw-bold mt-1 mb-1 text-dark">Kolaborasi Masyarakat untuk Hutan Lestari di Kalimantan Selatan</h6>
            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 mt-2">Community</span>
          </div>

          <div class="news-item p-3 rounded-3 shadow-sm bg-white hover-shadow">
            <small class="text-secondary">07/01/24</small>
            <h6 class="fw-bold mt-1 mb-1 text-dark">Program Edukasi Hijau untuk Anak Sekolah di Area Konservasi</h6>
            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 mt-2">Education</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ornamen Background -->
  <div style="position:absolute;top:-60px;right:-80px;width:350px;height:350px;background:radial-gradient(circle,#a7c95730,#0000);border-radius:50%;filter:blur(80px);"></div>
</section>

<style>
  /* Efek Hover Berita */
  .news-item {
    transition: all 0.3s ease;
  }
  .news-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 20px rgba(47, 136, 86, 0.2);
  }

  .hover-shadow:hover {
    box-shadow: 0 12px 28px rgba(47, 136, 86, 0.25) !important;
  }

  /* Gaya Utama */
  #berita .news-main {
    transition: all 0.4s ease;
    border: 1px solid rgba(47, 136, 86, 0.15);
  }
  #berita .news-main:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(47, 136, 86, 0.25);
  }

  @media (max-width: 992px) {
    #berita .news-main img {
      height: 280px;
    }
  }
</style>
<!-- ==================== RESOURCES SECTION ==================== -->
<section id="resources" class="resources-section py-5">
  <div class="container text-center">
    <h5 class="text-uppercase fw-bold text-success mb-2">Resources</h5>
    <h2 class="fw-bold mb-4 text-dark">Download Our Reports & Publications</h2>
    <p class="text-muted mb-5">Temukan berbagai laporan, publikasi, dan dokumen resmi dari PT. Hutan Rindang Banua yang dapat diunduh secara gratis.</p>

    <div class="resource-list">
      <!-- Item 1 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-text"></i>
        </div>
        <div class="resource-info">
          <h5>Laporan Tahunan 2025</h5>
          <p>Ringkasan kegiatan dan capaian perusahaan selama tahun berjalan.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>

      <!-- Item 2 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-pdf"></i>
        </div>
        <div class="resource-info">
          <h5>Dokumen Proyek Katingan Mentaya</h5>
          <p>Informasi lengkap mengenai proyek konservasi lahan gambut HRB.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>

      <!-- Item 3 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-bar-graph"></i>
        </div>
        <div class="resource-info">
          <h5>Environmental Impact Report</h5>
          <p>Analisis dampak lingkungan dan hasil penelitian terbaru dari tim HRB.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>

      <!-- Item 4 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-richtext"></i>
        </div>
        <div class="resource-info">
          <h5>Sustainability Strategy Document</h5>
          <p>Panduan strategi keberlanjutan perusahaan dalam jangka panjang.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>

      <!-- Item 5 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-spreadsheet"></i>
        </div>
        <div class="resource-info">
          <h5>Data Statistik Keanekaragaman Hayati</h5>
          <p>Kumpulan data spesies flora dan fauna yang dilindungi di area HRB.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>

      <!-- Item 6 -->
      <div class="resource-item">
        <div class="resource-icon">
          <i class="bi bi-file-earmark-image"></i>
        </div>
        <div class="resource-info">
          <h5>Gallery & Visual Report</h5>
          <p>Kumpulan dokumentasi visual dan foto kegiatan lapangan HRB.</p>
        </div>
        <a href="#" class="download-btn">Download</a>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
/* ===== RESOURCES SECTION STYLE ===== */
.resources-section {
  background: linear-gradient(135deg, #f2f8f4, #e7f3ea);
  position: relative;
  overflow: hidden;
}

.resources-section::after {
  content: "";
  position: absolute;
  background: url('{{ asset('images/hutan.jpg') }}') center/cover no-repeat;
  opacity: 0.08;
  inset: 0;
  z-index: 0;
}

.resources-section h5 {
  color: #4b8a54;
  letter-spacing: 2px;
}

.resource-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  position: relative;
  z-index: 2;
}

.resource-item {
  background: rgba(255, 255, 255, 0.9);
  border-left: 6px solid #4b8a54;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.2rem 2rem;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
}

.resource-item:hover {
  transform: translateY(-6px);
  background: #ffffff;
  box-shadow: 0 10px 20px rgba(75, 138, 84, 0.25);
}

.resource-icon {
  font-size: 2rem;
  color: #4b8a54;
  margin-right: 1rem;
}

.resource-info {
  flex: 1;
  text-align: left;
}

.resource-info h5 {
  margin: 0;
  font-weight: 600;
  color: #2d4739;
}

.resource-info p {
  margin: 0;
  color: #6c757d;
  font-size: 0.95rem;
}

.download-btn {
  background-color: #4b8a54;
  color: #fff;
  padding: 0.5rem 1.2rem;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: 500;
}

.download-btn:hover {
  background-color: #3a6d43;
  transform: scale(1.05);
}
</style>


<!-- 🌿 Hero Section -->
<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="overlay"></div>
  <div class="content">
    <h1 class="display-4 fw-bold mb-3 animate-fade">
      Preserve Nature with <span class="text-gradient">PT. Hutan Rindang Banua</span>
    </h1>
    <p class="lead mb-4 animate-fade" style="animation-delay: 0.3s;">
      Together we build a sustainable future — protecting forests, nurturing life, and creating balance for generations.
    </p>
    <a href="#explore" class="btn btn-green animate-fade" style="animation-delay: 0.6s;">
      🌿 Explore Our Projects
    </a>
  </div>
</section>

<style>
/* 🌿 Background Hero Section */
.hero-section {
  position: relative;
  height: 100vh;
  background-image: url('images/IMG_9276.jpeg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
  color: #fff;
}

/* 🌫️ Overlay Gradasi */
.hero-section .overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,0.8) 0%, rgba(0,60,0,0.7) 100%);
  z-index: 1;
}

/* ✨ Konten Tengah */
.hero-section .content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  padding: 20px;
  animation: floatIn 1.2s ease forwards;
}

.text-gradient {
  background: linear-gradient(90deg, #5C7A32, #A7C957);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* 🌱 Tombol */
.btn-green {
  background: linear-gradient(90deg, #5C7A32, #A7C957);
  color: white;
  padding: 12px 28px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s ease;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.btn-green:hover {
  background: linear-gradient(90deg, #5C7A32, #A7C957);
  transform: scale(1.05);
  box-shadow: 0 6px 14px rgba(0,0,0,0.25);
}

/* 🌬️ Animasi */
@keyframes floatIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fade {
  opacity: 0;
  animation: fadeInUp 1s ease forwards;
}
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(25px); }
  100% { opacity: 1; transform: translateY(0); }
}
</style>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
    AOS.init({ duration: 1000, once: false, offset: 150 });

    // Parallax Scroll
    gsap.utils.toArray("section").forEach((section) => {
      gsap.to(section, {
        backgroundPositionY: "50%",
        ease: "none",
        scrollTrigger: {
          trigger: section,
          scrub: true
        }
      });
    });
  </script>
<!-- Bagian Hubungi Kami -->
<section id="hubungi-kami" class="py-5" style="background: linear-gradient(135deg, #0f3d2e, #1e5631); color: #f0fff4; position: relative; overflow: hidden;">
  <!-- Aksen Daun -->
  <div style="position: absolute; top: -40px; right: -40px; opacity: 0.1;">
    <img src="https://cdn-icons-png.flaticon.com/512/765/765769.png" width="200" alt="Daun Hiasan">
  </div>
  <div style="position: absolute; bottom: -40px; left: -40px; opacity: 0.1;">
    <img src="https://cdn-icons-png.flaticon.com/512/765/765769.png" width="200" alt="Daun Hiasan">
  </div>

  <div class="container text-center" data-aos="fade-up">
    <h2 class="fw-bold mb-3" style="font-family: 'Poppins', sans-serif; font-size: 2rem; letter-spacing: 1px; color: #b0ffce;">
      Yuk, Terhubung dengan <span style="color:#fff;">PT. Hutan Rindang Banua</span>
    </h2>
    <p class="mb-5" style="max-width: 700px; margin: 0 auto; font-size: 1.1rem; color: #e6ffe6;">
      Kami percaya setiap langkah kecil dapat menjaga bumi tetap hijau.  
      Hubungi kami untuk kerja sama, pertanyaan, atau sekadar berbagi ide hijau
    </p>

    <div class="row justify-content-center text-start">
      <div class="col-md-4 mb-4">
        <div class="p-4 rounded-4 shadow-sm" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255,255,255,0.1);">
          <h5 class="fw-bold mb-2" style="color: #b0ffce;">📍 Alamat</h5>
          <p class="mb-0">Jl. Hutan Lestari No. 88, Banjarbaru, Kalimantan Selatan</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="p-4 rounded-4 shadow-sm" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255,255,255,0.1);">
          <h5 class="fw-bold mb-2" style="color: #b0ffce;">📞 Telepon</h5>
          <p class="mb-0">+62 812-3456-7890</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="p-4 rounded-4 shadow-sm" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255,255,255,0.1);">
          <h5 class="fw-bold mb-2" style="color: #b0ffce;">✉️ Email</h5>
          <p class="mb-0">info@hutanrindangbanua.co.id</p>
        </div>
      </div>
    </div>

    <!-- Media Sosial -->
    <div class="mt-5">
      <a href="#" class="mx-2 text-white" style="font-size: 1.5rem;"><i class="bi bi-instagram"></i></a>
      <a href="#" class="mx-2 text-white" style="font-size: 1.5rem;"><i class="bi bi-facebook"></i></a>
      <a href="#" class="mx-2 text-white" style="font-size: 1.5rem;"><i class="bi bi-linkedin"></i></a>
    </div>

    <p class="mt-4" style="font-size: 0.9rem; color: #d9f5de;">© 2025 PT. Hutan Rindang Banua — Menjaga Alam, Menyatu dengan Kehidupan 🌳</p>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
