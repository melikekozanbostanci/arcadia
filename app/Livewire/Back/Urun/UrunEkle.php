<?php

namespace App\Livewire\Back\Urun;

use App\Models\Back\Urun\Urunler as UrunlerModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Back\Urun\UrunKategorileri;

class UrunEkle extends Component
{
    use WithFileUploads;

    public $vine;

    public $urun_adi;
    public $baslik;
    public $aciklama;
    public $urunler_kategori_id;
    public $fotograf1;
    public $fotograf2;
    public $fotograf3;
    public $fotograf4;


    public function render()
    {
        $urunKategorileri = UrunKategorileri::all();
        return view('livewire.back.urun.urun-ekle-form', compact('urunKategorileri'));
    }


    public function kaydet()
    {
        $this->validate([
            'urun_adi' => 'required|min:2',
        ], [
            'urun_adi.required' => 'Ürün Adı alanı zorunludur.',
            'urun_adi.min' => 'Ürün Adı alanı minimum 2 karakterden oluşmalıdır.',
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
            'urunler_kategori_id' => 'required',
        ], [
            'urunler_kategori_id.required' => 'Ürün Kategorisi alanı zorunludur.',
        ]);

        $vine = new UrunlerModel();
        $vine->urun_adi = $this->urun_adi;
        $vine->baslik = $this->baslik;
        $vine->aciklama = $this->aciklama;
        $vine->urunler_kategori_id = $this->urunler_kategori_id;

        if ($this->fotograf1) {
            $images_name = md5($this->fotograf1->getClientOriginalName() . microtime()) . '.' . $this->fotograf1->extension();
            Storage::putFileAs('public/urunler', $this->fotograf1, $images_name);
            $vine->fotograf1 = $images_name;
        }
        if ($this->fotograf2) {
            $images_name = md5($this->fotograf2->getClientOriginalName() . microtime()) . '.' . $this->fotograf2->extension();
            Storage::putFileAs('public/urunler', $this->fotograf2, $images_name);
            $vine->fotograf2 = $images_name;
        }
        if ($this->fotograf3) {
            $images_name = md5($this->fotograf3->getClientOriginalName() . microtime()) . '.' . $this->fotograf3->extension();
            Storage::putFileAs('public/urunler', $this->fotograf3, $images_name);
            $vine->fotograf3 = $images_name;
        }
        if ($this->fotograf4) {
            $images_name = md5($this->fotograf4->getClientOriginalName() . microtime()) . '.' . $this->fotograf4->extension();
            Storage::putFileAs('public/urunler', $this->fotograf4, $images_name);
            $vine->fotograf4 = $images_name;
        }

        $vine->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Ürün başarıyla kaydedildi.']);
        return $this->redirect(route("admin.urunler"), navigate: true);
    }

}
