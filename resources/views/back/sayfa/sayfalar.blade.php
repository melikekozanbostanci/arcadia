@extends('back.layouts.master')
@section('title',"Sayfalar")
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
                                <h4 class="fw-semibold mb-8">Sayfalar</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Sayfalar
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
                                            <a href="{{route("admin.sayfa-ekle")}}" class="btn btn-primary mb-3">Yeni Sayfa Ekle</a>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <form action="{{route("admin.sayfalar")}}" method="get">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="search" class="form-control" placeholder="Sayfa Ara" aria-label="Sayfa Ara" aria-describedby="button-addon2" value="{{request()->get("search")}}">
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ara</button>
                                                    @if(request()->get("search"))
                                                        <a href="{{route("admin.sayfalar")}}" class="btn btn-outline-warning">Temizle</a>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm table-striped">
                                            <thead>
                                            <tr>
                                                <th>Başlık</th>
                                                <th>Kategori</th>
                                                <th>Yazar</th>
                                                <th>Okunma</th>
                                                <th>Tarih</th>
                                                <th style="width: 75px">İşlemler</th>
                                            </tr>
                                            </thead>
                                            @if($sayfalar->count() == 0)
                                                <tbody>
                                                <tr>
                                                    <td colspan="6" class="text-center py-5"><b>Henüz Sayfa Eklenmemiş</b></td>
                                                </tr>
                                                </tbody>
                                            @else
                                                <tbody>
                                                @foreach($sayfalar as $sayfa)
                                                    <tr>
                                                        <td class="align-middle">
                                                            <a href="{{route("admin.sayfa-duzenle",$sayfa->uuid)}}" class="text-info fw-bold">{{$sayfa->baslik}}</a>
                                                        </td>
                                                        <td class="align-middle">{{$sayfa->kategori->kategori_adi}}</td>
                                                        <td class="align-middle">{{$sayfa->yazar->name}}</td>
                                                        <td class="align-middle">{{$sayfa->okunma}}</td>
                                                        <td class="align-middle">
                                                            <p class="m-0">{{$sayfa->created_at->format("d/m/Y H:i")}}</p>
                                                            <p class="m-0"><small>{{$sayfa->created_at->diffForHumans()}}</small></p>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <a href="{{route("admin.sayfa-duzenle-editor",$sayfa->uuid)}}" class="btn btn-success btn-sm" title="Gelişmiş editör ile düzenle">
                                                                    <i class="fal fa-wand-magic-sparkles"></i>
                                                                </a>

                                                                <a href="{{route("admin.sayfa-duzenle",$sayfa->uuid)}}" class="btn btn-info btn-sm mx-2">
                                                                    <i class="fal fa-edit"></i>
                                                                </a>
                                                                <form action="{{route("admin.sayfa-sil",$sayfa->uuid)}}" method="post" id="deleteForm{{$sayfa->uuid}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$sayfa->uuid}}')">
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
