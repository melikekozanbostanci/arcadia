<div>
    <form wire:submit.prevent="kaydet">
        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Arkaplan Fotoğrafı</label>
                <div wire:ignore>
                    @if($fotograf_ana_temp)
                        <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_ana_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_ana" class="dropify" />
                    @endif
                </div>
                @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="text-center py-3">
            <div class="form-group">
                <h4 class="card-title">Hikayemiz Sayfası "Bir Teruarın Uyanış Öyküsü" Kısmı</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_teruar" class="form-label">Başlık 1</label>
                <input type="text" wire:model="baslik_teruar" class="form-control mb-2 @error('baslik_teruar') is-invalid @enderror" id="baslik_teruar" placeholder="Başlık 1"/>
                @error('baslik_teruar') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="alt_baslik_teruar" class="form-label">Alt Başlık</label>
                <input type="text" wire:model="alt_baslik_teruar" class="form-control mb-2 @error('alt_baslik_teruar') is-invalid @enderror" id="alt_baslik_teruar" placeholder="Alt Başlık"/>
                @error('alt_baslik_teruar') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_teruar_alan1" class="form-label">Açıklama 1</label>
                <textarea wire:model="aciklama_teruar_alan1" class="form-control mb-2 @error('aciklama_teruar_alan1') is-invalid @enderror" id="aciklama_teruar_alan1" placeholder="Açıklama 1"></textarea>
                @error('aciklama_teruar_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_teruar_1_temp)
                        <input type="file" wire:model="fotograf_teruar_1" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_teruar_1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_teruar_1" class="dropify" />
                    @endif
                </div>
                @error('fotograf_teruar_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="baslik_teruar_alan2" class="form-label">Başlık 2</label>
                <input type="text" wire:model="baslik_teruar_alan2" class="form-control mb-2 @error('baslik_teruar_alan2') is-invalid @enderror" id="baslik_teruar_alan2" placeholder="Başlık 2"/>
                @error('baslik_teruar_alan2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-5">
                <label for="aciklama_teruar_alan2_1" class="form-label">Açıklama Alan 1</label>
                <textarea type="text" wire:model="aciklama_teruar_alan2_1" class="form-control mb-2 @error('aciklama_teruar_alan2_1') is-invalid @enderror" id="aciklama_teruar_alan2_1" placeholder="Açıklama Alan 1"></textarea>
                @error('aciklama_teruar_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-5">
                <label for="aciklama_teruar_alan2_2" class="form-label">Açıklama Alan 2</label>
                <textarea wire:model="aciklama_teruar_alan2_2" class="form-control mb-2 @error('aciklama_teruar_alan2_2') is-invalid @enderror" id="aciklama_teruar_alan2_2" placeholder="Açıklama Alan 2"></textarea>
                @error('aciklama_teruar_alan2_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_teruar_2_temp)
                        <input type="file" wire:model="fotograf_teruar_2" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_teruar_2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_teruar_2" class="dropify" />
                    @endif
                </div>
                @error('fotograf_teruar_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="text-center py-3">
            <div class="form-group">
                <h4 class="card-title">Hikayemiz Sayfası "Kurucu ve Danışman Önologlarımız" Kısmı</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_kurucu" class="form-label">Başlık </label>
                <input type="text" wire:model="baslik_kurucu" class="form-control mb-2 @error('baslik_kurucu') is-invalid @enderror" id="baslik_kurucu" placeholder="Başlık"/>
                @error('baslik_kurucu') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="alt_baslik_kurucu" class="form-label">Alt Başlık</label>
                <input type="text" wire:model="alt_baslik_kurucu" class="form-control mb-2 @error('alt_baslik_kurucu') is-invalid @enderror" id="alt_baslik_kurucu" placeholder="Alt Başlık"/>
                @error('alt_baslik_kurucu') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_kurucu_alan1" class="form-label">Açıklama</label>
                <textarea wire:model="aciklama_kurucu_alan1" class="form-control mb-2 @error('aciklama_kurucu_alan1') is-invalid @enderror" id="aciklama_kurucu_alan1" placeholder="Açıklama"></textarea>
                @error('aciklama_kurucu_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12 col-lg-4">
                <label class="form-label">Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_kurucu_1_temp)
                        <input type="file" wire:model="fotograf_kurucu_1" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_kurucu_1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_kurucu_1" class="dropify" />
                    @endif
                </div>
                @error('fotograf_kurucu_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-4">
                <label class="form-label">Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf_kurucu_2_temp)
                        <input type="file" wire:model="fotograf_kurucu_2" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_kurucu_2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_kurucu_2" class="dropify" />
                    @endif
                </div>
                @error('fotograf_kurucu_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-4">
                <label class="form-label">Fotoğraf 3</label>
                <div wire:ignore>
                    @if($fotograf_kurucu_3_temp)
                        <input type="file" wire:model="fotograf_kurucu_3" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_kurucu_3_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_kurucu_3" class="dropify" />
                    @endif
                </div>
                @error('fotograf_kurucu_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="fotograf_kurucu_text_1" class="form-label">Fotoğraf 1 Üzerindeki Yazı </label>
                <input type="text" wire:model="fotograf_kurucu_text_1" class="form-control mb-2 @error('fotograf_kurucu_text_1') is-invalid @enderror" id="fotograf_kurucu_text_1" placeholder="Fotoğraf 1 Üzerindeki Yazı"/>
                @error('fotograf_kurucu_text_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label for="fotograf_kurucu_text_2" class="form-label">Fotoğraf 2 Üzerindeki Yazı</label>
                <input type="text" wire:model="fotograf_kurucu_text_2" class="form-control mb-2 @error('fotograf_kurucu_text_2') is-invalid @enderror" id="fotograf_kurucu_text_2" placeholder="Fotoğraf 2 Üzerindeki Yazı"/>
                @error('fotograf_kurucu_text_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label for="fotograf_kurucu_text_3" class="form-label">Fotoğraf 3 Üzerindeki Yazı</label>
                <input type="text" wire:model="fotograf_kurucu_text_3" class="form-control mb-2 @error('fotograf_kurucu_text_3') is-invalid @enderror" id="fotograf_kurucu_text_3" placeholder="Fotoğraf 3 Üzerindeki Yazı"/>
                @error('fotograf_kurucu_text_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="text-center py-3">
            <div class="form-group">
                <h4 class="card-title">Hikayemiz Sayfası "Bağda ve Şaraphanede Nasıl Çalışıyoruz" Kısmı</h4>
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
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_bag_alan1" class="form-label">Açıklama</label>
                <textarea wire:model="aciklama_bag_alan1" class="form-control mb-2 @error('aciklama_bag_alan1') is-invalid @enderror" id="aciklama_bag_alan1" placeholder="Açıklama"></textarea>
                @error('aciklama_bag_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_bag_1_temp)
                        <input type="file" wire:model="fotograf_bag_1" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_bag_1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_bag_1" class="dropify" />
                    @endif
                </div>
                @error('fotograf_bag_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_bag_alan2_1" class="form-label">Başlık 2</label>
                <input type="text" wire:model="baslik_bag_alan2_1" class="form-control mb-2 @error('baslik_bag_alan2_1') is-invalid @enderror" id="baslik_bag_alan2_1" placeholder="Başlık 2"/>
                @error('baslik_bag_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_bag_alan2_1" class="form-label">Açıklama Alan 2</label>
                <textarea type="text" wire:model="aciklama_bag_alan2_1" class="form-control mb-2 @error('aciklama_bag_alan2_1') is-invalid @enderror" id="aciklama_bag_alan2_1" placeholder="Açıklama Alan 2"></textarea>
                @error('aciklama_bag_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_bag_alan2_2" class="form-label">Başlık 3</label>
                <input type="text" wire:model="baslik_bag_alan2_2" class="form-control mb-2 @error('baslik_bag_alan2_2') is-invalid @enderror" id="baslik_bag_alan2_2" placeholder="Başlık 3"/>
                @error('baslik_bag_alan2_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_bag_alan2_2" class="form-label">Açıklama Alan 3</label>
                <textarea type="text" wire:model="aciklama_bag_alan2_2" class="form-control mb-2 @error('aciklama_bag_alan2_2') is-invalid @enderror" id="aciklama_bag_alan2_2" placeholder="Açıklama Alan 3"></textarea>
                @error('aciklama_bag_alan2_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 col-lg-6">
                <label class="form-label">Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_bag_2_temp)
                        <input type="file" wire:model="fotograf_bag_2" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_bag_2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_bag_2" class="dropify" />
                    @endif
                </div>
                @error('fotograf_bag_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-6">
                <label class="form-label">Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf_bag_3_temp)
                        <input type="file" wire:model="fotograf_bag_3" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_bag_3_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_bag_3" class="dropify" />
                    @endif
                </div>
                @error('fotograf_bag_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf_bag_4_temp)
                        <input type="file" wire:model="fotograf_bag_4" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_bag_4_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_bag_4" class="dropify" />
                    @endif
                </div>
                @error('fotograf_bag_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="fotograf_bag_4_aciklama" class="form-label">Geniş Fotoğraf 2 Üzerindeki Yazı </label>
                <textarea type="text" wire:model="fotograf_bag_4_aciklama" class="form-control mb-2 @error('fotograf_bag_4_aciklama') is-invalid @enderror" id="fotograf_bag_4_aciklama" placeholder="Geniş Fotoğraf 2 Üzerindeki Yazı"></textarea>
                @error('fotograf_bag_4_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_bag_alan3_1" class="form-label">Açıklama Alan 3</label>
                <textarea type="text" wire:model="aciklama_bag_alan3_1" class="form-control mb-2 @error('aciklama_bag_alan3_1') is-invalid @enderror" id="aciklama_bag_alan3_1" placeholder="Açıklama Alan 3"></textarea>
                @error('aciklama_bag_alan3_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_bag_alan3_1" class="form-label">Başlık 4</label>
                <input type="text" wire:model="baslik_bag_alan3_1" class="form-control mb-2 @error('baslik_bag_alan3_1') is-invalid @enderror" id="baslik_bag_alan3_1" placeholder="Başlık 4"/>
                @error('baslik_bag_alan3_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_bag_alan3_2" class="form-label">Açıklama Alan 4</label>
                <textarea type="text" wire:model="aciklama_bag_alan3_2" class="form-control mb-2 @error('aciklama_bag_alan3_2') is-invalid @enderror" id="aciklama_bag_alan3_2" placeholder="Açıklama Alan 4"></textarea>
                @error('aciklama_bag_alan3_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_bag_alan3_2" class="form-label">Başlık 5</label>
                <input type="text" wire:model="baslik_bag_alan3_2" class="form-control mb-2 @error('baslik_bag_alan3_2') is-invalid @enderror" id="baslik_bag_alan3_2" placeholder="Başlık 5"/>
                @error('baslik_bag_alan3_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_bag_alan3_3" class="form-label">Açıklama Alan 5</label>
                <textarea type="text" wire:model="aciklama_bag_alan3_3" class="form-control mb-2 @error('aciklama_bag_alan3_3') is-invalid @enderror" id="aciklama_bag_alan3_3" placeholder="Açıklama Alan 5"></textarea>
                @error('aciklama_bag_alan3_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="text-center py-3">
            <div class="form-group">
                <h4 class="card-title">Hikayemiz Sayfası "Arcadia Üreten Bir Köy" Kısmı</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_arcadia" class="form-label">Başlık </label>
                <input type="text" wire:model="baslik_arcadia" class="form-control mb-2 @error('baslik_arcadia') is-invalid @enderror" id="baslik_arcadia" placeholder="Başlık"/>
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
                <label for="aciklama_arcadia_alan1" class="form-label">Açıklama</label>
                <textarea wire:model="aciklama_arcadia_alan1" class="form-control mb-2 @error('aciklama_arcadia_alan1') is-invalid @enderror" id="aciklama_arcadia_alan1" placeholder="Açıklama"></textarea>
                @error('aciklama_arcadia_alan1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_arcadia_1_temp)
                        <input type="file" wire:model="fotograf_arcadia_1" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_arcadia_1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_arcadia_1" class="dropify" />
                    @endif
                </div>
                @error('fotograf_arcadia_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_arcadia_alan2_1" class="form-label">Başlık 2</label>
                <input type="text" wire:model="baslik_arcadia_alan2_1" class="form-control mb-2 @error('baslik_arcadia_alan2_1') is-invalid @enderror" id="baslik_arcadia_alan2_1" placeholder="Başlık 2"/>
                @error('baslik_arcadia_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_arcadia_alan2_1" class="form-label">Açıklama Alan 2</label>
                <textarea type="text" wire:model="aciklama_arcadia_alan2_1" class="form-control mb-2 @error('aciklama_arcadia_alan2_1') is-invalid @enderror" id="aciklama_arcadia_alan2_1" placeholder="Açıklama Alan 5"></textarea>
                @error('aciklama_arcadia_alan2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Alan 2 Fotoğraf</label>
                <div wire:ignore>
                    @if($fotograf_arcadia_2_temp)
                        <input type="file" wire:model="fotograf_arcadia_2" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_arcadia_2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_arcadia_2" class="dropify" />
                    @endif
                </div>
                @error('fotograf_arcadia_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
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
                <textarea type="text" wire:model="aciklama_arcadia_alan3_1" class="form-control mb-2 @error('aciklama_arcadia_alan3_1') is-invalid @enderror" id="aciklama_arcadia_alan3_1" placeholder="Açıklama Alan 3"></textarea>
                @error('aciklama_arcadia_alan3_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Alan 3 Fotoğraf</label>
                <div wire:ignore>
                    @if($fotograf_arcadia_3_temp)
                        <input type="file" wire:model="fotograf_arcadia_3" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_arcadia_3_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_arcadia_3" class="dropify" />
                    @endif
                </div>
                @error('fotograf_arcadia_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_arcadia_alan4_1" class="form-label">Başlık 4</label>
                <input type="text" wire:model="baslik_arcadia_alan4_1" class="form-control mb-2 @error('baslik_arcadia_alan4_1') is-invalid @enderror" id="baslik_arcadia_alan4_1" placeholder="Başlık 4"/>
                @error('baslik_arcadia_alan4_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_arcadia_alan4_1" class="form-label">Açıklama Alan 4</label>
                <textarea type="text" wire:model="aciklama_arcadia_alan4_1" class="form-control mb-2 @error('aciklama_arcadia_alan4_1') is-invalid @enderror" id="aciklama_arcadia_alan4_1" placeholder="Açıklama Alan 3"></textarea>
                @error('aciklama_arcadia_alan4_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label class="form-label">Geniş Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf_arcadia_4_temp)
                        <input type="file" wire:model="fotograf_arcadia_4" class="dropify" data-default-file="{{asset("storage/hikayemiz/$fotograf_arcadia_4_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_arcadia_4" class="dropify" />
                    @endif
                </div>
                @error('fotograf_arcadia_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>
    </form>
</div>
