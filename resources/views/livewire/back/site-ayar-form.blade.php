<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-6">
                <label for="site_adi" class="form-label">Site Adı</label>
                <input type="text" wire:model="site_adi" class="form-control mb-2 @error('site_adi') is-invalid @enderror" id="site_adi" placeholder="Site Adı"/>
                @error('site_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="site_baslik" class="form-label">Site Başlık</label>
                <input type="text" wire:model="site_baslik" class="form-control mb-2 @error('site_baslik') is-invalid @enderror" id="site_baslik" placeholder="Site Başlık"/>
                @error('site_baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="site_aciklama" class="form-label">Site Açıklama</label>
                <textarea wire:model="site_aciklama" class="form-control mb-2 @error('site_aciklama') is-invalid @enderror" id="site_aciklama" placeholder="Site Açıklama"></textarea>
                @error('site_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="site_anahtar_kelimeler" class="form-label">Site Anahtar Kelimeler</label>
                <input type="text" wire:model="site_anahtar_kelimeler" class="form-control mb-2 @error('site_anahtar_kelimeler') is-invalid @enderror" id="site_anahtar_kelimeler" placeholder="Site Anahtar Kelimeler"/>
                @error('site_anahtar_kelimeler') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <label class="form-label">Site Beyaz Logo</label>
                <div wire:ignore>
                    @if($site_beyaz_logo_temp)
                        <input type="file" wire:model="site_beyaz_logo" class="dropify" data-default-file="{{asset("storage/site-ayar/$site_beyaz_logo_temp")}}"/>
                    @else
                        <input type="file" wire:model="site_beyaz_logo" class="dropify" />
                    @endif
                </div>
                @error('site_beyaz_logo') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-4">
                <label class="form-label">Site Siyah Logo</label>
                <div wire:ignore>
                    @if($site_siyah_logo_temp)
                        <input type="file" wire:model="site_siyah_logo" class="dropify" data-default-file="{{asset("storage/site-ayar/$site_siyah_logo_temp")}}"/>
                    @else
                        <input type="file" wire:model="site_siyah_logo" class="dropify" />
                    @endif
                </div>
                @error('site_siyah_logo') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-4">
                <label class="form-label">Site Favicon</label>
                <div wire:ignore>
                    @if($site_favicon_temp)
                        <input type="file" wire:model="site_favicon" class="dropify" data-default-file="{{asset("storage/site-ayar/$site_favicon_temp")}}"/>
                    @else
                        <input type="file" wire:model="site_favicon" class="dropify" />
                    @endif
                </div>
                @error('site_favicon') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="site_telefon" class="form-label">Site Telefon</label>
                <input type="text" wire:model="site_telefon" class="form-control mb-2 @error('site_telefon') is-invalid @enderror" id="site_telefon" placeholder="Site Telefon"/>
                @error('site_telefon') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="site_eposta" class="form-label">Site Eposta</label>
                <input type="text" wire:model="site_eposta" class="form-control mb-2 @error('site_eposta') is-invalid @enderror" id="site_eposta" placeholder="Site Eposta"/>
                @error('site_eposta') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="site_adres" class="form-label">Site Adres</label>
                <textarea wire:model="site_adres" class="form-control mb-2 @error('site_adres') is-invalid @enderror" id="site_adres" placeholder="Site Adres"></textarea>
                @error('site_adres') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="site_facebook" class="form-label">Site Facebook</label>
                <input type="text" wire:model="site_facebook" class="form-control mb-2 @error('site_facebook') is-invalid @enderror" id="site_facebook" placeholder="Site Facebook"/>
                @error('site_facebook') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="site_twitter" class="form-label">Site Twitter</label>
                <input type="text" wire:model="site_twitter" class="form-control mb-2 @error('site_twitter') is-invalid @enderror" id="site_twitter" placeholder="Site Twitter"/>
                @error('site_twitter') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="site_instagram" class="form-label">Site Instagram</label>
                <input type="text" wire:model="site_instagram" class="form-control mb-2 @error('site_instagram') is-invalid @enderror" id="site_instagram" placeholder="Site Instagram"/>
                @error('site_instagram') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="site_youtube" class="form-label">Site Youtube</label>
                <input type="text" wire:model="site_youtube" class="form-control mb-2 @error('site_youtube') is-invalid @enderror" id="site_youtube" placeholder="Site Youtube"/>
                @error('site_youtube') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="site_google_harita" class="form-label">Site Google Harita</label>
                <textarea wire:model="site_google_harita" class="form-control mb-2 @error('site_google_harita') is-invalid @enderror" id="site_google_harita" placeholder="Site Google Harita"></textarea>
                @error('site_google_harita') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="site_google_analytics" class="form-label">Site Google Analytics</label>
                <textarea wire:model="site_google_analytics" class="form-control mb-2 @error('site_google_analytics') is-invalid @enderror" id="site_google_analytics" placeholder="Site Google Analytics"></textarea>
                @error('site_google_analytics') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Anasayfa Arkaplan Fotoğrafı</label>
                <div wire:ignore>
                    @if($fotograf_ana_temp)
                        <input type="file" wire:model="fotograf_ana" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_ana_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_ana" class="dropify" />
                    @endif
                </div>
                @error('fotograf_ana') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="fotograf_ana_baslik" class="form-label">Anasayfa Fotoğraf Üzerindeki Başlık</label>
                <input type="text" wire:model="fotograf_ana_baslik" class="form-control mb-2 @error('fotograf_ana_baslik') is-invalid @enderror" id="fotograf_ana_baslik" placeholder="Fotoğraf Üzerindeki Başlık"/>
                @error('fotograf_ana_baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label for="baslik_1" class="form-label">Anasayfa Başlık 1</label>
                <input type="text" wire:model="baslik_1" class="form-control mb-2 @error('baslik_1') is-invalid @enderror" id="baslik_1" placeholder="Başlık 1"/>
                @error('baslik_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label for="alt_baslik_1" class="form-label">Anasayfa Alt Başlık</label>
                <input type="text" wire:model="alt_baslik_1" class="form-control mb-2 @error('alt_baslik_1') is-invalid @enderror" id="alt_baslik_1" placeholder="Alt Başlık"/>
                @error('alt_baslik_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_1" class="form-label">Anasayfa Açıklama 1</label>
                <textarea wire:model="aciklama_1" class="form-control mb-2 @error('aciklama_1') is-invalid @enderror" id="aciklama_1" placeholder="Açıklama 1"></textarea>
                @error('aciklama_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Anasayfa Fotoğraf 1</label>
                <div wire:ignore>
                    @if($fotograf_1_temp)
                        <input type="file" wire:model="fotograf_1" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_1_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_1" class="dropify" />
                    @endif
                </div>
                @error('fotograf_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="fotograf_yazi_1" class="form-label">Anasayfa Fotoğraf Üzerindeki Yazı 1</label>
                <input type="text" wire:model="fotograf_yazi_1" class="form-control mb-2 @error('fotograf_yazi_1') is-invalid @enderror" id="fotograf_yazi_1" placeholder="Anasayfa Fotoğraf Üzerindeki Yazı 1"/>
                @error('fotograf_yazi_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="fotograf_yazi_2" class="form-label">Anasayfa Fotoğraf Üzerindeki Yazı 2</label>
                <input type="text" wire:model="fotograf_yazi_2" class="form-control mb-2 @error('fotograf_yazi_2') is-invalid @enderror" id="fotograf_yazi_2" placeholder="Anasayfa Fotoğraf Üzerindeki Yazı 2"/>
                @error('fotograf_yazi_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_2" class="form-label">Anasayfa Başlık 2</label>
                <input type="text" wire:model="baslik_2" class="form-control mb-2 @error('baslik_2') is-invalid @enderror" id="baslik_2" placeholder="Anasayfa Başlık 2"/>
                @error('baslik_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="alt_baslik_2" class="form-label">Anasayfa Alt Başlık 2</label>
                <input type="text" wire:model="alt_baslik_2" class="form-control mb-2 @error('alt_baslik_2') is-invalid @enderror" id="alt_baslik_2" placeholder="Anasayfa Alt Başlık 2"/>
                @error('alt_baslik_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="aciklama_2_1" class="form-label">Anasayfa Açıklama 1 Alan 2</label>
                <textarea wire:model="aciklama_2_1" class="form-control mb-2 @error('aciklama_2_1') is-invalid @enderror" id="aciklama_2_1" placeholder="Açıklama 1 Alan 2"></textarea>
                @error('aciklama_2_1') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="aciklama_2_2" class="form-label">Anasayfa Açıklama 2 Alan 2</label>
                <textarea wire:model="aciklama_2_2" class="form-control mb-2 @error('aciklama_2_2') is-invalid @enderror" id="aciklama_2_2" placeholder="Açıklama 2 Alan 2"></textarea>
                @error('aciklama_2_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Anasayfa Fotoğraf 2</label>
                <div wire:ignore>
                    @if($fotograf_2_temp)
                        <input type="file" wire:model="fotograf_2" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_2_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_2" class="dropify" />
                    @endif
                </div>
                @error('fotograf_2') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <label class="form-label">Anasayfa Fotoğraf 3</label>
                <div wire:ignore>
                    @if($fotograf_3_temp)
                        <input type="file" wire:model="fotograf_3" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_3_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_3" class="dropify" />
                    @endif
                </div>
                @error('fotograf_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="baslik_3" class="form-label">Anasayfa Başlık 3</label>
                <input type="text" wire:model="baslik_3" class="form-control mb-2 @error('baslik_3') is-invalid @enderror" id="baslik_3" placeholder="Anasayfa Başlık 3"/>
                @error('baslik_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label for="alt_baslik_3" class="form-label">Anasayfa Alt Başlık 3</label>
                <input type="text" wire:model="alt_baslik_3" class="form-control mb-2 @error('alt_baslik_3') is-invalid @enderror" id="alt_baslik_3" placeholder="Anasayfa Alt Başlık 3"/>
                @error('alt_baslik_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="aciklama_3" class="form-label">Anasayfa Açıklama 3</label>
                <textarea wire:model="aciklama_3" class="form-control mb-2 @error('aciklama_3') is-invalid @enderror" id="aciklama_3" placeholder="Açıklama 3"></textarea>
                @error('aciklama_3') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label class="form-label">Anasayfa Fotoğraf 4</label>
                <div wire:ignore>
                    @if($fotograf_4_temp)
                        <input type="file" wire:model="fotograf_4" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_4_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_4" class="dropify" />
                    @endif
                </div>
                @error('fotograf_4') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Anasayfa Fotoğraf 5</label>
                <div wire:ignore>
                    @if($fotograf_5_temp)
                        <input type="file" wire:model="fotograf_5" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_5_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_5" class="dropify" />
                    @endif
                </div>
                @error('fotograf_5') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <label class="form-label">Anasayfa Fotoğraf 6</label>
                <div wire:ignore>
                    @if($fotograf_6_temp)
                        <input type="file" wire:model="fotograf_6" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_6_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_6" class="dropify" />
                    @endif
                </div>
                @error('fotograf_6') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Anasayfa Fotoğraf 7</label>
                <div wire:ignore>
                    @if($fotograf_7_temp)
                        <input type="file" wire:model="fotograf_7" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_7_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_7" class="dropify" />
                    @endif
                </div>
                @error('fotograf_7') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-md-4">
                <label class="form-label">Anasayfa Fotoğraf 8</label>
                <div wire:ignore>
                    @if($fotograf_8_temp)
                        <input type="file" wire:model="fotograf_8" class="dropify" data-default-file="{{asset("storage/site-ayar/$fotograf_8_temp")}}"/>
                    @else
                        <input type="file" wire:model="fotograf_8" class="dropify" />
                    @endif
                </div>
                @error('fotograf_8') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>
    </form>
</div>
