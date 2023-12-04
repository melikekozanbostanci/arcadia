<div>
    <div>
        <form wire:submit.prevent="kaydet">
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Arkaplan Fotoğrafı</label>
                    <div wire:ignore>
                        @if($fotograf_ana_temp)
                            <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/teruar/$fotograf_ana_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_ana" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
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
                    <label for="aciklama" class="form-label">Açıklama </label>
                    <textarea wire:model="aciklama" class="form-control mb-2 @error('aciklama') is-invalid @enderror" id="aciklama" placeholder="Açıklama "></textarea>
                    @error('aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3">
                    <label class="form-label">Fotoğraf 1</label>
                    <div wire:ignore>
                        @if($fotograf_1_temp)
                            <input type="file" wire:model="fotograf_1" class="dropify" data-default-file="{{asset("storage/teruar/$fotograf_1_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_1" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fotoğraf 2</label>
                    <div wire:ignore>
                        @if($fotograf_2_temp)
                            <input type="file" wire:model="fotograf_2" class="dropify" data-default-file="{{asset("storage/teruar/$fotograf_2_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_2" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fotoğraf 3</label>
                    <div wire:ignore>
                        @if($fotograf_3_temp)
                            <input type="file" wire:model="fotograf_3" class="dropify" data-default-file="{{asset("storage/teruar/$fotograf_3_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_3" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fotoğraf 4</label>
                    <div wire:ignore>
                        @if($fotograf_4_temp)
                            <input type="file" wire:model="fotograf_4" class="dropify" data-default-file="{{asset("storage/teruar/$fotograf_4_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_4" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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

