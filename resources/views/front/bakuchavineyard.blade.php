@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Bakucha Vineyard Hotel")

@section('content')
    <!-- main-area -->
    <main>
        <section>
            <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/bak-1.png') }}" alt="">

        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-5 col-sm-12">
                        <div>
                            <p class="title-homepage mb-0">BAKUCHA VINEYARD HOTEL</p>
                        </div>
                        <div class="py-3">
                            <img src="{{asset('assets/front/img/otel-logo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 d-flex flex-column">
                        <p class="paragraph-detail">
                            Lüks kavramının gerçek ve lezzetli gıda, doğayla iç içe ve israftan uzak bir tatil deneyimi olarak yeniden tanımlandığı günümüzde, Bakucha Vineyard tüm bunları doğallık, sadelik ve zarafet ile harmanlayan bir bakış ile sunarak, doğayla bütünleşik otel anlayışını tüm kıstaslarıyla karşılayan özgün bir alan yaratıyor.
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

