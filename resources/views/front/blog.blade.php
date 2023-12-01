@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Arcadia'dan Haberler | ",$blog->baslik)

@section('content')
    <!-- main-area -->
    <main>
        <section class="pt-5">
            <div class="container py-5">
                <div class="row py-3">
                    <div class="col-12 d-flex justify-content-center">
                        <p class="blog-title d-block">
                            {{$blog->baslik}}
                        </p>
                    </div>
                    <div class="col-12">
                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/buyuk-line.svg')}}" alt="">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <span class="blog-span">
                           {{$blog->zaman}} / {{$blog->mekan}}
                        </span>
                    </div>
                    <div class="col-12">
                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/buyuk-line.svg')}}" alt="">
                    </div>
                    <div class="col-12 d-flex justify-content-center pt-5 blog-image">
                        <img class="w-75 h-auto object-fit-cover" src="{{ asset('storage/bloglar/'.$blog->fotograf) }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        @php
                             $icerik = str_replace("../uploads/","/uploads/",$blog->icerik)
                        @endphp
                        {!! $icerik !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5">
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

    </main>
@endsection

