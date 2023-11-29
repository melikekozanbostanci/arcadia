<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="faaliyet_alani" class="form-label">Faaliyet Alanı</label>
                    <input type="text" wire:model="faaliyet_alani"
                           class="form-control mb-2 @error('faaliyet_alani') is-invalid @enderror" id="faaliyet_alani"
                           placeholder="Faaliyet Alanı"/>
                    @error('faaliyet_alani') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ticari_unvan" class="form-label">Ticari Ünvan</label>
                    <input type="text" wire:model="ticari_unvan"
                           class="form-control mb-2 @error('ticari_unvan') is-invalid @enderror" id="ticari_unvan"
                           placeholder="Ticari Ünvan"/>
                    @error('ticari_unvan') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="tapdk_belge_no" class="form-label">TAPDK Belge No</label>
                    <input type="text" wire:model="tapdk_belge_no"
                           class="form-control mb-2 @error('tapdk_belge_no') is-invalid @enderror" id="tapdk_belge_no"
                           placeholder="TAPDK Belge No"/>
                    @error('tapdk_belge_no') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ad" class="form-label">Ad</label>
                    <input type="text" wire:model="ad" class="form-control mb-2 @error('ad') is-invalid @enderror"
                           id="ad" placeholder="Ad"/>
                    @error('ad') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="soyad" class="form-label">Soyad</label>
                    <input type="text" wire:model="soyad" class="form-control mb-2 @error('soyad') is-invalid @enderror"
                           id="soyad" placeholder="Soyad"/>
                    @error('soyad') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="dogum_tarihi" class="form-label">Doğum Tarihi</label>
                    <input type="text" wire:model="dogum_tarihi" class="form-control mb-2 @error('dogum_tarihi') is-invalid @enderror"
                           id="dogum_tarihi" placeholder="Doğum Tarihi"/>
                    @error('dogum_tarihi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="text" wire:model="telefon"
                           class="form-control mb-2 @error('telefon') is-invalid @enderror" id="telefon"
                           placeholder="Telefon"/>
                    @error('telefon') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="eposta" class="form-label">E-posta</label>
                    <input type="text" wire:model="eposta"
                           class="form-control mb-2 @error('eposta') is-invalid @enderror" id="eposta"
                           placeholder="E-posta"/>
                    @error('eposta') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="adres" class="form-label">Adres</label>
                <textarea type="text" wire:model="adres" class="form-control mb-2 @error('adres') is-invalid @enderror"
                          id="adres" placeholder="Adres"> </textarea>
                @error('adres') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="il" class="form-label">İl</label>
                <input type="text" wire:model="il" class="form-control mb-2 @error('il') is-invalid @enderror"
                          id="il" placeholder="İl"/>
                @error('il') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="ilce" class="form-label">İlçe</label>
                <input type="text" wire:model="ilce" class="form-control mb-2 @error('ilce') is-invalid @enderror"
                          id="ilce" placeholder="İlçe"/>
                @error('ilce') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="ekler" class="form-label">Ekler</label>
                <input type="text" wire:model="ekler" class="form-control mb-2 @error('ekler') is-invalid @enderror"
                          id="ekler" placeholder="Ekler"/>
                @error('ekler') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <div class=" d-flex justify-content-end">
                    <button type="submit" class="giris-button">
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
