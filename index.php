<?php
include "koneksi.php"; 
// mengambil semua gambar database kedalam gallery
$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
$hasil2 = $conn->query($sql2);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UAS PBW</title>
    <link rel="icon" href="img/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-danger sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Jurnal harian saya</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="text-dark navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Schedule">Schedule</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /nav -->

    <!-- hero -->
    <section id="hero" class="p-5 bg-danger-subtle">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-5">
            <!-- Setting the width to a specific pixel size -->
            <img
              src="./img/3.jpeg"
              class="img-fluid"
              style="width: 10000px"
              alt="Hero Image"
            />
          </div>
          <div class="col-md-6">
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday
            </h1>
            <h4 class="lead display-6">Mencatat semua kegiatan sehari-hari</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- /hero -->

    <!-- article -->
   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- /article -->

 <!-- Profil start -->
 <section id="profil" class="p-5 bg-primary-subtle">
      <div class="text-center fw-bold display-4 pb-3 p-5">
        <h2><b>Profil Mahasiswa</b></h2>
      </div>
      <div
        class="container row row-cols-1 row-cols-md-1 g-4 justify-content-center"
      >
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-md-6 d-flex justify-content-center text-center">
            <img
              src="./img/luly.jpg"
              class="img-fluid"
              style="
                height: 350px;
                width: 300px;
                border-radius: 50%;
                object-fit: cover;
              "
              alt="Hero Image"
            />
          </div>
          <div
            class="card text-bg-light mb-4 text-center"
            style="max-width: 18rem"
          >
            <div class="card-body">
              <h5 class="card-title">Lana Angger Ramadhan</h5>
              <br />
              <h6 class="card-text"><b>NIM</b>: A11.2023.14973</h6>
              <h6 class="card-text">
                <b>Program Studi</b>: Teknik Informatika
              </h6>
              <h6 class="card-text"><b>Email</b>: lanaangger01@gmail.com</h6>
              <h6 class="card-text"><b>Telpon</b>: 085694607403</h6>
              <h6 class="card-text"><b>Alamat</b>: JL.Sadewa I Semarang</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Profil end -->

<!--schedule start -->
 <!-- Schedule start -->
 <section id="Schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah & Mahasiswa</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <!-- Card 1 -->
          <div class="col">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem">
              <div class="card-header">Senin</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col">
            <div class="card text-bg-success mb-3" style="max-width: 18rem">
              <div class="card-header">Selasa</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem">
              <div class="card-header text-bg-danger">Rabu</div>
              <div class="card-body">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col">
            <div class="card text-bg-warning mb-3" style="max-width: 18rem">
              <div class="card-header">Kamis</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="col">
            <div class="card text-bg-info mb-3" style="max-width: 18rem">
              <div class="card-header">jumat</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="col">
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem">
              <div class="card-header">Sabtu</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>09:00-10:30</b></h7>
                <h6 class="card-text">Basis Data</h6>
                <h6 class="card-text">Ruang H.3.4</h6>
                <br />
                <h7 class="card-title"><b>13:00-15:30</b></h7>
                <h6 class="card-text">Dasar Pemrograman</h6>
                <h6 class="card-text">Ruang H.3.1</h6>
              </div>
            </div>
          </div>

          <!-- Card 7 -->
          <div class="col">
            <div class="card text-bg-dark mb-3" style="max-width: 18rem">
              <div class="card-header">Minggu</div>
              <div class="card-body text-bg-light">
                <h7 class="card-title"><b>Tidak ada jadwal</b></h7>
                <h6 class="card-text"></h6>
                <h6 class="card-text"></h6>
                <br />
                <h7 class="card-title"><b></b></h7>
                <h6 class="card-text"></h6>
                <h6 class="card-text"></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule end -->
<!--schedule end  -->
    <!-- gallery -->
    <section id="gallery" class="text-center p-5 bg-primary-subtle">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide mx-auto" style="max-width: 700px; max-height: 500px;">
            <div class="carousel-inner">
                <?php
                if ($hasil2->num_rows > 0) {
                    $active = true;
                    while ($row = $hasil2->fetch_assoc()) {
                        if (file_exists('img/' . $row["gambar"])) {
                ?>
                            <div class="carousel-item <?= $active ? 'active' : '' ?>">
                                <img src="img/<?= $row["gambar"] ?>" class="d-block w-100" style="height: 500px;" alt="Image <?= $row["id"] ?>">
                            </div>
                <?php
                            $active = false;
                        }
                    }
                } else {
                    echo "<div class='carousel-item active'><p>No images available.</p></div>";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
    <!-- /gallery -->

    <!-- footer -->
    <footer class="text-center p-5">
      <div>
        <a
          href="https://www.instagram.com"
          target="_blank"
          class="h2 d-inline-flex p-2 text-dark"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-instagram"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
            />
          </svg>
        </a>
        <a
          href="https://www.instagram.com"
          target="_blank"
          class="h2 d-inline-flex p-2 text-dark"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-facebook"
            viewBox="0 0 16 16"
          >
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
            />
          </svg>
        </a>
        <a
          href="https://www.instagram.com"
          target="_blank"
          class="h2 d-inline-flex p-2 text-dark"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-whatsapp"
            viewBox="0 0 16 16"
          >
            <path
              d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
            />
          </svg>
        </a>
      </div>
      <div>Lana AR &copy; 2024</div>
    </footer>
    <!-- /footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
