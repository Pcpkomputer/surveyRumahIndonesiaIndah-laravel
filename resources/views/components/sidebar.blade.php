<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <div style="color:#38d49e;font-weight:bold;font-size:35px">SRI</div>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{($selected==='dashboard') ? 'active':''}}" href="{{url('/dashboard')}}">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            
            
          
            <!-- <li class="nav-item">
              <a class="nav-link" href="icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Data Master</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link {{($selected==='surveyor') ? 'active':''}}" href="{{url('/surveyor')}}">
                    <i class="ni ni-badge"></i>
                    <span class="nav-link-text">Surveyor</span>
                </a>
                </li>
          </ul>


          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">ALUR SURVEY</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="{{url('/coldfile')}}">
                    <i class="ni ni-single-copy-04"></i>
                    <span class="nav-link-text">Cold File</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="{{url('/surveyawal')}}">
                    <i class="ni ni-single-copy-04"></i>
                    <span class="nav-link-text">Survey Awal</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="{{url('/surveyor')}}">
                    <i class="ni ni-single-copy-04"></i>
                    <span class="nav-link-text">Survey Lanjutan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="coldfile">
                    <i class="ni ni-single-copy-04"></i>
                    <span class="nav-link-text">Hitung Bisnis</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="coldfile">
                    <i class="ni ni-single-copy-04"></i>
                    <span class="nav-link-text">Uji Tuntas Status Tanah</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="coldfile">
                    <i class="ni ni-satisfied"></i>
                    <span class="nav-link-text">Buat Janji Untuk Penawaran</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="coldfile">
                    <i class="ni ni-paper-diploma"></i>
                    <span class="nav-link-text">Transaksi Selesai</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($selected==='coldfile') ? 'active':''}}" href="coldfile">
                    <i class="ni ni-money-coins"></i>
                    <span class="nav-link-text">Ready For Sale</span>
                </a>
              </li>
              
          </ul>

          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Aksi Lain</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-button-power"></i>
                <span class="nav-link-text">Keluar</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>