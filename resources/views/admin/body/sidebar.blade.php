<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route ('dashboard')}}">
             <img src="{{ asset('backend/assets/img/logo/pm.png') }}" alt="pm" width="50px" height="50px" >
        <span class="brand-name">Admin Dashboard</span>
        </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">


        <li  class="has-sub active" >
            <a class="sidenav-item-link" href="{{ route('dashboard') }}"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>

            <li  class="has-sub expand" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Register page</span> <b class="caret"></b>
            </a>
            <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('reg.police') }}">
                        <span class="nav-text">Policeman registration</span>

                        </a>
                    </li>
                    <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('reg.prisoner') }}">
                        <span class="nav-text">Prisoner Registration</span>

                        </a>
                    </li>
                    <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('singup.veiwer') }}">
                        <span class="nav-text">Visitor registration</span>

                        </a>
                    </li>
                </div>
            </ul>
            </li>
            <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.police') }}">
                        <span class="nav-text">Police table</span>
                        </a>
                    </li>
            <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.presoner') }}">
                        <span class="nav-text">Prisoner table</span>
                        </a>
                    </li>
                  <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.visitor') }}">
                        <span class="nav-text">Visitor table</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.health') }}">
                        <span class="nav-text">Health record</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.parole') }}">
                        <span class="nav-text">Parole record</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="sidenav-item-link" href="{{ route('table.crime_rc') }}">
                        <span class="nav-text">Crime record Table</span>
                        </a>
                    </li>
                    <li  class="has-sub expand" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard_2"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Other Reg Page</span> <b class="caret"></b>
            </a>
            <ul  class="collapse show"  id="dashboard_2"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('reg.crime') }}">
                        <span class="nav-text">Crime record</span>

                        </a>
                    </li>
                    <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('reg.health') }}">
                        <span class="nav-text">Health</span>

                        </a>
                    </li>
                    <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('set.parole') }}">
                        <span class="nav-text">Parole</span>

                        </a>
                    </li>
                </div>
            </ul>
            </li>

              </ul>

            </div>

            <hr class="separator" />

          </div>
        </aside>
