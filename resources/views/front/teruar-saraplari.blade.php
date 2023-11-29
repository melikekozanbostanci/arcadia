@extends('front.layouts.main')
@section('title',$siteAyar->site_adi." | Teruar Şaraplarımız")

@section('content')
    <!-- main-area -->
    <main>
        <section>
            <img class="w-100 position-relative baslik-foto" src="{{ asset('assets/front/img/t1.png') }}" alt="">
            <div class="position-absolute arcadia">
                <p class="text-center text-white">TERUAR ŞARAPLARIMIZ</p>
            </div>
        </section>
        <section class="mt-md-5">
            <div class="container mt-3">
                <div class="row d-flex justify-content-center pb-5">
                    <div class="col-md-6 col-sm-12 mt-md-5 ">
                        <p class="title-homepage m-0">TERUAR ŞARAPLARIMIZ </p>
                        <p class="sub-title-homepage d-flex justify-content-start align-items-center">
                            <img src="{{asset('assets/front/img/line.svg')}}" alt="">
                            <span>Şaraphane </span>
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-md-5">
                        <p class="paragraph-detail">
                            Dünyanın en geniş kapsamlı bağcılık ve şarapçılık kurumu OIV (Office International de la
                            Vigne et du Vin)’in tanımına göre; üzümün yetiştiği bölgedeki hava durumu, toprak özelliği
                            ve topografik yapının, insan öğesi ve üretim gelenekleri ile bir araya gelerek oluşturduğu
                            özel şartlara “Teruar” deniyor. Bağlardan gelen lezzetleri ve bölgenin eşsiz karakterini
                            eksiksiz hissettirmek için üretim aşamalarında lezzet değiştiren işlemler kullanılmadan
                            üretilen şaraplara da teruar şarabı.
                        </p>
                        <p class="paragraph-detail">
                            Tarihi Şarap Yolu’nun geçtiği topraklarda, Çeşmekolu ve Hamitabat köyleri arasında, 150
                            metre rakımda dikilen Arcadia Bağları, Trakya’nın tam orta noktasında, karasal iklim
                            özellikleri gösteren, gece gündüz sıcaklık farklarının yüksek olduğu bir konumda yer alıyor.
                        </p>
                        <p class="paragraph-detail">
                            3. Jeolojik dönemden deniz dibi olan arazi, çok eski bir formasyon olan Istranca masifinden gelen erozyonla dolarak önce bir deltaya sonra dağın altında uzanan bir vadiye dönüşmüş.  Daha sonra kendisi de erozyona uğrayarak bugünkü tepe ve vadileri oluşturmuş. Her bir yükseklikte ortaya çıkan farklı toprak özelliği ile, Istranca’nın farklı bölgelerinden gelen granit, quarzit, kumlu ve killi toprak yapılarının örneklemesini, aynı arazi içinde yan yana parsellerde gördüğümüz heterojen yapı, eşssiz bir lezzet zenginliği sağlıyor. Kuzeyden gelen sürekli esinti ve gece gündüz sıcaklık farkı, üzümlerimize güçlü bir asidite ve tazelik veriyor.

                        </p>
                        <p class="paragraph-detail">
                            Özel lezzetlerini içime kadar koruyan bir ürün yapabilmek için, bağların kurulumundan üretim süreçlerinin seçimine kadar her aşamada hassas, minimum müdahale gerektirecek yöntemleri tercih ettik.
                            Bağlarda Türkiye’de bir ilk olan ve dengeli olgunlaşma kontrolü sağlayan Lyre Telli Terbiye Sistemini uyguladık.
                            Arcadia ürünlerini kendi bağlarımızda yetişen üzümlerden üretiyoruz. 350 dekarlık bağ arazisinde on farklı cins üzüm yetiştiriyoruz; Cabernet Franc, Cabernet Sauvignon, Merlot, Papaskarası, Sangiovese, Petit Verdot, Sauvignon Blanc, Sauvignon Gris, Pinot Gris ve Narince.

                        </p>
                        <p class="paragraph-detail">
                            Bunların yanında Ar-ge parselimizde faklı üzümlerle çalışıyor, aralarından seçtiklerimizi süreç içinde üretime ekliyoruz.
                        </p>

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain"
                             src="{{ asset('assets/front/img/t2.png') }}" alt="">
                    </div>
                    <div class="col-md col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain"
                             src="{{ asset('assets/front/img/t3.png') }}" alt="">
                    </div>
                    <div class="col-md col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain"
                             src="{{ asset('assets/front/img/t4.png') }}" alt="">
                    </div>
                    <div class="col-md col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain"
                             src="{{ asset('assets/front/img/t5.png') }}" alt="">
                    </div>
                    <div class="col-md col-sm-12 ko-img">
                        <img class="w-100 h-auto object-fit-contain"
                             src="{{ asset('assets/front/img/t6.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

