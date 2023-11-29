<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route("admin.dashboard")}}" class="text-nowrap logo-img">
                <img src="{{asset("assets/back/logo.png")}}" class="dark-logo" width="180" alt=""/>
                <img src="{{asset("assets/back/logo.png")}}" class="light-logo" width="180" alt=""/>
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Genel</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/dashboard")) active @endif" href="{{route("admin.dashboard")}}" aria-expanded="false">
                        <span><i class="ti ti-aperture"></i></span>
                        <span class="hide-menu">Güncel Durum</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow
                    @if(request()->is("admin/sayfalar")) active @endif
                    @if(request()->is(route("admin.sayfa-ekle"))) active @endif
                    " href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-page-break"></i>
                        </span>
                        <span class="hide-menu">Sayfa</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level @if(request()->is("admin/sayfalar")) active @endif
                    ">
                        <li class="sidebar-item">
                            <a href="{{route("admin.sayfalar")}}" class="sidebar-link
                            @if(request()->is(route("admin.sayfalar"))) active @endif
                            @if(request()->is(route("admin.sayfa-ekle"))) active @endif
                            ">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Tüm Sayfalar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route("admin.sayfa-ekle")}}" class="sidebar-link @if(request()->is(route("admin.sayfa-ekle"))) active @endif">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Yeni Sayfa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route("admin.sayfa-kategorileri")}}" class="sidebar-link @if(request()->is(route("admin.sayfa-kategorileri"))) active @endif">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Kategoriler</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-chart-donut-3"></i>
                        </span>
                        <span class="hide-menu">Blog</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route("admin.bloglar")}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Tüm Bloglar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route("admin.blog-ekle")}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Yeni Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-glass"></i>
                        </span>
                        <span class="hide-menu">Ürünler</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route("admin.urunler")}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Tüm Ürünler</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route("admin.urun-kategorileri")}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Ürün Kategorileri</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/hasat-raporlari")) active @endif" href="{{route("admin.hasat-raporlari")}}" aria-expanded="false">
                        <span><i class="ti ti-graph"></i></span>
                        <span class="hide-menu">Hasat Raporları</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/iletisim")) @endif" href="{{route("admin.iletisim")}}" aria-expanded="false">
                        <span><i class="ti ti-mail-check"></i></span>
                        <span class="hide-menu">İletişim Talepleri</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/uyelik-basvurulari")) @endif" href="{{route("admin.uyelik-basvurulari")}}" aria-expanded="false">
                        <span><i class="ti ti-pencil"></i></span>
                        <span class="hide-menu">Üyelik Başvuruları</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/foto-galeri")) @endif" href="{{route("admin.foto-galeri")}}" aria-expanded="false">
                        <span><i class="ti ti-photo"></i></span>
                        <span class="hide-menu">Foto Galeri</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/tarihce")) @endif" href="{{route("admin.tarihce")}}" aria-expanded="false">
                        <span><i class="ti ti-history"></i></span>
                        <span class="hide-menu">Tarihçe</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(request()->is("admin/arcadia-fauna")) @endif" href="{{route("admin.arcadia-fauna")}}" aria-expanded="false">
                        <span><i class="ti ti-building-store"></i></span>
                        <span class="hide-menu">Arcadia Fauna</span>
                    </a>
                </li>
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                        <span class="d-flex">--}}
{{--                            <i class="ti ti-diamond"></i>--}}
{{--                        </span>--}}
{{--                        <span class="hide-menu">Pazarlama</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route("admin.popup")}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Popup</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route("admin.banner")}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Banner</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link" href="./index.html" aria-expanded="false"><span><i class="ti ti-mail"></i></span><span class="hide-menu">E-Bütlen Kayıtları</span></a>--}}
{{--                </li>--}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Ayarlar</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route("admin.site-ayarlar")}}" aria-expanded="false"><span><i class="ti ti-tools"></i></span><span class="hide-menu">Site Ayarları</span></a>
                </li>
                <li class="sidebar-item">
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                        <span class="d-flex">--}}
{{--                            <i class="ti ti-paint"></i>--}}
{{--                        </span>--}}
{{--                        <span class="hide-menu">Tema Yönetimi</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route("admin.menuler")}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Menüler</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route("admin.slaytlar")}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Slayt Yönetimi</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route("admin.sablonlar")}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Şablon Yönetimi</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route("admin.kullanicilar")}}" aria-expanded="false"><span><i class="ti ti-users"></i></span><span class="hide-menu">Kullanıcılar</span></a>
                </li>
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link" href="{{route("admin.dil-yonetimi")}}" aria-expanded="false"><span><i class="ti ti-language"></i></span><span class="hide-menu">Dil Yönetimi</span></a>--}}
{{--                </li>--}}
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                <div class="d-flex">
                    <div class="unlimited-access-title">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Yardıma ihtiyacım var.</h6>
                        <button class="btn btn-primary fs-2 fw-semibold lh-sm">Destek Talebi</button>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="{{asset("assets/back/images/backgrounds/rocket.png")}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{asset("assets/back/images/profile/user-1.jpg")}}" class="rounded-circle" width="40" height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
    </div>
</aside>
