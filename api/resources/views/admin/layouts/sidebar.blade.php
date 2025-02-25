<!--begin::Sidebar-->
<aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color:#000">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('/img/logo.jpg') }}"
              alt="CarBid Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light"></span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
                <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link">
                <i class="bi bi-house"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/vehiculo')}}" class="nav-link">
                <i class="bi bi-car-front-fill"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/venta')}}" class="nav-link">
                <i class="bi bi-wallet"></i>
                  <p>Ventas</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/users')}}" class="nav-link">
                <i class="bi bi-person-circle"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              </li>
           
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->