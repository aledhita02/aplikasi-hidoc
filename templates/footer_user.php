</div>
</div>
</div>
<!-- Footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<?php
// Selain dari halaman select_chat_blank tidak menampilkan footer

if ($page != 'select_chat_blank' && $page != 'select_chat_blank_history'):
  ?>
  <div class="mt-5" id="footer">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
        <!-- Left -->
        <div class="ms-5 foot-tentang">
          <span>Tentang Kami</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="bg-light">
        <div class="container  bg-light text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">HiDoc</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto bg-success"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                Hidoc, solusi kesehatan digital yang lengkap dan terjangkau, memungkinkan Anda untuk mengakses layanan
                kesehatan berkualitas tanpa perlu meninggalkan rumah.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto bg-success"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-dark">Chat Dokter</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Artikel Kesehatan</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto bg-success"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-dark">Blog</a>
              </p>
              <p>
                <a href="#!" class="text-dark">FAQ</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Kebijakan Privasi</a>
              </p>
              <p>
                <a href="#!" class="text-dark">S&K</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto bg-success"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="fas fa-home mr-3"></i> Bekasi,Jati Asih, BKS-17426</p>
              <p><i class="fas fa-envelope mr-3"></i> HiDoc@mail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 62 888 566 777</p>
              <p><i class="fas fa-print mr-3"></i> + 62 213 567 831</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3 bg-success text-white">
        ©HIDOC - COPYRIGHT 2023

      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

  </div>
  <?php
else: ?>
  <footer class="footer bg-success text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>document.write(new Date().getFullYear())</script> © <b>HIDOC</b>.
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block">
            Design & Develop by <a href="#!" class="text-decoration-underline text-white">HI-DOC</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php endif ?>

</div>
</div>
<!-- End of .container -->
<!-- Akhir footer -->

</div>
<!-- Akhir container -->


<div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
  <div class="cd-signin-modal__container z-3 "> <!-- this is the container wrapper -->
    <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
      <li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
      <li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
    </ul>

    <div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
      <form action="process/login_proses.php" method="post" class="cd-signin-modal__form">
        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
            for="signin-email">E-mail</label>
          <input name="email"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signin-email" type="email" name="email" value="admin@gmail.com" placeholder="E-mail">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
            for="signin-password">Password</label>
          <input name="password"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signin-password" type="password" name="password" value="admin" placeholder="Password">
          <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Show</a>
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
          <label for="remember-me">Remember me</label>
        </p>

        <p class="cd-signin-modal__fieldset">
          <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
        </p>
      </form>


      <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="reset">Forgot your
          password?</a></p>
    </div> <!-- cd-signin-modal__block -->
  
    <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
      <form action="process/user/tambahUser_proses.php" method="post" class="cd-signin-modal__form"
        enctype="multipart/form-data">
        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace"
            for="signup-username">Nama</label>
          <input name="nama"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-username" type="text" placeholder="Username">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
            for="signup-email">E-mail</label>
          <input name="email"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-email" type="email" placeholder="E-mail">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--telephone cd-signin-modal__label--image-replace"
            for="signup-phone">Telepon</label>
          <input name="telepon"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-phone" type="tel" placeholder="Telepon">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>
        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace"
            for="signup-username">Tanggal Lahir</label>
          <input type="date" name="date"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-date"><span class="cd-signin-modal__error">Error message here!</span>
        </p>


        <p class="cd-signin-modal__fieldset">
          <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label><br />
        <div class="form-check-inline">
          <input type="radio" id="signup-jk" value="Laki-Laki" name="jk" checked>
          <label class="form-check-label" for="exampleRadios1">
            Laki - Laki
          </label>

        </div>
        <div class="form-check-inline">
          <input class="form-check-input" type="radio" id="signup-jk" value="Perempuan" name="jk">
          <label class="form-check-label" for="exampleRadios2">
            Perempuan
          </label>
        </div>

        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
            for="signup-password">Password</label>
          <input name="password"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-password" type="password" placeholder="Password">
          <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Show</a>
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label" for="signup-upload">Masukan Photo</label>
          <input name="foto"
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="signup-upload" type="file" placeholder="Telepon" required="">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
          <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
        </p>

        <p class="cd-signin-modal__fieldset">
          <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
            type="submit" value="Create account">
        </p>
      </form>
    </div> <!-- cd-signin-modal__block -->

    <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
      <p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link
        to create a new password.</p>

      <form class="cd-signin-modal__form">
        <p class="cd-signin-modal__fieldset">
          <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
            for="reset-email">E-mail</label>
          <input
            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
            id="reset-email" type="email" placeholder="E-mail">
          <span class="cd-signin-modal__error">Error message here!</span>
        </p>

        <p class="cd-signin-modal__fieldset">
          <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
            type="submit" value="Reset password">
        </p>
      </form>

      <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to
          log-in</a></p>
    </div> <!-- cd-signin-modal__block -->
    <a href="#0" class="cd-signin-modal__close js-close">Close</a>
  </div> <!-- cd-signin-modal__container -->
</div> <!-- cd-signin-modal -->



<script src="jslogin/placeholders.min.js"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="jslogin/main.js"></script> <!-- Resource JavaScript -->

<script src="myjs.js"></script>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- CDN Sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- JAVASCRIPT -->
<script src="plugin/dist/assets/libs/jquery/jquery.min.js"></script>
<script src="plugin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugin/dist/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="plugin/dist/assets/libs/simplebar/simplebar.min.js"></script>
<script src="plugin/dist/assets/libs/node-waves/waves.min.js"></script>
<script src="plugin/dist/assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="plugin/dist/assets/libs/pace-js/pace.min.js"></script>


<!-- apexcharts -->
<script src="plugin/dist/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="plugin/dist/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugin/dist/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<script src="plugin/dist/assets/js/pages/allchart.js"></script>
<!-- dashboard init -->
<script src="plugin/dist/assets/js/pages/dashboard.init.js"></script>

<script src="plugin/dist/assets/js/app.js"></script>

<!-- Required datatable js -->
<script src="plugin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="plugin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="plugin/dist/assets/libs/jszip/jszip.min.js"></script>
<script src="plugin/dist/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="plugin/dist/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="plugin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugin/dist/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="plugin/dist/assets/js/pages/datatables.init.js"></script>


<!-- Kode JavaScript untuk menampilkan peringatan bahwa user belum login -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menambahkan event listener pada tag <a> dengan kelas "page-scroll"
    document.querySelector('.page-scroll').addEventListener('click', function (event) {
      // Periksa apakah pengguna sudah login
      <?php if (!isset($_SESSION['role'])): ?>
        event.preventDefault(); // Mencegah link dari navigasi

        // Menggunakan SweetAlert untuk menampilkan pesan peringatan
        Swal.fire({
          title: 'Silahkan login terlebih dahulu!',
          icon: 'warning',
          confirmButtonText: 'OK'
        });
      <?php endif; ?>
    });
  });
</script>

</body>

</html>