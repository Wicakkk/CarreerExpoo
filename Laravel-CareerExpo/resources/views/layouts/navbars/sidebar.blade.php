<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
        <img src="{{ asset('assets/img/logopp.png') }}" alt="Logo" style="max-height: 45px;">
    </a>
    <a  href="" class="simple-text logo-normal">
      {{ __('PRESTASI PRIMA') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class=" fas fa-home"></i>
          <p>{{ __('BERANDA') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="fas fa-handshake"></i>
          <p>{{ __('Our Partnership') }}</p>
        </a>
      </li>
      <!--<li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>-->
    </ul>
  </div>
</div>