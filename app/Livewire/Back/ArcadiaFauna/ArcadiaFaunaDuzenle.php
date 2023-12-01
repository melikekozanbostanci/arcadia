<?php

namespace App\Livewire\Back\ArcadiaFauna;

use App\Models\Back\ArcadiaFauna;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ArcadiaFaunaDuzenle extends Component
{
    use WithFileUploads;

    public $fauna;

    public $aciklama;
    public $images;
    public $images_alt_aciklama;
    public $images_temp;


    public function render()
    {
        $fauna = ArcadiaFauna::where('id', $this->fauna->id)->firstOrFail();
        return view('livewire.back.arcadia-fauna.arcadia-fauna-duzenle', compact('fauna'));
    }

    public function mount($id)
    {
        $this->fauna = ArcadiaFauna::where('id', $id)->firstOrFail();
        $this->aciklama = $this->fauna->aciklama;
        $this->images = $this->fauna->images;
        $this->images_alt_aciklama = $this->fauna->images_alt_aciklama;
        $this->images_temp = $this->fauna->images;
    }

    public function kaydet()
    {
        if ($this->aciklama || $this->images || $this->images_alt_aciklama) {
            if ($this->images) {
                $images_temp = md5($this->images->getClientOriginalName() . microtime()) . '.' . $this->images->extension();
                Storage::putFileAs('public/arcadia-fauna', $this->images, $images_temp);

                $fauna = ArcadiaFauna::find($this->fauna->id);

                if ($fauna) {
                    $fauna->images = $images_temp;
                } else {
                    $this->dispatch('error', ['title' => 'Hata', 'message' => 'Arcadia Fauna bulunamadı.']);
                    return;
                }
            }

            // Diğer alanları kontrol et ve değer atamalarını yap
            if ($this->aciklama) {
                $fauna->aciklama = $this->aciklama;
            }

            if ($this->images_alt_aciklama) {
                $fauna->images_alt_aciklama = $this->images_alt_aciklama;
            }

            // Gerçekleştirilen değişiklikleri kaydet
            $fauna->save();

            // Geçici dosyayı sıfırla
            $this->images_temp = null;

            $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Arcadia Fauna içerik başarıyla düzenlendi.']);
            return $this->redirect(route("admin.arcadia-fauna"), navigate: true);
        } else {
            $this->dispatch('error', ['title' => 'Hata', 'message' => 'En az bir alan dolu olmalıdır.']);
        }
    }

}
