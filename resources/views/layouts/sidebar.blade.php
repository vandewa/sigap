      <!-- Preloader --> {{-- <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
              height="60" width="60">
      </div> --}}

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="ml-auto navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <div class="d-flex align-items-center">
                          <div class="ms-3"><i class="mr-2 fas fa-sign-out-alt"></i></i>Keluar</div>
                      </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-success elevation-4">
          <!-- Brand Logo -->
          <a href="{{ route('dashboard') }}" class="brand-link">
              {{-- <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
              <img src="{{ asset('pemda.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8">
              <span class="brand-text font-weight-light">SIGAP</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                  <div class="image">
                      <img src="{{ asset('soul.png') }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <li class="nav-item">
                          <a href="{{ route('dashboard') }}"
                              class="nav-link  {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}{{ Request::segment(1) == '' ? 'active' : '' }}">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>

                      <li
                          class="nav-item  
                        {{ Request::segment(1) == 'pemeliharaan' ? 'active' : '' }}
                        {{ Request::segment(1) == 'transaksi' ? 'active' : '' }}
                        ">
                          <a href="{{ route('pemeliharaan') }}"
                              class="nav-link  
                              {{ Request::segment(1) == 'pemeliharaan' ? 'active' : '' }}
                              {{ Request::segment(1) == 'transaksi' ? 'active' : '' }}
                              ">
                              <i class="nav-icon fas fa-car"></i>
                              <p>
                                  Pemeliharaan
                              </p>
                          </a>
                      </li>
                      <li
                          class="nav-item  
                        {{ Request::segment(1) == 'kegiatan' ? 'active' : '' }}
                        ">
                          <a href="{{ route('kegiatan') }}"
                              class="nav-link  
                              {{ Request::segment(1) == 'kegiatan' ? 'active' : '' }}
                              ">
                              <i class="nav-icon fas fa-book-reader"></i>
                              <p>
                                  Kegiatan
                              </p>
                          </a>
                      </li>
                      @if (auth()->user()->hasRole('superadmin'))
                          <li
                              class="nav-item  
                        {{ Request::segment(1) == 'keuangan' ? 'active' : '' }}
                        ">
                              <a href="{{ route('keuangan') }}"
                                  class="nav-link  
                              {{ Request::segment(1) == 'keuangan' ? 'active' : '' }}
                              ">
                                  <i class="nav-icon fas fa-money-bill-alt"></i>
                                  <p>
                                      Keuangan
                                  </p>
                              </a>
                          </li>

                          {{-- <li
                          class="nav-item
                                {{ Request::segment(2) == 'list-role' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'role' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'permission' ? 'menu-is-opening menu-open' : '' }}
                              ">
                          <a href="#"
                              class="nav-link
                                  {{ Request::segment(2) == 'list-role' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'role' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'permission' ? 'active' : '' }}
                                  ">
                              <i class="nav-icon fa-solid fa-user"></i>
                              <p>
                                  User
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('admin.list-role') }}"
                                      class="nav-link {{ Request::segment(2) == 'list-role' ? 'active' : '' }} {{ Request::segment(2) == 'role' ? 'active' : '' }}">
                                      @if (Request::segment(2) == 'list-role')
                                          <i class="far fa-dot-circle nav-icon ml-2"></i>
                                      @elseif (Request::segment(2) == 'role')
                                          <i class="far fa-dot-circle nav-icon ml-2"></i>
                                      @else
                                          <i class="far fa-circle nav-icon ml-2"></i>
                                      @endif
                                      <p>Role</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.permission') }}"
                                      class="nav-link {{ Request::segment(2) == 'permission' ? 'active' : '' }}">
                                      @if (Request::segment(2) == 'permission')
                                          <i class="far fa-dot-circle nav-icon ml-2"></i>
                                      @else
                                          <i class="far fa-circle nav-icon ml-2"></i>
                                      @endif
                                      <p>Permission</p>
                                  </a>
                              </li>
                          </ul>
                      </li> --}}

                          <li
                              class="nav-item
                                {{ Request::segment(2) == 'kendaraan' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'perawatan' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'saldo' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'user-index' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'user' ? 'menu-is-opening menu-open' : '' }}
                              ">
                              <a href="#"
                                  class="nav-link
                                  {{ Request::segment(2) == 'kendaraan' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'perawatan' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'saldo' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'user-index' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'user' ? 'active' : '' }}
                                  ">
                                  <i class="nav-icon fa-solid fa-file-lines"></i>
                                  <p>
                                      Master
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('master.kendaraan') }}"
                                          class="nav-link {{ Request::segment(2) == 'kendaraan' ? 'active' : '' }} {{ Request::segment(2) == 'role' ? 'active' : '' }}">
                                          @if (Request::segment(2) == 'kendaraan')
                                              <i class="far fa-dot-circle nav-icon ml-2"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-2"></i>
                                          @endif
                                          <p>Kendaraan</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('master.perawatan') }}"
                                          class="nav-link {{ Request::segment(2) == 'perawatan' ? 'active' : '' }}">
                                          @if (Request::segment(2) == 'perawatan')
                                              <i class="far fa-dot-circle nav-icon ml-2"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-2"></i>
                                          @endif
                                          <p>Perawatan</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('master.saldo') }}"
                                          class="nav-link {{ Request::segment(2) == 'saldo' ? 'active' : '' }}">
                                          @if (Request::segment(2) == 'saldo')
                                              <i class="far fa-dot-circle nav-icon ml-2"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-2"></i>
                                          @endif
                                          <p>Saldo</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('master.user-index') }}"
                                          class="nav-link 
                                      {{ Request::segment(2) == 'user-index' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'user' ? 'active' : '' }}
                                      ">
                                          @if (Request::segment(2) == 'user-index')
                                              <i class="far fa-dot-circle nav-icon ml-2"></i>
                                          @elseif(Request::segment(2) == 'user')
                                              <i class="far fa-dot-circle nav-icon ml-2"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-2"></i>
                                          @endif
                                          <p>User</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      @endif

                  </ul>

              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
