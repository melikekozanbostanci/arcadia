@extends('back.layouts.master')
@section('title',"Arcadia Fauna")
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
                                <h4 class="fw-semibold mb-8">Arcadia Fauna</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Arcadia Fauna
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <a href="{{route("admin.arcadia-fauna-ekle")}}" class="btn btn-primary mb-3">Yeni İçerik Ekle</a>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <form action="{{route("admin.arcadia-fauna")}}" method="get">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="search" class="form-control" placeholder="İçerik Ara" aria-label="Yıl Ara" aria-describedby="button-addon2" value="{{request()->get("search")}}">
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ara</button>
                                                    @if(request()->get("search"))
                                                        <a href="{{route("admin.arcadia-fauna")}}" class="btn btn-outline-warning">Temizle</a>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm table-striped">
                                            <thead>
                                            <tr>
                                                <th>İçerik</th>
                                                <th>Fotoğraf</th>
                                                <th>Fotoğraf Açıklama</th>
                                                <th>Oluşturma Tarihi</th>
                                                <th style="width: 75px">İşlemler</th>
                                            </tr>
                                            </thead>
                                            @if($fauna->count() == 0)
                                                <tbody>
                                                <tr>
                                                    <td colspan="6" class="text-center py-5"><b>Henüz İçerik Eklenmemiş</b></td>
                                                </tr>
                                                </tbody>
                                            @else
                                                <tbody>
                                                @foreach($fauna as $detay)
                                                    <tr>
                                                        <td class="align-middle">{{$detay->aciklama}}</td>
                                                        <td class="align-middle">{{$detay->images}}</td>
                                                        <td class="align-middle">{{$detay->images_alt_aciklama}}</td>
                                                        <td class="align-middle">
                                                            <p class="m-0">{{$detay->created_at->format("d/m/Y H:i")}}</p>
                                                            <p class="m-0"><small>{{$detay->created_at->diffForHumans()}}</small></p>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <a href="{{route("admin.arcadia-fauna-duzenle",$detay->id)}}" class="btn btn-info btn-sm">
                                                                    <i class="fal fa-edit"></i>
                                                                </a>
                                                                <form action="{{route("admin.arcadia-fauna-sil",$detay->id)}}" method="post" id="deleteForm{{$detay->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$detay->id}}')">
                                                                        <i class="fal fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            @endif
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
