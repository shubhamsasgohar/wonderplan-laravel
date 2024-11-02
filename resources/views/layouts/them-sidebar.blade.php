<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <a href="javascript:void(0)" class="brand-link">
            <span class="brand-text fw-light">WonderPlan Admin</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Manage Blogs
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.blogs.index') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Blogs</p>
                            </a> </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blogs.create') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Create Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
