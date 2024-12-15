<style>
  :root {
    --primary-color: #0d47a1;
    --secondary-color: #1565c0;
    --text-color: #333;
    --light-gray: #f5f5f5;
    --transition: all 0.3s ease;
  }

  body {
    font-size: 16px;
    color: var(--text-color);
    line-height: 1.6;
  }

  .breadcrumbs {
    margin-top: 80px !important;
    background: var(--light-gray);
    padding: 20px 0;
  }

  .breadcrumbs ol {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }

  .breadcrumbs ol li + li::before {
    content: '/';
    margin: 0 10px;
    color: #999;
  }

  .entry {
    border: none;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: var(--transition);
    border-radius: 8px;
    overflow: hidden;
  }

  .entry:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .entry-img {
    
    overflow: hidden;
    margin-bottom: 20px;
  }

  .entry-img img {
    transition: var(--transition);
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .entry:hover .entry-img img {
    transform: scale(1.05);
  }

  .entry-title {
    padding: 0 25px;
    margin-bottom: 20px;
  }

  .entry-title a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
  }

  .entry-title a:hover {
    color: var(--secondary-color);
  }

  .entry-content {
    padding: 0 25px 25px;
  }

  .sidebar {
    padding: 25px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .sidebar-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    color: var(--primary-color);
    padding-bottom: 10px;
    border-bottom: 2px solid var(--light-gray);
  }

  .search-form {
    position: relative;
    margin-bottom: 30px;
  }

  .search-form input {
    width: 100%;
    padding: 12px 50px 12px 15px;
    border: 1px solid #ddd;
    border-radius: 25px;
    transition: var(--transition);
  }

  .search-form input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(13, 71, 161, 0.1);
  }

  .search-form button {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    background: var(--primary-color);
    color: white;
    padding: 8px 12px;
    border-radius: 20px;
    cursor: pointer;
    transition: var(--transition);
  }

  .search-form button:hover {
    background: var(--secondary-color);
  }

  .recent-posts .post-item {
    display: flex;
    align-items: center;
    padding: 15px;
    margin-bottom: 15px;
    background: var(--light-gray);
    border-radius: 8px;
    transition: var(--transition);
  }

  .recent-posts .post-item:hover {
    transform: translateX(5px);
    background: #e3f2fd;
  }

  .recent-posts img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 4px;
    margin-right: 15px;
  }

  .recent-posts h4 {
    font-size: 16px;
    margin: 0;
  }

  .recent-posts h4 a {
    color: var(--text-color);
    text-decoration: none;
    transition: var(--transition);
  }

  .recent-posts h4 a:hover {
    color: var(--primary-color);
  }

  .service-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
  }

  .service-item {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    transition: var(--transition);
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 15px;
  }

  .service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  }

  .service-icon {
    width: 60px;
    height: 60px;
    min-width: 60px;
    margin-right: 15px;
    border-radius: 8px;
    overflow: hidden;
  }

  .service-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .service-content {
    flex: 1;
  }

  .service-title {
    color: var(--primary-color);
    font-size: 1.1em;
    font-weight: 600;
    margin: 0;
    transition: var(--transition);
  }

  .service-item:hover .service-title {
    color: var(--secondary-color);
  }

  @media (max-width: 768px) {
    body {
      font-size: 14px;
    }

    .entry-title {
      font-size: 1.5em;
    }

    .entry-content {
      font-size: 1em;
    }

    .sidebar-title {
      font-size: 1.2em;
    }

    .recent-posts h4 {
      font-size: 14px;
    }

    .entry-img img,
    .sidebar-item img {
      height: 200px;
    }

    .service-list {
      grid-template-columns: 1fr;
    }

    .service-item {
      padding: 12px;
    }

    .service-icon {
      width: 50px;
      height: 50px;
      min-width: 50px;
    }

    .service-title {
      font-size: 1em;
    }
  }
</style>

<body class="mt-5" style="margin-top: 150px !important">
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs text-dark">
      <div class="container">

        <ol>
          <li ><a class="text-dark" href="<?= base_url('home/#hero'); ?>">Home</a></li>
          <li><?= $detail->judul_layanan; ?></li>
        </ol>
        <h2><?= $detail->judul_layanan; ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="card entry entry-single">

              <div class="entry-img" style="text-align: center; ">
                <img src="<?= base_url('assets/img/layanan/') . $detail->gambar_layanan; ?>" alt="" height="400px"
                  class="img-cover center-block d-block mx-auto">
              </div>

              <h2 class="entry-title">
                <a href=""><?= $detail->judul_layanan; ?></a>
              </h2>
              <div class="entry-content">
                <p><?= $detail->isi_layanan; ?></p>
              </div>

            </div><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Daftar Layanan</h3>
              <div class="service-list">
                <?php foreach ($layanan as $key => $value):
                  if ($value->status_layanan == "Publish"): ?>
                    <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="service-item">
                      <div class="service-icon">
                        <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="<?= $value->judul_layanan; ?>">
                      </div>
                      <div class="service-content">
                        <h4 class="service-title"><?= $value->judul_layanan; ?></h4>
                      </div>
                    </a>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
</body>

</html>