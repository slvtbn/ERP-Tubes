  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index3.html" class="brand-link">
      <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Makup-Manage</span>
    </a>
    
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/product') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Varian Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/komponen" class="nav-link">
              <i class="nav-icon fas fa-flask"></i>
              <p>
                Komponen Pembuatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/harga_komponen" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Harga Komponen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/order" class="nav-link">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/production" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Production Product
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/data_karyawan" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Karyawan
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>