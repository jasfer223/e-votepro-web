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

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-elections' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-elections') }}">
                <i class="bi bi-archive"></i>
                Elections
            </a>
        </li><!-- End Elections Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-parties' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-parties') }}">
                <i class="bi bi-flag"></i>
                <span>Parties</span>
            </a>
        </li><!-- End Parties Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-candidates' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-candidates') }}">
                <i class="bi bi-person-bounding-box
                "></i>
                <span>Candidates</span>
            </a>
        </li><!-- End Candidates Nav -->

        {{-- <li class="nav-item">
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
        </li><!-- End Forms Nav --> --}}

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
                <i class="bi bi-person-square"></i>
                <span>Officers</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'admin.admin-admins' ? '' : 'collapsed' }}"
                href="{{ route('admin.admin-admins') }}">
                <i class="bi bi-shield-lock"></i>
                <span>Admins</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
