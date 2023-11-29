<?php

namespace App\Livewire\Front;

use App\Models\Front\UyelikBasvurusu as UyelikBasvurusuModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class UyelikBasvurusu extends Component
{
    use WithFileUploads;
    public $faaliyet_alani;
    public $ticari_unvan;

    public function render()
    {
        return view('livewire.front.uyelik-bilgileri-form');
    }

    public function kaydet()
    {
        $this->validate([
            'faaliyet_alani' => 'required',
            'ticari_unvan' => 'required',
        ], [
            'faaliyet_alani.required' => 'Faaliyet alanı zorunludur.',
            'ticari_unvan.required' => 'Ticari unvan zorunludur.',
        ]);

        $basvuru = new UyelikBasvurusuModel();
        $basvuru->faaliyet_alani = $this->faaliyet_alani;
        $basvuru->ticari_unvan = $this->ticari_unvan;
        $basvuru->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Başarıyla giriş yaptınız.']);
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->faaliyet_alani = '';
        $this->ticari_unvan = '';
        $this->tapdk_belge_no = '';
        $this->ad = '';
        $this->soyad = '';
        $this->dogum_tarihi = '';
        $this->telefon = '';
        $this->eposta = '';
        $this->adres = '';
        $this->il = '';
        $this->ilce = '';
        $this->ekler = '';
    }
}
