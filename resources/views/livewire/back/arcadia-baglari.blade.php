<div>
    <div>
        <form wire:submit.prevent="kaydet">
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Arkaplan Fotoğrafı</label>
                    <div wire:ignore>
                        @if($fotograf_ana_temp)
                            <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_ana_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_ana" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="text-center py-3">
                <div class="form-group">
                    <h4 class="card-title">Arcadia Bağları Sayfası "Arcadia Bağları" Kısmı</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_arcadia" class="form-label">Başlık 1</label>
                    <input type="text" wire:model="baslik_arcadia" class="form-control mb-2 @error('baslik_arcadia') is-invalid @enderror" id="baslik_arcadia" placeholder="Başlık 1"/>
                    @error('baslik_arcadia') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="alt_baslik_arcadia" class="form-label">Alt Başlık</label>
                    <input type="text" wire:model="alt_baslik_arcadia" class="form-control mb-2 @error('alt_baslik_arcadia') is-invalid @enderror" id="alt_baslik_arcadia" placeholder="Alt Başlık"/>
                    @error('alt_baslik_arcadia') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="aciklama_arcadia_alan1" class="form-label">Açıklama 1</label>
                    <textarea wire:model="aciklama_arcadia_alan1" class="form-control mb-2 @error('aciklama_arcadia_alan1') is-invalid @enderror" id="aciklama_arcadia_alan1" placeholder="Açıklama 1"></textarea>
                    @error('aciklama_arcadia_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Fotoğraf 1</label>
                    <div wire:ignore>
                        @if($fotograf_arcadia_1_temp)
                            <input type="file" wire:model="fotograf_arcadia_1" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_arcadia_1_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_arcadia_1" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_arcadia_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="baslik_arcadia_alan2_1" class="form-label">Başlık 2</label>
                    <input type="text" wire:model="baslik_arcadia_alan2_1" class="form-control mb-2 @error('baslik_arcadia_alan2_1') is-invalid @enderror" id="baslik_arcadia_alan2_1" placeholder="Başlık 2"/>
                    @error('baslik_arcadia_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-5">
                    <label for="aciklama_arcadia_alan2_1" class="form-label">Açıklama Alan 1</label>
                    <textarea type="text" wire:model="aciklama_arcadia_alan2_1" class="form-control mb-2 @error('aciklama_arcadia_alan2_1') is-invalid @enderror" id="aciklama_arcadia_alan2_1" placeholder="Açıklama Alan 1"></textarea>
                    @error('aciklama_arcadia_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-5">
                    <label for="aciklama_arcadia_alan2_2" class="form-label">Açıklama Alan 2</label>
                    <textarea wire:model="aciklama_arcadia_alan2_2" class="form-control mb-2 @error('aciklama_arcadia_alan2_2') is-invalid @enderror" id="aciklama_arcadia_alan2_2" placeholder="Açıklama Alan 2"></textarea>
                    @error('aciklama_arcadia_alan2_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_arcadia_alan3_1" class="form-label">Başlık 3</label>
                    <input type="text" wire:model="baslik_arcadia_alan3_1" class="form-control mb-2 @error('baslik_arcadia_alan3_1') is-invalid @enderror" id="baslik_arcadia_alan3_1" placeholder="Başlık 3"/>
                    @error('baslik_arcadia_alan3_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="aciklama_arcadia_alan3_1" class="form-label">Açıklama Alan 3</label>
                    <textarea wire:model="aciklama_arcadia_alan3_1" class="form-control mb-2 @error('aciklama_arcadia_alan3_1') is-invalid @enderror" id="aciklama_arcadia_alan3_1" placeholder="Açıklama Alan 3"></textarea>
                    @error('aciklama_arcadia_alan3_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <label class="form-label">Fotoğraf 2</label>
                    <div wire:ignore>
                        @if($fotograf_arcadia_2_temp)
                            <input type="file" wire:model="fotograf_arcadia_2" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_arcadia_2_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_arcadia_2" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_arcadia_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="text-center py-3">
                <div class="form-group">
                    <h4 class="card-title">Arcadia Bağları Sayfası "Üzümlerimiz" Kısmı</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_uzum" class="form-label">Başlık </label>
                    <input type="text" wire:model="baslik_uzum" class="form-control mb-2 @error('baslik_uzum') is-invalid @enderror" id="baslik_uzum" placeholder="Başlık"/>
                    @error('baslik_uzum') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="alt_baslik_uzum" class="form-label">Alt Başlık</label>
                    <input type="text" wire:model="alt_baslik_uzum" class="form-control mb-2 @error('alt_baslik_uzum') is-invalid @enderror" id="alt_baslik_uzum" placeholder="Alt Başlık"/>
                    @error('alt_baslik_uzum') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="aciklama_uzum_alan1" class="form-label">Açıklama</label>
                    <textarea wire:model="aciklama_uzum_alan1" class="form-control mb-2 @error('aciklama_uzum_alan1') is-invalid @enderror" id="aciklama_uzum_alan1" placeholder="Açıklama"></textarea>
                    @error('aciklama_uzum_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <label class="form-label">Geniş Fotoğraf 1</label>
                    <div wire:ignore>
                        @if($fotograf_uzum_1_temp)
                            <input type="file" wire:model="fotograf_uzum_1" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_uzum_1_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_uzum_1" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_uzum_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="fotograf_uzum_1_aciklama" class="form-label">Fotoğraf Üzerindeki Yazı 1</label>
                    <textarea type="text" wire:model="fotograf_uzum_1_aciklama" class="form-control mb-2 @error('fotograf_uzum_1_aciklama') is-invalid @enderror" id="fotograf_uzum_1_aciklama" placeholder="Fotoğraf Üzerindeki Yazı 1"></textarea>
                    @error('fotograf_uzum_1_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="fotograf_uzum_1_aciklama2" class="form-label">Fotoğraf Üzerindeki Yazı 2</label>
                    <textarea type="text" wire:model="fotograf_uzum_1_aciklama2" class="form-control mb-2 @error('fotograf_uzum_1_aciklama2') is-invalid @enderror" id="fotograf_uzum_1_aciklama2" placeholder="Fotoğraf Üzerindeki Yazı 2"></textarea>
                    @error('fotograf_uzum_1_aciklama2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="aciklama_uzum_alan2" class="form-label">Açıklama</label>
                    <textarea type="text" wire:model="aciklama_uzum_alan2" class="form-control mb-2 @error('aciklama_uzum_alan2') is-invalid @enderror" id="aciklama_uzum_alan2" placeholder="Açıklama"></textarea>
                    @error('aciklama_uzum_alan2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12 col-lg-6">
                    <label class="form-label">Fotoğraf 1</label>
                    <div wire:ignore>
                        @if($fotograf_uzum_2_temp)
                            <input type="file" wire:model="fotograf_uzum_2" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_uzum_2_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_uzum_2" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_uzum_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-12 col-lg-6">
                    <label class="form-label">Fotoğraf 2</label>
                    <div wire:ignore>
                        @if($fotograf_uzum_3_temp)
                            <input type="file" wire:model="fotograf_uzum_3" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_uzum_3_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_uzum_3" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_uzum_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>


            <div class="text-center py-3">
                <div class="form-group">
                    <h4 class="card-title">Arcadia Bağları Sayfası "Bağ Haritamız" Kısmı</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="baslik_bag" class="form-label">Başlık </label>
                    <input type="text" wire:model="baslik_bag" class="form-control mb-2 @error('baslik_bag') is-invalid @enderror" id="baslik_bag" placeholder="Başlık"/>
                    @error('baslik_bag') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
                <div class="col-md-6">
                    <label for="alt_baslik_bag" class="form-label">Alt Başlık</label>
                    <input type="text" wire:model="alt_baslik_bag" class="form-control mb-2 @error('alt_baslik_bag') is-invalid @enderror" id="alt_baslik_bag" placeholder="Alt Başlık"/>
                    @error('alt_baslik_bag') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <label class="form-label">Geniş Fotoğraf</label>
                    <div wire:ignore>
                        @if($fotograf_bag_temp)
                            <input type="file" wire:model="fotograf_bag" class="dropify" data-default-file="{{asset("storage/arcadia-baglari/$fotograf_bag_temp")}}"/>
                        @else
                            <input type="file" wire:model="fotograf_bag" class="dropify" />
                        @endif
                    </div>
                    @error('fotograf_bag') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
