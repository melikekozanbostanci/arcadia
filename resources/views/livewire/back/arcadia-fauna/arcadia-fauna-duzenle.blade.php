<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea type="text" wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama"> </textarea>
                @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="images_alt_aciklama" class="form-label">Fotoğraf Detay Açıklama</label>
                <input type="text" wire:model="images_alt_aciklama" class="form-control mb-2 @error('images_alt_aciklama') is-invalid @enderror" id="images_alt_aciklama" placeholder="Fotoğraf Detay Açıklama"/>
                @error('images_alt_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Fotoğraf</label>
                <div wire:ignore>
                    <input type="file" wire:model="images" class="dropify" />
                </div>
                @if($fauna && $fauna->images)
                    <div class="mb-2">
                        <a href="{{ asset('storage/arcadia-fauna/' . $fauna ->images) }}" target="_blank">Yüklenmiş Fotoğraf</a>
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
    @if ($fauna->id) <!-- Eğer düzenleme modundaysa -->
    <div>

        <!-- Varsayılan verileri input alanlarında göster -->
        <script>
            Livewire.on('setDefaults', data => {
                // Eğer data.images_alt_aciklama varsa, değeri atayın
                document.getElementById('baslik').value = data.baslik;
                document.getElementById('alt_baslik').value = data.alt_baslik;
                document.getElementById('aciklama').value = data.aciklama;
                if (isset(data.images_alt_aciklama)) {
                    document.getElementById('images_alt_aciklama').value = data.images_alt_aciklama;
                }

            });
        </script>
    </div>
    @endif
</div>
