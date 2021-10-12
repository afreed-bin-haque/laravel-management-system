<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route ('udashboard')}}">
             <img src="{{ asset('backend/assets/img/logo/pm.png') }}" alt="pm" width="50px" height="50px" >
        <span class="brand-name">Dashboard</span>
        </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">


        <li  class="has-sub active" >
            <a class="sidenav-item-link" href="{{ route('udashboard') }}"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Welcome <br> {{ Auth::user()->name }}</span>
            </a>
        </li>


            <li  class="has-sub expand" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">View Sections</span> <b class="caret"></b>
            </a>
            <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    @php($auth=Auth::user()->position)
                    @if($auth === 'Police')
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.all') }}">
                        <span class="nav-text">Presioner list</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.visitorall') }}">
                        <span class="nav-text">Vistor list</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.healthall') }}">
                        <span class="nav-text">Health Record</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.paroleall') }}">
                        <span class="nav-text">Parole</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.crimeall') }}">
                        <span class="nav-text">Crime Record</span>
                        </a>
                    </li>
                    @elseif(($auth === 'Prisoner'))
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.healthp') }}">
                        <span class="nav-text">Health Record</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.parolep') }}">
                        <span class="nav-text">Parole</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.crimep') }}">
                        <span class="nav-text">Crime Record</span>
                        </a>
                    </li>
                    @elseif(($auth === 'Visitor'))
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.healthv') }}">
                        <span class="nav-text">Health Record</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.parolev') }}">
                        <span class="nav-text">Parole</span>
                        </a>
                    </li>
                    <li >
                        <a class="sidenav-item-link" href="{{ route('table.crimev') }}">
                        <span class="nav-text">Crime Record</span>
                        </a>
                    </li>
                    @endif
                </div>
            </ul>
            </li>

              </ul>

            </div>

            <hr class="separator" />

          </div>
        </aside>
