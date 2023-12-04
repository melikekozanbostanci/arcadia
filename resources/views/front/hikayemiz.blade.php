@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Hikayemiz")
@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            @if($hikayemiz->fotograf_ana)
                <img class="w-100 baslik-foto" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_ana) }}" alt="">
            @else
                <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/hikayemiz.png') }}" alt="">
            @endif
            <div class="position-absolute arcadia">
                <p class="text-center text-white">HİKAYEMİZ</p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <ul class="tabsHikayemiz nav nav-tabs d-flex justify-content-between nav-fill arcadia-nav">
                            <li class="nav-item ">
                                <a class="nav-link @if($slug=="bir-teruarin-uyanis-oykusu") active @endif" id="bir-teruarin-uyanis-oykusu-tab" aria-current="page" data-bs-toggle="tab"
                                   href="#bir-teruarin-uyanis-oykusu" aria-controls="bir-teruarin-uyanis-oykusu">BİR TERUARIN UYANIŞ ÖYKÜSÜ...</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="kurucu-ve-danisman-onologlarimiz") active @endif" id="kurucu-ve-danisman-onologlarimiz-tab" aria-controls="kurucu-ve-danisman-onologlarimiz" data-bs-toggle="tab" href="#kurucu-ve-danisman-onologlarimiz">KURUCU
                                    VE
                                    DANIŞMAN ÖNOLOGLARIMIZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="bagda-ve-saraphanede-nasil-calisiyoruz") active @endif" id="bagda-ve-saraphanede-nasil-calisiyoruz-tab" aria-controls="bagda-ve-saraphanede-nasil-calisiyoruz" data-bs-toggle="tab" href="#bagda-ve-saraphanede-nasil-calisiyoruz">BAĞDA
                                    VE ŞARAPHANEDE NASIL
                                    ÇALIŞIYORUZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="arcadia-ureten-bir-koy") active @endif" id="arcadia-ureten-bir-koy-tab" data-bs-toggle="tab" aria-controls="arcadia-ureten-bir-koy" href="#arcadia-ureten-bir-koy">ARCADIA ÜRETEN
                                    BİR KÖY</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" aria-labelledby="bir-teruarin-uyanis-oykusu-tab" id="bir-teruarin-uyanis-oykusu">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5 ">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_teruar}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>{{$hikayemiz->alt_baslik_teruar}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5 mt-sm-2">
                                                <p class="paragraph-detail">
                                                   {!! $hikayemiz->aciklama_teruar_alan1 !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                @if($hikayemiz->fotograf_teruar_1)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_teruar_1) }}">
                                                        <img class="w-100 baslik-foto" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_teruar_1) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/h1.png') }}">
                                                        <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/h1.png') }}"/>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="container-fluid py-md-5 position-relative arc-bg">
                                    <div class="container">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_teruar_alan2}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_teruar_alan2_1 !!}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_teruar_alan2_2 !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            @if($hikayemiz->fotograf_teruar_2)
                                                <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_teruar_2) }}">
                                                    <img class="w-100 baslik-foto" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_teruar_2) }}"/>
                                                </a>
                                            @else
                                                <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/ekibimiz.png') }}">
                                                    <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/ekibimiz.png') }}"/>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="kurucu-ve-danisman-onologlarimiz-tab" id="kurucu-ve-danisman-onologlarimiz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_kurucu}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>{{$hikayemiz->alt_baslik_kurucu}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_kurucu_alan1 !!}

                                                </p>

                                            </div>
                                        </div>
                                        <div class="row py-5">
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                @if($hikayemiz->fotograf_kurucu_1)
                                                    <a
                                                        data-fancybox="gallery"
                                                        data-src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_1)}}"
                                                        data-caption="{{$hikayemiz->fotograf_kurucu_text_1}}"
                                                    >
                                                        <img class="h-auto w-100" src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_1)}}"/>
                                                    </a>
                                                    @else
                                                    <img class="h-auto w-100" src="{{asset("assets/front/img/k1.png")}}"/>

                                                @endif

                                                <span class="hikaye-absolute">
                                                {{$hikayemiz->fotograf_kurucu_text_1}}
                                            </span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                @if($hikayemiz->fotograf_kurucu_2)
                                                    <a
                                                        data-fancybox="gallery"
                                                        data-src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_2)}}"
                                                        data-caption="{{$hikayemiz->fotograf_kurucu_text_2}}"
                                                    >
                                                        <img class="h-auto w-100" src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_2)}}"/>
                                                    </a>
                                                    @else
                                                    <img class="h-auto w-100" src="{{asset("assets/front/img/k2.png")}}"/>
                                                @endif

                                                <span class="hikaye-absolute">
                                                {{$hikayemiz->fotograf_kurucu_text_2}}
                                            </span>
                                            </span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                @if($hikayemiz->fotograf_kurucu_3)
                                                    <a
                                                        data-fancybox="gallery"
                                                        data-src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_3)}}"
                                                        data-caption="{{$hikayemiz->fotograf_kurucu_text_3}}"
                                                    >
                                                        <img class="h-auto w-100" src="{{asset("storage/hikayemiz/".$hikayemiz->fotograf_kurucu_3)}}"/>
                                                    </a>
                                                    @else
                                                    <img class="h-auto w-100" src="{{asset("assets/front/img/k3.png")}}"/>
                                                @endif

                                                <span class="hikaye-absolute">
                                                {{$hikayemiz->fotograf_kurucu_text_3}}
                                            </span>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="bagda-ve-saraphanede-nasil-calisiyoruz-tab" id="bagda-ve-saraphanede-nasil-calisiyoruz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_bag}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>{{$hikayemiz->alt_baslik_bag}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan1 !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                @if($hikayemiz->fotograf_bag_1)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_1) }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_1) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/n1.png')}}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/n1.png')}}"/>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container py-md-5">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6 col-sm-12 d-flex flex-column">
                                                <p class="title-homepage ">{{$hikayemiz->baslik_bag_alan2_1}}</p>
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan2_1 !!}
                                                </p>
                                                <p class="title-homepage">{{$hikayemiz->baslik_bag_alan2_2}} </p>
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan2_2 !!}

                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-flex justify-content-between">
                                                <div>
                                                    @if($hikayemiz->fotograf_bag_2)
                                                        <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_2) }}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_2) }}"/>
                                                        </a>
                                                    @else
                                                        <a data-fancybox="gallery" data-src="{{asset('assets/front/img/n2.png')}}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{asset('assets/front/img/n2.png')}}"/>
                                                        </a>
                                                    @endif
                                                        </div>
                                                <div>
                                                    @if($hikayemiz->fotograf_bag_3)
                                                        <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_3) }}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_3) }}"/>
                                                        </a>
                                                    @else
                                                        <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_4) }}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{asset('assets/front/img/n3.png')}}"/>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                                @if($hikayemiz->fotograf_bag_4)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_4) }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_bag_4) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/n4.png')}}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/n4.png')}}"/>
                                                    </a>
                                                @endif
                                                <div class="d-flex flex-column calisma-absolute">
                                                    <div class="img-cls-title">
                                                        {!! $hikayemiz->fotograf_bag_4_aciklama !!}
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan3_1 !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p class="title-homepage">{{$hikayemiz->baslik_bag_alan3_1}} </p>
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan3_2 !!}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="title-homepage">{{$hikayemiz->baslik_bag_alan3_2}} </p>
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_bag_alan3_3 !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="arcadia-ureten-bir-koy-tab" id="arcadia-ureten-bir-koy">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_arcadia}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>{{$hikayemiz->alt_baslik_arcadia}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_arcadia_alan1 !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container-fluid ">
                                        <div class="row pt-5">
                                            <div class="col-12">
                                                @if($hikayemiz->fotograf_arcadia_1)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_1) }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_1) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/koy1.png')}}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/koy1.png')}}"/>
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid py-md-5 arc-bg">
                                        <div class="container py-md-5">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                    <p class="title-homepage m-0">{{$hikayemiz->baslik_arcadia_alan2_1}}</p>
                                                    <p class="paragraph-detail">
                                                        {!! $hikayemiz->aciklama_arcadia_alan2_1 !!}
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 ">
                                                    @if($hikayemiz->fotograf_arcadia_2)
                                                        <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_2) }}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_2) }}"/>
                                                        </a>
                                                    @else
                                                        <a data-fancybox="gallery" data-src="{{asset('assets/front/img/arc11.png')}}">
                                                            <img class="w-100 h-auto object-fit-contain p-1" src="{{asset('assets/front/img/arc11.png')}}"/>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container py-5">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6 col-sm-12">
                                                @if($hikayemiz->fotograf_arcadia_3)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_3) }}">
                                                        <img class="w-100 h-auto object-fit-contain p-1" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_3) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_4) }}">
                                                        <img class="w-100 h-auto object-fit-contain p-1" src="{{asset('assets/front/img/arc11.png')}}"/>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                <p class="title-homepage m-0">{{$hikayemiz->baslik_arcadia_alan3_1}}</p>
                                                <p class="paragraph-detail">
                                                    {!! $hikayemiz->aciklama_arcadia_alan3_1 !!}
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="container-fluid pt-5 arc-bg">
                                        <div class="container py-5">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                    <p class="title-homepage m-0">{{$hikayemiz->baslik_arcadia_alan4_1}}</p>

                                                </div>
                                                <div class="col-md-6 col-sm-12 ">
                                                    <p class="paragraph-detail">
                                                        {!! $hikayemiz->aciklama_arcadia_alan4_1 !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div>
                                        @if($hikayemiz->fotograf_arcadia_4)
                                            <a data-fancybox="gallery" data-src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_4) }}">
                                                <img class="img-fluid w-100" src="{{ asset('storage/hikayemiz/'.$hikayemiz->fotograf_arcadia_4) }}"/>
                                            </a>
                                        @else
                                            <a data-fancybox="gallery" data-src="{{asset('assets/front/img/arc2.png')}}">
                                                <img class="img-fluid w-100" src="{{asset('assets/front/img/arc2.png')}}"/>
                                            </a>
                                        @endif
                                    </div>
                                </section>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script>
        $(document).ready(function () {
            $("#{{$slug}}" + "-tab").click();
        })
    </script>
@endsection

