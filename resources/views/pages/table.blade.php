<title>{{ $namePage ?? 'OurPartnership' }} | {{ config('app.name') }}</title> @extends('layouts.app', [ 'namePage' => '', 'class' => 'sidebar-mini', 'activePage' => 'table', ]) @section('content') <div class="panel-header panel-header-sm"></div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Beberapa Nama Perusahan</h4>
          <div class="col-12 mt-2"></div>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead class="text-center" style="font-size: 10px">
              <tr>
                <th>
                  <strong>Logo
                </th>
                <th>
                  <strong>Nama Perusahan
                </th>
                <th>
                  <strong>Jobdesk
                </th>
                <th>
                  <strong>Alamat
                </th>
                <th class="disabled-sorting">
                  <strong>Actions
                </th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/1.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Pharos Group</td>
                <td>Admin Operational, Operation Manager, Quality Controll Staff, Store Manager, Programmer, Finance & Accounting Staff, Petugas Gudang, Salaes Promotion, Sales Representative, Staff Farmasi, Area Sales Manager, Manager Supervisor</td>
                <td>Jl. Limo No.40, RW.10, Grogol Sel., Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12220td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/WwF3CdcaDYzBywC97" type="button" class="btn btn-secondary"> Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/2.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Pt. All Qurrny Bagas Pratama</td>
                <td>-</td>
                <td>Jalan Nilam 2 Gang Lingkungan Nomor 19a, RT/RW 003/010 Desa/Kelurahan Jatiraden, Kec. Jatisampurna, Kota Bekasi, Provinsi Jawa Barat 17433</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="" type="button" class="btn btn-secondary"> Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/3.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Pt. Hana Anargya</td>
                <td>Content Creator</td>
                <td>Komplek Surapati Core Blok C-22 Lt.2, Jalan PHH Mustofa, Cibeunying Kidul, Kota Bandung, Jawa Barat 40192</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/WLYPPeFbjNLaSuDb8" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/4.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Cirill Indonesia</td>
                <td>Kasir Retail, Delivery Service, Customer Relation, Staff Acc Finance, Staff Admin Gudang, Driver Sales, Helper Sales</td>
                <td>Jl. Kp. Pabuaran Dukuh, Dukuh, Kec. Cikupa, Kabupaten Tangerang, Banten 15710</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/QGZes34tCxwu8vMs8" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/5.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>AnterAja</td>
                <td>Kurir Barang, Petugas Gudang</td>
                <td>Anteraja Jalan Merdeka Selatan No. 10 Jakarta, Indonesia, 12110</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/e2wTUH1UP1unFdjG9" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/6.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Trapo Indonesia</td>
                <td>Content Specialist, Graphic Design Staff, Online Sales Staff, Offline Sales Staff, Marketing & Social Media, Production Admin Staff </td>
                <td>Ruko Intercon Plaza, Jl. Meruya Utara No.12A Blok C, RT.1/RW.9, Srengseng, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11630</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/5Pb4odguXhmUsXE26" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/7.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Indomaret Group</td>
                <td>Teknisi, Electronic Data Process, Admin Umum, Delivery Man, Driver, Barista, Resepsionist, Cook Helper </td>
                <td>Gedung Menara Indomaret Jl. Boulevard Pantai Indah Kapuk, Kamal Muara, Penjaringan Jakarta Utara 14470</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/QLYvTBAt3eh7kQZm8" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/8.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Sigma Solusi Servis</td>
                <td>Teknisi Fiber Optik, QC, Teknisi Repair, Sales, Teknisi Mesin, Tenisi Repair, Operator Mesin, Teknisi Komputer</td>
                <td>Jl. Persada Raya No. 47, Menteng Dalam, Tebet, Jakarta - 12810</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/Vh9aYbXqBesWyEzH9" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/9.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Sutindo</td>
                <td>Sales, Inside Sales, Administrasi, Warehouse</td>
                <td>Jl. Tanjungsari 44i, Surabaya Indonesia 60181</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/VagVwf9WWKY4TkS77" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/saham1.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Saham Rakyat</td>
                <td>Back-end Developer</td>
                <td>Menara Imperium, Lt.8, Guntur, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12980</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/6Mygw4o4EXYnPrDv7" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/11.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>AP2LN</td>
                <td>-</td>
                <td>Jl. KH. Abdullah Syafei Blok A No. 24 D, Tebet, Jakarta Selatan 12830</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/12.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>Pt. Indivara Group</td>
                <td>-</td>
                <td>Kirana Boutique Office Blok G3 JL. Kirana Avenue No 1-2 Kelapa Gading, 14240 Jakarta, Indonesia</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/10.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>PT. Prima Fajar Cahaya Surya</td>
                <td>Sales Personal Loan, Sales Qris, Sales Kartu Kredit</td>
                <td>GRAND PANGLIMA POLIM Jl. Panglima Polim No. 8 Keb. Baru, Jakarta Selatan DKI Jakarta - 12160</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/kATm55U174UW8Pvt9" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody class="text-center">
              <tr>
                <td>
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="{{asset('assets')}}/img/14.png" alt="" style="max-width: 80px; border-radiu: 100px">
                  </span>
                </td>
                <td>INFOMEDIA</td>
                <td>Sales Representative NOO, Sales Merchandiser, Sales Canvasser, Host Live Streaming, Sales Executive HORECA, Teknisi Sipil, Promotor Elektronik, Merchandiser Mobile, Storekeeper, Sales Motoris</td>
                <td>PT. Infomedia Nusantara Head Office Jl. RS. Fatmawati 77-81 Jakarta 12150 Indonesia</td>
                <td class="align-middle">
                  <div role="group" aria-label="Basic example">
                    <a style="background-color: #6f42c1" href="https://forms.gle/paqABcz8VLsWgxRDA" type="button" class="btn btn-secondary">Daftar <i class="fas fa-arrow-right"></i>
                    </a>
                    </form>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
  <div class="alert alert-primary" style="color: white">
    <span>
      <b></b>Tentukan Pekerjaanmu Karna Itu Akan Merubah Hidupmu! </span>
  </div>
  <!-- end row -->
</div> @endsection