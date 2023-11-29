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
                                <h4 class="fw-semibold mb-8">Slaytlar</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Slaytlar
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
                                <a href="{{route("admin.slayt-ekle")}}" class="btn btn-primary mb-3">Yeni Slayt Ekle</a>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>Dil</th>
                                            <th>Fotoğraf</th>
                                            <th>Başlık</th>
                                            <th>Metin</th>
                                            <th>Buton Metni</th>
                                            <th>Buton Bağlantısı</th>
                                            <th>Gösterim Başlangıcı</th>
                                            <th>Gösterim Bitişi</th>
                                            <th style="width: 75px">İşlemler</th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        @if($slaytlar->count()>0)
                                            @foreach($slaytlar as $slayt)
                                                <tr>
                                                    <td class="align-middle">{{$slayt->dil}}</td>
                                                    <td class="align-middle"><img src="{{asset("storage/slaytlar/$slayt->fotograf")}}" class="img-fluid" width="100"></td>
                                                    <td class="align-middle">{{$slayt->baslik}}</td>
                                                    <td class="align-middle">{{$slayt->metin}}</td>
                                                    <td class="align-middle">{{$slayt->buton_metni}}</td>
                                                    <td class="align-middle">{{$slayt->buton_linki}}</td>
                                                    <td class="align-middle">{{tarih($slayt->gosterim_basla)}}</td>
                                                    <td class="align-middle">{{tarih($slayt->gosterim_bitis)}}</td>
                                                    <td class="align-middle">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <a href="{{route("admin.slayt-duzenle",$slayt->uuid)}}" class="btn btn-primary btn-sm">
                                                                <i class="fal fa-edit"></i>
                                                            </a>
                                                            <form action="{{route("admin.slayt-sil",$slayt->uuid)}}" method="post" id="deleteForm{{$slayt->uuid}}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="uuid" value="{{$slayt->uuid}}">
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$slayt->uuid}}')">
                                                                    <i class="fal fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center py-5"><b>Kayıt bulunamadı.</b></td>
                                            </tr>
                                        @endif

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
