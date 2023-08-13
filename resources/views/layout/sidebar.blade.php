<div class="sidebar-popup">
    <div class="sidebar-popup-wrap">
        <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
        <div class="comp-logo">
            <a href="{{ route('home.index') }}">
                <img src="assets/img/mitsubishi-logo-67EA251D5A.png" alt="Image" style="width: 25%;">
            </a>
        </div>
        @foreach ($contact as $value)
        <ul class="contact-box list-style">
            <li>
                <b>Lokasi : </b>
                <p>{{ $value['lokasi'] }}</p>
            </li>
            <li>
                <b>No Handphone : </b>
                <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?">{{ $value['no_handphone'] }}</a>
            </li>
            <li>
                <b>Email : </b>
                <a><span>{{ $value['email'] }}</span></a>
            </li>
        </ul>
        <ul class="social-profile list-style">
            <li>
                <a target="_blank" href="https://facebook.com/">
                    <i class="ri-facebook-line"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://instagram.com/">
                    <i class="ri-instagram-line"></i>
                </a>
            </li>
            <li>
                <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?" target="_blank">
                    <img src="assets/img/whatsapp.png" alt="whatsapp" width="16" height="16" style="margin-top: -50%;">
                </a>
            </li>
        </ul>
        @endforeach
    </div>
</div>