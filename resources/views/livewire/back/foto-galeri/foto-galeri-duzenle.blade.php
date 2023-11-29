<div>
    <form wire:submit.prevent="kaydet">
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
            <div class="col-md-12">
                <label class="form-label">Fotoğraf</label>
                <div wire:ignore>
                    <input type="file" wire:model="images" class="dropify" />
                </div>
                @if($galeri && $galeri->images)
                    <div class="mb-2">
                        <a href="{{ asset('storage/foto-galeri/' . $galeri ->images) }}" target="_blank">Yüklenmiş Fotoğraf</a>
                    </div>
                @endif
                @error('images') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Düzenle</button>
            </div>
        </div>
    </form>

    <!-- Varsayılan Veriyi Göster -->
    @if ($galeri->id) <!-- Eğer düzenleme modundaysa -->
    <div>

        <!-- Varsayılan verileri input alanlarında göster -->
        <script>
            Livewire.on('setDefaults', data => {
                document.getElementById('baslik').value = data.baslik;
                document.getElementById('aciklama').value = data.aciklama;
                // Diğer input alanlarını da aynı şekilde doldurabilirsiniz.
            });
        </script>
    </div>
    @endif
</div>
