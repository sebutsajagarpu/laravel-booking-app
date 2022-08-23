<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('BKKBN') }}</div>
            </a>

            <!-- Divider -->
            <!-- Divider -->
            <hr class="sidebar-divider">

                                 <!-- Nav Item  -->
                                 <li class="nav-item {{ request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.system_calendars.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index') }}" aria-expanded="true" aria-controls="collapseTwo">
                    <span>List Driver</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.rooms.index') }}" aria-expanded="true" aria-controls="collapseTwo">
                    <span>List Kendaraan</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bookings.index') }}"  aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Jadwal Driver') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.fungsi.index') }}"  aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Fungsi') }}</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
            </li>




        </ul>