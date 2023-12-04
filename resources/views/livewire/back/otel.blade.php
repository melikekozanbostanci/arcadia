<div>
    <div>
        <form wire:submit.prevent="kaydet">
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Arkaplan Fotoğrafı</label>
                    <div wire:ignore>
                        @if($fotograf_ana_temp)
                            <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/otel/$fotograf_ana_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_ana" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
                    <label for="aciklama" class="form-label">Açıklama </label>
                    <textarea wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama "></textarea>
                    @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Logo</label>
                    <div wire:ignore>
                        @if($fotograf_1_temp)
                            <input type="file" wire:model="fotograf_1" class="dropify" data-default-file="{{asset("storage/otel/$fotograf_1_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_1" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex align-items-end justify-content-end">
                    <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
                </div>
            </div>
        </form>
    </div>

</div>

