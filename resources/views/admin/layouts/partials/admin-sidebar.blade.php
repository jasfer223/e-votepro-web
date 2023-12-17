<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-dashboard' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="components-nav"
                class="nav-content collapse {{ Route::currentRouteName() === 'admin.admin-blank' ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/admin/blank" class="active">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav --> --}}


        <li class="nav-item">
            <a class="nav-link
                {{ Route::currentRouteName() === 'admin.admin-elections' ||
                Route::currentRouteName() === 'admin.admin-parties' ||
                Route::currentRouteName() === 'admin.admin-candidates'
                    ? ''
                    : 'collapsed' }}"
                data-bs-target="#elections-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Elections</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="elections-nav"
                class="nav-content collapse
                {{ Route::currentRouteName() === 'admin.admin-elections' ||
                Route::currentRouteName() === 'admin.admin-parties' ||
                Route::currentRouteName() === 'admin.admin-candidates'
                    ? 'show'
                    : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.admin-elections') }}"
                        class="{{ Route::currentRouteName() === 'admin.admin-elections' ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Elections</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.admin-parties') }}"
                        class="{{ Route::currentRouteName() === 'admin.admin-parties' ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Parties</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.admin-candidates') }}"
                        class="{{ Route::currentRouteName() === 'admin.admin-candidates' ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Candidates</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-results' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-results') }}">
                <i class="bi bi-bar-chart-line"></i>
                <span>Results</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-students' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-students') }}">
                <i class="bi bi-people"></i>
                <span>Students</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-officers' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-officers') }}">
                <i class="bi bi-people"></i>
                <span>Officers</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-admins' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-admins') }}">
                <i class="bi bi-person-check"></i>
                <span>Admins</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
