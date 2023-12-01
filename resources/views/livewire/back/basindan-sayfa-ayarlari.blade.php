<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-6">
                <label for="baslik" class="form-label">Başlık</label>
                <input type="text" wire:model="baslik" class="form-control mb-2 @error('baslik') is-invalid @enderror" id="baslik" placeholder="Başlık"/>
                @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="alt_baslik" class="form-label">Alt Başlık</label>
                <input type="text" wire:model="alt_baslik" class="form-control mb-2 @error('alt_baslik') is-invalid @enderror" id="alt_baslik" placeholder="Alt Başlık"/>
                @error('alt_baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama"></textarea>
                @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Arkaplan Fotoğraf</label>
                <div wire:ignore>
                    @if($fotograf_ana_temp)
                        <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/basindan/$fotograf_ana_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_ana" class="dropify" />
                    @endif
                </div>
                @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 col-lg-3">
                <label class="form-label">Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf1_temp)
                        <input type="file" wire:model="fotograf1" class="dropify" data-default-file="{{asset("storage/basindan/$fotograf1_temp")}}"/>
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
                        <input type="file" wire:model="fotograf2" class="dropify" data-default-file="{{asset("storage/basindan/$fotograf2_temp")}}"/>
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
                        <input type="file" wire:model="fotograf3" class="dropify" data-default-file="{{asset("storage/basindan/$fotograf3_temp")}}"/>
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
                        <input type="file" wire:model="fotograf4" class="dropify" data-default-file="{{asset("storage/basindan/$fotograf4_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf4" class="dropify" />
                    @endif
                </div>
                @error('fotograf4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>
    </form>
</div>
