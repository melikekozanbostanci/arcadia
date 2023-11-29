<?php

namespace App\Livewire\Back\Tarihce;

use App\Models\Back\Tarihce;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class TarihceEkle extends Component
{
    use WithFileUploads;

    public $tarihce;

    public $yil;
    public $baslik;
    public $aciklama;
    public $images;


    public function render()
    {
        return view('livewire.back.tarihce.tarihce-ekle');
    }


    public function kaydet()
    {
        $this->validate([
            'yil' => 'required|min:4|numeric',
        ], [
            'yil.required' => 'Yıl alanı zorunludur.',
            'yil.min' => 'Yıl alanı minimum 4 karakterden oluşmalıdır.',
            'yil.numeric' => 'Yıl alanı rakamlardan oluşmalıdır.',
        ]);
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
            'images' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
        ], [
            'images.required' => 'Fotoğraf dosyası zorunludur.',
            'images.max' => 'Fotoğraf en fazla 2MB olmalıdır.',
            'images.mimes' => 'Desteklenmeyen dosya formatı. Lütfen geçerli bir JPEG, PNG, JPG, SVG dosyası yükleyin.',
        ]);

        $tarihce = new Tarihce();
        $tarihce->yil = $this->yil;
        $tarihce->baslik = $this->baslik;
        $tarihce->aciklama = $this->aciklama;

        $images_name = md5($this->images->getClientOriginalName() . microtime()) . '.' . $this->images->extension();

        Storage::putFileAs('public/tarihce', $this->images, $images_name);

        $tarihce->images = $images_name;

        $tarihce->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Tarihçe alanı başarıyla kaydedildi.']);
        return $this->redirect(route("admin.tarihce"), navigate: true);
    }

}
