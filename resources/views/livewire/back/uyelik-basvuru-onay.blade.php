<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-md-12">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="onay" wire:model="onay" id="onay">
                    <label class="form-check-label" for="onay">Onayla</label>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 d-flex align-items-end justify-content-end mt-3">
                <button type="submit" class="btn btn-primary mb-2">Kaydet</button>
            </div>
        </div>

    </form>
</div>

