<main id="main">

    <!-- ======= Breadcrumbs ======= -->
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kritik & Saran</h1>
                </div>
            </div>
        </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
            <?php if (validation_errors()) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php
            } ?>
            <div class="col-lg-12">
                <h3>Kritik & Saran</h3>
                <p>Kritik dan Saran yang anda berikan akan sangat berguna untuk peningkatan kualitas dari usaha kami.</p>
                <form action="<?= base_url("saran/add") ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama_pelanggan" class="form-control <?php echo form_error('nama_pelanggan') ? 'is-invalid' : '' ?>" id="nama_pelanggan" placeholder="Nama Anda" required>
                            <div class="validate">
                                <?php echo form_error('nama_pelanggan') ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="Email" required>
                            <div class="validate">
                                <?php echo form_error('email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control  <?php echo form_error('saran') ? 'is-invalid' : '' ?>" name="saran" rows="8" placeholder="Kritik & Saran" required></textarea>
                        <div class="validate">
                            <?php echo form_error('saran') ?>
                        </div>
                    </div>
                    <br>
                    <div class="text-center"><button class="btn btn-primary" type="submit">Kirim Kritik & Saran</button></div>
                </form>
            </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->