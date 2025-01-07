<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ...existing code... -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-size: 16px;
    }

    h1 {
      font-size: 2rem;
    }

    h2 {
      font-size: 1.5rem;
    }

    p {
      font-size: 1rem;
    }

    .btn-get-started {
      font-size: 1rem;
    }

    .info-box h3,
    .info-box p {
      font-size: 1rem;
    }

    .service-box h3,
    .service-box p {
      font-size: 1rem;
    }

    .feature-box h3 {
      font-size: 1rem;
    }

    .card p {
      font-size: 1rem;
    }

    .transform-scale {
      transition: transform 0.3s ease;
    }

    .transform-scale:hover {
      transform: scale(1.02);
    }

    .transform-translate-50 {
      transform: translate(50%, -50%);
    }

    .transform-translate-negative-25 {
      transform: translate(-25%, -25%);
    }

    .opacity-10 {
      opacity: 0.1;
    }


    .hero-gradient {
      background: linear-gradient(135deg, rgba(var(--primary-rgb), 0.1) 0%, rgba(var(--primary-rgb), 0.02) 100%);
    }

    .floating-image {
      animation: float 6s ease-in-out infinite;
    }

    .blob-shape {
      position: absolute;
      top: -20%;
      right: -20%;
      width: 80%;
      height: 80%;
      background: rgba(var(--primary-rgb), 0.1);
      border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
      z-index: -1;
      animation: blob 10s linear infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    @keyframes blob {
      0% {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
      }

      50% {
        border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
      }

      100% {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
      }
    }
  </style>
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero position-relative overflow-hidden">
    <div class="hero-gradient position-absolute w-100 h-100">
      <div class="container py-5">
        <div class="row min-vh-100 align-items-center">
          <div class="col-lg-6 d-flex flex-column justify-content-center position-relative z-2">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">
              Muhammad Taufiq & Partners Law Firm
            </h1>
            <h2 class="h3 text-dark mb-4" data-aos="fade-up" data-aos-delay="200">
              Providing extraordinary legal solutions and tailored advice to help you navigate complex challenges with
              confidence and achieve the best outcomes. </h2>
            <div data-aos="fade-up" data-aos-delay="400">
              <div class="text-lg-start">
                <a href="#about" class="btn btn-lg rounded-pill d-inline-flex align-items-center gap-2" style="
                    background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%);
                         color: white;
                    padding: 1rem 2.5rem;
                    font-weight: 500;
                    border: none;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(13, 202, 240, 0.2);
                    border-radius: 1.5rem !important;
                  "
                  onmouseover="this.style.transform='translateY(-3px) scale(1.02)';this.style.boxShadow='0 8px 25px rgba(13, 202, 240, 0.3)'"
                  onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='0 4px 15px rgba(13, 202, 240, 0.2)'">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right" style="transition: transform 0.3s ease;"
                    onmouseover="this.style.transform='translateX(5px)'"
                    onmouseout="this.style.transform='translateX(0)'"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img position-relative z-2" data-aos="zoom-out" data-aos-delay="200">
            <div class="image-wrapper position-relative">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/hero-img.png" class="img-fluid floating-image"
                alt="Hero Image" style="width: 100%; max-width: none;">
              <div class="blob-shape"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about position-relative py-5">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center gy-4">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content p-4 p-lg-5 bg-white rounded-4 shadow-lg position-relative overflow-hidden">
              <!-- Modern decorative element -->
              <div
                class="position-absolute top-0 end-0 w-25 h-25 bg-primary opacity-10 rounded-circle transform-translate-50">
              </div>

              <span class="badge bg-primary mb-3 px-3 py-2 ">About Us</span>
              <h2 class="display-6 fw-bold mb-4">TENTANG MT&P LAW FIRM </h2>
              <div class="post-img mb-4 pe-4">
                <p class="lead text-muted">
                  <?= $setting->profile; ?>
                </p>
              </div>
              <div class="mt-4">
                <a href="#services" class="btn btn-primary btn-lg rounded-pill px-4">
                  Explore Our Services
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="position-relative">
              <!-- Main image with modern styling -->
              <div class="rounded-4 overflow-hidden shadow-lg">
                <img src="<?= base_url(); ?>vendor/front-end/assets/img/about.jpg"
                  class="img-fluid w-100 transform-scale" alt="About PT Aneka Produk Indonesia Raya"
                  style="aspect-ratio: 4/3; object-fit: cover;">
              </div>
              <!-- Decorative background element -->
              <div
                class="position-absolute top-0 start-0 w-75 h-75 bg-primary opacity-10 rounded-4 transform-translate-negative-25"
                style="z-index: -1;"></div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <!-- <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <hr>
          <p>Keunggulan Kami</p>
        </header>

        <div class="row">


          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Menyediakan Produk Berkualitas.</h3>
              <p>Kami menyediakan produk pertanian dan perkebunan berkualitas tinggi, diproduksi dari ladang terbaik
                dengan proses yang terjamin untuk memenuhi standar pasar</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Mendukung Keberlanjutan.</h3>
              <p>Kami berkomitmen untuk mengembangkan praktik pertanian yang ramah lingkungan dan berkelanjutan,
                mengutamakan keseimbangan antara pemenuhan kebutuhan pasar dan pelestarian alam.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Kemitraan dan Pengembangan Komunitas.</h3>
              <p>Kami menjalin kemitraan dengan petani lokal dan berinvestasi dalam pengembangan komunitas melalui
                pelatihan, akses teknologi modern, dan peluang pasar yang lebih luas.</p>
            </div>
          </div>


        </div>

    </section> -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->client()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->staff()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <!-- <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Our Features</h2>
            <hr>
            <p>Empowering agriculture with quality and sustainability</p>
          </header>

          <div class="row">

            <div class="col-lg-6">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/features.png" class="img-fluid"
                alt="Agriculture Features">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>High-Quality Products</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Environmental Sustainability</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Innovative Farming Practices</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Community Empowerment</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Market-Driven Solutions</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Trusted by Farmers</h3>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div> -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Visi, Misi, & Sejarah MT&P Law Firm</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link " data-bs-toggle="pill" href="#tab3">Motto</a>
              </li>
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Sejarah</a>
              </li>
              <!-- <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
              </li> -->
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="card card-info tab-pane fade show active" id="tab1">
                <p class=""><?= $setting->visi; ?></p>
              </div><!-- End Tab 1 Content -->

              <div class="card card-success tab-pane fade show" id="tab2">
                <p class=""><?= $setting->misi; ?></p>
              </div><!-- End Tab 2 Content -->

              <div class="card card-warning tab-pane fade show" id="tab3">
                <p class=""><?= $setting->sejarah; ?></p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div>

        <!-- Feature Icons -->
        <!-- <div class="row feature-icons" data-aos="fade-up">
          <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div> -->
        <!-- End Feature Icons -->

      </div>

    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>KENAPA HARUS MT&P LAW FIRM</p>
          <span class="text-muted mt-2">Karena MT&P Law Firm mampu memberikan berbagai Macam Pelayanan Serta Menyediakan
            Jasa Hukum Profesional Berkualitas Tinggi serta di dukung dengan TIM Hukum yang berintegritas tinggi dan
            Kantor yang mewah yang terletak di Pusat Kota Solo</h2>
        </header>

        <div class="row gy-4">
          <?php foreach ($layanan as $value): ?>
            <?php if ($value->status_layanan == "Publish"): ?>
              <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                  <div class="post-img mb-4">
                    <img src="<?= base_url('assets/img/layanan/' . $value->gambar_layanan); ?>"
                      alt="<?= $value->judul_layanan; ?>" class="service-image">
                  </div>
                  <h3><?= $value->judul_layanan; ?></h3>
                  <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="read-more">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="services" class="services section-bg py-5">
      <div class="container" data-aos="fade-up">
        <header class="section-header text-center mb-5">
          <h2 class="text-primary fw-bold mb-3">LAYANAN</h2>
          <p class="lead "> Layanan HUKUM</p>
          <span class="text-muted mt-2">Cakupan keahlian hukum dan pengalaman yang dimiliki para advokat MT&P Law Firm
            meliputi bidang-bidang sebagai berikut</p>
        </header>

        <div class="row g-4">
          <!-- Litigasi Pidana Umum -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-shield-check text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">LITIGASI PIDANA UMUM</h3>
              </div>
              <p class="text-muted mb-0">Kami memberikan layanan jasa hukum berupa pendampingan pada tahap pemeriksaan
                dan penyidikan, dan membela klien di pengadilan.</p>
            </div>
          </div>

          <!-- Litigasi Tindak Pidana Khusus -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-briefcase text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">LITIGASI TINDAK PIDANA KHUSUS</h3>
              </div>
              <p class="text-muted mb-0">Penanganan kasus-kasus pidana khusus termasuk korupsi dengan tim ahli yang
                berpengalaman.</p>
            </div>
          </div>

          <!-- Litigasi Perdata -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-file-text text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">LITIGASI PERDATA</h3>
              </div>
              <p class="text-muted mb-0">Menangani berbagai kasus perdata dengan pendekatan yang komprehensif dan solusi
                yang efektif.</p>
            </div>
          </div>

          <!-- Litigasi Komersial -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-building text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">LITIGASI KOMERSIAL</h3>
              </div>
              <p class="text-muted mb-0">Spesialisasi dalam penyelesaian sengketa bisnis dan komersial untuk melindungi
                kepentingan klien.</p>
            </div>
          </div>

          <!-- ADR -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-people text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">ALTERNATIF PENYELESAIAN SENGKETA (ADR)</h3>
              </div>
              <p class="text-muted mb-0">Menawarkan solusi penyelesaian sengketa alternatif melalui mediasi dan
                arbitrase.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card h-100 p-4 bg-white rounded-4 shadow-sm hover-shadow transition">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary-subtle rounded-circle p-3 me-3">
                  <i class="bi bi-people text-primary fs-4"></i>
                </div>
                <h3 class="h5 mb-0 fw-bold">Hak Kekayaan Intelektual (PATEN, MEREK, HAK CIPTA)</h3>
              </div>
              <p class="text-muted mb-0">Hak Kekayaan Intelektual (HAKI) merupakan hak bagi seseorang atau kelompok atas
                suatu karya dan inovasi yang mereka ciptakan. Adanya hak ini memberikan payung hukum bagi sebuah
                kreativitas intelektual agar terhindar dari kejahatan seperti plagiarisme, eksploitasi, bahkan
                pemanfaatan karya dari pencurian sebuah ide atau gagasan orang lain.
                Kami hadir untuk melindungi bentuk-bentuk kekayaan intelektual agar terhindar dari adanya pelanggaran
                hak cipta, menyejahterakan pemilik karya, dan lain sebagainya, mulai dari gagasan karya, pendaftaran hak
                cipta, merek, hingga sengketa mengenai Hak Kekayaan Intelektual.
                .</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App Development</li>
              <li data-filter=".filter-card">Web Design</li>
              <li data-filter=".filter-web">Web Development</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ($portfolio as $key => $value):

            if ($value->nama_layanan == " App Development" && $value->status_portfolio == "Publish"): ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?= $value->judul_portfolio; ?></h4>
                    <p><?= $value->nama_layanan; ?></p>
                    <div class="portfolio-links">
                      <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                      <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

          <?php foreach ($portfolio as $key => $value):

            if ($value->nama_layanan == " Web Development" && $value->status_portfolio == "Publish"): ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?= $value->judul_portfolio; ?></h4>
                    <p><?= $value->nama_layanan; ?></p>
                    <div class="portfolio-links">
                      <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                      <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

          <?php foreach ($portfolio as $key => $value):

            if ($value->nama_layanan == "Web Design" && $value->status_portfolio == "Publish"): ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?= $value->judul_portfolio; ?></h4>
                    <p><?= $value->nama_layanan; ?></p>
                    <div class="portfolio-links">
                      <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                      <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

      </div>

    </section> -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper ">
            <?php foreach ($portfolio as $key => $value):
              // strip tags to avoid breaking any html
              $isi = strip_tags($value->testimoni);
              if (strlen($isi) > 200) {

                // truncate isi
                $isiCut = substr($isi, 0, 200);
                $endPoint = strrpos($isiCut, ' ');

                //if the isi doesn't contain any space then it will cut without word basis.
                $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
              }
              if ($value->status_portfolio == "Publish"): ?>
                <div class="swiper-slide">
                  <div class="card testimonial-item ">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <?= $isi; ?>
                    </p>
                    <div class="profile mt-auto">
                      <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>"
                        class="testimonial-img" alt="">
                      <h3><?= $value->judul_portfolio; ?></h3>
                      <!-- <h4><?= $value->nama_layanan; ?></h4> -->
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>OUR LAWYERS</p>
          <span>MT&P Law Firm yang didirikan oleh Dr. Muhammad Taufiq, S.H., M.H., dan bersinergi bersama para advokat
            profesional yang berkompeten dibidangnya, mampu memberikan solusi atas masalah dalam bidang hukum, serta
            memberikan pelayanan bantuan dan jasa hukum kepada masyarakat pencari keadilan.</span>
        </header>
        <div class="row gy-4 d-flex justify-content-center">
          <?php foreach ($staff as $key => $value):
            if ($value->publish == "Publish"): ?>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="">
                    <!-- <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div> -->
                  </div>
                  <div class="member-info">
                    <h4><?= $value->nama_staff; ?></h4>
                    <span><?= $value->nama_kategori; ?></span>
                    <!-- <p><?= $value->no_telepon; ?></p>OUR LAWYERS -->
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

      </div>

    </section>

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
  
          <p>Our Clients</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($client as $key => $value):
              if ($value->publish == "Publish"): ?>
                <div class="swiper-slide">
                  <img src="<?= base_url('assets/img/client/') . $value->gambar_client; ?>" class="img-fluid" alt="">
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section> -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">
          <?php foreach ($berita as $key => $value):
            // strip tags to avoid breaking any html
            $isi = strip_tags($value->isi_berita);
            if (strlen($isi) > 200) {

              // truncate isi
              $isiCut = substr($isi, 0, 200);
              $endPoint = strrpos($isiCut, ' ');

              //if the isi doesn't contain any space then it will cut without word basis.
              $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
            }
            if ($value->status_berita == "Publish"): ?>
              <div class="col-lg-4 mb-2">
                <div class="post-box">
                  <div class="post-img"><img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" class="img-fluid" alt=""></div>
                  <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                  <h3 class="post-title"><?= $value->judul_berita; ?></h3>
                  <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

      </div>

    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>alamat Kami</p>
                  <p><?= $setting->alamat; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Contact Us</h3>
                  <p><?= $setting->no_telepon; ?><br><?= $setting->no_telepon; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?= $setting->email; ?><br><?= $setting->email; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-instagram"></i>
                  <h3>Instagram</h3>
                  <p>mtplawfirm</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Senin - Sabtu<br>09:00 - 16:00</p>
                </div>
              </div>
            </div>

          </div>
          <header class="section-header">

            <p>Hubungi Kami</p>
          </header>
          <?php
          $this->load->view('front-end/v_contact');
          ?>

        </div>

      </div>

    </section><!-- End Contact Section -->

    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=628122961011" class="whatsapp-button" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 258">
        <defs>
          <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
            <stop offset="0%" stop-color="#1faf38" />
            <stop offset="100%" stop-color="#59dfaf" />
          </linearGradient>
          <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
            <stop offset="0%" stop-color="#f9f9f9" />
            <stop offset="100%" stop-color="#fff" />
          </linearGradient>
        </defs>
        <path fill="url(#logosWhatsappIcon0)"
          d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
        <path fill="url(#logosWhatsappIcon1)"
          d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
        <path fill="#fff"
          d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
      </svg>
    </a>

    <!-- CSS untuk tombol WhatsApp -->
    <style>
      .whatsapp-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
        background-color: #25d366;
        color: #fff;
        border-radius: 50%;
        padding: 15px;
        font-size: 24px;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s;
      }

      .whatsapp-button:hover {
        background-color: #128c7e;
      }
    </style>
  </main><!-- End #main -->
</body>

</html>