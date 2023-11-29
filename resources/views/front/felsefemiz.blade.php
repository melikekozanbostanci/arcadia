@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Felsefemiz")
@section('content')
    <!-- main-area -->
    <main>
        <section>
            <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/felsefe-1.png ') }}" alt="">
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <ul class="tabsFelsefe nav nav-tabs d-flex justify-content-between nav-fill arcadia-nav">
                            <li class="nav-item ">
                                <a class="nav-link @if($slug=="surdurebilirlik-felsefemiz") active @endif" aria-controls="surdurebilirlik-felsefemiz"  id="surdurebilirlik-felsefemiz-tab" aria-current="page" data-bs-toggle="tab"
                                   href="#surdurebilirlik-felsefemiz">SÜRDÜREBİLİRLİK FELSEFEMİZ</a>
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
                                                <p class="title-homepage m-0">SÜRDÜRÜLEBİLİRLİK FELSEFEMİZ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Sağlıklı bir bağ dolayısı ile sağlıklı bir ekosistem ve onda yetişen
                                                    kaliteli üzümler, iyi bir şarap üretmenin olmazsa olmazları. Bunun
                                                    yanında dünyanın geçirmekte olduğu hızlı değişim ve daha temiz
                                                    üretime duyulan ihtiyacın da farkındalığı ile 2003 yılında Arcadia
                                                    Bağları’nın ilk adımlarını sürdürülebilir, döngüsel bir üretim
                                                    modeli kurmak üzere attık.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Tüm alanı tek bir ekosistem olarak düşünüyor, arazi içerisindeki
                                                    meşe korularının ve ev sahipliği yaptıkları böcek ve hayvanların,
                                                    endemik çiçeklerin ve yetiştirdiğimiz diğer ürünlerin birbiri ile
                                                    dengeli bir ilişki ile yaşayacakları ortamı sağlamayı hedefliyoruz.
                                                    Kurduğumuz döngüsel sistemde bağlara ve ekosisteme iyi gelecek
                                                    farklı ürünler yetiştiriyor, üretimi doğa ile işbirliği içinde
                                                    yürüteceğimiz bir denge sürdürüyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Önce heterojen toprak yapısını tanıyarak araziyi parsellere ayırdık.
                                                    Bağları dikmek için en uygun parselleri seçtik, aralarına meyve ve
                                                    lavanta bahçeleri serpiştirdik. Arazide halihazırda bulunan meşe
                                                    korularını ekosistemimizin önemli bir parçası addederek korumaya
                                                    aldık. Buradaki verimli toprak ve mikroorganizmalardan faydalanarak
                                                    toprağımızı zenginleştiriyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia yerleşkesindeki bazı alanları endemik yaşam gelişme alanı
                                                    olarak bıraktık. Burada birçok bitki ve hayvan türüne ev sahipliği
                                                    yapıyoruz.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{ asset('assets/front/img/felsefe-2.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5 ">
                                                <p class="title-homepage m-0">SÜRDÜRÜLEBİLİRLİK BAĞCILIK VE TARIMSAL ÜRETİM
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Sürdürülebilir tarım felsefesi, üründe ve doğada kalıntı bırakmayan bir yaklaşım benimsiyor. Bu yaklaşımla, bağların ilk gününden bu yana yabani ot ve zararlı böcekler ile mücadelede zehirli ilaçları kullanmıyor, mekanik mücadele yöntemleri, yer örtücü bitkiler ve doğal preparatlardan faydalanıyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Üzüm ve şarap üretiminin yanı sıra armut, lavanta, atalık tohumlardan mevsimlik sebzeler, atalık buğday, polen ve ham balımızı da kendimiz üretiyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Lavantalarımızdan yağ, sabun ve kozmetik ürünleri, atalık kızılca buğdayımızdan ekmekler, sarı buğdaydan kuskus ve makarnamızı üretmeye başladık. Atalık tohum koleksiyonumuzu çevre köylerle de paylaşıyor, biyoçeşitliliği kendi arazimizin ötesinde de desteklemeye çalışıyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Bakucha Otel restoranımızda; «Tarladan tabağa » prensibi ile mevsiminde Arcadia bostanlarından ve civar köylerden temin edilen malzemelerle özel lezzetler sunuyoruz. Menüler mevsime göre yenileniyor.  Otelde sunulan ekşi maya ekmekler, makarnalar, hamur işleri, reçeller ve sosların tamamı ev yapımı.  Bakucha mutfağında bölgede çıkan yaz trüfü, porçini mantarı gibi özel ürünler, mevsiminde alınıp işlenerek saklanıyor ve yıl boyu kullanılıyor. Bütün bunlar hem daha sağlıklı ve kaliteli ürüne ulaşmak hem de yapılan işin dünyaya yarattığı etkiyi kontrollü tutabilmek için.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Mevsimine göre üretilen tarımsal ürünlerimizi şu şekilde sıralamak mümkün.
                                                    <br>
                                                    ÜZÜM, ARMUT, KİRAZ, LAVANTA, SEBZE, MANTAR, TRÜF MANTARI, AROMATİK BİTKİLER, BAL
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
                                    <div class="container">
                                        <div class="row d-flex justify-content-center py-md-5">
                                            <div class="col-md-6 col-sm-12 py-md-5 ">
                                                <p class="title-homepage m-0">SÜRDÜRÜLEBİLİR TURİZM
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları’nın sürdürülebilirlik prensibi doğrultusunda her
                                                    zaman başrolün doğada olmasına özen gösteriyoruz. Doğayı diğer
                                                    türler ile paylaştığımızın bilincindeyiz. Otelde sabah kuş seslerine
                                                    uyanan, yürüyüş yolunda her mevsim farklı endemik çiçek türleri ile
                                                    tanışan misafirlerimiz de bu durumdan çok memnun. Yine bu çerçevede,
                                                    Bakucha Otel’in yüzme havuzu da ozon ile dezenfekte edilen ve tuzdan
                                                    kendi klorunu üreten doğa dostu bir sistem ile kuruldu.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid py-5 arc-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 ko-img">
                                                    <img class="w-100 h-auto object-fit-contain"
                                                         src="{{ asset('assets/front/img/felsefemiz-9.png ') }}"
                                                         alt="">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p class="title-homepage m-0 pb-3">SÜRDÜRÜLEBİLİR MİMARİ VE TARİHİ MİRAS
                                                    </p>
                                                    <p class="paragraph-detail">
                                                        Bakucha Otel’in tasarımında yerel öğelerin ve taş, ahşap gibi doğal
                                                        malzemelerin kullanıldığı eklektik bir mimari stil tercih edilirken,
                                                        binanın merkezindeki kulenin mimarisi eski Edirne Sarayı’nın
                                                        Cihannuma Kasrı’ndan esinlendi. Günümüze ulaşamayan bu özgün tarihi
                                                        yapıya bir saygı duruşu olarak inşa edilen kule, Istranca’da bulunan
                                                        eski taş ocaklarından gelen taşlar ile örüldü.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center pb-md-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">YEŞİL ENERJİ
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Arazide kurulu 500 KWA’lık güneş enerjisi santralinden, üretim ve otel operasyonlarının tamamı için gereken yıllık toplam enerjinin iki katı üretiliyor.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Elektrikli araç tercih edenler için, otelin otopark alanında şarj istasyonları bulunuyor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row py-md-5">
                                            <div class="col-12">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{ asset('assets/front/img/felsefe-5.png') }}" alt="">
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
                                                <p class="title-homepage m-0">ARCADIA FAUNA</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
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

