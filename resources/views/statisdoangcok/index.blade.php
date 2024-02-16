<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career Expo</title>
    <link rel="icon" href="/images/logo yayasan wahana prestasi prima.png" type="image/png" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
      .warna {
        min-height: 100vh;
        background-color: #ff871f;
        background-image: linear-gradient(147deg, #ffdec1 0%, #efd9ff 100%);
      }
      .nav-link {
        font-size: 16px;
      }
      .copyright_main {
        width: 100%;
        float: left;
        background-color: white;
        height: auto;
        padding-bottom: 2px;
        padding-top: 2px;
      }
      .copyright {
        width: 100%;
        float: left;
        text-align: center;
        color: #000000;
        margin-left: 0px;
        margin-right: 0px;
      }
      .copyright a:hover {
        color: #000;
      }
      .copyright a {
        color: #ff871f;
      }
      .fotoheader {
        animation: fadeIn 3s ease-in-out;
      }
      .carousel-control-prev,
      .carousel-control-next {
        width: 20%;
        color: #000000;
      }
      .kontak {
        color: #f79540;
        font-size: 60px;
        font-weight: bold;
      }
      .contactmaps {
        width: 100%;
        float: left;
        padding-bottom: 20px;
        padding-top: 65px;
      }
      @media only screen and (max-width: 768px) {
        /* Tambahkan gaya khusus untuk layar dengan lebar maksimum 768px */
        .text1, .text2, .text3, .mini_text {
          width: auto; /* Ubah lebar teks agar bisa menyesuaikan */
          margin-left: 0; /* Ubah margin agar sesuai */
        }

        .icon1, .icon2, .icon3 {
          width: 30px; /* Ubah ukuran ikon */
          height: 30px;
        }
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent pl-3 pr-3 pb-2">
      <div class="container">
        <a class="navbar-brand logo-small" href="#">
          <img src="/images/logo yayasan wahana prestasi prima.png" alt="Yayasan Prestasi Prima Logo" class="small-logo" max-height: 60px; />
          <span class="logo-text"><strong>Yayasan Prestasi Prima</strong></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-3" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user-manual">Cara Melamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#partnership">Perusahaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="warna">
      <!-- header -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="px-3">
              <h1 class="mt-5"><b>Kamu Bingung Cari Pekerjaan?</b></h1>
              <p class="mt-3">
                Sekolah Prestasi Prima aktif menjalin kerja sama yang erat dengan berbagai perusahaan terkemuka. Kemitraan ini dirancang untuk memberikan pengalaman praktis kepada siswa, memperluas wawasan mereka dalam dunia industri, dan
                menciptakan peluang karir yang berharga. Melalui kolaborasi ini, Sekolah Prestasi Prima bertekad memberikan pendidikan yang relevan dan mempersiapkan siswa untuk meraih kesuksesan di dunia kerja.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="px-3">
              <img src="images/woofer.png" class="fotoheader mt-3" alt="Illustration" style="max-width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <!-- testimoni -->
      <div class="testimoni">
        <div class="container text-center">
          <h2 class="mt-5 pt-5 mb-3 fotoheader"><i class="fa-solid fa-icons" style="color: #711db0"></i><b> Testimoni Study & Career Expo 2023</b> <i class="fa-solid fa-icons" style="color: #ff871f"></i></h2>
          <div class="row">
            <iframe
              class="mx-auto"
              width="620"
              height="320"
              src="https://www.youtube.com/embed/xySc0-D9x9A?si=Um9rmCArWJJZ_vlz"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div class="row mt-5">
            <div class="col-md-4 mb-3">
              <img src="/images/smk.png" alt="" style="max-width: 100%" />
              <h2 class="special_text mt-1" id="murid-smk">0 murid</h2>
            </div>
            <div class="col-md-4 mb-3">
              <img src="/images/sma.png" alt="" style="max-width: 100%" />
              <h2 class="special_text mt-1" id="murid-sma">0 murid</h2>
            </div>
            <div class="col-md-4 mb-3">
              <img src="/images/perusahaan.png" alt="" style="max-width: 100%" />
              <h2 class="special_text mt-1" id="perusahaan">0 perusahaan</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- carousel -->
      <div id="partnership" class="choose_section">
        <div class="container mt-5">
          <div class="col-sm-12">
            <h1 class="choose_text">List<span class="color"> Perusahan</span></h1>
            <p class="lorem_text">Inilah beberapa perusahaan yang kami sediakan untuk membantu anda dalam mencari perkerjaan.</p>
          </div>
        </div>
      </div>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="choose_section_2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div id="pt1" class="about_inner">
                        <div class="icon">
                          <a href="/pharos"><img src="/images/1.png" /></a>
                        </div>
                        <h2 class="totaly_text">Pharos Group</h2>
                        <p class="making">Admin Operational, Staff Farmasi, Programmer</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/indomaret"><img src="images/7.png" /></a>
                        </div>
                        <h2 class="totaly_text">Indomaret Group</h2>
                        <p class="making">Teknisi, Electronic Data Process, Admin Umum</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/sigma"><img src="images/8.png" /></a>
                        </div>
                        <h2 class="totaly_text">Sigma Solusi Servis</h2>
                        <p class="making">Teknisi Fiber Optik, QC, Teknisi Repair, Sales</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="choose_section_2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/sutindo"><img src="images/9.png" /></a>
                        </div>
                        <h2 class="totaly_text">Sutindo</h2>
                        <p class="making">Sales, Inside Sales, Administrasi, Warehouse</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div id="pt3" class="about_inner">
                        <div class="icon">
                          <a href="/hana"><img src="images/ha.png" /></a>
                        </div>
                        <h2 class="totaly_text">Pt. Hana Anargya</h2>
                        <p class="making">Content Creator</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div id="pt4" class="about_inner">
                        <div class="icon">
                          <a href="/cirill"><img src="images/cril.png" /></a>
                        </div>
                        <h2 class="totaly_text">Cirill Indonesia</h2>
                        <p class="making">Kasir Retail, Delivery Service, Customer Relation</p>
                      </div>
                    </div>
                  </div>
                  <div class="bt_main">
                    <button class="read_more"><a href="#"></a></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <div class="choose_section_2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div id="pt6" class="about_inner">
                        <div class="icon">
                          <a href="/trapo"><img src="images/6.png" /></a>
                        </div>
                        <h2 class="totaly_text">Trapo Indonesia</h2>
                        <p class="making">Content Specialist, Graphic Design Staff</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div id="pt5" class="about_inner">
                        <div class="icon">
                          <a href="/anteraja"><img src="images/5.png" /></a>
                        </div>
                        <h2 class="totaly_text">AnterAja</h2>
                        <p class="making">Kurir Barang, Petugas Gudang</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/sahamrakyat"><img src="images/shm.png" /></a>
                        </div>
                        <h2 class="totaly_text">Saham Rakyat</h2>
                        <p class="making">Back-end Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="choose_section_2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/gmedia"><img src="images/gme.png" /></a>
                        </div>
                        <h2 class="totaly_text">Gmedia</h2>
                        <p class="making">Technical Support & Infrastructure, Video Editor </p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/ap2ln"><img src="images/11.png" /></a>
                        </div>
                        <h2 class="totaly_text">AP2LN</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/indivara"><img src="images/12.png" /></a>
                        </div>
                        <h2 class="totaly_text">Pt. Indivara Group</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                  </div>
                  <div class="bt_main">
                    <button class="read_more"><a href="#"></a></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="3000">
              <div class="choose_section_2">
                <div class="container mb-5">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/prima"><img src="images/14.png" /></a>
                        </div>
                        <h2 class="totaly_text">Prima Fajar Cahaya Surya
                        </h2>
                        <p class="making"></p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/infomedia"><img src="images/15.png" /></a>
                        </div>
                        <h2 class="totaly_text">Infomedia</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div id="pt2" class="about_inner">
                        <div class="icon">
                          <a href="/qurrny"><img src="images/2.png" /></a>
                        </div>
                        <h2 class="totaly_text">Pt. All Qurrny Bagas Pratama</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="choose_section_2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/assets/pt10.html"><img src="images/shm.png" /></a>
                        </div>
                        <h2 class="totaly_text">Saham Rakyat</h2>
                        <p class="making">Back-end Developer</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/assets/pt11.html"><img src="images/11.png" /></a>
                        </div>
                        <h2 class="totaly_text">AP2LN</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="about_inner">
                        <div class="icon">
                          <a href="/assets/pt12.html"><img src="images/12.png" /></a>
                        </div>
                        <h2 class="totaly_text">Pt. Indivara Group</h2>
                        <p class="making"></p>
                      </div>
                    </div>
                  </div>
                  <div class="bt_main">
                    <button class="read_more"><a href="#"></a></button>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="fas fa-arrow-left" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="fas fa-arrow-right" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
      </div>

      <!-- contact -->
      <div id="contact">
        <div class="container text-center">
          <h1 class="kontak text-center">Kontak Kami</h1>
          <div class="row align-items-center">
            <div class="col"><div class="contactmaps">
              <div class="row">
                <div class="col-md-8">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4703183632737!2d106.89643650892127!3d-6.333063460960182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2681bc7c67%3A0x777152b1d3f74a62!2sSMK%20Prestasi%20Prima!5e0!3m2!1sid!2sid!4v1704598399612!5m2!1sid!2sid"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
              </div></div>
            <div class="col"><div class="menu_text mb-5">
              <ul>
                <li>
                  <img src="images/lokasi.png" class="icon1" alt="Location Icon" style="width: 50px; height: 50px" />
                  <span class="text1" style="width: 350px; height: 5px; margin-top: -10px; color: black"><b>Jl. Hankam Raya No. 89, RT.7/RW.4, Cilangkap, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13870</b></span>
                </li>
                <li>
                  <img src="images/email.png" class="icon2" alt="Envelope Icon" style="width: 50px; height: 50px" />
                  <span class="text2" style="margin-top: 8px; color: black"><b>sekolah@prestasiprima.sch.id</b></span>
                </li>
                <li>
                  <img src="images/telepon.png" class="icon3" alt="Phone Icon" style="width: 50px; height: 50px" />
                  <span class="text3" style="margin-top: 8px; color: black"><b>+6282310261245</b></span>
                </li>
                <li>
                  <span class="mini_text" style="font-size: 14px; color: black; display: flex; width: 250px; height: 5px; margin-left: 297px"><b>Our Social Media</b></span>

                    <div class="mini_icon">
                      <a href="https://instagram.com/smkprestasiprima?igshid=MmU2YjMzNjRlOQ==" target="_blank"><img src="images/instagram.png" alt="Instagram Icon" style="width: 27px; height: 27px" /></a>
                      <a href="https://www.youtube.com/@SEKOLAHPRESTASIPRIMA" target="_blank"><img src="images/youtube.png" alt="YouTube Icon" style="width: 27px; height: 27px" /></a>
                      <a href="https://www.tiktok.com/@smkprestasiprima?_t=8dopdUTf8n1&_r=1" target="_blank"><img src="images/tiktok.png" alt="TikTok Icon" style="width: 27px; height: 27px" /></a>
                    </div>

                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>


    <div class="container">
      <p class="copyright">Copyright Orens Solution © 2024.<a href="https://www.instagram.com/smkprestasiprima?igsh=MTc0dWFzYzZiM2U1OQ=="> SMK PRESTASI PRIMA </a></p>
    </div>

    <!-- script -->
    <script>
      function startTypingAnimation() {
        const targetMuridSmk = document.getElementById("murid-smk");
        const targetMuridSma = document.getElementById("murid-sma");
        const targetPerusahaan = document.getElementById("perusahaan");

        const initialMuridSmk = 0;
        const targetMuridSmkValue = 311;
        const initialMuridSma = 0;
        const targetMuridSmaValue = 313;
        const initialPerusahaan = 0;
        const targetPerusahaanValue = 100;

        animateValue(targetMuridSmk, initialMuridSmk, targetMuridSmkValue, 2000);
        animateValue(targetMuridSma, initialMuridSma, targetMuridSmaValue, 2000);
        animatePerusahaan(targetPerusahaan, initialPerusahaan, targetPerusahaanValue, 2000);
      }

      function animateValue(target, start, end, duration) {
        let current = start;
        const increment = Math.floor(((end - start) / duration) * 50);
        const interval = setInterval(() => {
          current += increment;
          target.textContent = `${current} murid`;
          if (current >= end) {
            clearInterval(interval);
            target.textContent = `${end} murid`;
          }
        }, 50);
      }

      function animatePerusahaan(target, start, end, duration) {
        let current = start;
        const increment = Math.floor(((end - start) / duration) * 50);
        const interval = setInterval(() => {
          current += increment;
          target.textContent = `${current} perusahaan`;
          if (current >= end) {
            clearInterval(interval);
            target.textContent = `${end} perusahaan`;
          }
        }, 50);
      }

      // Start the typing animation when the window is loaded
      window.onload = startTypingAnimation;
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
