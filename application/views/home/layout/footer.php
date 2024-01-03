  <!-- ======= Footer ======= -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <footer id="footer">
   <div class="container">
      <h3><?= $nama_usaha ?></h3>
      <p>Alamat : <?= $alamat ?></p>
      <p>No Telepon : </i> <?= $nomor_telepon ?></p>
      <div class="social-links">
        <a href="https://instagram.com/<?= $instagram ?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://facebook.com/<?= $facebook ?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
      </div>
      <div class="copyright">Web Programming II | <strong><span>Kelompok 4</span></strong></div>
    </div>
  </footer><!-- End Footer -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/home/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/home/select2/js/select2.full.min.js"></script>
    <script>
      $(function() {
        //Initialize Select2 Elements
        $('.select2').select2();
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        });
      });
    </script>
</body>

</html>