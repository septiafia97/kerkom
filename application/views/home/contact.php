    <!-- ======= Breadcrumbs ======= -->
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kontak</h1>
                </div>
            </div>
        </div>
    <!-- End Breadcrumbs -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kontak Kami</h5>
                    <h1 class="mb-5">Informasi Kontak Kami</h1>
                </div>
            </div>
        </div>

        <section id="about" class="about">
            <div class="container">
             <div class="row content">
                <div class="col-lg-6">
                <?php
                if ($maps_link !== "") {
                ?>
                    <iframe src="<?= $maps_link ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <?php
                } else {
                ?>
                    <h3><?= $nama_usaha ?> belum menambahkan google maps</h3>
                <?php
                }
                ?>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>
                        <li>Alamat : <?= $alamat ?></li>
                        <li>Email : <?= $email ?></li>
                        <li>No Telepon : <?= $nomor_telepon ?></li>
                        <li>Instagram : <a href="https://instagram.com/<?= $instagram ?>">@<?= $instagram ?></a></li>
                        <li>Facebook : <a href="https://facebook.com/<?= $instagram ?>"><?= $facebook ?></a></li>
                    </ul>
                </div>
             </div>
            </div>
        </section><!-- End My & Family Section -->
        
        