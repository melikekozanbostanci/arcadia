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
                                <h4 class="fw-semibold mb-8">Sayfa Kategorileri</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.sayfalar")}}">Sayfalar</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Sayfa Kategorileri
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
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <h5><b>Yeni kategori ekle</b></h5>
                                        <form action="{{route("admin.sayfa-kategori-kaydet")}}" method="post">
                                            @csrf
                                            @method("POST")
                                            <div class="modal-body">
                                                <label>Dil</label>
                                                <select name="dil" class="form-select @error('dil') is-invalid @enderror">
                                                    <option value="">Seçiniz</option>
                                                    @foreach($diller as $dil)
                                                        <option value="{{$dil->kod}}">{{$dil->dil}}</option>
                                                    @endforeach
                                                </select>
                                                @error('dil') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                                <label for="kategori">Kategori Adı</label>
                                                <input type="text" class="form-control @error('kategori_adi') is-invalid @enderror" id="kategori" placeholder="Kategori Adı" name="kategori_adi">
                                                @error('kategori_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                                <label for="ustkategori">Üst Kategori</label>
                                                <select class="form-select @error('ust_id') is-invalid @enderror" name="ust_id">
                                                    <option value="" selected>Seçim yapınız</option>
                                                    <option value="0">Ana Kategori</option>
                                                    @foreach($selectKategoriler as $selectKategori)
                                                        @if($selectKategori->altKategorileri->count() > 0)
                                                            <option value="{{$selectKategori->id}}">{{$selectKategori->kategori_adi}}</option>
                                                            @foreach($selectKategori->altKategorileri as $altKategori)
                                                                <option value="{{$altKategori->id}}">--{{$altKategori->kategori_adi}}</option>
                                                                @if($altKategori->altKategorileri->count() > 0)
                                                                    @foreach($altKategori->altKategorileri as $altKategori)
                                                                        <option value="{{$altKategori->id}}">----{{$altKategori->kategori_adi}}</option>
                                                                        @if($altKategori->altKategorileri->count() > 0)
                                                                            @foreach($altKategori->altKategorileri as $altKategori)
                                                                                <option value="{{$altKategori->id}}">------{{$altKategori->kategori_adi}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <option value="{{$selectKategori->id}}">{{$selectKategori->kategori_adi}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('ust_id') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <form action="{{route("admin.sayfa-kategori-toplu-sil")}}" method="post" id="topluSil" style="display: none">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" id="secilenKategoriler" name="secilenKategoriler">
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('topluSil')">
                                                <i class="fal fa-trash"></i> Seçilenleri sil
                                            </button>
                                        </form>

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm table-striped my-2">
                                                <thead>
                                                <tr>
                                                    <th style="width: 10px">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                    </th>
                                                    <th>Kategori Adı</th>
                                                    <th style="width: 250px">Üst Kategorisi</th>
                                                    <th style="width: 50px">Toplam</th>
                                                    <th style="width: 75px">İşlemler</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($sayfaKategorileri->count() > 0)
                                                    @foreach($sayfaKategorileri as $kategori)
                                                        <tr>
                                                            <td class="align-middle">
                                                                <input type="checkbox" class="form-check-input secenek" value="{{$kategori->uuid}}" id="check{{$kategori->id}}">
                                                            </td>
                                                            <td class="align-middle">
                                                                @if($kategori->ust_id != 0)
                                                                    <i class="fa-thin fa-arrow-right-from-line ps-2"></i>
                                                                @endif
                                                                {{$kategori->kategori_adi}}
                                                            </td>
                                                            <td class="align-middle">
                                                                @if($kategori->ust_id == 0)
                                                                    Ana Kategori
                                                                @else
                                                                    {{$kategori->ustKategorisi->kategori_adi}}
                                                                @endif
                                                            </td>
                                                            <td class="align-middle text-center">{{$kategori->kacSayfaVar->count()}}</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <a href="{{route("admin.sayfa-kategori-duzenle",$kategori->uuid)}}" class="btn btn-primary btn-sm">
                                                                        <i class="fal fa-edit"></i>
                                                                    </a>
                                                                    <form action="{{route("admin.sayfa-kategori-sil")}}" method="post" id="deleteForm{{$kategori->uuid}}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <input type="hidden" name="uuid" value="{{$kategori->uuid}}">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{$kategori->uuid}}')">
                                                                            <i class="fal fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5" class="text-center py-5"><b>Kayıt Bulunamadı</b></td>
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
    </div>

@endsection
@section("script")
    <script>
        $(document).ready(function () {
            $('#checkAll').click(function () {
                if ($(this).is(':checked')) {
                    $('input[type=checkbox]').prop('checked', true);
                    secilenKategorileriAl();
                    $('#topluSil').css('display', 'block');
                } else {
                    $('input[type=checkbox]').prop('checked', false);
                    secilenKategorileriAl();
                    $('#topluSil').css('display', 'none');
                }
            });
        });

        $(".secenek").click(function () {
            secilenKategorileriAl();
        });

        /* seçili checkbox topluSil display block  olacak seçili checkbox yoksa hide olacak*/
        $(".secenek").click(function () {
            if ($('.secenek').is(':checked')) {
                $('#topluSil').css('display', 'block');
            } else {
                $('#topluSil').css('display', 'none');
            }
        });

        function secilenKategorileriAl() {
            let secilenKategoriler = [];
            $('input[type=checkbox]').each(function () {
                if ($(this).is(':checked')) {
                    secilenKategoriler.push($(this).val());
                }
            });
            $('#secilenKategoriler').val(secilenKategoriler);
        }


        $("#kategoriDuzenle").click(function () {
            alert("lfgnmldnflkrf");
        });
    </script>
@endsection
