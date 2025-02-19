<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('dashboard')}}">
                <img alt="image" src="{{ asset('assets/img/logo.jpg') }}" style="height: 70px;" class="header-logo" />
                <span class="logo-name" style="font-size: 12px;">Construction</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            {{-- Builder Management dropdown --}}
            <li class="dropdown {{ request()->routeIs('builder.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Builder Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('builder.list') }}">List of Builder</a></li>
                    <li><a class="nav-link" href="{{ route('builder.add') }}">Add Builder</a></li>
                </ul>
            </li>

            {{-- Project Management dropdown --}}
            <li class="dropdown {{ request()->routeIs('project.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="globe"></i><span>Project Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Create Package</a></li>
                    <li><a class="nav-link" href="#">Add Package</a></li>
                </ul>
            </li>

            {{-- My Municipal dropdown --}}
            <li class="dropdown {{ request()->routeIs('municipal.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>My Municipal</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Project Approval</a></li>
                    <li><a class="nav-link" href="#">Project Objection</a></li>
                </ul>
            </li>

            {{-- Compliance dropdown --}}
            <li class="dropdown {{ request()->routeIs('compliance.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="trello"></i><span>Compliance</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('compliance.list') }}">List Of Compliance</a></li>
                </ul>
            </li>

            {{-- Communication dropdown --}}
            <li class="dropdown {{ request()->routeIs('communication.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Communication</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Chat</a></li>
                    <li><a class="nav-link" href="#">Email</a></li>
                    <li><a class="nav-link" href="#">WhatsApp</a></li>
                </ul>
            </li>

            {{-- Settings dropdown --}}
            <li class="dropdown {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Roles & Permissions</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
