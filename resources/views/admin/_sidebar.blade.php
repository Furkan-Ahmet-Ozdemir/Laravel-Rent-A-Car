<nav class="sidebar sidebar-offcanvas" id="sidebar" style="margin-right: fill;margin-left: auto">
    <ul class="nav" style="margin-right: fill;margin-left: fill;padding-left: 25px"
        <li class="nav-item nav-category">Main</li>

        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="{{route('admin_cars')}}" class="nav-link"><i ></i>
                    <span class="menu-title">Cars</span>
                </a>
            </div>
        </li>

        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="{{route('admin_category')}}" class="nav-link"><i ></i>
                    <span class="menu-title">Category</span>
                </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="{{route('admin_setting')}}" class="nav-link"><i ></i>
                    <span class="menu-title">Settings</span>
                </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i ></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
        </li>

        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="{{route('admin_logout')}}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>
