@extends('back.layouts.master')
@section('title',"Güncel Durum")
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('back.layouts.sidebar')
        <div class="body-wrapper">
            @include('back.layouts.header')
            <div class="container-fluid mw-100">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Yeni Slayt</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.slaytlar")}}">Slaytlar</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Yeni Slayt
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img src="{{asset("assets/back/images/breadcrumb/ChatBc.png")}}" alt="" class="img-fluid mb-n4"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{route("admin.slayt-kaydet")}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method("POST")
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="col-md-12 col-sm-12 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <label>Dil</label>
                                        <select name="dil" class="form-select @error('dil') is-invalid @enderror">
                                            <option value="">Seçiniz</option>
                                            @foreach($diller as $dil)
                                                <option value="{{ $dil->kod }}" @selected(old('dil'))>
                                                    {{ $dil->dil }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('dil') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                        <label>Fotoğraf</label>
                                        <input type="file" class="dropify" name="fotograf">
                                        @error('fotograf') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                        <label>Gösterim tarih aralığı</label>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <input type="date" class="form-control" name="gosterim_basla" value="{{old("gosterim_basla")}}">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="date" class="form-control" name="gosterim_bitis" value="{{old("gosterim_bitis")}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="col-md-12 col-sm-12 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <label>Başlık</label>
                                        <input type="text" class="form-control" name="baslik" value="{{old("baslik")}}">
                                        <label>Metin</label>
                                        <textarea type="text" class="form-control" name="metin">{{old("metin")}}</textarea>
                                        <label>Buton Metni</label>
                                        <input type="text" class="form-control" name="buton_metni" value="{{old("buton_metni")}}">
                                        <label>Buton Linki</label>
                                        <input type="text" class="form-control" name="buton_linki" value="{{old("buton_linki")}}">
                                        <button class="btn btn-primary mt-3">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("css")
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
@endsection
@section("script")
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="{{asset("assets/back/js/dropify.min.js")}}"></script>
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>


        $('.dropify').dropify({
            messages: {
                'default': 'Dosyayı sürükleyip bırakın veya tıklayın',
                'replace': 'Değiştirmek için sürükleyip bırakın veya tıklayın',
                'remove': 'Kaldır',
                'error': 'Hata oluştu, bir şeyler yanlış gitti.'
            }
        });

    </script>

@endsection
