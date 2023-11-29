<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-6">
                <label for="kategori_adi" class="form-label">Ürün Kategori Adı</label>
                <input type="text" wire:model="kategori_adi" class="form-control mb-2 @error('kategori_adi') is-invalid @enderror" id="kategori_adi" placeholder="Kategori Adı"/>
                @error('kategori_adi') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>

    </form>
    @if ($urun_kat->id) <!-- Eğer düzenleme modundaysa -->
    <div>
    <script>
        Livewire.on('setDefaults', data => {
            document.getElementById('kategori_adi').value = data.kategori_adi;
        });
    </script>
</div>
@endif
</div>
