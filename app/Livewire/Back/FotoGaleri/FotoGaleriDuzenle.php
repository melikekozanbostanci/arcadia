<?php

namespace App\Livewire\Back\FotoGaleri;

use App\Models\Back\FotoGaleri;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FotoGaleriDuzenle extends Component
{
    use WithFileUploads;

    public $galeri;

    public $baslik;
    public $aciklama;
    public $images;
    public $images_temp;


    public function render()
    {
        $galeri = FotoGaleri::where('id', $this->galeri->id)->firstOrFail();
        return view('livewire.back.foto-galeri.foto-galeri-duzenle', compact('galeri'));
    }

    public function mount($id)
    {
        $this->galeri = FotoGaleri::where('id', $id)->firstOrFail();
        $this->baslik = $this->galeri->baslik;
        $this->aciklama = $this->galeri->aciklama;
        $this->images = $this->galeri->images;
        $this->images_temp = $this->galeri->images;
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
            Storage::putFileAs('public/foto-galeri', $this->images, $images_temp);

            $galeri = FotoGaleri::find($this->galeri->id);
            $galeri->images = $images_temp;
            $galeri->baslik = $this->baslik;
            $galeri->aciklama = $this->aciklama;
            $galeri->save();

            // Geçici dosyayı sıfırla
            $this->images_temp = null;

            $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Fotoğraf başarıyla düzenlendi.']);
            return $this->redirect(route("admin.foto-galeri"), navigate: true);

        }
    }

}
