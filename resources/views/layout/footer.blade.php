<footer class="footer-wrap">
    <div class="container">
        <div class="row pt-100 pb-75">
            @foreach ($contact as $value)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title" style="margin-left: 9%;">Contact Person</h3>
                    <ul class="contact-info list-style">
                        <li>
                            <ion-icon name="location"></ion-icon>
                            <h6>Lokasi </h6>
                            <p>{{ $value['lokasi'] }}</p>
                        </li>
                        <li>
                            <ion-icon name="mail"></ion-icon>
                            <h6>Email</h6>
                            <a href="#"><span class="__cf_email__" data-cfemail="066e636a6a69466b6972697c2865696b">{{ $value['email'] }}</span></a>
                        </li>
                        <li>
                            <ion-icon name="call"></ion-icon>
                            <h6>No Handphone</h6>
                            <a href="https://wa.me/+6285717471340?text=Saya%20tertarik%20dengan%20mobilnya,%20kira2%20harganya%20berapa%20ya?">{{ $value['no_handphone'] }}</a>
                        </li>
                        <li>
                            <h6>This page was viewed</h6>
                            <div style="color: white;" class="website-counter"></div>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</footer>
</script>
<script>
    var counterContainer = document.querySelector(".website-counter");
    var resetButton = document.querySelector("#reset");
    var visitCount = localStorage.getItem("page_view");

    // Check if page_view entry is present
    if (visitCount) {
        visitCount = Number(visitCount) + 1;
        localStorage.setItem("page_view", visitCount);
    } else {
        visitCount = 1;
        localStorage.setItem("page_view", 1);
    }
    counterContainer.innerHTML = visitCount;

    // Adding onClick event listener
    resetButton.addEventListener("click", () => {
        visitCount = 1;
        localStorage.setItem("page_view", 1);
        counterContainer.innerHTML = visitCount;
    });
</script>