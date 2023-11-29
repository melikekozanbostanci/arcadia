<?php

namespace App\Livewire\Back\Urun\UrunKategorileri;

use App\Models\Back\Urun\UrunKategorileri;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UrunKategoriEkle extends Component
{
    use WithFileUploads;

    public $urun_kat;
    public $kategori_adi;



    public function render()
    {
        return view('livewire.back.urun.urun-kategorileri.urun-kategori-ekle');
    }


    public function kaydet()
    {
        $this->validate([
            'kategori_adi' => 'required|min:2',
        ], [
            'kategori_adi.required' => 'Kategori alanı zorunludur.',
            'kategori_adi.min' => 'Kategori alanı minimum 2 karakterden oluşmalıdır.',
        ]);

        $urun_kat = new UrunKategorileri();
        $urun_kat->kategori_adi = $this->kategori_adi;

        $urun_kat->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Ürün Kategorisi başarıyla kaydedildi.']);
        return $this->redirect(route("admin.urun-kategorileri"), navigate: true);
    }

}
