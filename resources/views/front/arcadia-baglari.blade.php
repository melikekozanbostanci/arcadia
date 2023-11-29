@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Arcadia Bağları")

@section('content')
    <!-- main-area -->
    <main>
        <section class="position-relative">
            <img class="w-100 baslik-foto" src="{{ asset('assets/front/img/baglar.png') }}" alt="">
            <div class="position-absolute arcadia">
                <p class="text-center text-white">ARCADIA BAĞLARI</p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <ul class="tabsArcadia nav nav-tabs d-flex justify-content-between nav-fill arcadia-nav">
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="arcadia") active @endif" id="arcadia-tab"
                                   aria-current="page" data-bs-toggle="tab"
                                   href="#arcadia" aria-controls="arcadia" aria-selected="true">ARCADIA
                                    BAĞLARI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="uzumlerimiz") active @endif" id="uzumlerimiz-tab"
                                   data-bs-toggle="tab" href="#uzumlerimiz"
                                   aria-controls="uzumlerimiz" aria-selected="false">ÜZÜMLERİMİZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="saraplarimiz") active @endif" id="saraplarimiz-tab"
                                   data-bs-toggle="tab" href="#saraplarimiz"
                                   aria-controls="saraplarimiz" aria-selected="false">ŞARAPLARIMIZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="hasat-raporlari") active @endif" id="hasat-raporlari-tab"
                                   data-bs-toggle="tab"
                                   href="#hasat-raporlari" aria-controls="hasat-raporlari" aria-selected="false">HASAT
                                    RAPORLARI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="bag-haritamiz") active @endif" id="bag-haritamiz-tab"
                                   data-bs-toggle="tab" href="#bag-haritamiz"
                                   aria-controls="bag-haritamiz" aria-selected="false">BAĞ HARİTAMIZ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="foto-galeri") active @endif" id="foto-galeri-tab"
                                   data-bs-toggle="tab" href="#foto-galeri"
                                   aria-controls="foto-galeri" aria-selected="false">FOTO GALERİ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($slug=="arcadiadan-haberler") active @endif"
                                   id="arcadiadan-haberler-tab" data-bs-toggle="tab"
                                   href="#arcadiadan-haberler" aria-controls="arcadiadan-haberler"
                                   aria-selected="false">ARCADIA'DAN HABERLER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="arcadia-tab"
                                 id="arcadia">
                                <section class="mt-lg-5">
                                    <div class="container mt-3 ">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">BAĞLARIN ÖYKÜSÜ & TARİHİ ŞARAP YOLU</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Arcadia Bağları </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5 mt-sm-2">
                                                <p class="paragraph-detail">
                                                    2002 yılında Arcadia Bağları’nı projelendirmeye ve bağlar için yer
                                                    bakmaya başladığımızda köklü şarapçılık ve üzümcülük geçmişi olan
                                                    Ege Bölgesi ve Trakya’ya öncelik verdik. Zamanla arayışımız kuzeye
                                                    yöneldi. Trakya’nın her köşesini gezdik ve yaklaşık 15.000 km yol
                                                    yaptık, toprak analizleri aldık, hava durumu verilerini inceledik.
                                                    Uzun bir araştırma döneminden sonra Lüleburgaz’ın kuzeyi ile
                                                    Istranca Dağları arasındaki bölgede yer alan ve coğrafi yapısı uygun
                                                    mikroklima özellikleri gösteren Arcadia Bağları’nın bugünkü arazisi,
                                                    bizi çok heyecanlandırdı. Danışmanlarımızla birlikte bütün verileri
                                                    önümüze koyduk ve buranın projemiz için en uygun arazi olduğunu
                                                    gördük.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Uygun toprağın bulunmasından sonra toprak hazırlığı ve cins seçimi
                                                    için geçirilen yoğun bir hazırlık döneminin sonunda bağlarımızı
                                                    diktik.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia Bağları’nın batısından, Üsküp üzerinden İğneada ve Kıyıköy’e
                                                    uzanan eski haritalarda “Şarap Yolu” ismiyle anılan bir yol geçiyor.
                                                    Tarihte, burada üretilen şarapların büyük küpler ve fıçılar
                                                    içerisinde, manda arabalarıyla İğneada ve Kıyıköy’e götürülerek,
                                                    buradan gemilere yüklenip İtalya ve Fransa’ya gönderildiği
                                                    biliniyor.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="container-fluid py-5 position-relative arc-bg">
                                        <div class="container">
                                            <div class="row py-md-5">
                                                <div class="col-lg-6 col-sm-12">
                                                    <p class="arc-title text-center">
                                                        TARİHİ ŞARAP YOLU HAKKINDA
                                                    </p>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 arc-abs">
                                                    <img class="w-50"
                                                         src="{{asset('assets/front/img/arc-title.png')}}" alt="">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p class="paragraph-detail">
                                                        Kırklareli, tarih boyunca; bağları ve şarapları ile anılmasına
                                                        rağmen, bağlar zamanla azalmış ve şarapçılık yok olma noktasına
                                                        gelmiş. Kırklareli’nin çok az tanınan eski köyleri üzerinden,
                                                        Kıyıköy’e şarap taşımak için yapılmış tarihi bir yol var.
                                                        Tarihte
                                                        burada üretilen şarapların büyük küpler ve fıçılar içerisinde,
                                                        manda
                                                        arabalarıyla Kıyıköy’e götürülerek, buradan gemilere yüklenerek
                                                        Venedik ve Marsilya’ya gönderildiği biliniyor. Üsküp üzerinden
                                                        İğneada’ya, Kıyıköy’e geçen, limanlara şarapların taşındığı bu
                                                        yollar eski haritalarda “Şarap Yolu” adıyla geçiyor.
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12 pb-5">
                                                    <p class="paragraph-detail">Tarihi Şarap Yolu, Arcadia Bağları’nın
                                                        tam
                                                        karşısında yer alan
                                                        Çeşmekolu Köyü’nün arkasında bulunuyor. Arcadia Bağları’nın
                                                        kurulu
                                                        olduğu arazi eski haritalarda Bağlık Yakası olarak anılıyor.</p>
                                                    <p class="paragraph-detail">19. yüzyıl sonlarında Fransa’da
                                                        filoksera
                                                        isimli zararlının yayılması
                                                        ile bağların %95’i yok olmuş ve Amerikan anacına aşılı
                                                        fidanlarla
                                                        yeniden dikimi yapılmış. Bu yeni dikilen bağlardan verim alınana
                                                        kadar yaklaşık 5 yıllık bir süreçte Fransa, Osmanlı
                                                        İmparatorluğu
                                                        ile yapmış olduğu Kapitülasyonlar çerçevesinde şarap ihtiyacının
                                                        çoğunu Trakya ve Ege’den dökme şarap olarak karşılamış. Bu
                                                        dönemde
                                                        Kırklareli’nden de Fransa’ya şarap ihraç edildiği biliniyor.</p>
                                                    <p class="paragraph-detail pb-5">
                                                        Arcadia Bağları projesinin başlıca amacı bu uyuyan potansiyeli
                                                        canlandırarak, bölgede yetişen üzümlerle üretilecek, bu toprağın
                                                        özel lezzetlerini yansıtan, içimine kadar yaşamaya devam eden,
                                                        doğal
                                                        ve özgün, dünya standardında Teruar Şarapları üreterek, tarihte
                                                        olduğu gibi Kuzeydoğu Trakya’da Tarihi Şarap Yolu’nun geçtiği
                                                        bölgeden, şarapların yeniden dünyaya ulaşabilmesini sağlamak.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row position-relative py-5">
                                                <div class="col-lg-12 col-sm-12 arc-abs2 my-5">
                                                    <img class="w-100"
                                                         src="{{asset('assets/front/img/degirmen2.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-end position-relative pt-md-5">
                                                <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                                    <p class="arc-title text-center">
                                                        ARKADIA İSMİNİN ANLAMI
                                                    </p>
                                                    <p class="paragraph-detail">Bağların bulunduğu köy Lüleburgaz’a
                                                        bağlı. Lüleburgaz’ın eski ismi ise Arcadiapolis. Ayrıca
                                                        mitolojide Arcadia, “yeryüzünde cenneti andıran eşsiz güzellikte
                                                        bahçe” anlamında kullanılıyor. Hem yerel oluşunu hem de
                                                        mitolojik anlamını çok yakıştırdık ve bağlarımıza Arcadia
                                                        Bağları ismini verdik.</p>
                                                    <p class="paragraph-detail">Istranca bağlarının güneyinde, tarihi
                                                        Şarap Yolu’nun geçtiği topraklarda, Çeşmekolu ve Hamitabat
                                                        köyleri arasında, 150 metre rakımda dikilen Arcadia Bağları,
                                                        Trakya’nın tam orta noktasında, karasal iklim özellikleri
                                                        gösteren, gece gündüz sıcaklık farklarının yüksek olduğu bir
                                                        konumda yer alıyor. </p>
                                                    <p class="paragraph-detail">
                                                        Toprak yapısı, iklim koşulları ve Türkiye’nin kuzeybatı ucunda
                                                        bir bölgede, özel bir coğrafyada yer almanın avantajını
                                                        kullanarak, Arcadia’da beyaz, roze, kırmızı, köpüklü ve asil
                                                        küflü olmak üzere, zengin bir yelpazede teruar şarapları
                                                        üretiyoruz.
                                                    </p>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
                                                    <div>
                                                        <img class="w-100"
                                                             src="{{asset('assets/front/img/tr-map.png')}}"
                                                             alt="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="uzumlerimiz-tab"
                                 id="uzumlerimiz">
                                <section class="mt-lg-5">
                                    <div class="container mt-3">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-md-5">
                                                <p class="title-homepage m-0">ÜZÜMLERİMİZ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Arcadia Bağları </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-md-5 mt-sm-2">
                                                <p class="paragraph-detail">
                                                    Bağlardan gelen lezzetleri eksiksiz hissettiren teruar şarabı
                                                    üretebilmek için, bağların kurulumundan üretim süreçlerinin seçimine
                                                    kadar her aşamada hassas, minimum müdahale gerektirecek yöntemleri
                                                    tercih ettik.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia ürünlerini kendi bağlarımızda yetişen üzümlerden üretiyoruz.
                                                    350 dekarlık bağ arazisinde on farklı cins üzüm yetiştiriyoruz;
                                                    Cabernet Franc, Cabernet Sauvignon, Merlot, Papaskarası, Sangiovese,
                                                    Petit Verdot, Sauvignon Blanc, Sauvignon Gris, Pinot Gris ve
                                                    Narince.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Bunların yanında Ar-ge parselimizde faklı üzümlerle çalışıyor,
                                                    aralarından seçtiklerimizi süreç içinde üretime ekliyoruz.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="container-fluid">
                                        <div class="row pb-md-5">
                                            <div class="col-12">
                                                <div>
                                                    <img class="w-100"
                                                         src="{{asset('assets/front/img/det-uzum.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="container py-5">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 ">
                                                <p class="paragraph-detail">
                                                    Teruarımızı dinleyerek, onun bize öğrettikleriyle, beyaz
                                                    şaraplara özel bir çalışma yapmaya karar verdik: yoğun meyve
                                                    aromaları barındıran, mineral özellikte, asit dengesi yerinde,
                                                    canlı, özgün ve yıllanabilir beyazlar ürettik.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Cins özellikleri, bizim yapmak istediğimiz şaraba yatkınlıkları,
                                                    toprağımıza ve bölgemize uyum gösterebilme özelliklerinden
                                                    dolayı tanınan ve sevilen Sauvignon Blanc’ın yanı sıra Sauvignon
                                                    Gris ve Pinot Gris üzümleriyle de çalışmayı tercih ettik. En
                                                    eski üzüm cinslerinden olan ve çok değerli şarapların yapımında
                                                    kullanılan Sauvignon Gris üzümünü, Türkiye’de ilk kez Arcadia
                                                    Bağları’nda yetiştiriyoruz.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Tokat bölgesi üzümlerinden Narince de, kökeniyle benzer özellik
                                                    gösteren teruarımıza hızla adapte oldu ve beyazlarımız arasına
                                                    katıldı.

                                                </p>
                                                <p class="paragraph-detail">
                                                    Kırmızılarda, Cabernet Franc’ın bölgedeki güçlü potansiyelini
                                                    görünce 2011 rekoltesinde bu üzümden ilk monosepaj ürünümüzü
                                                    çalıştık
                                                </p>
                                                <p class="paragraph-detail">
                                                    Dünya standartlarında yüksek kalitede şarap üretebilmenin gereği
                                                    olan “yerinde üretim” tekniğini seçerek şaraphanemizi bağların
                                                    tam ortasına kurduk.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Arcadia’da üzümler güneşin ilk ışıklarıyla toplanarak doğrudan
                                                    bağların ortasında yer alan şaraphanemize gidiyor ve hiç
                                                    beklemeden işlemeye alınıyor. Bu, üzümün tadını koruması
                                                    bakımından çok önemli. Şaraphanenin özel tasarımı sayesinde
                                                    üzümler sadece yerçekimiyle, pompa ve benzeri mekanik yöntemler
                                                    kullanılmadan işleniyor, şaraplar en saf haliyle bağında
                                                    şişeleniyor.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Bağlarımızı dikerken dengeli olgunlaşma kontrolü sağlayan Lyre
                                                    Telli Terbiye Sistemini seçerek bu sistemi ülkemizde ilk kez
                                                    uyguladık.
                                                </p>
                                                <p class="paragraph-detail">
                                                    Bağlardan kadehe kadar uzanan süreçte modern olanakların
                                                    getirdiği avantajları geleneksel yöntemlerle birlikte
                                                    kullanıyor, iyi ile daha iyi arasındaki farkı yaratan küçük
                                                    detaylara önem veriyoruz.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12  d-flex justify-content-center">
                                                <div class="col-6 pe-1">
                                                    <img class="w-100 h-auto object-fit-contain"
                                                         src="{{asset('assets/front/img/uzum-1.png')}}" alt="">
                                                </div>
                                                <div class="col-6">
                                                    <img class="w-100 h-auto object-fit-contain"
                                                         src="{{asset('assets/front/img/uzum-2.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="foto-galeri-tab"
                                 id="foto-galeri">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-12 mt-lg-5">
                                                <p class="title-homepage m-0">FOTO GALERİ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Bağlarda 4 Mevsim </span>
                                                </p>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between align-items-center">
                                                <div class="row">
                                                    @foreach($galeri as $foto)
                                                        <div class="col-lg-4 col-md-6 col-sm-12 p-2">
                                                            <div class="galeri-foto">
                                                                <img class="w-100 h-100 object-fit-contain"
                                                                     src="{{asset("storage/foto-galeri/$foto->images")}}"
                                                                     alt="{{$foto->aciklama}}">
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="bag-haritamiz-tab"
                                 id="bag-haritamiz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row mt-md-5">
                                            <div class="col-12 mt-lg-5">
                                                <p class="title-homepage m-0">BAĞ HARİTAMIZ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Bağlarda 4 Mevsim </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <div>
                                                        <img class="w-100 h-100 object-fit-contain"
                                                             src="{{asset('assets/front/img/harita.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="arcadiadan-haberler-tab"
                                 id="arcadiadan-haberler">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row pb-5">
                                            <div class="col-12 d-flex justify-content-center">
                                                <p class="blog-title d-block">
                                                    ARCADIA'DAN HABERLER
                                                </p>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center pb-5">
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Arcadia Bağları </span>
                                                </p>
                                            </div>
                                            <div class="row justify-content-between align-items-center">
                                                @foreach($bloglar as $blog)
                                                    <div class="col-lg-4 col-md-6 col-sm-12 p-2 d-flex flex-column">
                                                        <a class="blog-a"
                                                           href="{{asset('/arcadia-baglari/arcadiadan-haberler/'.$blog->slug)}}">
                                                            <img class="blog-img"
                                                                 src="{{ asset('storage/bloglar/'.$blog->fotograf) }}"
                                                                 alt="">
                                                            <div class="d-flex justify-content-center w-100 py-2">
                                                                <p class="blog-header d-flex text-center">
                                                                    {{$blog->baslik}}
                                                                </p>
                                                            </div>
                                                            <img class="w-100"
                                                                 src="{{ asset('assets/front/img/blog-line.svg') }}"
                                                                 alt="">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
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

                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="hasat-raporlari-tab"
                                 id="hasat-raporlari">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row d-flex justify-content-center pb-5">
                                            <div class="col-md-6 col-sm-12 mt-lg-5">
                                                <p class="title-homepage m-0">HASAT RAPORLARIMIZ</p>
                                                <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                    <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                                                    <span>Arcadia Bağları </span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 pt-3">
                                                @foreach($raporlar as $rapor)
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-10">
                                                            <a class="download-text"
                                                               href="{{ asset("storage/hasat_raporu_pdf/$rapor->hasat_raporu_pdf") }}"
                                                               download="{{$rapor->hasat_yil}}_Hasat_Raporu.pdf">{{$rapor->hasat_yil}}
                                                                HASAT RAPORU</a>
                                                        </div>
                                                        <div class="col-2 d-flex justify-content-center">
                                                            <img class="download-image"
                                                                 src="{{asset('assets/front/img/download-icon.svg')}}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img class="w-100"
                                                                 src="{{asset('assets/front/img/line-hasat.svg')}}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="saraplarimiz-tab"
                                 id="saraplarimiz">
                                <section class="mt-md-5">
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-12 mt-md-2">
                                                <p class="title-homepage m-0">ŞARAPLARIMIZ</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        @if(session('user'))
                                            <div class="row d-flex justify-content-center align-items-start py-3">
                                                <div class="col-lg-4 col-12">
                                                    <ul class="list-style-none">
                                                        @foreach($kategori as $kat)
                                                            <a class="text-decoration-none" href="{{ route('front.saraplarimiz', ['slug' => $kat->id]) }}">
                                                                <li>
                                                                    <p class="sub-title d-flex justify-content-start align-items-center">
                                                                        <img src="{{asset('assets/front/img/line.svg')}}"
                                                                             alt="">
                                                                        <span>{{$kat->kategori_adi}}</span>
                                                                    </p>
                                                                </li>
                                                            </a>
                                                        @endforeach


                                                    </ul>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <div class="accordion" id="accordionExample">
                                                       @if($urunler)
                                                            @foreach($urunler as $index => $urun)
                                                                <div>
                                                                    <h2 class="accordion-header" id="heading{{$index}}">
                                                                        <button class="accordion-button title-sarap" type="button"
                                                                                data-bs-toggle="collapse"
                                                                                data-bs-target="#collapse{{$index}}"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapse{{$index}}">
                                                                            {{$urun->urun_adi}}
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapse{{$index}}"
                                                                         class="accordion-collapse collapse"
                                                                         aria-labelledby="heading{{$index}}"
                                                                         data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <div
                                                                                class="row d-flex justify-content-center align-items-center pb-4">
                                                                                @if($urun->fotograf1)
                                                                                    <div
                                                                                        class="col-md-3 col-4 d-flex justify-content-center">
                                                                                        <img
                                                                                            class="border border-1 p-4 w-75 h-auto object-fit-contain"
                                                                                            src="{{asset('/storage/urunler/'.$urun->fotograf1)}}"
                                                                                            alt="">
                                                                                    </div>
                                                                                @endif
                                                                                @if($urun->fotograf2)
                                                                                    <div
                                                                                        class="col-md-3 col-4 d-flex justify-content-center">
                                                                                        <img
                                                                                            class="border border-1 p-4 w-75 h-auto object-fit-contain"
                                                                                            src="{{asset('/storage/urunler/'.$urun->fotograf2)}}"
                                                                                            alt="">
                                                                                    </div>
                                                                                @endif
                                                                                @if($urun->fotograf3)
                                                                                    <div
                                                                                        class="col-md-3 col-4 d-flex justify-content-center">
                                                                                        <img
                                                                                            class="border border-1 p-4 w-75 h-auto object-fit-contain"
                                                                                            src="{{asset('/storage/urunler/'.$urun->fotograf3)}}"
                                                                                            alt="">
                                                                                    </div>
                                                                                @endif
                                                                                @if($urun->fotograf4)
                                                                                    <div
                                                                                        class="col-md-3 col-4 d-flex justify-content-center">
                                                                                        <img
                                                                                            class="border border-1 p-4 w-75 h-auto object-fit-contain"
                                                                                            src="{{asset('/storage/urunler/'.$urun->fotograf4)}}"
                                                                                            alt="">
                                                                                    </div>
                                                                                @endif

                                                                            </div>
                                                                            <p class="mb-1">{{$urun->baslik}}</p>
                                                                            <span>
                                                                                {{$urun->aciklama}}
                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                           @else
                                                           <p>Bu kategori için ürün bulunmamaktadır.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        @else
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12  pt-3">
                                                    <p>
                                                        Ürünler bölümüne giriş yapabilmeniz için Kullanıcı adı ve Şifre
                                                        almanız gerekmektedir. Giriş için henüz şifre almadıysanız
                                                        “Üye Ol” butonuna tıklayarak üyelik formunu eksiksiz doldurunuz.
                                                        Kullanıcı adı ve şifreniz e-mail adresinize gönderilecektir.
                                                    </p>
                                                </div>
                                                <div x-data="{ selectedVersion: null, showButtons: true }"
                                                     class="col-md-12 col-sm-12  pt-5 d-flex justify-content-center align-items-center">
                                                    <div class="py-3" x-show="showButtons">
                                                        <a href="#"
                                                           x-on:click="selectedVersion = 'v1'; showButtons = false;">
                                                            <button x-show="selectedVersion !== 'v1'"
                                                                    class="sarap-v1-button"></button>
                                                        </a>
                                                    </div>
                                                    <div class="py-3" x-show="showButtons">
                                                        <a href="#"
                                                           x-on:click="selectedVersion = 'v2'; showButtons = false;">
                                                            <button x-show="selectedVersion !== 'v2'"
                                                                    class="sarap-v2-button"></button>
                                                        </a>
                                                    </div>

                                                    <div class="w-75"
                                                         x-show="selectedVersion === 'v1' || selectedVersion === 'v2'">
                                                        <a href="">Geri Git</a>
                                                        <!-- v1 veya v2 Form Content -->
                                                        <div class="row needs-validation"
                                                             x-show="selectedVersion === 'v1' || selectedVersion === 'v2'">
                                                            <!-- v1 Form Fields -->
                                                            <div class="w-100" x-show="selectedVersion === 'v1'">
                                                                <form action="{{ route('front.giris.post') }}"
                                                                      method="post">
                                                                    <div class="mb-3 row input-group has-validation">
                                                                        <input type="eposta" name="eposta"
                                                                               class="form-control w-100"
                                                                               id="emailControl"
                                                                               placeholder="E-mail..." required>
                                                                        <div class="valid-feedback">
                                                                            Bu alan zorunludur!
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row input-group has-validation">
                                                                        <input type="password" name="sifre"
                                                                               class="form-control w-100" id="sifre"
                                                                               placeholder="Şifreniz..." required>
                                                                        <div class="valid-feedback">
                                                                            Bu alan zorunludur!
                                                                        </div>
                                                                    </div>
                                                                    @csrf
                                                                    <div class=" d-flex justify-content-end">
                                                                        <button type="submit" class="giris-button">
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- v2 Form Fields -->
                                                            <div x-show="selectedVersion === 'v2'">
                                                                <div class="col-12 mt-5">
                                                                    <p class="title-homepage m-0">KURUMSAL ÜYELİK
                                                                        BAŞVURUSU</p>
                                                                    <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                                                                        <img
                                                                            src="{{asset('assets/front/img/line.svg')}}"
                                                                            alt="">
                                                                        <span>Arcadia Bağları </span>
                                                                    </p>
                                                                    <p>
                                                                        Sizinle iletişime geçebilmemiz için lütfen
                                                                        aşağıda
                                                                        bulunan Kurumsal Üyelik Başvuru Formunu eksiksiz
                                                                        doldurunuz.
                                                                    </p>
                                                                </div>
                                                                <livewire:front.uyelik-basvurusu/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

