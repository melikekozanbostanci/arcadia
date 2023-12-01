@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Basından")

@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            @if($basindan->fotograf_ana)
                <img class="w-100 baslik-foto" src="{{ asset('storage/basindan/'.$basindan->fotograf_ana) }}" alt="">
            @else
                <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/teruar-bg.png') }}" alt="">
            @endif

            <div class="position-absolute arcadia">
                <p class="text-center text-white text-uppercase">BASINDAN</p>
            </div>
        </section>
        <section class="mt-md-5">
            <div class="container mt-3">
                <div class="row d-flex justify-content-center pb-5">
                    <div class="col-md-6 col-sm-12 mt-md-5 ">
                        <p class="title-homepage m-0 text-uppercase">{{$basindan->baslik}} </p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>{{$basindan->alt_baslik}} </span>
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-md-5">
                        <p class="paragraph-detail">
                            {!! $basindan->aciklama !!}
                        </p>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @if($basindan->fotograf1 && $basindan->fotograf2 && $basindan->fotograf3 && $basindan->fotograf4)
                        @for($i = 1; $i <= 4; $i++)
                            @php
                                $fieldName = "fotograf" . $i;
                            @endphp

                            <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                                <a data-fancybox="gallery" data-src="{{ asset("storage/basindan/" . $basindan->$fieldName) }}">
                                    <img class="w-100 h-auto object-fit-cover" src="{{ asset("storage/basindan/" . $basindan->$fieldName) }}"/>
                                </a>
                            </div>
                        @endfor
                    @else
                        <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                            <a data-fancybox="gallery" data-src="{{ asset("assets/front/img/basindan-1.png") }}">
                                <img class="w-100 h-auto object-fit-cover" src="{{ asset("assets/front/img/basindan-1.png") }}"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                            <a data-fancybox="gallery" data-src="{{ asset("assets/front/img/basindan-2.png") }}">
                                <img class="w-100 h-auto object-fit-cover" src="{{ asset("assets/front/img/basindan-2.png") }}"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                            <a data-fancybox="gallery" data-src="{{ asset("assets/front/img/basindan-3.png") }}">
                                <img class="w-100 h-auto object-fit-cover" src="{{ asset("assets/front/img/basindan-3.png") }}"/>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                            <a data-fancybox="gallery" data-src="{{ asset("assets/front/img/basindan-4.png") }}">
                                <img class="w-100 h-auto object-fit-cover" src="{{ asset("assets/front/img/basindan-4.png") }}"/>
                            </a>
                        </div>
                    @endif


                </div>
            </div>
        </section>

    </main>
@endsection

