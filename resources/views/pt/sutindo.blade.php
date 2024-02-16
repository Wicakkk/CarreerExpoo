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
    <title>Career Expo | Sutindo</title>
    <link rel="icon" href="/images/logo yayasan wahana prestasi prima.png" type="image/png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

</head>

<body>
    {{-- <div id="loader-wrapper">
		<div id="loader"></div>
	</div> --}}
	<nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<header id="home"class="section">
	<div class="header_main">
		<section>
			<div class="bannen_inner">
				<div class="container">
					<div class="row marginii">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							{{-- <div class="taital_main"></div> --}}
							<h1 class="mt-5"><strong>Sutindo</strong></h1>
							<p class="">Sutindo Group adalah perusahaan yang bergerak dibidang stockist hardware dengan produk logam, sanitary ware, kimia industri dan cat. Sutindo Group sudah berdiri sejak tahun 1970an dan terus berkembang hingga memiliki 6 divisi dan lebih dari 2000 karyawan. Diantaranya carbon steel, non-ferrous, stainless steel, building materials, project dan chemical. Holding Company Sutindo berpusat di Surabaya Jl. Tanjungsari no 44i dan saat ini sudah tersebar 42 cabang diseluruh Indonesia.
							</p>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="mt-5">
								<figure>
									<img src="/images/sutindo.png" alt="img" style="max-width: 100%;">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</header>
		<!-- banner end -->

    <!-- service start -->
	<div id="service" class="choose_section">
		<div class="container">
			<div class="col-sm-12">
				<h1 class="choose_text">Daftar<span class="color"> Pekerjaan</span></h1>
				<ol class="lorem_text" style="text-align: left; margin-bottom: 25px;">
					<hr style="border-top: 3px solid #000000; margin: 20px 0;">
					<h2><strong>1. Sales</strong></h2>
				</ol>
				<ol class="lorem_text" style="text-align: left; margin-bottom: 25px;">
					<h2><strong>2. Inside Sales</strong></h2>
				</ol>
				<ol class="lorem_text" style="text-align: left; margin-bottom: 25px;">
					<h2><strong>3. Administrasi</strong></h2>
				</ol>
				<ol class="lorem_text" style="text-align: left; margin-bottom: 25px;">
					<h2><strong>4. Warehouse</strong></h2>
				</ol>
				Tertarik Dengan Perusahaan Kami!?
                <button type="button" class="register_button" data-bs-toggle="modal"
                    data-bs-target="#contohModal">Daftar Sekarang</button>
                <ol></ol> <br>
			</div>
		</div>
	</div>

    <!-- Modal -->
    <div class="modal fade" id="contohModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Form Lamaran</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form action="/save/8643846" method="post">
                            @csrf
                            <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control" id="nama" placeholder=""
                                name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="notelp" class="form-label"><b>No. Telp / WA</b></label>
                        <input type="number" class="form-control" id="notelp" placeholder="" name="notelp" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email" />
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
                        <select class="form-control" id="jenis_kelamin" aria-label="Default select example"
                            name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan_terakhir" class="form-label"><b>Pendidikan Terakhir</b></label>
                        <input type="text" class="form-control" id="pendidikan_terakhir" placeholder=""
                            name="pendidikan_terakhir" />
                    </div>
                    <div class="mb-3">
                        <label for="jenis_pekerjaan" class="form-label"><b>Jenis Pekerjaan</b></label>
                        <select class="form-control" id="jenis_pekerjaan" aria-label="Default select example"
                            name="jenis_pekerjaan">
                            <option value="Sales">Sales</option>
                            <option value="Inside Sales">Inside Sales</option>
                            <option value="Administrasi">Administrasi</option>
                            <option value="Warehouse">Warehouse</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="portfolio" class="form-label"><b>Portfolio (Link Drive)</b></label>
                        <input type="text" class="form-control" placeholder=""
                            name="portofolio"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="padding: 10px 20px;
			  border-radius: 15px;
			  cursor: pointer;">Tutup</button>
                    <button type="submit" class="register_button">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- service end -->
    <div class="copyright_main">
        <div class="container">
            <p class="copy_text">© 2024 All Rights Reserved. <a href="https://prestasiprima.sch.id/">SMK PRESTASI
                    PRIMA</a></p>
        </div>
    </div>


    <!-- contact end -->
    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="/js/jquery.min.js"></script> --}}
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>


    {{-- <script src="/js/jquery-3.0.0.min.js"></script> --}}
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <!-- javascript -->
    <script src="/js/owl.carousel.js"></script>
    {{-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> --}}
    <script src="/js/script.js"></script>

</body>

</html>
