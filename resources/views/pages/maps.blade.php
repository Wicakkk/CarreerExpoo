<title>{{ $namePage ?? 'Alamat' }} | {{ config('app.name') }}</title>
@extends('layouts.app', [
    'namePage' => '',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Google Maps
          </div>
          <div class="card-body">
              <div id="map" class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4703183632737!2d106.89643650892127!3d-6.333063460960182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2681bc7c67%3A0x777152b1d3f74a62!2sSMK%20Prestasi%20Prima!5e0!3m2!1sid!2sid!4v1704598399612!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: 100%; height: 100%;""></iframe>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
