<?php

namespace App\Livewire\Back\FotoGaleri;

use App\Models\Back\FotoGaleri;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FotoGaleriEkle extends Component
{
    use WithFileUploads;

    public $galeri;

    public $baslik;
    public $aciklama;
    public $images;


    public function render()
    {
        return view('livewire.back.foto-galeri.foto-galeri-ekle');
    }


    public function kaydet()
    {
        $this->validate([
            'baslik' => 'required|min:2',
        ], [
            'baslik.required' => 'Başlık alanı zorunludur.',
            'baslik.min' => 'Başlık alanı minimum 2 karakterden oluşmalıdır.',
        ]);

        $this->validate([
            'aciklama' => 'required|min:2',
        ], [
            'aciklama.required' => 'Açıklama alanı zorunludur.',
            'aciklama.min' => 'Açıklama alanı minimum 2 karakterden oluşmalıdır.',
        ]);

        $this->validate([
            'images' => 'required|file|mimes:jpeg,png,jpg,svg|max:2048',
        ], [
            'images.required' => 'Fotoğraf dosyası zorunludur.',
            'images.file' => 'Fotoğraf jpeg,png,jpg,svg türünde olmalıdır.',
            'images.max' => 'Fotoğraf en fazla 2MB olmalıdır.',
            'images.mimes' => 'JPEG,SVG,PNG,JPG türünde olmalıdır.',
        ]);

        $galeri = new FotoGaleri();
        $galeri->baslik = $this->baslik;
        $galeri->aciklama = $this->aciklama;

        $images_name = md5($this->images->getClientOriginalName() . microtime()) . '.' . $this->images->extension();

        Storage::putFileAs('public/foto-galeri', $this->images, $images_name);

        $galeri->images = $images_name;

        $galeri->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Fotoğraf başarıyla kaydedildi.']);
        return $this->redirect(route("admin.foto-galeri"), navigate: true);
    }

}
