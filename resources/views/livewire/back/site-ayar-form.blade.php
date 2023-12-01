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

        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>
    </form>
</div>
