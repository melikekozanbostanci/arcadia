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
                                <h4 class="fw-semibold mb-8">Şablonlar</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Şablonlar
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#YeniSablon">Yeni Şablon</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-sm-12 d-flex align-items-stretch">

                        <div class="card w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>Şablon Adı</th>
                                            <th style="width: 350px">Kısa Kod</th>
                                            <th style="width: 150px">Düzenle</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @if($sablonlar->count()>0)
                                            @foreach($sablonlar as $sablon)
                                                <tr>
                                                    <td>{{$sablon->baslik}}</td>
                                                    <td>{{$sablon->short_code}}</td>
                                                    <td>
                                                        <a href="{{route("admin.sablon-duzenle",$sablon->uuid)}}" class="btn btn-primary btn-sm w-100" title="Futurecode'un ürettiği özel editör">
                                                            FC Editör
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2" class="py-5 text-center"><b>Henüz Şablon Eklenmemiş</b></td>
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
    <div class="modal fade" id="YeniSablon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni Şablon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route("admin.sablon-kaydet")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <label>Şablon Adı</label>
                        <input name="baslik" class="form-control" type="text" placeholder="Şablon Adı">
                        <label>Fotoğraf</label>
                        <input name="foto" class="form-control" type="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
