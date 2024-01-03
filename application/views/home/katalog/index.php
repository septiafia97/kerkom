<main id="main">
  <!-- ======= Breadcrumbs ======= -->
              <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                </div>
            </div>
        </div>
  <!-- ======= End Breadcrumbs ======= -->

  <!-- ======= Event List Section ======= -->
  <section id="event-list" class="event-list">
    <div class="container">

      <div class="row">
        <?php
        foreach ($menu as $m) {
          $id_menu = $m['id_menu'];
        ?>
          <div class="col-md-3 d-flex align-items-stretch">
          <a href="<?php base_url() ?>katalog/detail/<?= $m['id_menu'] ?>">
            <div class="card">
              <div class="card-img">
                <?php
                $getGambar = $this->db->query("SELECT * FROM gambar_menu WHERE id_menu = $id_menu LIMIT 1");
                foreach ($getGambar->result_array() as $gambarm) {
                  $gambar = $gambarm['gambar'];
                }
                ?>
                <img style="object-fit: cover;height:400px;width:100%" src="<?php echo base_url('assets/img/' . $gambar) ?>" />
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $m['nama_menu'] ?></h5>
                <p class="fst-italic text-center"><?= $m['detail_menu'] ?></p>
                <p class="card-text text-center">Rp <?= $m['harga'] ?></p>
              </div>
            </div>
              </a>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End Event List Section -->

</main><!-- End #main -->