<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>@yield("title")</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="handheldfriendly" content="true"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="description" content="Mordenize"/>
    <meta name="author" content=""/>
    <meta name="keywords" content="Mordenize"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset("assets/back/images/logos/favicon.ico")}}"/>
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{asset("assets/back/css/style-green.css")}}"/>
    @yield("css")
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset("assets/back/images/logos/favicon.ico")}}" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset("assets/back/images/logos/favicon.ico")}}" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!--  Body Wrapper -->
@yield('content')
<!--  Import Js Files -->
<script src="{{asset("assets/back/libs/jquery/dist/jquery.min.js")}}"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="{{asset("assets/back/libs/simplebar/dist/simplebar.min.js")}}"></script>
<script src="{{asset("assets/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<!--  core files -->
<script src="{{asset("assets/back/js/app.min.js")}}"></script>
<script src="{{asset("assets/back/js/app.init.js")}}"></script>
<script src="{{asset("assets/back/js/app-style-switcher.js")}}"></script>
<script src="{{asset("assets/back/js/sidebarmenu.js")}}"></script>

<script src="{{asset("assets/back/js/custom.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">

@yield('script')

<script>
    window.addEventListener('alert', event => {
        toastr[event.detail[0].type](event.detail[0].message, event.detail[0].title ?? 'Dikkat!')
    });

    function confirmDelete(formAdi) {
        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu öğeyi silmek istediğinizden emin misiniz?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, sil!',
            cancelButtonText: 'İptal',
        }).then((result) => {
            if (result.isConfirmed) {
                /* Butonun olduğu formu submit et */
                document.getElementById(formAdi).submit();
            }
        });
    }
</script>
</body>
</html>
