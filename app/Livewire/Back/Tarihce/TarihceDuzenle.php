<?php

namespace App\Livewire\Back\Tarihce;

use App\Models\Back\Tarihce;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class TarihceDuzenle extends Component
{
    use WithFileUploads;

    public $tarihce;

    public $yil;
    public $baslik;
    public $aciklama;
    public $images;
    public $images_temp;


    public function render()
    {
        $tarihce = Tarihce::where('id', $this->tarihce->id)->firstOrFail();
        return view('livewire.back.tarihce.tarihce-duzenle', compact('tarihce'));
    }

    public function mount($id)
    {
        $this->tarihce = Tarihce::where('id', $id)->firstOrFail();
        $this->yil = $this->tarihce->yil;
        $this->baslik = $this->tarihce->baslik;
        $this->aciklama = $this->tarihce->aciklama;
        $this->images = $this->tarihce->images;
        $this->images_temp = $this->tarihce->images;
    }

    public function kaydet()
    {
        $this->validate([
            'yil' => 'required|min:4|numeric',
        ], [
            'yil.required' => 'Başlık alanı zorunludur.',
            'yil.min' => 'Başlık alanı minimum 4 karakterden oluşmalıdır.',
            'yil.numeric' => 'Başlık alanı rakamlardan oluşmalıdır.',
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
            'images' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ], [
            'images.required' => 'Fotoğraf dosyası zorunludur.',
            'images.image' => 'Fotoğraf dosyası bir resim olmalıdır.',
            'images.max' => 'Fotoğraf en fazla 2MB olmalıdır.',
            'images.mimes' => 'Desteklenmeyen dosya formatı. Lütfen geçerli bir JPEG, PNG, JPG, SVG dosyası yükleyin.',
        ]);

        if ($this->images) {
            $this->validate([
                'images' => 'file|mimes:jpeg,png,jpg,svg|max:2048',
            ], [
                'images.file' => 'Fotoğraf jpeg,png,jpg,svg türünde olmalıdır.',
                'images.max' => 'Fotoğraf en fazla 2MB olmalıdır.',
                'images.mimes' => 'JPEG,SVG,PNG,JPG türünde olmalıdır.',
            ]);

            $images_temp = md5($this->images->getClientOriginalName() . microtime()) . '.' . $this->images->extension();

            // Eski dosyayı sil ve yeni dosyayı geçici olarak sakla
            Storage::putFileAs('public/tarihce', $this->images, $images_temp);

            $tarihce = Tarihce::find($this->tarihce->id);
            $tarihce->images = $images_temp;
            $tarihce->yil = $this->yil;
            $tarihce->baslik = $this->baslik;
            $tarihce->aciklama = $this->aciklama;
            $tarihce->save();

            // Geçici dosyayı sıfırla
            $this->images_temp = null;

            $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Tarihçe alanı başarıyla düzenlendi.']);
            return $this->redirect(route("admin.tarihce"), navigate: true);

        }
    }

}
