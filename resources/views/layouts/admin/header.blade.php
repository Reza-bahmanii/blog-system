<!-- Navbar -->
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"
                       data-lte-toggle="sidebar"
                       href="#">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link">پنل مدیریت</span>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="app-sidebar bg-body-secondary shadow"
           data-bs-theme="dark">

        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}" class="brand-link">
                <span class="brand-text fw-light">پنل مدیریت</span>
            </a>
        </div>

        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    role="menu">

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link active">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>داشبورد</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('dashboard.posts') }}" class="nav-link">
                            <i class="nav-icon bi bi-file-earmark-text"></i>
                            <p>مدیریت مطالب</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('dashboard.users') }}" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>مدیریت کاربران</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </aside>