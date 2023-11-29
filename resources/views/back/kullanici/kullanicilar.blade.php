@extends('back.layouts.master')
@section('title',"Kullanıcılar")
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
                                <h4 class="fw-semibold mb-8">Kullanıcılar</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Kullanıcılar
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
                                    <a href="{{route("admin.kullanici-ekle")}}" class="btn btn-primary">Kullanıcı Ekle</a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm table-striped my-2">
                                            <thead>
                                            <tr>
                                                <th style="width: 75px">Avatar</th>
                                                <th>İsim</th>
                                                <th>E-posta</th>
                                                <th>Rol</th>
                                                <th style="width: 75px">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($kullanicilar->count()>0)
                                                @foreach($kullanicilar as $kullanici)
                                                    <tr>
                                                        <td class="align-middle text-center">
                                                            <img src="{{asset("storage/avatar/$kullanici->avatar")}}" class="img-fluid rounded-circle" style="width: 50px">
                                                        </td>
                                                        <td class="align-middle">{{$kullanici->name}}</td>
                                                        <td class="align-middle">{{$kullanici->email}}</td>
                                                        <td class="align-middle">{{$kullanici->roles[0]["name"]}}</td>
                                                        <td class="align-middle">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <a href="{{route("admin.kullanici-duzenle",$kullanici->id)}}" class="btn btn-primary btn-sm" data-bs-avatar="{{asset("storage/avatar/".$kullanici->avatar)}}">
                                                                    <i class="fal fa-edit"></i>
                                                                </a>
                                                                <form action="{{route("admin.kullanici-sil",$kullanici->id)}}" method="post" id="deleteForm{{$kullanici->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$kullanici->id}}')">
                                                                        <i class="fal fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">Kayıt Bulunamadı</td>
                                                </tr>
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
