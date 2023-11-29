<?php

namespace App\Livewire\Back\ArcadiaFauna;

use App\Models\Back\ArcadiaFauna;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ArcadiaFaunaEkle extends Component
{
    use WithFileUploads;

    public $fauna;

    public $aciklama;
    public $images;
    public $images_alt_aciklama;

    public function render()
    {
        return view('livewire.back.arcadia-fauna.arcadia-fauna-ekle');
    }


    public function kaydet()
    {
        $fauna = new ArcadiaFauna();
        if($this->aciklama){
            $fauna->aciklama = $this->aciklama;
        }
        if($this->images_alt_aciklama){
            $fauna->images_alt_aciklama = $this->images_alt_aciklama;
        }
        if ($this->images) {
            $images_name = md5($this->images->getClientOriginalName() . microtime()) . '.' . $this->images->extension();
            Storage::putFileAs('public/arcadia-fauna', $this->images, $images_name);
            $fauna->images = $images_name;
        }
        $fauna->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'İçerik başarıyla kaydedildi.']);
        return $this->redirect(route("admin.arcadia-fauna"), navigate: true);
    }

}
