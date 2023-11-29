<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-6">
                <label for="yil" class="form-label">Yıl</label>
                <input type="text" wire:model="yil" class="form-control mb-2 @error('yil') is-invalid @enderror" id="yil" placeholder="Yıl"/>
                @error('yil') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="baslik" class="form-label">Başlık</label>
                <input type="text" wire:model="baslik" class="form-control mb-2 @error('baslik') is-invalid @enderror" id="baslik" placeholder="Başlık"/>
                @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea type="text" wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama"> </textarea>
                @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Fotoğraf</label>
                <div wire:ignore>
                    <input type="file" wire:model="images" class="dropify" />
                </div>
                @if($tarihce && $tarihce->images)
                    <div class="mb-2">
                        <a href="{{ asset('storage/tarihce/' . $tarihce ->images) }}" target="_blank">Yüklenmiş Fotoğraf</a>
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
    @if ($tarihce->id)
    <div>
        <script>
            Livewire.on('setDefaults', data => {
                document.getElementById('baslik').value = data.baslik;
                document.getElementById('aciklama').value = data.aciklama;
                document.getElementById('yil').value = data.yil;
            });
        </script>
    </div>
    @endif
</div>
