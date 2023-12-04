@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Teruar Şaraplarımız")

@section('content')
    <!-- main-area -->
    <main>
        <section>
            @if($teruar->fotograf_ana)
                <img class="w-100 position-relative baslik-foto" src="{{ asset("storage/teruar/$teruar->fotograf_ana") }}" alt="">
            @else
            <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/t1.png') }}" alt="">
            @endif
            <div class="position-absolute arcadia">
                <p class="text-center text-white">{{$teruar->baslik}}</p>
            </div>
        </section>
        <section class="mt-md-5">
            <div class="container mt-3">
                <div class="row d-flex justify-content-center pb-5">
                    <div class="col-md-6 col-sm-12 mt-md-5 ">
                        <p class="title-homepage m-0">{{$teruar->baslik}}</p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>{{$teruar->alt_baslik}} </span>
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-md-5">
                        <p class="paragraph-detail">
                            {!! $teruar->aciklama !!}
                        </p>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @if($teruar->fotograf_1)
                        <div class="col-md-3 col-sm-12">
                            <a data-fancybox="gallery" data-src="{{ asset('storage/teruar/'.$teruar->fotograf_1) }}">
                                <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/teruar/'.$teruar->fotograf_1) }}"/>
                            </a>
                        </div>
                    @endif
                        @if($teruar->fotograf_2)
                            <div class="col-md-3 col-sm-12">
                                <a data-fancybox="gallery" data-src="{{ asset('storage/teruar/'.$teruar->fotograf_2) }}">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/teruar/'.$teruar->fotograf_2) }}"/>
                                </a>
                            </div>
                        @endif
                        @if($teruar->fotograf_3)
                            <div class="col-md-3 col-sm-12">
                                <a data-fancybox="gallery" data-src="{{ asset('storage/teruar/'.$teruar->fotograf_3) }}">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/teruar/'.$teruar->fotograf_3) }}"/>
                                </a>
                            </div>
                        @endif
                        @if($teruar->fotograf_4)
                            <div class="col-md-3 col-sm-12">
                                <a data-fancybox="gallery" data-src="{{ asset('storage/teruar/'.$teruar->fotograf_4) }}">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/teruar/'.$teruar->fotograf_4) }}"/>
                                </a>
                            </div>
                        @endif

                </div>
            </div>
        </section>

    </main>
@endsection

