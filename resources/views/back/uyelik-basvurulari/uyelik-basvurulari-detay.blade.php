@extends('back.layouts.master')
@section('title',"Üyelik Başvuru Detay")
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
                                <h4 class="fw-semibold mb-8">Üyelik Başvuru Detay</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.uyelik-basvurulari")}}">Üyelik Başvuruları</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Üyelik Başvuru Detay
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
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Faaliyet Alanı:</label>
                                    <span>{{ $detay->faaliyet_alani }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Ticari Unvan:</label>
                                    <span>{{ $detay->ticari_unvan }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">TAPDK Belge No:</label>
                                    <span>{{ $detay->tapdk_belge_no }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Adı:</label>
                                    <span>{{ $detay->ad }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Soyadı:</label>
                                    <span>{{ $detay->soyad }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Doğum Tarihi:</label>
                                    <span>{{ $detay->dogum_tarihi }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Telefon:</label>
                                    <span>{{ $detay->telefon }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">E-Mail Adresi:</label>
                                    <span>{{ $detay->eposta }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Adres:</label>
                                    <span>{{ $detay->adres }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">İl:</label>
                                    <span>{{ $detay->il }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">İlçe:</label>
                                    <span>{{ $detay->ilce }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Ekler:</label>
                                    <span>{{ $detay->ekler }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Onay Durumu:</label>
                                    <span class="{{ $detay->onay ? 'text-success' : 'text-danger' }}">{{ $detay->onay ? 'Onaylandı' : 'Onay Bekliyor' }}</span>
                                </div>
                                <div class="form-group lh-base">
                                    <label class="fs-4 fw-bold pe-1">Şifre:</label>
                                    <span>{{ $detay->sifre }}</span>
                                </div>
                                <div class="form-group pt-2">
                                    <livewire:back.uyelik-basvuru-onay id="{{$detay->id}}"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


