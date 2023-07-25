<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            @foreach ($contact as $value)
            <div class="col-xl-8 col-lg-9">
                <div class="header-top-left">
                    <ul class="contact-info list-style">
                        <li>
                            <span>No Handphone : </span><a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?">{{$value['no_handphone'] }}</a>
                        </li>
                        <li>
                            <span>Lokasi : </span>{{ $value['lokasi'] }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3">
                <div class="header-top-right">
                    <div class="social-link">
                        <span>Follow Us:</span>
                        <ul class="social-profile list-style">
                            <li>
                                <a href="https://facebook.com/">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?" target="_blank">
                                    <img src="assets/img/whatsapp.png" alt="whatsapp" width="19" height="19">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>