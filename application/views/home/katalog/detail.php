<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                </div>
            </div>
        </div>
  <!-- ======= End Breadcrumbs ======= -->

  <!-- ======= Detail Menu Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">


      <div class="section-title">
        <?php
        foreach ($menu as $m) {
        ?>
          <h2>
            <?= $m['nama_menu'] ?>
          </h2>
          <p>Jenis : <?= $m['detail_menu'] ?></p>
          <p>Harga : Rp <?= $m['harga'] ?></p>
        <?php
        }
        ?>
      </div>

      <div class="row gallery-container">
        <?php
        foreach ($gambar_menu as $gm) {
        ?>
          <div class="col-lg-4 col-md-6 gallery-item filter-home">
            <div class="gallery-wrap">
              <img style="object-fit: cover;height:350px;width:100%" src="<?php echo base_url('assets/img/' . $gm['gambar']) ?>" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4><?= $m['nama_menu'] ?></h4>
                <p><?= $m['detail_menu'] ?></p>
                <div class="gallery-links">
                  <a href="<?php echo base_url('assets/img/' . $gm['gambar']) ?>" class="glightbox" title="<?= $m['detail_menu'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End Detail Menu Section -->





</main><!-- End #main -->