<!-- footer-area -->

<footer class="container-fluid py-5 mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-12 py-md-5 d-flex justify-content-center">
            <a href="{{ url('/') }}">
                @if($siteAyar->site_beyaz_logo != null)
                    <img src="{{ asset('storage/site-ayar/'.$siteAyar->site_beyaz_logo) }}" alt="">
                @else
                    <img src="{{ asset('assets/front/img/white_logo.svg') }}" alt="">
                @endif

            </a>
        </div>
        <div class="col-md-12 col-sm-12">
            <ul class="nav justify-content-center pb-3 mb-3">
                <li class="nav-item"><a href="{{ url('felsefemiz/surdurebilirlik-felsefemiz') }}" class="nav-link px-2 text-muted">Sürdürebilirlik</a></li>
                <li class="nav-item"><a href="{{ url('hikayemiz/bir-teruarin-uyanis-oykusu') }}" class="nav-link px-2 text-muted">Hikayemiz</a></li>
                <li class="nav-item"><a href="{{ url('arcadia-baglari/arcadia') }}" class="nav-link px-2 text-muted">Arcadia Bağları</a></li>
                <li class="nav-item"><a href="{{ url('bakuchavineyard') }}" class="nav-link px-2 text-muted">Bakucha Hotel</a></li>
                <li class="nav-item"><a href="{{ url('basindan') }}" class="nav-link px-2 text-muted">Basından</a></li>
                <li class="nav-item"><a href="{{ url('iletisim') }}" class="nav-link px-2 text-muted">İletişim</a></li>
            </ul>
        </div>
        <div class="col-md-12 col-sm-12">
            <ul class="nav justify-content-center pb-3 mb-3">
                <li class="nav-item"><a href="{{$siteAyar->site_facebook}}" target="_blank" class="nav-link px-2 text-muted"><i class="fab fa-facebook-f"></i></a></li>
                <li class="nav-item"><a href="{{$siteAyar->site_twitter}}" target="_blank" class="nav-link px-2 text-muted"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a href="{{$siteAyar->site_instagram}}" target="_blank" class="nav-link px-2 text-muted"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item"><a href="{{$siteAyar->site_youtube}}" target="_blank" class="nav-link px-2 text-muted"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

        <p class="text-center text-muted">© ArcadiaVineYards, All Rights Reserved</p>
    </div>

</footer>
<!-- footer-area-end -->



