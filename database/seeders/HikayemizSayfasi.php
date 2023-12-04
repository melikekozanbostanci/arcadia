<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HikayemizSayfasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hikayemiz_ayarlar = [
            [
                'id' => 1,
                'baslik_teruar' => 'BİR TERUARIN UYANIŞ ÖYKÜSÜ',
                'alt_baslik_teruar' => 'Hikayemiz',
                'aciklama_teruar_alan1' => 'Özel bir terruar peşinde Kuzey Trakya’yı gezip toprak örnekleri toplamaya başlarken, karşımıza bu kadar zengin ve köklü bir tarih çıkacağını beklemiyorduk.<br />
<br />
Antik çağlardan bu yana kıtalar arası bir geçiş bölgesi olması özelliği ile birçok kültürden izler taşıyan bölgemiz, MÖ 5. Yy- MS 1. Yy arasında var olmuş bilinen en büyük Trak krallığı olan Odrysian Krallığı’na da ev sahipliği yapmış. Genelde yaşamını kabileler halinde sürdüren Trak toplulukların araya gelerek oluşturduğu Odrysian Krallığı tarihte savaşçılık ve şarapçılıktaki becerileri ile tanınırmış.<br />
<br />
Antik çağlardan Balkan Savaşına kadar kalitesi ile ünlü bir teruar olan Kırklareli’nde, Balkan Savaşı ve ardından gelen 1. Dünya Savaşı’nın yarattığı karışıklık, ekonomik ve politik istikrarsızlık, nüfus göçü nedenleri ile 20. Yüzyıl başında bağlar sahipsiz ve bakımsız kalarak üretim durmuş. Cumhuriyetin kuruluşunu takiben Tekel fabrikası Tekirdağ bölgesine kurulunca, fabrikaya nispeten uzak kalan Kırklareli’nin yüksek kalite bağcılık potansiyeli atıl kalarak bölgede binlerce yıldır süren bu gelenek sekteye uğramış.<br />
<br />
Sürdürdüğümüz bilimsel çalışmalar sonucunda 2004 yılında bölgeye gelerek Kırklareli’nde Türkiye Cumhuriyeti tarihinde kurulan ilk şaraphane olmaktan ve dev bir teruarın 100 yıllık uykusundan uyanmasına öncülük ederek tarihin tekerrür etmesine vesile olmaktan büyük mutluluk duyuyoruz.',
                'baslik_teruar_alan2' => 'BİR ÜZÜM ŞEHRİ KIRKLARELİ',
                'aciklama_teruar_alan2_1' => 'Kırklareli’nin eski isimlerinden biri de “Üzüm Kasabası” ya da “Bağ Şehri” anlamına gelen “Lozengrad”. Bağ Bozumu, Bağ ve Dere Alemleri olarak adlandırılan şenlikler Kırklareli’nde yüzyıllar öncesi yaşamış otantik halk kültürünün son yıllara yansımasıdır.<br />
<br />
Evliya Çelebi 1658 yılında Kırklareli’ne geldiğinde burada binlerce dönüm bağ ve meyvelik bulunduğunu kaydeder ve içine girildiğinde insanın kaybolduğunu bildirir.',
                'aciklama_teruar_alan2_2' => '1830’lu yıllarda Kırklareli’ni görüntüleyen bir ressam bağların yol boyunca uzadığını, asma dallarının caddelere uzandığını söyler. Bu yıllarda Kırklareli halkı şarap yapıp satarlar, şırasını, hardaliyesini içerler, pekmezini, bulamasını ve pestilini yerlermiş. Şarap yapacak presleri ve fıçıları bu yıllarda edinmişler.<br />
<br />
Kırklareli’nde evlerin kilerleri ve depoların eklentilerinde 40–50 tonun üstünde şarap ya da şıra alan fıçılar bulunmuş.<br />
<br />
Bugün bazı yerlerde toprak altında bulunan büyük küpler sarnıç ve depo olarak kullanıldığı gibi, şarabı yıllandırmak ve seferde su ihtiyacını karşılamak için de kullanılırmış.<br />
<br />
Arcadia Bağları’nın her aşamasında bölge ile bağları olmasını önemsiyor, mirasçısı olduğumuz bu köklü tarihe minnet duyuyoruz. Az bilinen Odrysian Krallığı’nın anısına üst grup serilerimizden birine Odrysia adını verdik ve etiketlerini o dönemden kalma gümüş ve altın Riton’lar (boynuz şekilli törensel şarap kapları) ile süsledik.',
                'baslik_kurucu' => 'ULUSLARARASI UZMANLIK',
                'alt_baslik_kurucu' => 'Hikayemiz',
                'aciklama_kurucu_alan1' => 'Uluslararası danışmanlık deneyimi: Şarabın kalitesinde ilk olarak teruarın ana unsurları olarak; iklim, toprak yapısı ve topografya; sonra o iklim ve toprakta doğru seçimlerle dikilmiş olan bağ, daha sonra da hasat ve üretim aşamasındaki seçimler belirleyici oluyor. Tüm bu kritik seçimleri yapmadan önce uzun bir hazırlık ve araştırma süreci geçirdik. Mekân ve üzümlerin seçimi, şaraphanenin tasarımı ve işleyişi, bağcılık ve üretim için her ikisi de alanlarında dünyaca tanınmış iki uzmandan projenin ilk günlerinden başlayarak danışmanlık aldık ve Arcadia Bağları’nı birlikte ortaya çıkardık.<br />
<br />
Bağcılık ve üzüm adaptasyonu danışmanımız Prof.Dr.Alain Carbonneau ve Önolog danışmanımız Dr.Michel Salgues .<br />
<br />
2018 yılından bu yana da şaraplarımızın yapımını Toskanalı önolog Dr.Andrea Paoletti danışmanlığında sürdürüyoruz.',
                'fotograf_kurucu_text_1' => 'Dr.Michel Salgues ve Prof.Dr.Alain Carbonneau',
                'fotograf_kurucu_text_2' => 'Prof.Dr.Alain Carbonneau',
                'fotograf_kurucu_text_3' => 'Dr.Andrea Paoletti',
                'baslik_bag' => 'BİZİ BİZ YAPAN ÖZELLİKLERİMİZ',
                'alt_baslik_bag' => 'Hikayemiz',
                'aciklama_bag_alan1' => 'Arcadia Bağları projesi yüksek kalite şarap üretimi, tarım ve turizmi odağına yerleştirerek, sürdürülebilirlik prensibi ile geliştirilmiş yeni bir tatil, yaşam tarzı ve lüks kavramı tanımlayan mutlidisipliner bir proje olarak doğdu.<br />
<br />
Arcadia Bağları’nda üzümler sabahın ilk ışıkları ile elle hasat edilip, “Şato Tipi” üretime uygun olarak hiç bekletilmeden bağların içinde bulunan şaraphanede işlemeye alınıyor. Şaraphanede tekrar elle seçimi yapılan üzümler, mikrovinifikasyon yöntemi ile küçük hacimli tanklarda, her parsel ayrı ayrı olmak üzere fermante ediliyor.',
                'baslik_bag_alan2_1' => 'MANİPÜLE EDİLMEMİŞ TERUAR ŞARAPLARI',
                'baslik_bag_alan2_2' => 'KALİTE AYRINTIDA GİZLİ',
                'aciklama_bag_alan2_1' => 'Arcadia Bağları teruarından gelen tüm özel lezzetleri maksimum düzeyde koruyabilmek, kadehlere eksiksiz ulaştırabilmek ve içimine kadar yaşamaya devam eden şaraplar üretebilmek için inceltme işlemi (fining) ve konvansiyonel filitrasyon dahil lezzet değişimine yol açacak hiçbir manipülatif işlem uygulanmıyor.',
                'aciklama_bag_alan2_2' => 'Bağda üzümlerin yetiştirilmesinde gösterilen özen, her bir salkımın ayrı ayrı elle toplanması ile devam ediyor. Üzümün kendi lezzetini kaybetmemesi ve kabuktaki maya mikroorganizmalarla kontrolsüz bir fermantasyonun başlamaması için, işlemeye girene kadar hiçbir şekilde şıranın akmaması ve kabuğunun zarar görmemesi çok önemli.<br />
<br />
Bu yüzden Arcadia Bağları’nın hasadı bıçakla değil makasla yapılıyor. Üzümler birbirinin ağırlığıyla ezilip suları akmasın diye delikli 8 kiloluk küçük sepetlerle taşınıyor. Üretim süreciyle ilgili bu ufacık detaylar bile şarabın doğallığını ve kalitesini belirleyen önemli etkenler.',
                'fotograf_bag_4_aciklama' => 'KURULUŞUNDAN ÜRETİMİNE HER ADIMDA GELENEKSEL YÖNTEMLERLE MODERN TEKNOLOJİYİ HARMANLAYAN YENİ NESİL ŞARAPLAR',
                'aciklama_bag_alan3_1' => 'Şaraphanede üzümler işlenirken hassas presleme teknikleri, bütün dünyada kullanılan klasik sap ayırma makinelerinden farklı, üzümü yırtmadan ve kopartmadan elle ayırırmışçasına özenle ayıklamak üzere tasarlanmış kauçuk parmaklı yeni teknoloji sap ayırma makinesi ve özel tasarım paslanmaz çelik tankların yanı sıra eski yöntem elle tane seçimi, yerçekimi tekniği ve geleneksel Fransız meşesi kask ve fıçılar kullanılıyor.',
                'aciklama_bag_alan3_2' => 'Üzümün pompalanması sırasında ortaya çıkan sürtünme, istenmeyen sert tatların oluşmasına sebep oluyor. Bu tatların daha sonra ek işlemler yapılarak düzeltilmesi aşamasında şarabın özgün lezzetlerinin bir kısmı da bu istenmeyen tatlarla birlikle kayboluyor. İşte bu yüzden, Arcadia’da, şaraphanenin özel tasarımı sayesinde üzümler pres ve tanklara yerçekimi yardımı ile pompalanmadan dolduruluyor.',
                'aciklama_bag_alan3_3' => 'Bağda her biri özelliğine göre ayrı takip edilen parsellerden gelen üzümler, şaraphanede de özel tasarım küçük tanklarda ayrı ayrı fermante ediliyor. Kırmızı üzümlerin rengi ve taneni düzenli olarak elle dövülerek çıkartılıyor. Küçük hacimler halinde kontrollü olarak fermante edilen şaraplar, olgunlaştıktan sonra tadımı yapılarak harmanlanıyor ve o yılın rekoltesi Arcadia Şarapları ortaya çıkıyor.',
                'baslik_bag_alan3_1' => 'YER ÇEKİMİ TEKNİĞİ',
                'baslik_bag_alan3_2' => 'MİKROVİNİFİKASYON',
                'baslik_arcadia' => 'ARCADIA: ÜRETEN BİR KÖY',
                'alt_baslik_arcadia' => 'Hikayemiz',
                'aciklama_arcadia_alan1' => 'Arcadia’nın varolduğu tüm alanı tek bir ekosistem olarak düşünüyor, arazi içerisindeki meşe korularının ve evsahibi yaptıkları böcek ve hayvanların, endemik çiçeklerin ve yetiştirdiğimiz diğer ürünlerin birbiri ile dengeli bir ilişki ile yaşayacakları ortamı oluşturmaya çalışıyoruz.<br />
<br />
Bu da aslında sağlıklı bir ekosistem kurgulayıp, atık oluşumumuzu en aza indirirken malzemelerimizi ve kaynaklarımızı, kullanımlarının sonunda ürün döngüsüne geri döndürerek, değerlerini mümkün olduğunca uzun süre korumayı hedeflediğimiz döngüsel ekonomi anlayışımızla mümkün oluyor.',
                'baslik_arcadia_alan2_1' => 'GELİŞEN, GELİŞTİRİLEBİLEN ARAZİ',
                'aciklama_arcadia_alan2_1' => 'İster bağ, ister meyve bahçesi, ister bostan… Sizi toprakla tanıştırabileceğimiz, üretim yaparken size destek olabileceğimiz bir hayat tasarlıyoruz. Burası sizin eviniz, ne üretmek istiyorsanız, biz profesyonel ekibimizle desteğe hazırız. Bağınızı, bahçenizi bize emanet edebileceğiniz, hasadınızı birlikte toplayıp satabileceğimiz, kendi mahzeninizde şarap üretmek isterseniz de destek olabileceğimiz bir yaşam alternatifi için sizlerle tanışmayı bekliyoruz.',
                'baslik_arcadia_alan3_1' => 'LOKASYON',
                'aciklama_arcadia_alan3_1' => 'Istranca dağlarının altında uzanan vadide, İstanbul’a 160 km mesafede, 200 hektarlık bir arazide; bağları, şato tipi üretimhanesi, meyve bahçeleri, bostanları, meşe koruları, irili ufaklı çiftlikleri ve BAKUCHA Vineyard Hotel & SPA ile doğa içinde bir gastronomi merkezi olarak tasarlanan Arcadia Bağları’nda size alternatif bir yaşam öneriyoruz.',
                'baslik_arcadia_alan4_1' => 'ÇİFTLİKLER',
                'aciklama_arcadia_alan4_1' => 'Şehirler, üretmekten çok tüketen, doğadan kopuk hızlı yaşam temposu ile yorucu olabiliyor. İnsanlar sadece koşuşturuyor, herkesin acelesi var. Herkesin bir köy hayatı özlemi var ama ya emekliliğe erteleniyor ya da hayal olarak kalıyor. Önünüzde uzun binalar olmadan güneşin batışını izleyip, ‘güvenilir mi, sağlıklı mı’ endişesi olmadan, sebze meyveyi bahçeden toplayacağınız, altyapı ve bağ bahçe bakım hizmetini var olan bir sistemden alma imkanı olan çiftlikler sınırlı sayıda hazırlandı ve 2000 dekarlık Arcadia Bağları arazisine serpiştirildi.<br />
<br />
İstanbul’a yalnızca 160 km. mesafede, üreten, sürdürülebilir bir yaşam hayaline ortak olmak isteyecekler için hazırlanan çiftliklerin büyüklükleri 10 ila 30 dekar arasında değişiyor. Bir kısmının halihazırda dikili yetişkin bağları, bir kısmının da dikili Armut bahçeleri var. Bahçelere Arcadia’nın sisteminden know how ve bakım hizmeti almak mümkün olacak. Armut bahçesi sahipleri aynı zamanda dilerlerse ortak pazarlama yapma imkânı da bulabilecek.<br />
<br />
Çiflik projeleri varolan parseller üzerinden çalışıldı. Projelerde Bakucha oteldeki gibi taş ve ahşap ağılıklı malzeme tercih ediliyor. Her bir çiftlik evi ekibimiz tarafından sahibinin tercihlerine göre özel projelendiriliyor.',
                'fotograf_ana' => '',
                'fotograf_teruar_1' => '',
                'fotograf_teruar_2' => '',
                'fotograf_kurucu_1' => '',
                'fotograf_kurucu_2' => '',
                'fotograf_kurucu_3' => '',
                'fotograf_bag_1' => '',
                'fotograf_bag_2' => '',
                'fotograf_bag_3' => '',
                'fotograf_bag_4' => '',
                'fotograf_arcadia_1' => '',
                'fotograf_arcadia_2' => '',
                'fotograf_arcadia_3' => '',
                'fotograf_arcadia_4' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('hikayemiz')->insert($hikayemiz_ayarlar);
    }
}
