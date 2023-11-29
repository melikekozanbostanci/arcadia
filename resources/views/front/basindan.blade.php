@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Basından")

@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/baglar.png') }}" alt="">
            <div class="position-absolute arcadia">
                <p class="text-center text-white">BASINDAN</p>
            </div>
        </section>
        <section class="mt-md-5">
            <div class="container mt-3">
                <div class="row d-flex justify-content-center pb-5">
                    <div class="col-md-6 col-sm-12 mt-md-5 ">
                        <p class="title-homepage m-0">BASINDAN </p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>Arcadia Bağları </span>
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-md-5">
                        <p class="paragraph-detail">
                            Arcadia Bağlarının ilk günlerinden bu yana kadının gelişmesinin toplumun gelişmesi için
                            kaçınılmaz olduğunun bilinciyle ekibimizin her kademesinde kadın erkek dengesine dikkat
                            ettik. Organizasyon genelinde kadın çalışan oranımız %54, yönetici kadememizde de bu oran
                            %50.

                        </p>
                        <p class="paragraph-detail">
                            Kurucu Zeynep Arca Şallıel, Arcadia Projesi’yle 2016 yılında Garanti Bankası, Ekonomist
                            dergisi ve Kagider tarafından verilen “Yöresinde Fark Yaratan Kadın Girişimci” ödülü olmak
                            üzere birçok kadın girişimci ödülüne layık görüldü.
                        </p>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/basindan-1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/basindan-2.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/basindan-3.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain" src="{{ asset('assets/front/img/basindan-4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

