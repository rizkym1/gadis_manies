<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous" />

  <!-- Bootstrap offline -->
  <link rel="stylesheet" href="css/bootstrap.css" />

  <!-- My Style -->
  <link rel="stylesheet" href="Assets/css/style.css" />

  <!-- Responsive -->
  <link rel="stylesheet" href="css/Responsive.css" />

  <!-- Fonts Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <title>Gadis Manies</title>

  <!-- Icon -->
  <link rel="icon" href="Assets/img/logoGadis.png" type="image/x-icon" />
</head>

<body>
  <!-- Hero Section -->
  <section id="hero">
    <!-- Navbar -->
    <?php include 'includes/navbar.php' ?>

    <!-- Tagline -->
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 col-sm-12 hero-tagline my-auto">
          <h1>Selamat Datang di Gadis Manies</h1>
          <p>
            UMKM di bidang kuliner, dengan produk andalan Fruit Cocktail Jelly
            Ball dan Iced Choco Kental yang berdiri dari tahun 2020. Hanya di
            hari minggu, area BMX Ciamis.
          </p>
          <button class="button-lg-secondary me-4">Pesan Sekarang</button>
          <a href="#rekomendasi">
            <img src="Assets/Right Arrow.png" alt="" />
          </a>
        </div>
      </div>
      <img
        src=""
        class="image-hero position-absolute end-0 bottom-0"
        alt="" />
      <img
        src="Assets/Accsent 1.png"
        alt=""
        class="h-100 position-absolute top-0 start-0 accsent-img" />
    </div>
  </section>
  <!-- End navbar -->

  <!-- Layanan Kami -->
  <section id="layanan">
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s">
              <h2 class="block-title">Tentang Kita</h2>
              <h3>UMKM CIAMIS...</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusm incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim venia, nostrud exercitation ullamco.
              </p>

              <p>
                Aenean commodo ligula eget dolor aenean massa. Cum sociis nat
                penatibu set magnis dis parturient montes, nascetur ridiculus
                mus. quam felisorat, ultricies nec, Aenean commodo ligula eget
                dolor penatibu set magnis is parturient montes, nascetur
                ridiculus mus. quam felisorat, ultricies nec, pellentesque eu,
                pretium quis, sem. quat massa quis enim. Donec vitae sapien ut
                libero venenatis fauci Nullam quis ante. Etiam sit amet rci
                eget eros.
              </p>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusm incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim venia, nostrud exercitation ullamco.
              </p>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div
              class="wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.1s">
              <div class="about-images">
                <img
                  class="about-main"
                  src="Assets/gadis.jpg"
                  alt="About Main Image" />
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
  </section>
  <!-- End Layanan Kami -->
  <!-- Fitur Rumah -->
  <section id="fitur" class="overflow-hidden">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col me-auto">
          <h2 class="text text-center">Produk</h2>
        </div>
      </div>
    </div>

    <div class="container mt-5 position-relative">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <div class="position-relative card-fitur">
            <img src="Assets/minum.jpg" alt="" />
            <div
              class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div
                class="w-100 fitur-detail text-center position-absolute top-50 start-50 translate-middle">
                <h5>Iced Chocho Kental</h5>
                <span>Minuman dingin yang dibuat dari coklat</span>
                <h6>IDR. 200JT</h6>
                <button>Pesan</button>
              </div>
            </div>
          </div>

          <div class="mx-3">
            <div class="position-relative card-fitur">
              <img src="Assets/garbal.jpg" alt="" />
              <div
                class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div
                  class="w-100 fitur-detail text-center position-absolute top-50 start-50 translate-middle">
                  <h5>Fruit Cocktail Jelly Ball</h5>
                  <span>Kombinasi antara jelly dengan aneka buah yang segar</span>
                  <h6>IDR. 200JT</h6>
                  <button>Pesan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End Fitur Rumah -->

  <!-- Contact -->
  <section id="kontak">
    <div class="container-fluid overlay h-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 lh-lg">
            <h3>Silahkan Kontak Kami, Kami Siap Membantu</h3>
            <div class="kontak">
              <h6 class="mt-4">Kontak</h6>

              <div class="alamat">
                <img src="Assets/Alamat Icon.png" alt="" />
                <a href="#" class="d-inline-block w-lg-50 align-middle lh-sm">Kota Ciamis Jawa Barat</a>
              </div>

              <div class="whatsapp">
                <img src="Assets/Whatsapp icon.png" alt="" />
                <a href="#">022-655422321</a>
              </div>

              <div class="email">
                <img src="Assets/Email Icon.png" alt="" />
                <a href="#">gadismanies@gmail.com</a>
              </div>

              <h6 class="mt-4">Social Media</h6>
              <a href="#"><img src="Assets/Facebook Icon.png" alt="" /> </a>
              <a href="#"><img src="Assets/Twiter Icon.png" alt="" /></a>
              <a href=""><img src="Assets/Instagram Iicon.png" alt="" /></a>
              <a href="#">Gadis Manies</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-contact w-100">
              <form>
                <div class="form-floating mb-4">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com" />
                  <label for="floatingInput" class="d-flex align-items-center">Nama Anda</label>
                </div>
                <div class="form-floating mb-4">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com" />
                  <label for="floatingInput" class="d-flex align-items-center">Ada Pertanyaan..?</label>
                </div>

                <button type="submit" class="button-kontak">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>
  <!-- end footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- My Script -->
  <script src="js/script.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>