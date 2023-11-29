<div>
    <script src="https://cdn.tiny.cloud/1/27vu3r8leyp50an7tcqj7vjwf4qy2kq6w2pms2mmnj20lmtv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '.tinymce',
            plugins: 'tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Ufuk MERT',
            mergetags_list: [
                {value: 'First.Name', title: 'First Name'},
                {value: 'Email', title: 'Email'},
            ],
            setup: function (editor) {
                editor.on('change', function (e) {
                    @this.
                    set('icerik', editor.getContent());
                });
            },

            language: 'tr',
            images_file_types: 'jpg,svg,webp,png,jpeg,gif,ico,bmp',
            images_upload_url: '{{route("admin.resim-yukle")}}',

            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-12 col-lg-3">
                <label>Aktif Mi?</label>
                <select wire:model="aktif" class="form-select mb-2 @error('aktif') is-invalid @enderror">
                    <option value="">Seçiniz</option>
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                </select>
                @error('aktif') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <div wire:ignore>
                    <label>Fotoğraf</label>
                    @if($temp_fotograf)
                        <input type="file" wire:model="fotograf" class="dropify" data-default-file="{{asset("storage/sayfalar/$temp_fotograf")}}"/>
                    @else
                        <input type="file" wire:model="fotograf" class="dropify"/>
                    @endif
                </div>
                @error('fotograf') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Kategori</label>
                <select wire:model="kategori_id" class="form-select mb-2 @error('kategori_id') is-invalid @enderror">
                    <option value="" selected>Seçim yapınız</option>
                    @foreach($sayfa_kategorileri as $selectKategori)
                        @if($selectKategori->altKategorileri->count() > 0)
                            <option value="{{$selectKategori->id}}">{{$selectKategori->kategori_adi}}</option>
                            @foreach($selectKategori->altKategorileri as $altKategori)
                                <option value="{{$altKategori->id}}">--{{$altKategori->kategori_adi}}</option>
                                @if($altKategori->altKategorileri->count() > 0)
                                    @foreach($altKategori->altKategorileri as $altKategori)
                                        <option value="{{$altKategori->id}}">----{{$altKategori->kategori_adi}}</option>
                                        @if($altKategori->altKategorileri->count() > 0)
                                            @foreach($altKategori->altKategorileri as $altKategori)
                                                <option value="{{$altKategori->id}}">------{{$altKategori->kategori_adi}}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @else
                            <option value="{{$selectKategori->id}}">{{$selectKategori->kategori_adi}}</option>
                        @endif
                    @endforeach
                </select>
                @error('kategori_id') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Meta Başlık <b class="text-danger">(50 Karakter)</b></label>
                <input type="text" wire:model="meta_baslik" class="form-control mb-2  @error('meta_baslik') is-invalid @enderror" placeholder="Meta Başlık" maxlength="50"/>
                @error('meta_baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Meta Açıklama <b class="text-danger">(160 Karakter)</b></label>
                <textarea wire:model="meta_aciklama" class="form-control mb-2 @error('meta_aciklama') is-invalid @enderror" placeholder="Meta Açıklama" maxlength="160"></textarea>
                @error('meta_aciklama') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Meta Anahtar Kelime</label>
                <input type="text" wire:model="meta_anahtar_kelimeler" class="form-control mb-2 @error('meta_anahtar_kelimeler') is-invalid @enderror" placeholder="Meta Anahtar Kelimeler"/>
                @error('meta_anahtar_kelimeler') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Sıra</label>
                <input type="number" wire:model="sira" class="form-control mb-2 @error('sira') is-invalid @enderror" placeholder="Sıra"/>
                @error('sira') <p><span class="text-danger">{{ $message }}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-9">
                <label>Başlık</label>
                <input type="text" wire:model.live="baslik" wire:change="slugUret" class="form-control mb-2 @error('baslik') is-invalid @enderror" placeholder="Başlık"/>
                @error('baslik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <label>Slug</label>
                <input type="text" wire:model="slug" class="form-control mb-2 @error('slug') is-invalid @enderror" placeholder="Slug"/>
                @error('slug') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <div wire:ignore>
                    <label>İçerik</label>
                    <textarea class="tinymce" wire:model="icerik" name="icerik" id="texteditor"></textarea>
                </div>
                @error('icerik') <p><span class="text-danger">{{ $message }}</span></p> @enderror
                <a href="{{ route("admin.sayfalar") }}" class="btn btn-danger mt-2">Vazgeç</a>
                <button type="submit" class="btn btn-primary mt-2">Yayınla</button>
            </div>
        </div>
    </form>
</div>
