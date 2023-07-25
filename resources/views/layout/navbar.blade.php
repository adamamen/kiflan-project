<div class="header-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img class="logo-light" src="assets/img/mitsubishi-logo-67EA251D5A.png" alt="logo" style="width: 25%;">
                <img class="logo-dark" src="assets/img/mitsubishi-logo-67EA251D5A.png" alt="logo" style="width: 25%;">
            </a>
            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                <div class="menu-close d-lg-none">
                    <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                </div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item has-child">
                        <a href="{{ route('home.index') }}" class="nav-link active">Home<i class="nav-link"></i></a>
                    </li>
                    <li class="nav-item has-child">
                        <a href="#" class="nav-link">Katalog <i class="flaticon-down-arrow"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Mobil Penumpang<i class="flaticon-down-arrow"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('xfc.index') }}" class="nav-link">XFC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pajero.index') }}" class="nav-link">New Pajero Sport</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('xpander.index') }}" class="nav-link">New Xpander</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('xpander_cross.index') }}" class="nav-link">New Xpander Cross</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Truk & Bus<i class="flaticon-down-arrow"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('colt_l300.index') }}" class="nav-link">Colt L300</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kontak.index') }}" class="nav-link">Kontak</a>
                    </li>
                </ul>
                <div class="other-options md-none">
                    <div class="option-item">
                        <button class="sidebar-btn"><i class="flaticon-menu"></i></button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mobile-bar-wrap">
            <button class="sidebar-btn  d-lg-none"><i class="flaticon-menu"></i></button>
            <div class="mobile-menu d-lg-none">
                <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
            </div>
        </div>
    </div>
</div>