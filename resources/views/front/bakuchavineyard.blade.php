@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Bakucha Vineyard Hotel")

@section('content')
    <!-- main-area -->
    <main>
        <section>
            @if($otel->fotograf_ana)
                <img class="w-100 position-relative baslik-foto" src="{{ asset("storage/otel/$otel->fotograf_ana") }}" alt="">
            @else
            <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/bak-1.png') }}" alt="">
            @endif

        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-5 col-sm-12">
                        <div>
                            <p class="title-homepage mb-0">{{$otel->baslik}}</p>
                        </div>
                        <div class="py-3">
                            @if($otel->fotograf_1)
                                <a data-fancybox="gallery" data-src="{{ asset('storage/otel/'.$otel->fotograf_1) }}">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/otel/'.$otel->fotograf_1) }}"/>
                                </a>
                            @else
                                <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/otel-logo.png') }}">
                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/otel-logo.png') }}"/>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 d-flex flex-column">
                        <p class="paragraph-detail">
                            {!! $otel->aciklama !!}
                        </p>
                        <div class="d-flex justify-content-end">

                            <a target="_blank" class="btn btn-outline-secondary btn-arcadia" href="https://bakucha.com/">
                                WEB SİTESİNİ ZİYARET ET
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

