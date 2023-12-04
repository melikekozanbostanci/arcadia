@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Anasayfa")

@section('content')
    <!-- main-area -->
    <main>
        <section class="col-12 position-relative">
            <div >
                <div class="back-color">
                    @if($siteAyar->fotograf_ana)
                        <img class="img-fluid w-100 opacity-50" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_ana) }}" alt="">
                    @else
                    <img class="img-fluid w-100 opacity-50" src="{{ asset('assets/front/img/background.png') }}" alt="">
                    @endif
                </div>

                <div class="centered-text text-center">{{$siteAyar->fotograf_ana_baslik}}</div>
                <div>
                    <ul class="bg-down-text">
                        <li>
                            <a href="{{ url('felsefemiz/surdurebilirlik-felsefemiz') }}">
                                Sürdürebilirlik
                            </a></li>
                        <li>
                            <a href="{{ url('teruar-saraplari') }}">
                                Teruar Şaraplarımız
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('arcadia-baglari/uzumlerimiz') }}">
                                Üzümlerimiz
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
        <section class="mt-md-5">
            <div class="container mt-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-md-5">
                        <p class="title-homepage m-0">{{$siteAyar->baslik_1}}</p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>{{$siteAyar->alt_baslik_1}} </span>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-md-5">
                        <p class="paragraph-detail">
                           {!! $siteAyar->aciklama_1 !!}
                        </p>
                        <div class="my-4">
                            <div class="arc-test btn">
                                <a href="/felsefemiz/surdurebilirlik-felsefemiz" type="button" class="btn">İNCELE</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative">
            <div>
                @if($siteAyar->fotograf1)
                    <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_1) }}">
                        <img class="img-fluid w-100" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_1) }}"/>
                    </a>
                @else
                    <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/teruar-bg.png') }}">
                        <img class="img-fluid w-100" src="{{ asset('assets/front/img/teruar-bg.png') }}"/>
                    </a>
                @endif

                <div class="centered-text2 text-center">{{$siteAyar->fotograf_yazi_1}}</div>
                <div class="centered-text text-center">{{$siteAyar->fotograf_yazi_2}}</div>
                <div class="my-5 position-absolute button-teruar">
                    <div class="arc-test-beyaz btn">
                        <a href="/teruar-saraplari" type="button" class="btn text-white">İNCELE</a>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2">
                        <div class="left-side">

                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 pt-md-5">
                    <div class="container">
                        <div class="row pt-md-5 pt-sm-3">
                            <div class="col-12 d-flex justify-content-center grape">
                                {{$siteAyar->baslik_2}}
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <span> <img class="h-auto w-100 object-fit-contain" src="{{ asset('assets/front/img/line2.svg') }}" alt=""> </span>
                                <span class="pacifico-span px-2">{{$siteAyar->alt_baslik_2}}</span>
                                <span><img class="h-auto w-100 object-fit-contain" src="{{ asset('assets/front/img/line2.svg') }}" alt="" > </span>
                            </div>
                        </div>
                    </div>
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-md-4 col-sm-5">
                                    <ul class="left-text">
                                        {!! $siteAyar->aciklama_2_1 !!}
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-2 grapeImage">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/arcadia-uzum.png') }}" alt="">
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <ul class="right-text">
                                        {!! $siteAyar->aciklama_2_2 !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="right-side">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            @if($siteAyar->fotograf_2)
                <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_2) }}">
                    <img class="img-fluid w-100" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_2) }}"/>
                </a>
            @else
                <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/degirmen.svg') }}">
                    <img class="img-fluid w-100" src="{{ asset('assets/front/img/degirmen.svg') }}"/>
                </a>
            @endif
        </section>
        <section>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <p class="blog-title d-block">
                            ARCADIA'DAN HABERLER
                        </p>
                    </div>
                    <div class="col-12 d-flex justify-content-center pb-sm-5">
                        <p class="blog-sub-title d-block">
                            Arcadia Bağları
                        </p>
                    </div>
                    <div class="row justify-content-between align-items-center">
                        @foreach($bloglar as $blog)
                            <div class="col-lg-4 col-md-6 col-sm-12 p-2 d-flex flex-column">
                                <a class="blog-a" href="{{asset('/arcadia-baglari/arcadiadan-haberler/'.$blog->slug)}}">
                                    <img class="blog-img"
                                         src="{{ asset('storage/bloglar/'.$blog->fotograf) }}" alt="">
                                    <div class="d-flex justify-content-center w-100 py-2">
                                        <p class="blog-header d-flex text-center">
                                            {{$blog->baslik}}
                                        </p>
                                    </div>
                                    <img class="w-100"
                                         src="{{ asset('assets/front/img/blog-line.svg') }}"
                                         alt="">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="blog-span">{{$blog->zaman}}</span>
                                        <span class="blog-span">/</span>
                                        <span class="blog-span"> {{$blog->mekan}}</span>
                                    </div>
                                    <img class="w-100"
                                         src="{{ asset('assets/front/img/blog-line.svg') }}"
                                         alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative">
            @if($siteAyar->fotograf_3)
                <img class="img-fluid w-100" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_3) }}" alt="">
            @else
            <img class="img-fluid w-100 pt-5" src="{{ asset('assets/front/img/video-image.png') }}" alt="">
            @endif

            <div class="position-absolute ply">
                <i class="fa-regular fa-circle-play play-icon btn"></i>
            </div>
        </section>
        <section>
            <div class="container pt-5">
                <div class="row d-flex align-items-center justify-content-around">
                    <div class="col-md-6 col-sm-12">
                        @if($siteAyar->fotograf_4)
                            <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_4) }}">
                                <img class="w-100 h-100" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_4) }}"/>
                            </a>
                        @else
                            <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/otel.png') }}">
                                <img class="w-100 h-100" src="{{ asset('assets/front/img/otel.png') }}"/>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="title-homepage ">{{$siteAyar->baslik_3}}</p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center m-0">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>{{$siteAyar->alt_baslik_3}} </span>
                        </p>
                        <div class="mt-3">
                            <p class="paragraph-detail">
                                {!! $siteAyar->aciklama_3 !!}
                            </p>
                            @if($siteAyar->fotograf_5)
                                <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_5) }}">
                                    <img class="py-3 w-50 h-auto object-fit-contain" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_5) }}"/>
                                </a>
                            @else
                                <a data-fancybox="gallery" data-src="{{asset('assets/front/img/otel-logo.png') }}">
                                    <img class="py-3 w-50 h-auto object-fit-contain" src="{{ asset('assets/front/img/otel-logo.png') }}"/>
                                </a>
                            @endif
                            <div class="py-3">
                                <div class="arc-test btn">
                                    <a href="/bakuchavineyard" type="button" class="btn">KEŞFET</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-4 col-12 p-2">
                        @if($siteAyar->fotograf_6)
                            <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_6) }}">
                                <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_6) }}"/>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-4 col-12 p-2">
                        @if($siteAyar->fotograf_7)
                            <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_7) }}">
                                <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_7) }}"/>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-4 col-12 p-2">
                        @if($siteAyar->fotograf_8)
                            <a data-fancybox="gallery" data-src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_8) }}">
                                <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/site-ayar/'.$siteAyar->fotograf_8) }}"/>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mt-md-5">

                <div class="row d-flex justify-content-between align-items-baseline">
                    <div class="col-md-4 col-sm-12">
                        <div>
                            <p class="title-homepage mb-0">İLETİŞİM</p>
                        </div>
                        <div>
                            <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                <span>Ulaşım</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <img src="{{asset('assets/front/img/marker-icon.svg')}}" alt="">
                            <span class="contact-detail">{{$siteAyar->site_adres}}</span>
                        </div>
                        <div class="d-flex justify-content-start">
                            <img src="{{asset('assets/front/img/phone-icon.svg')}}" alt="">
                            <span class="contact-detail">{{$siteAyar->site_telefon}}</span>
                        </div>
                        <div class="d-flex justify-content-start">
                            <img src="{{asset('assets/front/img/mail-icon.svg')}}" alt="">
                            <span class="contact-detail">{{$siteAyar->site_eposta}}</span>
                        </div>
                        <div class="d-flex justify-content-start mt-2 mb-sm-2">
                            <a class="blog-a" href="{{$siteAyar->site_facebook}}" target="_blank">
                                <img class="me-2" src="{{asset('assets/front/img/facebook-icon.png')}}" alt="">
                            </a>
                            <a class="blog-a" href="{{$siteAyar->site_twitter}}" target="_blank">
                                <img src="{{asset('assets/front/img/twitter-icon.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 d-flex flex-column icons-top justify-content-sm-start justify-content-center mt-sm-0 mt-3">
                        <form action="{{ route('front.iletisim.kaydet') }}" method="post">
                            <div class="mb-3">
                                <input class="form-control" class="form-control" name="ad_soyad" type="text" placeholder="Ad, Soyad..."
                                       aria-label="default input example" id="ad_soyad">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="e_mail" id="e_mail"
                                       placeholder="E-mail...">
                            </div>
                            <div class="mb-3">
                                <textarea placeholder="Mesajınız..." class="form-control"
                                          id="mesaj" name="mesaj" rows="3"></textarea>
                            </div>
                            @csrf
                            <div class="py-3 d-flex justify-content-end">
                                <div class="arc-test btn">
                                    <a type="submit" class="btn">GÖNDER</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </main>

@endsection

