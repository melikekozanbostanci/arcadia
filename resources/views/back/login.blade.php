<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset("assets/back/images/logos/favicon.ico")}}" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset("assets/back/css/style-green.min.css")}}" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset("assets/back/images/logos/favicon.ico")}}" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset("assets/back/images/logos/favicon.ico")}}" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{route("back.login")}}" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img src="{{asset("assets/back/logo.png")}}" width="180" alt="">
                            </a>

                            <livewire:back.login-form/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset("assets/back/libs/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets/back/libs/simplebar/dist/simplebar.min.js")}}"></script>
<script src="{{asset("assets/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<!--  core files -->
<script src="{{asset("assets/back/js/app.min.js")}}"></script>
<script src="{{asset("assets/back/js/app.init.js")}}"></script>
<script src="{{asset("assets/back/js/app-style-switcher.js")}}"></script>
<script src="{{asset("assets/back/js/sidebarmenu.js")}}"></script>

<script src="{{asset("assets/back/js/custom.js")}}"></script>
<script src="{{asset("assets/back/js/plugins/toastr-init.js")}}"></script>

<script>
    window.addEventListener('toastr', event => {
        toastr[event.detail[0].type](event.detail[0].message, event.detail[0].title ?? 'Dikkat!')
        document.querySelector('.form').reset();
    });
</script>
</body>
</html>
