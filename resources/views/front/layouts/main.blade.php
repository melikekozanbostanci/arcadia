<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('site_aciklama')">
    <meta name="keywords" content="@yield('site_anahtar_kelimeler')">
    @if($siteAyar->site_favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/site-ayar/'.$siteAyar->site_favicon) }}">
    @else
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/img/favicon.svg') }}">
    @endif


    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome-all.min.css')}}">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/front/css/homepage.css') }}">

</head>
<body>

@include('front.layouts.header')

@yield('content')

@include('front.layouts.footer')



<!-- JS here -->
<script src="{{asset('assets/front/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@yield("scripts")

<script>
    $(document).ready(function () {
        // Sayfanın URL'sini al
        var currentPageUrl = window.location.pathname;

        // Sayfa yüklendiğinde kontrolü yap
        checkPageAttributes();

        // Scroll olayını dinle:
        $(window).scroll(function () {
            // Sayfa yüklendiğindeki kontrolü yap
            checkPageAttributes();
        });

        function checkPageAttributes() {
            // Eğer sayfanın scroll pozisyonu 200'den büyükse ve sayfa URL'si homepage'e veya boşsa
            if ($(window).scrollTop() > 200 && (currentPageUrl === '/' || currentPageUrl === '')) {
                // Header'a "scrolled" class'ını ekle
                $('header').addClass('scrolled');
                $('.arcadia-nav-link').css('color', '#000000');
                @if($siteAyar->site_siyah_logo != null)
                $('.logo-img').attr('src', '{{ asset('storage/site-ayar/'.$siteAyar->site_siyah_logo) }}');
                @else
                $('.logo-img').attr('src', '{{ asset('assets/front/img/red_logo.svg') }}');
                @endif

                $('.dots-img').attr('src', '{{asset("assets/front/img/black_dots_icon.svg")}}');
            } else if($(window).scrollTop() < 200 && (currentPageUrl === '/' || currentPageUrl === '')){
                // Eğer 200'den küçükse veya sayfa URL'si homepage dışındaysa "scrolled" class'ını kaldır
                $('header').removeClass('scrolled');
                $('.arcadia-nav-link').css('color', '#FFFFFF');
                @if($siteAyar->site_beyaz_logo != null)
                $('.logo-img').attr('src', '{{ asset('storage/site-ayar/'.$siteAyar->site_beyaz_logo) }}');
                @else
                $('.logo-img').attr('src', '{{ asset('assets/front/img/white_logo.svg') }}');
                @endif
                $('.dots-img').attr('src', '{{asset("assets/front/img/dots_icon.svg")}}');
            }else{
                $('header').addClass('scrolled');
                $('.arcadia-nav-link').css('color', '#000000');
                @if($siteAyar->site_siyah_logo != null)
                $('.logo-img').attr('src', '{{ asset('storage/site-ayar/'.$siteAyar->site_siyah_logo) }}');
                @else
                $('.logo-img').attr('src', '{{ asset('assets/front/img/red_logo.svg') }}');
                @endif
                $('.dots-img').attr('src', '{{asset("assets/front/img/black_dots_icon.svg")}}');
            }
        }
    });

    Fancybox.bind('[data-fancybox="gallery"]', {
        //
    });

</script>
<script>
    $(document).ready(function () {
        var brCount = 0;
        $('br').each(function () {
            brCount++;
            if (brCount > 1) {
                $(this).remove();
                brCount = 0;
            }
        });
    });
</script>
<script>
  $(document).ready(function () {
      var currentPageUrl = window.location.href;
      var tabsContainer = $(".tabsHikayemiz");
      var tabLinks = tabsContainer.find("a.nav-link");
      tabLinks.on("click", function (e) {
          e.preventDefault();
          // Tıklanan tab'ın ID'sini al
          var clickedTab = $(this).attr("href");
          var newUrl = currentPageUrl.replace(/\/hikayemiz\/.*/, "/hikayemiz/" + clickedTab.replace("#", ""));
          history.pushState(null, null, newUrl);

          // İlgili tab'ı manuel olarak aktive et
          showTabContentBySlug(clickedTab.replace("#", ""));
      });

      // Sayfa yüklendiğinde tab içeriğini göster
      var matches = currentPageUrl.match(/\/hikayemiz\/([^\/]+)/);
      if (matches && matches[1]) {
          var slug = matches[1];
          var tabId = '#' + slug + '-tab';

          // İlgili tab'ı aktif et
          $(tabId).tab('show');

          // İlgili tab içeriğini göster
          $('.tab-content').find('.tab-pane').removeClass('show active');
          $('.tab-content').find('.tab-pane[id="' + slug + '"]').addClass('show active');
      }
  });

  // Fonksiyon: URL'den alınan slug değerine göre ilgili tab'ı aktif et ve içeriğini göster
  function showTabContentBySlug(slug) {
      // ID'yi oluştur
      var tabId = '#' + slug + '-tab';

      // İlgili tab'ı aktif et
      $(tabId).tab('show');
  }
</script>
<script>
   $(document).ready(function () {
       var currentPageUrl = window.location.href;
       var tabsContainer = $(".tabsFelsefemiz");
       var tabLinks = tabsContainer.find("a.nav-link");
       tabLinks.on("click", function (e) {
           e.preventDefault();
           // Tıklanan tab'ın ID'sini al
           var clickedTab = $(this).attr("href");
           var newUrl = currentPageUrl.replace(/\/felsefemiz\/.*/, "/felsefemiz/" + clickedTab.replace("#", ""));
           history.pushState(null, null, newUrl);

           // İlgili tab'ı manuel olarak aktive et
           showTabContentBySlug(clickedTab.replace("#", ""));
       });

       // Sayfa yüklendiğinde tab içeriğini göster
       var matches = currentPageUrl.match(/\/felsefemiz\/([^\/]+)/);
       if (matches && matches[1]) {
           var slug = matches[1];
           var tabId = '#' + slug + '-tab';

           // İlgili tab'ı aktif et
           $(tabId).tab('show');

           // İlgili tab içeriğini göster
           $('.tab-content').find('.tab-pane').removeClass('show active');
           $('.tab-content').find('.tab-pane[id="' + slug + '"]').addClass('show active');
       }
   });

   // Fonksiyon: URL'den alınan slug değerine göre ilgili tab'ı aktif et ve içeriğini göster
   function showTabContentBySlug(slug) {
       // ID'yi oluştur
       var tabId = '#' + slug + '-tab';

       // İlgili tab'ı aktif et
       $(tabId).tab('show');
   }
</script>

<script>
    $(document).ready(function () {
        var currentPageUrl = window.location.href;
        var tabsContainer = $(".tabsArcadia");
        var tabLinks = tabsContainer.find("a.nav-link");
        tabLinks.on("click", function (e) {
            e.preventDefault();
            // Tıklanan tab'ın ID'sini al
            var clickedTab = $(this).attr("href");
            var newUrl = currentPageUrl.replace(/\/arcadia-baglari\/.*/, "/arcadia-baglari/" + clickedTab.replace("#", ""));
            history.pushState(null, null, newUrl);

            // İlgili tab'ı manuel olarak aktive et
            showTabContentBySlug(clickedTab.replace("#", ""));
        });

        // Sayfa yüklendiğinde tab içeriğini göster
        var matches = currentPageUrl.match(/\/arcadia-baglari\/([^\/]+)/);
        if (matches && matches[1]) {
            var slug = matches[1];
            var tabId = '#' + slug + '-tab';

            // İlgili tab'ı aktif et
            $(tabId).tab('show');

            // İlgili tab içeriğini göster
            $('.tab-content').find('.tab-pane').removeClass('show active');
            $('.tab-content').find('.tab-pane[id="' + slug + '"]').addClass('show active');
        }
    });

    // Fonksiyon: URL'den alınan slug değerine göre ilgili tab'ı aktif et ve içeriğini göster
    function showTabContentBySlug(slug) {
        // ID'yi oluştur
        var tabId = '#' + slug + '-tab';

        // İlgili tab'ı aktif et
        $(tabId).tab('show');
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var timelineSwiper = new Swiper('.timeline .swiper-container', {
            direction: 'vertical',
            loop: true,
            speed: 1600,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletClass: 'swiper-pagination-bullet',
                renderBullet: function (index, className) {
                    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
                    return '<span class="' + className + '">' + year + '</span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    direction: 'horizontal',
                }
            }
        });
    });
</script>





</body>
</html>
