@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Tarihçe")

@section('content')
    <!-- main-area -->
    <main>

        <section class="pt-5">
            <div class="container-sw pt-lg-5">
                <div class="timeline">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($tarihce as $tarih)
                                <div class="swiper-slide" data-swiper-autoplay="2000" style="background-image: url({{asset('storage/tarihce/'. $tarih->images)}})" data-year="{{$tarih->yil}}">
                                    <div class="swiper-slide-content">
                                        <span class="timeline-year">
                                            {{$tarih->yil}}
                                        </span>
                                        <h4 class="timeline-title">
                                            {{$tarih->baslik}}
                                        </h4>
                                        <p class="timeline-text">
                                        {{$tarih->aciklama}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

