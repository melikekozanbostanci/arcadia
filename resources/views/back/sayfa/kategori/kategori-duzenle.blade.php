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
                                <h4 class="fw-semibold mb-8">Sayfa Kategori Düzenle</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.sayfalar")}}">Sayfalar</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.sayfa-kategorileri")}}">Sayfa Kategorileri</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Sayfa Kategori Düzenle
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
                                    <div class="col-12 col-lg-4">
                                        <h5><b>Kategori düzenle</b></h5>
                                        <form action="{{ route("admin.sayfa-kategori-guncelle", $sayfaKategori->uuid) }}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <label>Dil</label>
                                                <select name="dil" class="form-select @error('dil') is-invalid @enderror">
                                                    <option value="">Seçiniz</option>
                                                    @foreach($diller as $dil)
                                                        <option value="{{ $dil->kod }}" {{ old('dil', $sayfaKategori->dil ?? '') == $dil->kod ? 'selected' : '' }}>
                                                            {{ $dil->dil }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('dil') <p><span class="text-danger">{{ $message }}</span></p> @enderror

                                                <label for="kategori">Kategori Adı</label>
                                                <input type="text" class="form-control @error('kategori_adi') is-invalid @enderror" id="kategori" placeholder="Kategori Adı" name="kategori_adi" value="{{ old('kategori_adi', $sayfaKategori->kategori_adi ?? '') }}">
                                                @error('kategori_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror

                                                <label for="ustkategori">Üst Kategori</label>
                                                <select class="form-select @error('ust_id') is-invalid @enderror" name="ust_id">
                                                    <option value="" selected>Seçim yapınız</option>
                                                    <option value="0" {{ old('ust_id', $sayfaKategori->ust_id ?? '') == 0 ? 'selected' : '' }}>Ana Kategori</option>
                                                    @foreach($selectKategoriler as $selectKategori)
                                                        <option value="{{ $selectKategori->id }}" {{ old('ust_id', $sayfaKategori->ust_id ?? '') == $selectKategori->id ? 'selected' : '' }}>
                                                            {{ $selectKategori->kategori_adi }}
                                                        </option>
                                                        @foreach($selectKategori->altKategorileri as $altKategori)
                                                            <option value="{{ $altKategori->id }}" {{ old('ust_id', $sayfaKategori->ust_id ?? '') == $altKategori->id ? 'selected' : '' }}>
                                                                --{{ $altKategori->kategori_adi }}
                                                            </option>
                                                            @foreach($altKategori->altKategorileri as $altKategori)
                                                                <option value="{{ $altKategori->id }}" {{ old('ust_id', $sayfaKategori->ust_id ?? '') == $altKategori->id ? 'selected' : '' }}>
                                                                    ----{{ $altKategori->kategori_adi }}
                                                                </option>
                                                                @foreach($altKategori->altKategorileri as $altKategori)
                                                                    <option value="{{ $altKategori->id }}" {{ old('ust_id', $sayfaKategori->ust_id ?? '') == $altKategori->id ? 'selected' : '' }}>
                                                                        ------{{ $altKategori->kategori_adi }}
                                                                    </option>
                                                                @endforeach
                                                            @endforeach
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                                @error('ust_id') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                            </div>
                                            <div class="mt-2">
                                                <a href="{{ URL::previous() }}" class="btn btn-warning me-2">Geri Dön</a>
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                            </div>
                                        </form>
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
