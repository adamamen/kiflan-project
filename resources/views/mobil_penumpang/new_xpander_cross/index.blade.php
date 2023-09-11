<!DOCTYPE html>
<html lang="zxx">

@include('layout.header')

<body>

    <div class="body_overlay"></div>

    <!--Preloader starts-->
    <div class="loader js-preloader">
        <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(2 1)" stroke="#E70D3D" fill="none" fill-rule="evenodd" stroke-linecap="round"
                stroke-linejoin="round">
                <path class="car__body"
                    d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01"
                    stroke-width="2" />
                <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25"
                    rx="6.922" ry="6.808" />
                <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25"
                    rx="6.922" ry="6.808" />
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

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap br-25 bg-f">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>New Xpander Cross</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="#">Katalog </a></li>
                    <li><a href="#">Mobil Penumpang </a></li>
                    <li>New Xpander Cross</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Details Section Start -->
    <div class="blog-details-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                    <div class="search-result-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-7">
                                <p>Showing 1 - {{ count($mobil) }} of {{ count($mobil) }} Results</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($mobil as $value)
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="{{ $value['picture'] }}" alt="Image">
                                    </div>
                                    <div class="product-info">
                                        <h3><a href="{{ $value['picture_harga'] }}"
                                                data-fancybox="gallery">{{ $value['nama'] }}</a></h3>
                                        <div class="product-price">Harga: Rp {{ number_format($value['harga']) }} </div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>{{ $value['transmisi'] }} <span>{{ $value['autometic'] }}</span></li>
                                        </ul>
                                        <!-- <a href="listing-details.html" class="btn-one">Selengkapnya</a> -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?"
                target="_blank" class="btn-one">
                <img src="assets/img/whatsapp.png" alt="whatsapp" width="19" height="19"> Hubungi Kami
            </a>
        </div>
    </div>
    <!-- Listing Section End -->

    <!-- Gallery  -->
    <section class="terms-wrap pt-100 pb-100">
        <div class="container">
            <div class="section-title-one text-center mb-40">
                <span>Gallery</span>
                <h2>Interior</h2>
            </div>
            <div class="row">
                @foreach ($gallery as $value)
                    @if (substr($value['assets'], 36, 8) == 'Interior')
                        <div class="col-md-4">
                            <a class="single-service-img" data-fancybox="gallery" href="{{ $value['assets'] }}">
                                <img src="{{ $value['assets'] }}" alt="Image">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="section-title-one text-center mb-40">
                <span>Gallery</span>
                <h2>Exterior</h2>
            </div>
            <div class="row">
                @foreach ($gallery as $value)
                    @if (substr($value['assets'], 36, 8) == 'Exterior')
                        <div class="col-md-4">
                            <a class="single-service-img" data-fancybox="gallery" href="{{ $value['assets'] }}">
                                <img src="{{ $value['assets'] }}" alt="Image">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div style="text-align:center">
            <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?"
                target="_blank" class="btn-one">
                <img src="assets/img/whatsapp.png" alt="whatsapp" width="19" height="19"> Hubungi Kami
            </a>
        </div>
    </section>
    <!-- End Gallery  -->

    <!-- Youtube -->
    <section class="terms-wrap pt-100 pb-100">
        <div class="container">
            <div class="section-title-one text-center mb-40">
                <span>YouTube</span>
                <h2>YouTube</h2>
            </div>
            <div class="container">
                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FiTlP4Y_5P0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </center>
            </div>
        </div>
    </section>
    <!-- End Youtube -->

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

</html>
