@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Hikayemiz")
@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/hikayemiz.png') }}" alt="">
            <div class="position-absolute arcadia">
                <p class="text-center text-white">HİKAYEMİZ</p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <ul class="tabsHikayemiz nav nav-tabs d-flex justify-content-between nav-fill arcadia-nav">
                            <li class="nav-item ">
                                <a class="nav-link @if($slug=="bir-teruarin-uyanis-oykusu") active @endif" id="bir-teruarin-uyanis-oykusu-tab" aria-current="page" data-bs-toggle="tab"
                                   href="#bir-teruarin-uyanis-oykusu" aria-controls="bir-teruarin-uyanis-oykusu">BİR TERUARIN UYANIŞ ÖYKÜSÜ...</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="kurucu-ve-danisman-onologlarimiz") active @endif" id="kurucu-ve-danisman-onologlarimiz-tab" aria-controls="kurucu-ve-danisman-onologlarimiz" data-bs-toggle="tab" href="#kurucu-ve-danisman-onologlarimiz">KURUCU
                                    VE
                                    DANIŞMAN ÖNOLOGLARIMIZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="bagda-ve-saraphanede-nasil-calisiyoruz") active @endif" id="bagda-ve-saraphanede-nasil-calisiyoruz-tab" aria-controls="bagda-ve-saraphanede-nasil-calisiyoruz" data-bs-toggle="tab" href="#bagda-ve-saraphanede-nasil-calisiyoruz">BAĞDA
                                    VE ŞARAPHANEDE NASIL
                                    ÇALIŞIYORUZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="arcadia-ureten-bir-koy") active @endif" id="arcadia-ureten-bir-koy-tab" data-bs-toggle="tab" aria-controls="arcadia-ureten-bir-koy" href="#arcadia-ureten-bir-koy">ARCADIA ÜRETEN
                                    BİR KÖY</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" aria-labelledby="bir-teruarin-uyanis-oykusu-tab" id="bir-teruarin-uyanis-oykusu">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5 ">
                                                <p class="title-homepage m-0">BİR TERUARIN UYANIŞ ÖYKÜSÜ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5 mt-sm-2">
                                                <p class="paragraph-detail">
                                                    Özel bir terruar peşinde Kuzey Trakya’yı gezip toprak örnekleri
                                                    toplamaya başlarken, karşımıza bu kadar zengin ve köklü bir tarih
                                                    çıkacağını beklemiyorduk.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Antik çağlardan bu yana kıtalar arası bir geçiş bölgesi olması
                                                    özelliği ile birçok kültürden izler taşıyan bölgemiz, MÖ 5. Yy- MS
                                                    1. Yy arasında var olmuş bilinen en büyük Trak krallığı olan
                                                    Odrysian Krallığı’na da ev sahipliği yapmış. Genelde yaşamını
                                                    kabileler halinde sürdüren Trak toplulukların araya gelerek
                                                    oluşturduğu Odrysian Krallığı tarihte savaşçılık ve şarapçılıktaki
                                                    becerileri ile tanınırmış.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Antik çağlardan Balkan Savaşına kadar kalitesi ile ünlü bir teruar
                                                    olan Kırklareli’nde, Balkan Savaşı ve ardından gelen 1. Dünya
                                                    Savaşı’nın yarattığı karışıklık, ekonomik ve politik istikrarsızlık,
                                                    nüfus göçü nedenleri ile 20. Yüzyıl başında bağlar sahipsiz ve
                                                    bakımsız kalarak üretim durmuş. Cumhuriyetin kuruluşunu takiben
                                                    Tekel fabrikası Tekirdağ bölgesine kurulunca, fabrikaya nispeten
                                                    uzak kalan Kırklareli’nin yüksek kalite bağcılık potansiyeli atıl
                                                    kalarak bölgede binlerce yıldır süren bu gelenek sekteye uğramış.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Sürdürdüğümüz bilimsel çalışmalar sonucunda 2004 yılında bölgeye
                                                    gelerek Kırklareli’nde Türkiye Cumhuriyeti tarihinde kurulan ilk
                                                    şaraphane olmaktan ve dev bir teruarın 100 yıllık uykusundan
                                                    uyanmasına öncülük ederek tarihin tekerrür etmesine vesile olmaktan
                                                    büyük mutluluk duyuyoruz.

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{ asset('assets/front/img/h1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="container-fluid py-md-5 position-relative arc-bg">
                                    <div class="container">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                <p class="title-homepage m-0">BİR ÜZÜM ŞEHRİ KIRKLARELİ </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p class="paragraph-detail">
                                                    Kırklareli’nin eski isimlerinden biri de “Üzüm Kasabası” ya da
                                                    “Bağ Şehri” anlamına gelen “Lozengrad”.
                                                    Bağ Bozumu, Bağ ve Dere Alemleri olarak adlandırılan şenlikler
                                                    Kırklareli’nde yüzyıllar öncesi yaşamış otantik halk kültürünün
                                                    son yıllara yansımasıdır.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Evliya Çelebi 1658 yılında Kırklareli’ne geldiğinde burada
                                                    binlerce dönüm bağ ve meyvelik bulunduğunu kaydeder ve içine
                                                    girildiğinde insanın kaybolduğunu bildirir.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="paragraph-detail">1830’lu yıllarda Kırklareli’ni
                                                    görüntüleyen bir ressam bağların yol boyunca uzadığını, asma
                                                    dallarının caddelere uzandığını söyler. Bu yıllarda Kırklareli
                                                    halkı şarap yapıp satarlar, şırasını, hardaliyesini içerler,
                                                    pekmezini, bulamasını ve pestilini yerlermiş. Şarap yapacak
                                                    presleri ve fıçıları bu yıllarda edinmişler. </p>
                                                <p class="paragraph-detail">
                                                    Kırklareli’nde evlerin kilerleri ve depoların eklentilerinde
                                                    40–50 tonun üstünde şarap ya da şıra alan fıçılar bulunmuş.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Bugün bazı yerlerde toprak altında bulunan büyük küpler sarnıç
                                                    ve depo olarak kullanıldığı gibi, şarabı yıllandırmak ve seferde
                                                    su ihtiyacını karşılamak için de kullanılırmış.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları’nın her aşamasında bölge ile bağları olmasını
                                                    önemsiyor, mirasçısı olduğumuz bu köklü tarihe minnet duyuyoruz.
                                                    Az bilinen Odrysian Krallığı’nın anısına üst grup serilerimizden
                                                    birine Odrysia adını verdik ve etiketlerini o dönemden kalma
                                                    gümüş ve altın Riton’lar (boynuz şekilli törensel şarap kapları)
                                                    ile süsledik.
                                                </p>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="w-100 h-auto object-fit-contain"
                                                 src="{{ asset('assets/front/img/ekibimiz.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="kurucu-ve-danisman-onologlarimiz-tab" id="kurucu-ve-danisman-onologlarimiz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">ULUSLARARASI UZMANLIK</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    <b>Uluslararası danışmanlık deneyimi:</b> Şarabın kalitesinde ilk
                                                    olarak
                                                    teruarın ana unsurları olarak; iklim, toprak yapısı ve topografya;
                                                    sonra
                                                    o iklim ve toprakta doğru seçimlerle dikilmiş olan bağ, daha sonra
                                                    da
                                                    hasat ve üretim aşamasındaki seçimler belirleyici oluyor. Tüm bu
                                                    kritik
                                                    seçimleri yapmadan önce uzun bir hazırlık ve araştırma süreci
                                                    geçirdik.
                                                    Mekân ve üzümlerin seçimi, şaraphanenin tasarımı ve işleyişi,
                                                    bağcılık
                                                    ve üretim için her ikisi de alanlarında dünyaca tanınmış iki
                                                    uzmandan
                                                    projenin ilk günlerinden başlayarak danışmanlık aldık ve Arcadia
                                                    Bağları’nı birlikte ortaya çıkardık.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Bağcılık ve üzüm adaptasyonu danışmanımız <b>Prof.Dr.Alain
                                                        Carbonneau </b> ve Önolog danışmanımız <b>Dr.Michel Salgues</b>
                                                    .
                                                </p>
                                                <p class="paragraph-detail">
                                                    2018 yılından bu yana da şaraplarımızın yapımını Toskanalı önolog
                                                    <b>Dr.Andrea
                                                        Paoletti</b> danışmanlığında sürdürüyoruz.
                                                </p>

                                            </div>
                                        </div>
                                        <div class="row py-5">
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                <img class="h-auto w-100 object-fit-contain "
                                                     src="{{asset('assets/front/img/k1.png')}}" alt="">
                                                <span class="hikaye-absolute">
                                                Dr.Michel Salgues ve Prof.Dr.Alain Carbonneau
                                            </span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                <img class="h-auto w-100 object-fit-contain "
                                                     src="{{asset('assets/front/img/k2.png')}}" alt="">
                                                <span class="hikaye-absolute">
                                                Prof.Dr.Alain Carbonneau
                                            </span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 position-relative ko-img">
                                                <img class="h-auto w-100 object-fit-contain "
                                                     src="{{asset('assets/front/img/k3.png')}}" alt="">
                                                <span class="hikaye-absolute">
                                                Dr.Andrea Paoletti
                                            </span>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="bagda-ve-saraphanede-nasil-calisiyoruz-tab" id="bagda-ve-saraphanede-nasil-calisiyoruz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">BİZİ BİZ YAPAN ÖZELLİKLERİMİZ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları projesi yüksek kalite şarap üretimi, tarım ve
                                                    turizmi
                                                    odağına yerleştirerek, sürdürülebilirlik prensibi ile geliştirilmiş
                                                    yeni
                                                    bir tatil, yaşam tarzı ve lüks kavramı tanımlayan mutlidisipliner
                                                    bir
                                                    proje olarak doğdu.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları’nda üzümler sabahın ilk ışıkları ile elle hasat
                                                    edilip,
                                                    “Şato Tipi” üretime uygun olarak hiç bekletilmeden bağların içinde
                                                    bulunan şaraphanede işlemeye alınıyor. Şaraphanede tekrar elle
                                                    seçimi
                                                    yapılan üzümler, mikrovinifikasyon yöntemi ile küçük hacimli
                                                    tanklarda,
                                                    her parsel ayrı ayrı olmak üzere fermante ediliyor.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container-fluid">
                                        <div class="row py-5">
                                            <div class="col-12">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{asset('assets/front/img/n1.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container py-md-5">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6 col-sm-12 d-flex flex-column">
                                                <p class="title-homepage ">MANİPÜLE EDİLMEMİŞ TERUAR ŞARAPLARI</p>
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları teruarından gelen tüm özel lezzetleri maksimum
                                                    düzeyde
                                                    koruyabilmek, kadehlere eksiksiz ulaştırabilmek ve içimine kadar
                                                    yaşamaya devam eden şaraplar üretebilmek için inceltme işlemi
                                                    (fining)
                                                    ve konvansiyonel filitrasyon dahil lezzet değişimine yol açacak
                                                    hiçbir
                                                    manipülatif işlem uygulanmıyor.
                                                </p>
                                                <p class="title-homepage">KALİTE AYRINTIDA GİZLİ </p>
                                                <p class="paragraph-detail">
                                                    Bağda üzümlerin yetiştirilmesinde gösterilen özen, her bir salkımın
                                                    ayrı
                                                    ayrı elle toplanması ile devam ediyor. Üzümün kendi lezzetini
                                                    kaybetmemesi ve kabuktaki maya mikroorganizmalarla kontrolsüz bir
                                                    fermantasyonun başlamaması için, işlemeye girene kadar hiçbir
                                                    şekilde
                                                    şıranın akmaması ve kabuğunun zarar görmemesi çok önemli.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Bu yüzden Arcadia Bağları’nın hasadı bıçakla değil makasla
                                                    yapılıyor.
                                                    Üzümler birbirinin ağırlığıyla ezilip suları akmasın diye delikli 8
                                                    kiloluk küçük sepetlerle taşınıyor. Üretim süreciyle ilgili bu
                                                    ufacık
                                                    detaylar bile şarabın doğallığını ve kalitesini belirleyen önemli
                                                    etkenler.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-flex justify-content-between">
                                                <div><img class="w-100 h-auto object-fit-contain p-1"
                                                          src="{{asset('assets/front/img/n2.png')}}" alt=""></div>
                                                <div><img class="w-100 h-auto object-fit-contain p-1"
                                                          src="{{asset('assets/front/img/n3.png')}}" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid ">
                                        <div class="row">
                                            <div class="col-12 position-relative">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{asset('assets/front/img/n4.png')}}" alt="">
                                                <div class="d-flex flex-column calisma-absolute">
                                                    <div class="img-cls-title">
                                                        Kuruluşundan üretİmİne her adımda
                                                    </div>
                                                    <div class="img-cls-title">
                                                        geleneksel yöntemlerle modern
                                                    </div>
                                                    <div class="img-cls-title">
                                                        teknolojİyİ harmanlayan
                                                    </div>
                                                    <div class="img-cls-title">
                                                        yenİ nesİl şaraplar
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="paragraph-detail">
                                                    Şaraphanede üzümler işlenirken hassas presleme teknikleri, bütün
                                                    dünyada
                                                    kullanılan klasik sap ayırma makinelerinden farklı, üzümü yırtmadan
                                                    ve
                                                    kopartmadan elle ayırırmışçasına özenle ayıklamak üzere tasarlanmış
                                                    kauçuk parmaklı yeni teknoloji sap ayırma makinesi ve özel tasarım
                                                    paslanmaz çelik tankların yanı sıra eski yöntem elle tane seçimi,
                                                    yerçekimi tekniği ve geleneksel Fransız meşesi kask ve fıçılar
                                                    kullanılıyor.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p class="title-homepage">YER ÇEKİMİ TEKNİĞİ </p>
                                                <p class="paragraph-detail">
                                                    Üzümün pompalanması sırasında ortaya çıkan sürtünme, istenmeyen sert
                                                    tatların oluşmasına sebep oluyor. Bu tatların daha sonra ek işlemler
                                                    yapılarak düzeltilmesi aşamasında şarabın özgün lezzetlerinin bir
                                                    kısmı
                                                    da bu istenmeyen tatlarla birlikle kayboluyor. İşte bu yüzden,
                                                    Arcadia’da, şaraphanenin özel tasarımı sayesinde üzümler pres ve
                                                    tanklara yerçekimi yardımı ile pompalanmadan dolduruluyor.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="title-homepage">MİKROVİNİFİKASYON </p>
                                                <p class="paragraph-detail">
                                                    Bağda her biri özelliğine göre ayrı takip edilen parsellerden gelen
                                                    üzümler, şaraphanede de özel tasarım küçük tanklarda ayrı ayrı
                                                    fermante
                                                    ediliyor. Kırmızı üzümlerin rengi ve taneni düzenli olarak elle
                                                    dövülerek çıkartılıyor. Küçük hacimler halinde kontrollü olarak
                                                    fermante
                                                    edilen şaraplar, olgunlaştıktan sonra tadımı yapılarak harmanlanıyor
                                                    ve
                                                    o yılın rekoltesi Arcadia Şarapları ortaya çıkıyor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" aria-labelledby="arcadia-ureten-bir-koy-tab" id="arcadia-ureten-bir-koy">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">ARCADIA: ÜRETEN BİR KÖY</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Hikayemiz </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="paragraph-detail">
                                                    Arcadia’nın varolduğu tüm alanı tek bir ekosistem olarak düşünüyor,
                                                    arazi içerisindeki meşe korularının ve evsahibi yaptıkları böcek ve
                                                    hayvanların, endemik çiçeklerin ve yetiştirdiğimiz diğer ürünlerin
                                                    birbiri ile dengeli bir ilişki ile yaşayacakları ortamı oluşturmaya
                                                    çalışıyoruz.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Bu da aslında sağlıklı bir ekosistem kurgulayıp, atık oluşumumuzu en
                                                    aza indirirken malzemelerimizi ve kaynaklarımızı, kullanımlarının
                                                    sonunda ürün döngüsüne geri döndürerek, değerlerini mümkün olduğunca
                                                    uzun süre korumayı hedeflediğimiz döngüsel ekonomi anlayışımızla
                                                    mümkün oluyor.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container-fluid ">
                                        <div class="row pt-5">
                                            <div class="col-12">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{asset('assets/front/img/koy1.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid py-md-5 arc-bg">
                                        <div class="container py-md-5">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                    <p class="title-homepage m-0">GELİŞEN, GELİŞTİRİLEBİLEN ARAZİ</p>
                                                    <p class="paragraph-detail">
                                                        İster bağ, ister meyve bahçesi, ister bostan… Sizi toprakla tanıştırabileceğimiz, üretim yaparken size destek olabileceğimiz bir hayat tasarlıyoruz. Burası sizin eviniz, ne üretmek istiyorsanız, biz profesyonel ekibimizle desteğe hazırız. Bağınızı, bahçenizi bize emanet edebileceğiniz, hasadınızı birlikte toplayıp satabileceğimiz, kendi mahzeninizde şarap üretmek isterseniz de destek olabileceğimiz bir yaşam alternatifi için sizlerle tanışmayı bekliyoruz.

                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 ">
                                                    <img class="w-100 h-auto object-fit-contain p-1"
                                                         src="{{asset('assets/front/img/arc11.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container py-5">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6 col-sm-12">
                                                <img class="w-100 h-auto object-fit-contain p-1"
                                                     src="{{asset('assets/front/img/koy3.png')}}" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                <p class="title-homepage m-0">LOKASYON</p>
                                                <p class="paragraph-detail">
                                                    Istranca dağlarının altında uzanan vadide, İstanbul’a 160 km mesafede, 200 hektarlık bir arazide; bağları, şato tipi üretimhanesi, meyve bahçeleri, bostanları, meşe koruları, irili ufaklı çiftlikleri ve BAKUCHA Vineyard Hotel & SPA ile doğa içinde bir gastronomi merkezi olarak tasarlanan Arcadia Bağları’nda size alternatif bir yaşam öneriyoruz.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="container-fluid pt-5 arc-bg">
                                        <div class="container py-5">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-6 col-sm-12 d-flex flex-column ">
                                                    <p class="title-homepage m-0">ÇİFTLİKLER</p>

                                                </div>
                                                <div class="col-md-6 col-sm-12 ">
                                                    <p class="paragraph-detail">
                                                        Şehirler, üretmekten çok tüketen, doğadan kopuk hızlı yaşam
                                                        temposu ile yorucu olabiliyor. İnsanlar sadece koşuşturuyor,
                                                        herkesin acelesi var. Herkesin bir köy hayatı özlemi var ama ya
                                                        emekliliğe erteleniyor ya da hayal olarak kalıyor. Önünüzde uzun
                                                        binalar olmadan güneşin batışını izleyip, ‘güvenilir mi,
                                                        sağlıklı mı’ endişesi olmadan, sebze meyveyi bahçeden
                                                        toplayacağınız, altyapı ve bağ bahçe bakım hizmetini var olan
                                                        bir sistemden alma imkanı olan çiftlikler sınırlı sayıda
                                                        hazırlandı ve 2000 dekarlık Arcadia Bağları arazisine
                                                        serpiştirildi.
                                                    </p>
                                                    <p class="paragraph-detail">
                                                        İstanbul’a yalnızca 160 km. mesafede, üreten, sürdürülebilir bir
                                                        yaşam hayaline ortak olmak isteyecekler için hazırlanan
                                                        çiftliklerin büyüklükleri 10 ila 30 dekar arasında değişiyor.
                                                        Bir kısmının halihazırda dikili yetişkin bağları, bir kısmının
                                                        da dikili Armut bahçeleri var. Bahçelere Arcadia’nın sisteminden
                                                        know how ve bakım hizmeti almak mümkün olacak. Armut bahçesi
                                                        sahipleri aynı zamanda dilerlerse ortak pazarlama yapma imkânı
                                                        da bulabilecek.
                                                    </p>
                                                    <p class="paragraph-detail">
                                                        Çiflik projeleri varolan parseller üzerinden çalışıldı.
                                                        Projelerde Bakucha oteldeki gibi taş ve ahşap ağılıklı malzeme
                                                        tercih ediliyor. Her bir çiftlik evi ekibimiz tarafından
                                                        sahibinin tercihlerine göre özel projelendiriliyor.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container-fluid ">
                                        <div class="row ">
                                            <div class="col-12 ">
                                                <img class="w-100 h-auto object-fit-contain"
                                                     src="{{asset('assets/front/img/arc2.png')}}" alt="">
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

