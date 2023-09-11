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
    <div class="breadcrumb-wrap br-20 bg-f">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Kontak</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home.index') }}">Home </a></li>
                    <li>Kontak</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100">
        <div class="container">
            <div class="section-title-one text-center mb-40">
                <span>Kontak</span>
                <h2>Kontak</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-12">
                    @foreach ($contact as $value)
                        <div class="contact-item-wrap">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="location"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Lokasi</h3>
                                    <p>
                                        {{ $value['lokasi'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="mail"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Email</h3>
                                    <span class="__cf_email__">{{ $value['email'] }}</span></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="call"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>No Handphone</h3>
                                    <a
                                        href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?">{{ $value['no_handphone'] }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="contact-form">
                        <form class="form-wrap" id="contactForm" action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nama" placeholder="Nama*" id="nama" required
                                            data-error="* Masukkan nama anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="no_handphone" id="no_handphone" required
                                            placeholder="No Handphone*" data-error="* Masukkan no handphone anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select id="mobil" name="mobil" required>
                                            <option selected disabled value="">-- Pilih Mobil Anda --</option>
                                            <option value="1">XFC</option>
                                            <option value="2">New Pajero Sport</option>
                                            <option value="3">New Xpander</option>
                                            <option value="4">New Xpander Cross</option>
                                            <option value="5">Colt L300</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select id="lokasi" name="lokasi" required>
                                            <option selected disabled value="">-- Pilih Lokasi Anda --</option>
                                            <option value="1">DKI Jakarta</option>
                                            <option value="2">Bogor</option>
                                            <option value="3">Depok</option>
                                            <option value="4">Tangerang</option>
                                            <option value="5">Bekasi</option>
                                            <option value="6">Karawang</option>
                                            <option value="7">Dan Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group v1">
                                        <textarea name="pesan" id="pesan" placeholder="Pesan anda.." cols="30" rows="10" required
                                            data-error="* Masukkan pesan anda"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn-two">Submit</button>
                                    <!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->

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
    <!-- <script src="assets/js/contact-form-script.js"></script> -->
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
