<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Career Expo</title>
<link rel="icon" href="/images/logo yayasan wahana prestasi prima.png" type="image/png">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!-- Navbar start -->
    <div id="loader-wrapper">
		<div id="loader"></div>
	</div>
    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent pl-5 ml-5">
        <div class="container-fluid">
            <a class="navbar-brand logo-small" href="#">
                <img src="/images/logo yayasan wahana prestasi prima.png" alt="Yayasan Prestasi Prima Logo" class="small-logo">
                <span class="logo-text"><strong>Yayasan Prestasi Prima</strong></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item">
                <form id="companySearchForm" class="form-inline my-2 my-lg-0 ml-auto">
                    <input id="companySearchInput" class="form-control mr-sm-2" type="search" placeholder="Search Companies" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="searchCompanies()">Search</button>
                </form>
            </li>
            <li class="nav-item pl-3">
                <a href="/user-manual" class="btn btn-warning"><i class="fa-solid fa-info" style="font-size: 20px;"></i></a>
            </li>
        </div>
    </nav>
    <!-- Navbar end -->
	<header id="home"class="section">
	<div class="header_main">
        <section >
      	<div class="bannen_inner">
            <div class="pl-5 ml-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<h1 class="web_text" class="web_text animate-on-scroll" style="opacity: 0;"><strong style="font-size: 75px;">Kamu Bingung Cari Pekerjaan?</strong></h1>
						<p class="donec_text" style="font-size: 15px;">"Sekolah Prestasi Prima aktif menjalin kerja sama yang erat dengan berbagai
							perusahaan terkemuka. Kemitraan ini dirancang untuk memberikan pengalaman praktis kepada siswa,
							memperluas wawasan mereka dalam dunia industri, dan menciptakan peluang karir yang berharga.
							Melalui kolaborasi ini, Sekolah Prestasi Prima bertekad memberikan pendidikan yang relevan dan
							mempersiapkan siswa untuk meraih kesuksesan di dunia kerja."</p>
                    </div>
                 	<div class="pl-6 ml-1">
						<div class="img-box">
							<figure><img src="images/woofer.png" alt="img" style="max-width: 100%;" height="590px"></figure>
                		</div>
           			</div>
        		</div>
       		</div>
     	</div>
    </div>
    </section>
	</header>
    <!-- banner end -->
    <!-- service start -->

    <div class="about_main layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <video id="myVideo" width="700" height="450" autoplay>
                        <source src="/careerexpo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-4">
                    <div class="apalah">
                        <img src="/images/smk.png" alt="">
                        <h2 class="special_text">311 murid</h2>
                        <img src="/images/sma.png" alt="">
                        <h2 class="special_text">313 murid</h2>
                        <img src="/images/perusahaan.png" alt="">
                        <h2 class="special_text">100 perusahaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="service" class="choose_section">
    	<div class="container">
    		<div class="col-sm-12">
    			<h1 class="choose_text">Our<span class="color"> Partnership</span></h1>
    			<p class="lorem_text">Inilah beberapa perusahaan yang kami sediakan untuk membantu anda
					dalam mencari perkerjaan.</p>
    		</div>
    	</div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <div class="choose_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div id="pt1" class="about_inner">
                            <div class="icon"><a href="/pharos"><img src="/images/1.png"></a></div>
                            <h2 class="totaly_text">Pharos Group</h2>
                            <p class="making">Admin Operational, Staff Farmasi, Programmer</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="pt2" class="about_inner">
                            <div class="icon"><a href="/assets/pt2.html"><img src="images/2.png"></a></div>
                            <h2 class="totaly_text">Pt. All Qurrny Bagas Pratama</h2>
                            <p class="making"></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="pt3" class="about_inner">
                            <div class="icon"><a href="/assets/pt3.html"><img src="images/ha.png"></a></div>
                            <h2 class="totaly_text">Pt. Hara Anargya</h2>
                            <p class="making">Content Creator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div id="pt4" class="about_inner">
                            <div class="icon"><a href="/assets/pt4.html"><img src="images/cril.png"></a></div>
                            <h2 class="totaly_text">Cirill Indonesia</h2>
                            <p class="making">Kasir Retail, Delivery Service, Customer Relation </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="pt5" class="about_inner">
                            <div class="icon"><a href="/assets/pt5.html"><img src="images/5.png"></a></div>
                            <h2 class="totaly_text">AnterAja</h2>
                            <p class="making">Kurir Barang, Petugas Gudang</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="pt6" class="about_inner">
                            <div class="icon"><a href="/assets/pt6.html"><img src="images/6.png"></a></div>
                            <h2 class="totaly_text">Trapo Indonesia</h2>
                            <p class="making">Content Specialist, Graphic Design Staff</p>
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
                        <div class="about_inner">
                            <div class="icon"><a href="/assets/pt7.html"><img src="images/7.png"></a></div>
                            <h2 class="totaly_text">Indomaret Group</h2>
                            <p class="making">Teknisi, Electronic Data Process, Admin Umum</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_inner">
                            <div class="icon"><a href="/assets/pt8.html"><img src="images/8.png"></a></div>
                            <h2 class="totaly_text">Sigma Solusi Servis</h2>
                            <p class="making">Teknisi Fiber Optik, QC, Teknisi Repair, Sales</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_inner">
                            <div class="icon"><a href="/assets/pt9.html"><img src="images/9.png"></a></div>
                            <h2 class="totaly_text">Sutindo</h2>
                            <p class="making">Sales, Inside Sales, Administrasi, Warehouse</p>
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
                            <div class="icon"><a href="/assets/pt10.html"><img src="images/shm.png"></a></div>
                            <h2 class="totaly_text">Saham Rakyat</h2>
                            <p class="making">Back-end Developer</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_inner">
                            <div class="icon"><a href="/assets/pt11.html"><img src="images/11.png"></a></div>
                            <h2 class="totaly_text">AP2LN</h2>
                            <p class="making"></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_inner">
                            <div class="icon"><a href="/assets/pt12.html"><img src="images/12.png"></a></div>
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
        </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>
    <!-- service end -->
<!-- contact start -->
<div id="contact" class="contact_section_3">
    <div class="container">
        <div class="contact_product">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="useful_text">Kontak Kami</h1>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4703183632737!2d106.89643650892127!3d-6.333063460960182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2681bc7c67%3A0x777152b1d3f74a62!2sSMK%20Prestasi%20Prima!5e0!3m2!1sid!2sid!4v1704598399612!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="icon_main">
            <div class="menu_text">
                <ul>
                    <li style="padding-bottom: 10px;">
                        <img src="images/lokasi.png" class="icon1" alt="Location Icon"style="width: 50px; height:50px;">
                        <span class="text1" style="width: 350px; height:5px; margin-top:-10px; color: black;">Jl. Hankam Raya No. 89, RT.7/RW.4, Cilangkap, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13870</span>
                    </li>
                    <li>
                        <img src="images/email.png" class="icon2" alt="Envelope Icon" style="width: 50px; height: 50px; ">
                        <span class="text2" style="margin-top:10px; color: black;">sekolah@prestasiprima.sch.id</span>
                    </li>
                    <li>
                        <img src="images/telepon.png" class="icon3" alt="Phone Icon"style="width: 50px; height: 50px;">
                        <span class="text3" style="margin-top:10px; color: black;">+6282310261245</span>
                    </li>

                    <span class="mini_text" style="font-family: Arial, sans-serif; font-size: 14px; color: black; display: flex; width: 250px; height: 5px; margin-top: 10px; margin-left: 297px;">Our Social Media</span>
                    <div class="mini_icon">
                        <a href="https://instagram.com/smkprestasiprima?igshid=MmU2YjMzNjRlOQ==" target="_blank"><img src="images/instagram.png" alt="Instagram Icon" style="width: 27px; height: 27px;"></a>
                        <a href="https://www.youtube.com/@SEKOLAHPRESTASIPRIMA" target="_blank"><img src="images/youtube.png" alt="YouTube Icon" style="width: 27px; height: 27px;"></a>
                        <a href="https://www.tiktok.com/@smkprestasiprima?_t=8dopdUTf8n1&_r=1" target="_blank"><img src="images/tiktok.png" alt="TikTok Icon" style="width: 27px; height: 27px;"></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copyright_main">
	<div class="container">
		<p class="copy_text">Copyright SlaFaWo © 2024. <span style="color: white;"><a href="https://www.instagram.com/smkprestasiprima?igsh=MTc0dWFzYzZiM2U1OQ==">SMK PRESTASI PRIMA</span> </a></p>
	</div>
</div>


    <!-- contact end -->
    <!-- Javascript files-->
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('myVideo');
            video.play();
        });
    </script>

</body>
</html>
