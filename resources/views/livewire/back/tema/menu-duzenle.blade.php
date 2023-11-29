<div>
    <div class="col-12">
        <form wire:submit.prevent="menuBaslikGuncelle">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="input-group">
                        <label class="input-group-text">Menü Adı</label>
                        <input type="text" wire:model="baslik" class="form-control @error('baslik') is-invalid @enderror" placeholder="Menü Adı" required>
                        @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="input-group">
                        <label class="input-group-text">Konumu</label>
                        <select wire:model="konum" class="form-control @error('konum') is-invalid @enderror" required>
                            <option value="">Seçiniz</option>
                            <option value="Konumsuz">Konumsuz</option>
                            <option value="Header">Header</option>
                            <option value="Footer">Footer Sol</option>
                            <option value="Footer">Footer Orta</option>
                            <option value="Footer">Footer Sağ</option>
                        </select>
                        @error('konum') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-lg-3 border-end">
            <h5>Sayfalar</h5>
            <ul>
                @if($sayfalar->count()>0)
                    @foreach($sayfalar as $sayfa)
                        <li class="border p-2 rounded mb-1">
                            <a href="javascript:;" wire:click="menuyeEkle('{{$sayfa}}')">{{$sayfa->baslik}}</a>
                        </li>
                    @endforeach
                @else
                    <li class="alert alert-warning rounded mb-1">
                        <a href="javascript:;">Sayfa bulunamadı.</a>
                    </li>
                @endif
            </ul>
            <h5>Bloglar</h5>
            <ul>
                @if($bloglar->count()>0)
                    @foreach($bloglar as $blog)
                        <li class="border p-2 rounded mb-1">
                            <a href="javascript:;" wire:click="menuyeEkle('{{$blog}}')">{{$blog->baslik}}</a>
                        </li>
                    @endforeach
                @else
                    <li class="alert alert-warning rounded mb-1">
                        <a href="javascript:;">Blog bulunamadı.</a>
                    </li>
                @endif
            </ul>
            <h5>Özel Link</h5>
            <label>Menü Adı</label>
            <input type="text" wire:model="menu_adi" class="form-control @error('menu_adi') is-invalid @enderror" placeholder="Menü Adı" required>
            @error('menu_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            <label class="mt-2">Menü Linki</label>
            <input type="text" wire:model="menu_linki" class="form-control @error('menu_linki') is-invalid @enderror" placeholder="Menü Linki" required>
            @error('menu_linki') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            <button type="button" wire:click="ozelMenuyeEkle" class="btn btn-primary mt-2">Ekle</button>
        </div>
        <div class="col-12 col-lg-9">
            @if($menu_gecici)
                <form wire:submit.prevent="menuyuKaydet">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th style="width: 75px">Sıra</th>
                                <th>Menü Adı</th>
                                <th style="width: 450px">Simge (Font Awesome)</th>
                                <th style="width: 75px">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menu_gecici as $row)
                                <tr >
                                    <td class="align-middle text-center">
                                        <input type="number" wire:model="menu_gecici.{{$loop->index}}.sira" class="form-control form-control-sm">
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" wire:model="menu_gecici.{{$loop->index}}.baslik" class="form-control form-control-sm">
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" wire:model="menu_gecici.{{$loop->index}}.icon" class="form-control form-control-sm">
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" wire:click="menuIcerikSil({{$loop->index}})" class="btn btn-danger btn-sm w-100"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Menüyü Kaydet</button>
                </form>
            @endif
        </div>
    </div>
</div>


