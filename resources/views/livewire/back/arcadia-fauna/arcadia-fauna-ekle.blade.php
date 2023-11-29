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
                <label for="images_alt_aciklama" class="form-label">Fotoğraf Detay Açıklaması</label>
                <input type="text" wire:model="images_alt_aciklama" class="form-control mb-2 @error('images_alt_aciklama') is-invalid @enderror" id="images_alt_aciklama" placeholder="Fotoğraf Detay Açıklaması"/>
                @error('images_alt_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
