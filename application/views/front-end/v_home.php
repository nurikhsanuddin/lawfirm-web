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
  </style>
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer sustainable and high-quality solutions to support your agricultural and
            plantation business growth</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Empowering Agriculture with Quality and Sustainability.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content card">
              <h3>PT ANEKA PRODUK INDONESIA RAYA</h3>
              <p>
                <?= $setting->profile; ?>
              </p>
              <div class="text-center text-lg-start">
                <!-- <a href="services" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

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

    </section><!-- End Values Section -->

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

        <div class="container" data-aos="fade-up">

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

        </div>

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Visi, Misi, & Sejarah Perusahaan</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Sejarah</a>
              </li>
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

        </div><!-- End Feature Tabs -->

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
          <h2>Services</h2>
          <p>Layanan Yang Kami Tawarkan</p>
        </header>

        <div class="row gy-4">
          <?php foreach ($layanan as $key => $value):

            if ($value->status_layanan == "Publish"): ?>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                  <div class="post-img"> <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt=""
                      class="img-fluid rounded " style="height: 100px; width:100px;">
                  </div>
                  <h3><?= $value->judul_layanan; ?></h3>
                  <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="read-more"><span>Read
                      More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
  
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

      
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section> -->

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
    <!-- <section id="testimonials" class="testimonials">

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
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <?= $isi; ?>
                    </p>
                    <div class="profile mt-auto">
                      <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="testimonial-img" alt="">
                      <h3><?= $value->judul_portfolio; ?></h3>
                      <h4><?= $value->nama_layanan; ?></h4>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
    

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->

    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>
        <div class="row gy-4 d-flex justify-content-center">
          <?php foreach ($staff as $key => $value):
            if ($value->publish == "Publish"): ?>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?= $value->nama_staff; ?></h4>
                    <span><?= $value->nama_kategori; ?></span>
                    <p><?= $value->no_telepon; ?></p>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

      </div>

    </section> -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Our Clients</h2> -->
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

    </section>

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
                  <h3>Call Us</h3>
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
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <!-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div> -->

        </div>

      </div>

    </section><!-- End Contact Section -->

    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=6287872466090" class="whatsapp-button" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 128 128">
        <path fill="#fff"
          d="M64,123c32.5,0,59-26.5,59-59c0-15.8-6.1-30.6-17.3-41.7C94.6,11.1,79.8,5,64,5C31.5,5,5,31.4,5,64 c0,10.4,2.7,20.5,7.9,29.5l-5.6,20.6c-1.2,4.4,2.8,8.5,7.3,7.3l21.3-5.6C44.4,120.5,54.1,123,64,123L64,123z">
        </path>
        <path fill="#5bf979"
          d="M64,111c-7.8,0-15.6-2-22.5-5.7c-1.8-1-3.8-1.5-5.7-1.5c-1,0-2,0.1-3,0.4l-11.2,2.9l2.9-10.5 c0.8-3.1,0.4-6.4-1.2-9.2C19.1,80.3,17,72.2,17,64C17,38,38.1,17,64,17c12.6,0,24.4,4.9,33.3,13.8C106.1,39.6,111,51.4,111,64 C111,89.9,89.9,111,64,111L64,111z">
        </path>
        <path fill="#444b54"
          d="M107.9,20.2C96.2,8.5,80.6,2,64,2C29.8,2,2,29.8,2,64c0,10.5,2.6,20.8,7.7,29.9l-5.3,19.4 c-0.9,3.1,0,6.3,2.3,8.6c2.3,2.3,5.5,3.2,8.6,2.4l20.2-5.3c8.8,4.6,18.6,7,28.6,7c34.2,0,62-27.8,62-62 C126,47.5,119.6,31.9,107.9,20.2z M64,120c-9.3,0-18.6-2.4-26.8-6.8c-0.4-0.2-0.9-0.4-1.4-0.4c-0.3,0-0.5,0-0.8,0.1l-21.3,5.6 c-1.5,0.4-2.5-0.4-2.9-0.8c-0.4-0.4-1.2-1.4-0.8-2.9l5.6-20.6c0.2-0.8,0.1-1.6-0.3-2.3C10.5,83.5,8,73.8,8,64C8,33.1,33.1,8,64,8 c15,0,29.1,5.8,39.6,16.4C114.2,35,120.1,49.1,120,64C120,94.9,94.9,120,64,120z">
        </path>
        <g>
          <path fill="#006475"
            d="M92.9,85.1c-1.2,3.4-7.2,6.8-10,7c-2.7,0.2-5.2,1.2-17.7-3.7c-15-5.9-24.5-21.3-25.2-22.3c-0.7-1-6-8-6-15.3 c0-7.3,3.8-10.8,5.2-12.3c1.4-1.5,2.9-1.8,3.9-1.8c1,0,2,0,2.8,0c1.1,0,2.2,0.1,3.3,2.5c1.3,2.9,4.2,10.2,4.5,10.9 c0.4,0.7,0.6,1.6,0.1,2.6c-0.5,1-0.7,1.6-1.5,2.5c-0.7,0.9-1.6,1.9-2.2,2.6c-0.7,0.7-1.5,1.5-0.6,3c0.9,1.5,3.8,6.3,8.2,10.2 c5.6,5,10.4,6.6,11.9,7.3c1.5,0.7,2.3,0.6,3.2-0.4c0.9-1,3.7-4.3,4.7-5.8c1-1.5,2-1.2,3.3-0.7c1.4,0.5,8.6,4.1,10.1,4.8 c1.5,0.7,2.5,1.1,2.8,1.7C94.1,78.7,94.1,81.6,92.9,85.1z">
          </path>
        </g>
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