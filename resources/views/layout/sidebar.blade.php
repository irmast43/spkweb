<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    {{-- <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
    </div> --}}
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href=""><img src="../assets/images/gresik.png" alt="User"></a></div>
                    <div class="detail">
                        <h4>Admin</h4>
                        <small> Kantor Cagak Agung</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}">
                <a href="{{url('/dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <li class="{{ Request::segment(1) === 'Kriteria' ? 'active open' : null }}">
                {{-- <a href="#" class="menu-toggle"> --}}
                <a href="{{route('kriteria')}}"><i class="zmdi zmdi-assignment"></i><span>Kriteria</span></a>
                {{-- <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('kriteria.tambah')}}">Input Kriteria</a></li>
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('kriteria')}}">Lihat Kriteria</a></li>
                </ul> --}}
            </li>

            <li class="{{ Request::segment(1) === 'form' ? 'active open' : null }}">
                <a href="#Form" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Alternatif</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('alternatif.tambah')}}">Input Alternatif</a></li>
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('alternatif')}}">Lihat Alternatif</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'form' ? 'active open' : null }}">
                <a href="#Form" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Pembobotan</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('alternatif')}}">Bobot Alternatif</a></li>
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('bobot.ahp')}}">Matriks Perbandingan AHP-TOPSIS</a></li>
                    <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('bobot.inputahp')}}">Input AHP</a></li>
                </ul>
            </li>

            {{-- <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#('tables.normal')}}">Normal Tables</a></li>
                    <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href="#('tables.datatable')}}">Jquery Datatables</a></li>
                    <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="#('tables.editable')}}">Editable Tables</a></li>
                    <li class="{{ Request::segment(2) === 'footable' ? 'active' : null }}"><a href="#('tables.footable')}}">Foo Tables</a></li>
                    <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="#('tables.color')}}">Tables Color</a></li>
                </ul>
            </li> --}}

            <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-view-toc"></i><span>AHP-TOPSIS</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#('tables.normal')}}">Nilai Bobot Alternatif</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-view-list-alt"></i><span>COPRAS</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#('tables.normal')}}">Nilai Bobot Alternatif</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                <a href="#Tables" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Confusion Matrix</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#('tables.normal')}}">Normal Tables</a></li>
                    <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href="#('tables.datatable')}}">Jquery Datatables</a></li>
                    <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="#('tables.editable')}}">Editable Tables</a></li>
                    <li class="{{ Request::segment(2) === 'footable' ? 'active' : null }}"><a href="#('tables.footable')}}">Foo Tables</a></li>
                    <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="#('tables.color')}}">Tables Color</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
