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
                @error('images') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>

    </form>
</div>
