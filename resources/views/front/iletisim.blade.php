@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | İletişim")

@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/iletisim.png') }}" alt="">
            <div class="position-absolute arcadia">
                <p class="text-center text-white">İLETİŞİM</p>
            </div>
        </section>
        <section class="mt-5">
           <div class="container">
               <div class="row d-flex justify-content-between align-items-start">
                   <div class="col-md-2 col-sm-12">
                       <div>
                           <p class="title-homepage mb-0">İLETİŞİM</p>
                       </div>
                       <div>
                           <p class="sub-title-homepage d-flex justify-content-start align-items-center m-0">
                               <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                               <span>Ulaşım</span>
                           </p>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12 mt-3">
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
                       <div class="d-flex justify-content-start mt-2">
                           <a class="blog-a" href="{{$siteAyar->site_facebook}}" target="_blank">
                               <img class="me-2" src="{{asset('assets/front/img/facebook-icon.png')}}" alt="">
                           </a>
                           <a class="blog-a" href="{{$siteAyar->site_twitter}}" target="_blank">
                               <img src="{{asset('assets/front/img/twitter-icon.png')}}" alt="">
                           </a>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-12 d-flex flex-column mt-3">
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
                               <button type="submit" class="btn btn-outline-secondary btn-arcadia">GÖNDER</button>
                               </button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="w-100 h-auto" src="{{ asset('assets/front/img/line-iletisim.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <div>
                            <p class="title-homepage mb-0">İNSAN KAYNAKLARI</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-8">
                                <div>Başvurularınızı mail ile iletebilirsiniz. </div>
                                <div>ik@arcadiavineyards.com </div>
                            </div>
                            <div class="col-4">
                                <a href="mailto:ik@arcadiavineyards.com"  class="btn btn-outline-secondary btn-arcadia"> BAŞVUR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 siteMap">
                        {!! $siteAyar->site_google_harita !!}
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

