<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="../assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">SPK</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Admin</h4>
                        <small> Kantor Cagak Agung</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="#"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'form' ? 'active open' : null }}">
                <a href="#Form" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Kriteria</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="#">Input Kriteria</a></li>
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="#('form.advanced')}}">Lihat Kriteria</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'form' ? 'active open' : null }}">
                <a href="#Form" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Alternatif</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="#('form.basic')}}">Input Alternatif</a></li>
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="#('form.advanced')}}">Lihat Alternatif</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#('tables.normal')}}">Normal Tables</a></li>
                    <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href="#('tables.datatable')}}">Jquery Datatables</a></li>
                    <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="#('tables.editable')}}">Editable Tables</a></li>
                    <li class="{{ Request::segment(2) === 'footable' ? 'active' : null }}"><a href="#('tables.footable')}}">Foo Tables</a></li>
                    <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="#('tables.color')}}">Tables Color</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'authentication' ? 'active open' : null }}">
                <a href="#Authentication" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href="#('authentication.login')}}">Sign In</a></li>
                    <li class="{{ Request::segment(2) === 'register' ? 'active' : null }}"><a href="#('authentication.register')}}">Sign Up</a></li>
                    <li class="{{ Request::segment(2) === 'lockscreen' ? 'active' : null }}"><a href="#('authentication.lockscreen')}}">Locked Screen</a></li>
                    <li class="{{ Request::segment(2) === 'forgot' ? 'active' : null }}"><a href="#('authentication.forgot')}}">Forgot Password</a></li>
                    <li class="{{ Request::segment(2) === 'page404' ? 'active' : null }}"><a href="#('authentication.page404')}}">Page 404</a></li>
                    <li class="{{ Request::segment(2) === 'page500' ? 'active' : null }}"><a href="#('authentication.page500')}}">Page 500</a></li>
                    <li class="{{ Request::segment(2) === 'offline' ? 'active' : null }}"><a href="#('authentication.offline')}}">Page Offline</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'pages' ? 'active open open_top' : null }}">
                <a href="#Pages" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a href="#('pages.blank')}}">Blank Page</a></li>
                    <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}"><a href="#('pages.gallery')}}">Image Gallery</a></li>
                    <li class="{{ Request::segment(2) === 'invoices1' ? 'active' : null }}"><a href="#('pages.invoices1')}}">Invoices</a></li>
                    <li class="{{ Request::segment(2) === 'invoices2' ? 'active' : null }}"><a href="#('pages.invoices2')}}">Invoices List</a></li>
                    <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a href="#('pages.pricing')}}">Pricing</a></li>
                    <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="#('pages.profile')}}">Profile</a></li>
                    <li class="{{ Request::segment(2) === 'search' ? 'active' : null }}"><a href="#('pages.search')}}">Search Results</a></li>
                    <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a href="#('pages.timeline')}}">Timeline</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
