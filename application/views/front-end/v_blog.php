<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs" style="margin-top: 120px;">
    <div class="container">

      <ol>
        <li><a href="<?= base_url('home/#hero'); ?>">Home</a></li>
        <li>Blog</li>
      </ol>
      <h2>Blog</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">

        <div class="col-lg-8 entries">
          <?php
          // Filter published berita
          $published_berita = array_filter($berita, function ($value) {
            return $value->status_berita == "Publish";
          });

          // Define total pages and current page
          $posts_per_page = 5;
          $total_pages = ceil(count($published_berita) / $posts_per_page);
          $current_page = $this->uri->segment(3) ? $this->uri->segment(3) : 1;

          // Get the current page's berita
          $start_index = ($current_page - 1) * $posts_per_page;
          $current_page_berita = array_slice($published_berita, $start_index, $posts_per_page);
          ?>
          <?php foreach ($current_page_berita as $key => $value):
            // strip tags to avoid breaking any html
            $isi = strip_tags($value->isi_berita);
            if (strlen($isi) > 200) {

              // truncate isi
              $isiCut = substr($isi, 0, 200);
              $endPoint = strrpos($isiCut, ' ');

              //if the isi doesn't contain any space then it will cut without word basis.
              $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
            }
            ?>
            <div class="card mb-4 entry">
              <div class="entry-img">
                <img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" alt=""
                  class="img-responsive center-block d-block mx-auto">
              </div>

              <h2 class="entry-title">
                <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>"><?= $value->judul_berita; ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a><?= $value->nama; ?></a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                    <a><?= date('d-M-Y H:i', strtotime($value->date_cretated)); ?></a>
                  </li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a>12 Comments</a></li> -->
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  <?= $isi; ?>
                </p>
                <div class="read-more">
                  <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>">Read More</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <div class="blog-pagination">
            <ul class="justify-content-center" id="pagination-container"></ul>
          </div>

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

            <h3 class="sidebar-title">Kategori</h3>
            <div class="sidebar-item categories">
              <ul>
                <?php foreach ($kategori as $key => $values): ?>
                  <li><a href="#"><?= $values->nama_kategori; ?> <span>(25)</span></a></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- End sidebar categories-->
            <!-- PRINT DATA BERITA -->
            <h3 class="sidebar-title">Recent Posts</h3>
            <?php foreach ($lastst_berita as $key => $value):
              // CEK KONDISI BERITA
            
              if ($value->status_berita == "Publish"): ?>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" alt="">
                    <h4><a href="<?= base_url('home/detail/' . $value->slug_berita); ?>"><?= $value->judul_berita; ?></a>
                    </h4>
                    <time datetime="01-01-2020"><?= date('d-m-Y H:i', strtotime($value->date_cretated)); ?></time>
                  </div>
                </div><!-- End sidebar recent posts-->
              <?php endif; ?>
            <?php endforeach; ?>
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
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- Include pagination.js library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Then load pagination.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>

<script>
  $(document).ready(function () {
    $('#pagination-container').pagination({
      dataSource: <?= json_encode($published_berita); ?>,
      pageSize: <?= $posts_per_page; ?>,
      callback: function (data, pagination) {
        var html = '';
        $.each(data, function (index, item) {
          html += '<div class="card mb-4 entry">';
          html += '<div class="entry-img"><img src="<?= base_url('assets/img/berita/'); ?>' + item.gambar_berita + '" alt="" class="img-responsive center-block d-block mx-auto"></div>';
          html += '<h2 class="entry-title"><a href="<?= base_url('home/detail/'); ?>' + item.slug_berita + '">' + item.judul_berita + '</a></h2>';
          html += '<div class="entry-meta"><ul><li class="d-flex align-items-center"><i class="bi bi-clock"></i><a>' + new Date(item.date_cretated).toLocaleDateString() + '</a></li></ul></div>';
          html += '<div class="entry-content"><p>' + item.isi_berita.substring(0, 200) + '...</p><div class="read-more"><a href="<?= base_url('home/detail/'); ?>' + item.slug_berita + '">Read More</a></div></div>';
          html += '</div>';
        });
        $('.entries').html(html);
      }
    });
  });
</script>