<!-- header-area -->
<header>
    <nav class="navbar navbar-expand-lg bg-transparent p-0">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="arcadia-head collapse navbar-collapse justify-content-center" id="nav">
                        <ul class="navbar d-flex justify-content-center align-items-center p-0">
                            <li class="nav-item pt-3">
                                <a class="nav-link arcadia-nav-link" href="{{ url('/arcadia-baglari/arcadia') }}">ARCADIA BAĞLARI </a>
                            </li>
                            <li class="nav-item pt-3">
                                <a class="nav-link arcadia-nav-link" href="{{ url('/hikayemiz/bir-teruarin-uyanis-oykusu') }}">HİKAYEMİZ</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link arcadia-nav-link p-0" href="{{ url('/') }}">
                                    <img class="logo-img" src="">
                                </a>
                            </li>
                            <li class="nav-item pt-3">
                                <a class="nav-link arcadia-nav-link" href="{{ url('/basindan') }}">BASINDAN</a>
                            </li>
                            <li class="nav-item pt-3">
                                <a class="nav-link arcadia-nav-link" href="{{ url('/iletisim') }}">İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-transparent me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <img class="dots-img" src="{{asset('assets/front/img/dots_icon.svg')}}" alt="">
        </a>

    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header d-flex justify-content-center p-0">
            <a href="{{ url('/') }}">
                @if($siteAyar->site_siyah_logo != null)
                    <img src="{{ asset('storage/site-ayar/'.$siteAyar->site_siyah_logo) }}">
                @else
                    <img src="{{ asset('assets/front/img/red_logo.svg') }}">
                @endif

            </a>

        </div>
        <div class="d-flex justify-content-end pe-3">
            <button type="button" class="btn text-reset close-btn-canvas" data-bs-dismiss="offcanvas" aria-label="Close">
                <img src="{{asset('assets/front/img/close_icon.svg')}}" alt="">
            </button>
        </div>

        <div class="offcanvas-body mt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <ul class="canvas-ul">
                            <li class="canvas-max">

                                <a href="{{ url('arcadia-baglari/arcadia') }}">ARCADIA BAĞLARI</a>
                                <ul>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/uzumlerimiz') }}" id="uzumlerimiz-tab">
                                            ÜZÜMLERİMİZ
                                        </a> </li>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/saraplarimiz') }}">
                                            ŞARAPLARIMIZ
                                        </a> </li>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/hasat-raporlari') }}">
                                            HASAT RAPORLARI
                                        </a> </li>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/bag-haritamiz') }}">
                                            BAĞ HARİTAMIZ
                                        </a> </li>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/foto-galeri') }}">
                                            FOTO GALERİ
                                        </a> </li>
                                    <li class="canvas-min">
                                        <a href="{{ url('arcadia-baglari/arcadiadan-haberler') }}">
                                            ARCADIA'DAN HABERLER
                                        </a></li>
                                </ul>
                            </li>
                            <li class="canvas-max">
                                <a href="{{ url('hikayemiz/bir-teruarin-uyanis-oykusu') }}">HİKAYEMİZ</a> </li>
                            <ul class="canvas-ul">
                                <li class="canvas-min">
                                    <a href="{{ url('hikayemiz/bir-teruarin-uyanis-oykusu') }}">
                                        BİR TERUARIN UYANIŞ ÖYKÜSÜ...
                                    </a></li>
                                <li class="canvas-min">
                                    <a href="{{ url('hikayemiz/kurucu-ve-danisman-onologlarimiz') }}">
                                        EKİBİMİZ
                                    </a> </li>
                                <li class="canvas-min">
                                    <a href="{{ url('hikayemiz/bagda-ve-saraphanede-nasil-calisiyoruz') }}">
                                        BAĞDA VE ŞARAPHANEDE NASIL ÇALIŞIYORUZ
                                    </a> </li>
                                <li class="canvas-min">
                                    <a href="{{ url('hikayemiz/arcadia-ureten-bir-koy') }}">
                                        ARCADIA ÜRETEN BİR KÖY
                                    </a> </li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <ul class="canvas-ul">
                            <li class="canvas-max">
                                <a href="{{ url('tarihce') }}">
                                    TARİHÇE
                                </a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('felsefemiz/surdurebilirlik-felsefemiz') }}">
                                    SÜRDÜREBİLİRLİK
                                </a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('teruar-saraplari') }}">
                                    TERUAR ŞARAPLARIMIZ
                                </a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('bakuchavineyard') }}">
                                    BAKUCHA HOTEL
                                </a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('felsefemiz/arcadia-fauna') }}">
                                    ARCADIA FAUNA
                                </a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('basindan') }}">BASINDAN</a> </li>
                            <li class="canvas-max">
                                <a href="{{ url('iletisim') }}">
                                    İLETİŞİM
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

