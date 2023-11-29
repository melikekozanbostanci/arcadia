@extends('back.layouts.master')
@section('title',"Bloglar")
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
                                <h4 class="fw-semibold mb-8">Bloglar</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Bloglar
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
                                            <a href="{{route("admin.blog-ekle")}}" class="btn btn-primary mb-3">Yeni Blog Ekle</a>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <form action="{{route("admin.bloglar")}}" method="get">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="search" class="form-control" placeholder="Blog Ara" aria-label="Blog Ara" aria-describedby="button-addon2" value="{{request()->get("search")}}">
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ara</button>
                                                    @if(request()->get("search"))
                                                        <a href="{{route("admin.bloglar")}}" class="btn btn-outline-warning">Temizle</a>
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
                                                <th>Yazar</th>
                                                <th>Okunma</th>
                                                <th>Tarih</th>
                                                <th style="width: 75px">İşlemler</th>
                                            </tr>
                                            </thead>
                                            @if($bloglar->count() == 0)
                                                <tbody>
                                                <tr>
                                                    <td colspan="6" class="text-center py-5"><b>Henüz Blog Eklenmemiş</b></td>
                                                </tr>
                                                </tbody>
                                            @else
                                                <tbody>
                                                @foreach($bloglar as $blog)
                                                    <tr>
                                                        <td class="align-middle">
                                                            <a href="{{route("admin.blog-duzenle",$blog->uuid)}}" class="text-info fw-bold">{{$blog->baslik}}</a>
                                                        </td>
                                                        <td class="align-middle">{{$blog->yazar->name}}</td>
                                                        <td class="align-middle">{{$blog->okunma}}</td>
                                                        <td class="align-middle">
                                                            <p class="m-0">{{$blog->created_at->format("d/m/Y H:i")}}</p>
                                                            <p class="m-0"><small>{{$blog->created_at->diffForHumans()}}</small></p>
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <a href="{{route("admin.blog-duzenle",$blog->uuid)}}" class="btn btn-info btn-sm">
                                                                    <i class="fal fa-edit"></i>
                                                                </a>
                                                                <form action="{{route("admin.blog-sil",$blog->uuid)}}" method="post" id="deleteForm{{$blog->uuid}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$blog->uuid}}')">
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
