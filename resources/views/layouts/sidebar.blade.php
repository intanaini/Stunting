<!-- partial:partials/_sidebar.html -->
@if (Auth::user()->role== 'admin')
    

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Menu</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#dataadmin" aria-expanded="false" aria-controls="dataadmin">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Master Data</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="dataadmin">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('dataadmin') }}">Data Admin</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('datauser') }}">Data Pengguna</a></li>
            {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('databalita') }}">Data Balita</a></li> --}}
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item nav-category">Forms and Datas</li> --}}
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Data Pakar</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('dataaturan') }}">Data Aturan</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('datainformasi') }}">
          <i class="mdi mdi-alert menu-icon"></i>
          <span class="menu-title">Aturan Informasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dataperkembangan') }}">
          <i class="mdi mdi-chart-line menu-icon"></i>
          <span class="menu-title">Perkembangan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('databalita') }}">
          <i class="mdi mdi-face menu-icon"></i>
          <span class="menu-title">Balita</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('datadiagnosa') }}">
          <i class="mdi mdi-stethoscope menu-icon"></i>
          <span class="menu-title">Diagnosa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dataposyandu') }}">
          <i class="mdi mdi-home-map-marker menu-icon"></i>
          <span class="menu-title">Posyandu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('datalaporan') }}">
          <i class="mdi mdi-clipboard-text menu-icon"></i>
          <span class="menu-title">Laporan</span>
        </a>
      </li>
    </ul>
  </nav>

  @elseif (Auth::user()->role== 'superadmin')
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('superadmin') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('mengeloladataposyandu') }}">
          <i class="mdi mdi-home-map-marker menu-icon"></i>
          <span class="menu-title">Mengelola Data Posyandu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Master Data</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('dataSadmin') }}">Data Admin</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('dataSuser') }}">Data Pengguna</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('dataSbalita') }}">Data Balita</a></li>
          </ul>
        </div>
      </li>
    </nav>
      {{-- <li class="nav-item nav-category">Forms and Datas</li> --}}
      @elseif (Auth::user()->role== 'pakar')
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pakar') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blschat') }}">
              <i class="mdi mdi-home-map-marker  menu-icon"></i>
              <span class="menu-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('melihatlaporan') }}">
              <i class="mdi mdi-clipboard-text menu-icon"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
    </ul>
  </nav>
  @elseif (Auth::user()->role== 'pengguna')
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengguna') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item nav-category">Menu</li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('chat') }}">
              <i class="mdi mdi-comment-processing menu-icon"></i>
              <span class="menu-title">Chat</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('lhtperkembangan') }}">
              <i class="mdi mdi-chart-line menu-icon"></i>
              <span class="menu-title">Perkembangan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('balita') }}">
              <i class="mdi mdi-face menu-icon"></i>
              <span class="menu-title">Balita</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('informasi') }}">
              <i class="mdi mdi-alert menu-icon"></i>
              <span class="menu-title">Informasi</span>
            </a>
          </li>
    </ul>
  </nav>
  @endif