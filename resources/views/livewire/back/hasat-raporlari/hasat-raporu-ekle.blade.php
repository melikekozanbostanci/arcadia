<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-12">
                <label for="hasat_yil" class="form-label">Hasat Yılı</label>
                <input type="text" wire:model="hasat_yil" class="form-control mb-2 @error('hasat_yil') is-invalid @enderror" id="hasat_yil" placeholder="Hasat Yılı"/>
                @error('hasat_yil') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="form-label">Hasat Raporu PDF Doküman</label>
                <div wire:ignore>
                    <input type="file" wire:model="hasat_raporu_pdf" class="dropify" />
                </div>
                @error('hasat_raporu_pdf') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>

    </form>
</div>
