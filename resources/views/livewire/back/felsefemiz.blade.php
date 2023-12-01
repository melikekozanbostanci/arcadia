<div>
    <div>
        <form wire:submit.prevent="kaydet">
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Arkaplan Fotoğrafı</label>
                    <div wire:ignore>
                        @if($fotograf_ana_temp)
                            <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/felsefemiz/$fotograf_ana_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_ana" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="text-center py-3">
                <div class="form-group">
                    <h4 class="card-title">Felsefemiz Sayfası "Sürdürülebilirlik Felsefemiz" Kısmı</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_surdurebilirlik" class="form-label">Başlık 1</label>
                    <input type="text" wire:model="baslik_surdurebilirlik" class="form-control mb-2 @error('baslik_surdurebilirlik') is-invalid @enderror" id="baslik_surdurebilirlik" placeholder="Başlık 1"/>
                    @error('baslik_surdurebilirlik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="alt_baslik_surdurebilirlik" class="form-label">Alt Başlık</label>
                    <input type="text" wire:model="alt_baslik_surdurebilirlik" class="form-control mb-2 @error('alt_baslik_surdurebilirlik') is-invalid @enderror" id="alt_baslik_surdurebilirlik" placeholder="Alt Başlık"/>
                    @error('alt_baslik_surdurebilirlik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="aciklama_surdurebilirlik_alan1" class="form-label">Açıklama 1</label>
                    <textarea wire:model="aciklama_surdurebilirlik_alan1" class="form-control mb-2 @error('aciklama_arcadia_alan1') is-invalid @enderror" id="aciklama_arcadia_alan1" placeholder="Açıklama 1"></textarea>
                    @error('aciklama_surdurebilirlik_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Geniş Fotoğraf</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_1_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_1" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_1_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_1" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_surdurebilirlik_2" class="form-label">Başlık 2</label>
                    <input type="text" wire:model="baslik_surdurebilirlik_2" class="form-control mb-2 @error('baslik_surdurebilirlik_2') is-invalid @enderror" id="baslik_surdurebilirlik_2" placeholder="Başlık 2"/>
                    @error('baslik_surdurebilirlik_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="aciklama_surdurebilirlik_alan2" class="form-label">Açıklama 2</label>
                    <textarea type="text" wire:model="aciklama_surdurebilirlik_alan2" class="form-control mb-2 @error('aciklama_surdurebilirlik_alan2') is-invalid @enderror" id="aciklama_surdurebilirlik_alan2" placeholder="Açıklama 2"></textarea>
                    @error('aciklama_surdurebilirlik_alan2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 col-lg-3">
                    <label class="form-label">Fotoğraf 1</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_2_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_2" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_2_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_2" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-12 col-lg-3">
                    <label class="form-label">Fotoğraf 2</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_3_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_3" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_3_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_3" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-12 col-lg-3">
                    <label class="form-label">Fotoğraf 3</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_4_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_4" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_4_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_4" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-12 col-lg-3">
                    <label class="form-label">Fotoğraf 4</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_5_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_5" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_5_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_5" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_5') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_surdurebilirlik_3" class="form-label">Başlık 3</label>
                    <input type="text" wire:model="baslik_surdurebilirlik_3" class="form-control mb-2 @error('baslik_surdurebilirlik_3') is-invalid @enderror" id="baslik_surdurebilirlik_3" placeholder="Başlık 3"/>
                    @error('baslik_surdurebilirlik_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="aciklama_surdurebilirlik_alan3" class="form-label">Açıklama 3</label>
                    <textarea wire:model="aciklama_surdurebilirlik_alan3" class="form-control mb-2 @error('aciklama_surdurebilirlik_alan3') is-invalid @enderror" id="aciklama_surdurebilirlik_alan3" placeholder="Açıklama 3"></textarea>
                    @error('aciklama_surdurebilirlik_alan3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_surdurebilirlik_4" class="form-label">Başlık 4</label>
                    <input type="text" wire:model="baslik_surdurebilirlik_4" class="form-control mb-2 @error('baslik_surdurebilirlik_4') is-invalid @enderror" id="baslik_surdurebilirlik_4" placeholder="Başlık 4"/>
                    @error('baslik_surdurebilirlik_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="aciklama_surdurebilirlik_alan4" class="form-label">Açıklama 4</label>
                    <textarea wire:model="aciklama_surdurebilirlik_alan4" class="form-control mb-2 @error('aciklama_surdurebilirlik_alan4') is-invalid @enderror" id="aciklama_surdurebilirlik_alan4" placeholder="Açıklama 4"></textarea>
                    @error('aciklama_surdurebilirlik_alan4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_surdurebilirlik_5" class="form-label">Başlık 5</label>
                    <input type="text" wire:model="baslik_surdurebilirlik_5" class="form-control mb-2 @error('baslik_surdurebilirlik_5') is-invalid @enderror" id="baslik_surdurebilirlik_5" placeholder="Başlık 5"/>
                    @error('baslik_surdurebilirlik_5') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="aciklama_surdurebilirlik_alan5" class="form-label">Açıklama 5</label>
                    <textarea wire:model="aciklama_surdurebilirlik_alan5" class="form-control mb-2 @error('aciklama_surdurebilirlik_alan5') is-invalid @enderror" id="aciklama_surdurebilirlik_alan5" placeholder="Açıklama 5"></textarea>
                    @error('aciklama_surdurebilirlik_alan5') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Geniş Fotoğraf 2</label>
                    <div wire:ignore>
                        @if($foto_surdurebilirlik_6_temp)
                            <input type="file" wire:model="fotograf_surdurebilirlik_6" class="dropify" data-default-file="{{asset("storage/felsefemiz/$foto_surdurebilirlik_6_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_surdurebilirlik_6" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_surdurebilirlik_6') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="text-center py-3">
                <div class="form-group">
                    <h4 class="card-title">Felsefemiz Sayfası "Arcadia Fauna" Kısmı</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_fauna" class="form-label">Başlık 1</label>
                    <input type="text" wire:model="baslik_fauna" class="form-control mb-2 @error('baslik_fauna') is-invalid @enderror" id="baslik_fauna" placeholder="Başlık 1"/>
                    @error('baslik_fauna') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="alt_baslik_fauna" class="form-label">Alt Başlık</label>
                    <input type="text" wire:model="alt_baslik_fauna" class="form-control mb-2 @error('alt_baslik_fauna') is-invalid @enderror" id="alt_baslik_fauna" placeholder="Alt Başlık"/>
                    @error('alt_baslik_fauna') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
