<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-12">
                <label for="urun_adi" class="form-label">Ürün Adı</label>
                <input type="text" wire:model="urun_adi" class="form-control mb-2 @error('urun_adi') is-invalid @enderror" id="urun_adi" placeholder="Ürün Adı"/>
                @error('urun_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Ürün Kategorisi</label>
                <select wire:model="urunler_kategori_id" class="form-select mb-2 @error('urunler_kategori_id') is-invalid @enderror">
                    <option value="" selected>Seçim yapınız</option>
                    @foreach($urunKategorileri as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->kategori_adi }}</option>
                    @endforeach
                </select>
                @error('urunler_kategori_id') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="baslik" class="form-label">Başlık</label>
                <input type="text" wire:model="baslik" class="form-control mb-2 @error('baslik') is-invalid @enderror" id="baslik" placeholder="Başlık"/>
                @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama" class="form-label">Açıklama</label>
                <input type="text" wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama"/>
                @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-3">
                <label class="form-label">Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf1_temp)
                        <input type="file" wire:model="fotograf1" class="dropify" data-default-file="{{asset("storage/urunler/$fotograf1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf1" class="dropify" />
                    @endif
                </div>
                @error('fotograf1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-3">
                <label class="form-label">Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf2_temp)
                        <input type="file" wire:model="fotograf2" class="dropify" data-default-file="{{asset("storage/urunler/$fotograf2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf2" class="dropify" />
                    @endif
                </div>
                @error('fotograf2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-3">
                <label class="form-label">Fotoğraf 3</label>
                <div wire:ignore>
                    @if($fotograf3_temp)
                        <input type="file" wire:model="fotograf3" class="dropify" data-default-file="{{asset("storage/urunler/$fotograf3_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf3" class="dropify" />
                    @endif
                </div>
                @error('fotograf3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-3">
                <label class="form-label">Fotoğraf 4</label>
                <div wire:ignore>
                    @if($fotograf4_temp)
                        <input type="file" wire:model="fotograf4" class="dropify" data-default-file="{{asset("storage/urunler/$fotograf4_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf4" class="dropify" />
                    @endif
                </div>
                @error('fotograf4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>
    </form>
    @if ($vine->id) <!-- Eğer düzenleme modundaysa -->
    <script>
        Livewire.on('setDefaults', data => {
            document.getElementById('baslik').value = data.baslik;
            document.getElementById('aciklama').value = data.aciklama;
            document.getElementById('urun_adi').value = data.urun_adi;
            document.getElementById('urunler_kategori_id').value = data.urunler_kategori_id;
        });
    </script>
    @endif
</div>
@section("css")
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
@endsection
@section("script")
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="{{asset("assets/back/js/dropify.min.js")}}"></script>
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        $(document).ready(function(){
            $('.dropify').dropify({
                messages: {
                    'default': 'Dosyayı sürükleyip bırakın veya tıklayın',
                    'replace': 'Değiştirmek için sürükleyip bırakın veya tıklayın',
                    'remove': 'Kaldır',
                    'error': 'Hata oluştu, bir şeyler yanlış gitti.'
                }
            });
        });
    </script>

@endsection
