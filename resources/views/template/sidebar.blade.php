  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('gambar/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hidayah Arif</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Toko
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-toko') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('create-data') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('edit-data') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delete-data') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hapus Data</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>