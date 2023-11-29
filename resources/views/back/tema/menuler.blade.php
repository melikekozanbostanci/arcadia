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
                                <h4 class="fw-semibold mb-8">Menüler</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Menüler
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
                    <div class="col-12 col-lg-3 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#YeniMenu">Yeni Menü</button>

                                    <form action="{{route("admin.menuler")}}">
                                        <p class="my-2"><label>Menüler</label></p>
                                        <select name="menu" class="form-select mb-2 @error('menu') is-invalid @enderror" required>
                                            <option value="">Seçiniz</option>
                                            @foreach($menuler as $menu)
                                                <option @selected($menu->uuid == request()->get('menu')) value="{{$menu->uuid}}">{{$menu->baslik}}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="form-group">
                                    @if(request()->get("menu"))
                                        <livewire:back.tema.menu-duzenle :uuid="request()->get('menu')"/>
                                    @endif
                                    @if(!request()->get("menu"))
                                        <div class="alert alert-warning">
                                            <p class="text-center m-0">Lütfen menü seçiniz.</p>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="YeniMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yeni Menü</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route("admin.menu-kaydet")}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <label>Dil</label>
                        <select name="dil" class="form-select mb-2 @error('dil') is-invalid @enderror" required>
                            <option value="">Seçiniz</option>
                            @foreach($diller as $dil)
                                <option value="{{$dil->kod}}">{{$dil->dil}}</option>
                            @endforeach
                        </select>
                        @error('dil') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                        <label>Menü Adı</label>
                        <input type="text" name="baslik" class="form-control mb-2 @error('baslik') is-invalid @enderror" placeholder="Menü Adı" required>
                        @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
@section("script")
    <script>
        $("[name='menu']").change(function () {
            window.location.href = "{{route("admin.menuler")}}?menu=" + $(this).val();
        });
    </script>

@endsection
