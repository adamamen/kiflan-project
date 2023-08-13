<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibotheme.com/motoz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2023 06:08:37 GMT -->

@include('layout.header')

<body>
    <div class="body_overlay"></div>

    <!--Preloader starts-->
    <div class="loader js-preloader">
        <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(2 1)" stroke="#E70D3D" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                <path class="car__body" d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01" stroke-width="2" />
                <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25" rx="6.922" ry="6.808" />
                <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25" rx="6.922" ry="6.808" />
                <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="2" />
                <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="2" />
                <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="2" />
            </g>
        </svg>
    </div>
    <!--Preloader ends-->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Header Section Start -->
    <header class="header-wrap header-one">
        @include('layout.header2')
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- End Navbar -->
    </header>
    @include('layout.sidebar')
    <!-- Header Section End -->

    <!-- Hero Section Start -->
    <div class="hero-wrap hero-one">
        <img src="assets/img/hero/hero-shape-1.webp" alt="Image" class="hero-shape-one bounce">
        <img src="assets/img/hero/hero-shape-2.webp" alt="Image" class="hero-shape-two moveHorizontal">
        <img src="assets/img/hero/hero-shape-3.webp" alt="Image" class="hero-shape-three animationFramesTwo">
        <img src="assets/img/hero/hero-shape-4.webp" alt="Image" class="hero-shape-four moveHorizontal">
        <img src="assets/img/hero/hero-bg-shape.webp" alt="Image" class="hero-bg-shape">
        <div class="container-fluid">
            <div class="hero-slider-one owl-carousel">
                @foreach ($home as $value)
                @if ($value['kategori'] != "Promo")
                <div class="hero-slide-item">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="hero-content">
                                <span>{{ $value['tahun_mobil'] }}</span>
                                <h1>{{ $value['nama_mobil'] }}</h1>
                                <p>{{ $value['nama'] }}</p>
                                <div class="hero-btn">
                                    <a href="{{ $value['url'] }}" class="btn-three">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-6 col-lg-6">
                            <div class="hero-img-wrap">
                                <div class="hero-promo-box"></div>
                                <img class="hero-img" src="{{ $value['picture'] }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div id="hero-slide-counter"></div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Product Section Start -->
    <div class="product-wrap pt-100 pb-70">
        <div class="container">

            <!-- Mobil Penumpang -->
            <div class="section-title-one text-center mb-40">
                <span>Katalog</span>
                <h2>Mobil Penumpang</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($home as $value)
                @if ($value['kategori'] == 'mobil_penumpang')
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="product-card-one">
                        <div class="product-img">
                            <img src="{{ $value['picture'] }}" alt="Image">
                        </div>
                        <div class="product-info">
                            <h3><a href="{{ $value['url'] }}">{{ $value['nama_mobil'] }}</a></h3>
                            <div class="product-price">Harga Mulai: <br>Rp {{ number_format($value['harga']) }}</div>
                            <ul class="product-amenity list-style">
                                <li>Transmission <span>Drive</span></li>
                                <li>{{ $value['transmisi'] }} <span>{{ $value['autometic'] }}</span></li>
                            </ul>
                            <a href="{{ $value['url'] }}" class="btn-one">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <!-- End Mobil Penumpang  -->

            <!-- Truk dan Bus -->
            <div class="section-title-one text-center mb-40">
                <span>Katalog</span>
                <h2>Truk & Bus</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($home as $value)
                @if ($value['kategori'] == 'truk_dan_bus')
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="product-card-one">
                        <div class="product-img">
                            <img src="{{ $value['picture'] }}" alt="Image">
                        </div>
                        <div class="product-info">
                            <h3><a href="{{ $value['url'] }}">{{ $value['nama_mobil'] }}</a></h3>
                            <div class="product-price">Harga Mulai: <br>Rp {{ number_format($value['harga']) }}</div>
                            <ul class="product-amenity list-style">
                                <li>Transmission <span>Drive</span></li>
                                <li>{{ $value['transmisi'] }} <span>{{ $value['autometic'] }}</span></li>
                            </ul>
                            <a href="{{ $value['url'] }}" class="btn-one">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <!-- End Truk dan Bus -->

            <div style="text-align:center">
                <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?" target="_blank" class="btn-one">
                    <img src="assets/img/whatsapp.png" alt="whatsapp" width="19" height="19"> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <div class="product-wrap bg_primary pt-100 pb-70">
        <div class="container">

            <!-- Mobil Penumpang -->
            <div class="section-title-one text-center mb-40">
                <span>Promo</span>
                <h2>Promo</h2>
            </div>
            <div class="single-service-img">
                <center>
                    @foreach ($home as $value)
                    @if ($value['kategori'] == "Promo")
                    <img src="{{ $value['picture'] }}" alt="Image">
                    @endif
                    @endforeach
                </center>
            </div>
        </div>
    </div>

    <!-- Footer Section Start -->
    @include('layout.footer')
    <!-- Footer Section End -->

    <!-- Back-to-top button Start -->
    <div class="paginacontainer">
        <div class="progress-wrap bounce">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!-- Back-to-top button End -->

    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src='../../../unpkg.com/ionicons%405.0.0/dist/ionicons.js'></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from templates.hibotheme.com/motoz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2023 06:09:02 GMT -->

</html>