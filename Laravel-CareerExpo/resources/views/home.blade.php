<title>{{ $namePage ?? 'Beranda' }} | {{ config('app.name') }}</title> @extends('layouts.app', [ 'title' => 'Beranda', 'namePage' => '', 'class' => 'login-page sidebar-mini', 'activePage' => 'home', 'backgroundImage' => asset('now') . "/img/bg14.jpg" ]) @section('content') <div class="panel-header panel-header-lg bg-primary" style="padding:40px">
  <h1 style="color: rgb(255, 255, 255)">
    <strong>BINGUNG CARI PEKERJAAN ?</strong>
  </h1>
  <p class="col-lg-7" style="color: rgb(255, 255, 255)">Sekolah Prestasi Prima aktif menjalin kerja sama yang erat dengan berbagai perusahaan terkemuka. Kemitraan ini dirancang untuk memberikan pengalaman praktis, memperluas wawasan dalam dunia industri, dan menciptakan peluang karir yang berharga. Melalui kolaborasi ini, Sekolah Prestasi Prima bertekad memberikan pendidikan yang relevan dan mempersiapkan siswa untuk meraih kesuksesan di dunia kerja.</p>
</div>
<div class="content">
  <br>
  <br>
  <div class="row">
    <div class="col-md-9">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-category"><strong>Testimoni Career Expo 2023</strong></h5>
        </div>
        <div class="card-body">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xySc0-D9x9A" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" width="100%" height="100%">
        <div class="card-header">
          <h5 class="card-category"></h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="apalah text-center">
              <img src="assets/img/smk.png" alt="">
              <h3 class="special_text">311 murid</h3>
              <img src="assets/img/sma.png" alt="">
              <h3 class="special_text">313 murid</h3>
              <img src="assets/img/perusahaan.png" alt="">
              <h3 class="special_text">100 perusahaan</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category"><strong>Kontak Kami</strong></h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4703183632737!2d106.89643650892127!3d-6.333063460960182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2681bc7c67%3A0x777152b1d3f74a62!2sSMK%20Prestasi%20Prima!5e0!3m2!1sid!2sid!4v1704598399612!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon_main" style="padding-bottom:50%">
                <div class="menu_text">
                  <ul style="list-style: none;">
                    <li style="padding-bottom: 10px;">
                      <img src="assets/img/lokasi.png" class="icon1" alt="Location Icon" style="width: 30px; height:30px;">
                      <span class="text1" style="height:5px; margin-top:-10px; color: black;">Jl. Hankam Raya No. 89, RT.7/RW.4, Cilangkap, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13870</span>
                    </li>
                    <br>
                    <li>
                      <img src="assets/img/email.png" class="icon2" alt="Envelope Icon" style="width: 30px; height: 30px; ">
                      <span class="text2" style="margin-top:10px; color: black;">sekolah@prestasiprima.sch.id</span>
                    </li>
                    <br>
                    <li>
                      <img src="assets/img/telepon.png" class="icon3" alt="Phone Icon" style="width: 30px; height: 30px;">
                      <span class="text3" style="margin-top:10px; color: black;">+6282310261245</span>
                    </li>
                  </ul>
                </div>
              </div>
              <span class="mini_text" style="font-family: Arial, sans-serif; font-size: 14px; color: black;height: 5px; margin-top: 10px; margin-left: 70%; ">Our Social Media</span>
              <br>
              <div class="mini_icon" style="margin-left: 75%; padding-top:3%">
                <a href="https://instagram.com/smkprestasiprima?igshid=MmU2YjMzNjRlOQ==" target="_blank">
                  <img src="assets/img/instagram.png" alt="Instagram Icon" style="width: 27px; height: 27px;">
                </a>
                <a href="https://www.youtube.com/@SEKOLAHPRESTASIPRIMA" target="_blank">
                  <img src="assets/img/youtube.png" alt="YouTube Icon" style="width: 27px; height: 27px;">
                </a>
                <a href="https://www.tiktok.com/@smkprestasiprima?_t=8dopdUTf8n1&_r=1" target="_blank">
                  <img src="assets/img/tiktok.png" alt="TikTok Icon" style="width: 27px; height: 27px;">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> @endsection @push('js') <script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();
  });
  window.addEventListener('DOMContentLoaded', function() {
    var iframe = document.querySelector('iframe');

    function adjustIframeHeight() {
      var width = iframe.offsetWidth;
      var aspectRatio = 9 / 16; // 16:9 aspect ratio
      var height = width * aspectRatio;
      iframe.style.height = height + 'px';
    }
    adjustIframeHeight();
    window.addEventListener('resize', adjustIframeHeight);
  });
</script> @endpush