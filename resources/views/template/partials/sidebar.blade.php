'<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset (('Adminlte/index3.html'))}}" class="brand-link">
      <img src="{{ asset (('Adminlte/dist/img/AdminLTELogo.png'))}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Laudry Zons</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset (('Adminlte/dist/img/user2-160x160.jpg'))}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lionel Fauzan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (auth()->user()->role === 'admin')
               <li class="nav-header">LIST OUTLET</li>
          <li class="nav-item">
          <a href="/outlet" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                List Outlet
              </p>
            </a>
          </li>
          <li class="nav-header">LIST PAKET</li>
          <li class="nav-item">
          <a href="/paket" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                List Paket
              </p>
            </a>
          </li>
          <li class="nav-header">LIST MEMBER</li>
          <li class="nav-item">
            <a href="/member" class="nav-link">
                <i class="nav-icon fas fa-tag"></i>
                <p>
                  List Member
                </p>
              </a>
            </li>
          @endif
          <li class="nav-header">LIST TRANSAKSI</li>
          <li class="nav-item">
            <a href="/transaksi" class="nav-link">
                <i class="nav-icon fas fa-tag"></i>
                <p>
                  List Transaksi
                </p>
              </a>
            </li>
            </ul>
          </li>
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>'