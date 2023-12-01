@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Felsefemiz")
@section('content')
    <!-- main-area -->
    <main>
        <section>
            @if($felsefemiz->fotograf_ana)
                <img class="w-100 baslik-foto" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_ana) }}" alt="">
            @else
                <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/felsefe-1.png ') }}" alt="">
            @endif
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <ul class="tabsFelsefe nav nav-tabs d-flex justify-content-between nav-fill arcadia-nav">
                            <li class="nav-item ">
                                <a class="nav-link @if($slug=="surdurebilirlik-felsefemiz") active @endif" aria-controls="surdurebilirlik-felsefemiz"  id="surdurebilirlik-felsefemiz-tab" aria-current="page" data-bs-toggle="tab"
                                   href="#surdurebilirlik-felsefemiz">SÜRDÜRÜLEBİLİRLİK FELSEFEMİZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="arcadia-fauna") active @endif" aria-controls="arcadia-fauna" id="arcadia-fauna-tab" data-bs-toggle="tab" href="#arcadia-fauna">ARCADIA FAUNA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" aria-labelledby="surdurebilirlik-felsefemiz-tab" id="surdurebilirlik-felsefemiz">
                                <section class="mt-md-5 ">
                                    <div class="container mt-3">
                                        <div class="row d-flex justify-content-center pb-md-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5 ">
                                                <p class="title-homepage m-0"> {{$felsefemiz->baslik_surdurebilirlik}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span> {{$felsefemiz->alt_baslik_surdurebilirlik}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $felsefemiz->aciklama_surdurebilirlik_alan1 !!}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                @if($felsefemiz->fotograf_surdurebilirlik_1)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_1) }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_1) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{  asset('assets/front/img/felsefe-2.png') }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{  asset('assets/front/img/felsefe-2.png') }}"/>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5 ">
                                                <p class="title-homepage m-0"> {{$felsefemiz->baslik_surdurebilirlik_2}}</p>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                   {!! $felsefemiz->aciklama_surdurebilirlik_alan2 !!}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                                                @if($felsefemiz->fotograf_surdurebilirlik_2)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_2) }}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_2) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/basindan-1.png')}}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{asset('assets/front/img/basindan-1.png')}}"/>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                                                @if($felsefemiz->fotograf_surdurebilirlik_3)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_3) }}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_3) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/basindan-2.png')}}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{asset('assets/front/img/basindan-2.png')}}"/>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                                                @if($felsefemiz->fotograf_surdurebilirlik_4)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_4) }}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_4) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/basindan-3.png')}}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{asset('assets/front/img/basindan-3.png')}}"/>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                                                @if($felsefemiz->fotograf_surdurebilirlik_5)
                                                    <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_5) }}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik_5) }}"/>
                                                    </a>
                                                @else
                                                    <a data-fancybox="gallery" data-src="{{asset('assets/front/img/basindan-4.png')}}">
                                                        <img class="w-100 h-auto object-fit-cover" src="{{asset('assets/front/img/basindan-4.png')}}"/>
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center py-md-5">
                                            <div class="col-md-6 col-sm-12 py-md-5 ">
                                                <p class="title-homepage m-0">{{$felsefemiz->baslik_surdurebilirlik_3}}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $felsefemiz->aciklama_surdurebilirlik_alan3 !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid py-5 arc-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 ko-img">
                                                    <a data-fancybox="gallery" data-src="{{ asset('assets/front/img/felsefemiz-9.png ') }}">
                                                        <img class="w-100 h-auto object-fit-contain" src="{{asset('assets/front/img/felsefemiz-9.png ')}}"/>
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p class="title-homepage m-0 pb-3">{{$felsefemiz->baslik_surdurebilirlik_4}}
                                                    </p>
                                                    <p class="paragraph-detail">
                                                        {!! $felsefemiz->aciklama_surdurebilirlik_alan4 !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center pb-md-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">{{$felsefemiz->baslik_surdurebilirlik_5}}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    {!! $felsefemiz->aciklama_surdurebilirlik_alan5 !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row py-md-5">
                                            <div class="col-12">
                                                <a data-fancybox="gallery" data-src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik6) }}">
                                                    <img class="w-100 h-auto object-fit-contain" src="{{ asset('storage/felsefemiz/'.$felsefemiz->fotograf_surdurebilirlik6) }}"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="arcadia-fauna-tab" id="arcadia-fauna">
                                <section class="mt-5">
                                    <div class="container pb-5">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-5">
                                                <p class="title-homepage m-0">{{$felsefemiz->baslik_fauna}}</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>{{$felsefemiz->alt_baslik_fauna}} </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-5">
                                                @foreach($fauna as $item)
                                                    @if($item->aciklama)
                                                        <p class="paragraph-detail">
                                                            {{$item->aciklama}}
                                                        </p>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    @foreach($fauna as $item)
                                                        @if($item->images)
                                                            <a
                                                                data-fancybox="gallery"
                                                                data-src="{{asset("storage/arcadia-fauna/".$item->images)}}"
                                                                data-caption="{{$item->images_alt_aciklama}}"
                                                            >
                                                                <img class="gallery-mini" src="{{asset("storage/arcadia-fauna/".$item->images)}}"/>
                                                            </a>
                                                        @endif

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
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

