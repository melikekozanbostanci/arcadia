@extends('back.layouts.master')
@section('title',"Dil Yönetimi")
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
                                <h4 class="fw-semibold mb-8">Dil Yönetimi</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="text-muted" href="{{route("admin.dashboard")}}">Güncel Durum</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                            Dil Yönetimi
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#YeniDilEkle">Yeni Dil</button>

                                    <div class="table-responsive my-2">
                                        <table class="table table-bordered table-sm table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 125px">Bayrak</th>
                                                <th>Dil</th>
                                                <th style="width: 125px">Kod</th>
                                                <th style="width: 125px">Aktif</th>
                                                <th style="width: 75px">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($diller->count()>0)
                                                @foreach($diller as $dil)
                                                    <tr>
                                                        <td class="align-middle"><img src="{{asset("storage/bayraklar/".$dil->bayrak)}}" alt="{{$dil->dil}}" width="50px"></td>
                                                        <td class="align-middle">{{$dil->dil}}</td>
                                                        <td class="align-middle">{{$dil->kod}}</td>
                                                        <td class="align-middle">
                                                            @if($dil->aktif==1)
                                                                <span class="badge bg-success">Aktif</span>
                                                            @else
                                                                <span class="badge bg-danger">Pasif</span>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit" data-bs-dil="{{$dil->dil}}" data-bs-kod="{{$dil->kod}}" data-bs-yazi="{{$dil->yazi}}" data-bs-aktif="{{$dil->aktif}}" data-bs-uuid="{{$dil->uuid}}"
                                                                        data-bs-bayrak="{{asset("storage/bayraklar/".$dil->bayrak)}}">
                                                                    <i class="fal fa-edit"></i>
                                                                </button>
                                                                <form action="{{route("admin.dil-sil",$dil->uuid)}}" method="post" id="deleteForm">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm')">
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
        <div class="modal fade" id="YeniDilEkle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dil Düzenle</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route("admin.dil-kaydet")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <label for="dil">Dil</label>
                            <input type="text" name="dil" id="dil" class="form-control">
                            <label for="kod">Kod</label>
                            <input type="text" name="kod" id="kod" class="form-control">
                            <label for="yazi">Yazı</label>
                            <input type="text" name="yazi" id="yazi" class="form-control">
                            <label for="aktif">Aktif mi?</label>
                            <select name="aktif" id="aktif" class="form-control">
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                            <label>Bayrak</label>
                            <hr>
                            <input type="file" name="bayrak"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route("admin.dil-guncelle")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <label for="dil">Dil</label>
                        <input type="text" name="dil" id="dil" class="form-control">
                        <label for="kod">Kod</label>
                        <input type="text" name="kod" id="kod" class="form-control">
                        <label for="yazi">Yazı</label>
                        <input type="text" name="yazi" id="yazi" class="form-control">
                        <label for="aktif">Aktif mi?</label>
                        <select name="aktif" id="aktif" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                        <label>Bayrak</label>
                        <hr>
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <img src="" alt="" width="100px" id="bayrak">
                                <input type="hidden" name="uuid" id="uuid">
                            </div>
                            <div class="col-12 col-lg-9 d-flex align-items-center">
                                <div>
                                    <small><b class="text-danger">Bayrağı değiştirmek istiyorsanız seçim yapınız</b></small>
                                    <input type="file" name="bayrak"/>
                                </div>
                            </div>
                        </div>
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
        $('#ModalEdit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var dil = button.data('bs-dil')
            var kod = button.data('bs-kod')
            var yazi = button.data('bs-yazi')
            var aktif = button.data('bs-aktif')
            var uuid = button.data('bs-uuid')
            /* set img src  */
            $("#bayrak").attr("src", button.data('bs-bayrak'));

            var modal = $(this)
            modal.find('.modal-title').text('Dil Düzenle: ' + dil)
            modal.find('.modal-body #dil').val(dil)
            modal.find('.modal-body #kod').val(kod)
            modal.find('.modal-body #yazi').val(yazi)
            modal.find('.modal-body #aktif').val(aktif)
            modal.find('.modal-body #uuid').val(uuid)
        })
    </script>
@endsection
