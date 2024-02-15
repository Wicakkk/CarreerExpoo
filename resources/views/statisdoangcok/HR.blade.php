<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Expo | Analisis Data</title>
    <link rel="icon" href="/images/logo yayasan wahana prestasi prima.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/adminlte/plugins/chart.js/Chart.min.js"></script>

    <script nonce="5989af46-2b09-4a77-8663-c56dd412451d">
        try {
            (function(w, d) {
                // ... (script Cloudflare Zaraz)
            })(window, document);
        } catch (err) {
            console.error('Failed to run Cloudflare Zaraz: ', err)
            fetch('/cdn-cgi/zaraz/t', {
                credentials: 'include',
                keepalive: true,
                method: 'GET',
            })
        }
    </script>

    <style>
        body {
            min-height: 100vh;
            background-color: #db401d;
            background-image: linear-gradient(147deg, #f57207 0%, #8002ee 100%);
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #fa441b;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
    </div> -->
    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand logo-small" href="#">
                <img src="/images/logo yayasan wahana prestasi prima.png" alt="Yayasan Prestasi Prima Logo"
                    class="small-logo">
                <span class="logo-text" style="color: white;"><strong>Yayasan Prestasi Prima</strong></span>
            </a>
            <h2 style="color: white;">Data Pelamar {{ $perusahaan }}</h2>
        </div>
    </nav>


    {{-- <div class="container"> --}}
    <div class="row py-2 pb-4">
        <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">
                    <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pend. Terakhir</th>
                                    <th>Portofolio</th>
                                    <th>Jenis Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                       
                                <?php $no = 1; ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <th>{{ $item->nama }}</th>
                                        <th>{{ $item->notelp }}</th>
                                        <th>{{ $item->email }}</th>
                                        <th>{{ $item->jenis_kelamin }}</th>
                                        <th>{{ $item->pendidikan_terakhir }}</th>
                                        <th>{{ $item->portofolio }}</th>
                                        <th>{{ $item->jenis_pekerjaan }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}



    <footer>
        <div class="">
            <div class="">
                <p class="">© 2024 All Rights Reserved. <a style="color: white;">SMK PRESTASI PRIMA</a></p>
            </div>
        </div>
    </footer>





    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=init"></script>
    <script src="/js/script.js"></script>
    <script src="/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
</body>


</html>
