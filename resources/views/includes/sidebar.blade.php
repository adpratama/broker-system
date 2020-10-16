{{-- Sidebar Brand --}}
<div class="sidebar-brand">
  <a href="index.html">urunproteksi.com</a>
</div>

<div class="sidebar-brand sidebar-brand-sm">
  <a href="index.html">UP</a>
</div>

<ul class="sidebar-menu">

  {{-- Button Menu Dashboard --}}
  <li>
    <a class="nav-link" href="{{route('dashboard.index')}} ">
      <i class="fas fa-tachometer-alt"></i> 
      <span>Dashboard</span>
    </a>
  </li>

  {{-- Button Menu Data Master --}}
  <li class="menu-header">Data Master</li>
  <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown">
      <i class="fas fa-database"></i>
      <span>Data Master</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class="nav-link" href="{{route('clients.index')}}">
          Client / Insured
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{route('insurance.index')}}">
          Insurance
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{route('cover_type.index')}}">
          Jenis Asuransi
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{route('authorize_sign.index')}}">
          Authorize Sign
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{route('currency.index')}}">
          Mata Uang
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{route('account.index')}}  ">
          Rekening
        </a>
      </li>
    </ul>
  </li>  

  {{--  --}}
  <li class="menu-header">Slip</li>
  <li>
    <a class="nav-link" href="{{route('placing.index')}}">
      <i class="far fa-file-alt"></i> 
      <span>Placing Slip</span>
    </a>
  </li>
  <li>
    <a class="nav-link" href="{{route('quotation.index')}}">
      <i class="far fa-file-alt"></i> 
      <span>Quotation Slip</span>
    </a>
  </li>
  <li>
    <a class="nav-link" href="{{route('invoice.index')}} ">
      <i class="fas fa-file-invoice"></i> 
      <span>Invoice</span>
    </a>
  </li>
  <li>
    <a class="nav-link" 
    href="{{route('instruct.index')}}"
    >
      <i class="far fa-file-alt"></i> 
      <span>Instruct Cover</span>
    </a>
  </li>
  <li>
    <a class="nav-link" href="{{route('kwitansi.index')}} ">
      <i class="fas fa-file-invoice"></i> 
      <span>Kwitansi</span>
    </a>
  </li>
  <li>
    <a class="nav-link" href="credits.html">
      <i class="far fa-file"></i> 
      <span>Report</span>
    </a>
  </li>

  <li class="menu-header">Tools</li>
  <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown">
      <i class="fas fa-tools"></i>
      <span>Tools</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class="nav-link" href="index-0.html">
          Kalkulator
        </a>
      </li>
      <li>
        <a class="nav-link" href="index.html">
          Konversi Kurs
        </a>
      </li>
    </ul>
  </li>  
</ul>

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
  
  {{-- <a class="btn btn-primary btn-lg btn-block btn-icon-split " href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt"></i><span class="">{{ __('Keluar') }}</span>
    
  </a> --}}
</div>
