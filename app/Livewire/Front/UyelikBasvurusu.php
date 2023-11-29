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
    public $tapdk_belge_no;
    public $ad;
    public $soyad;
    public $dogum_tarihi;
    public $telefon;
    public $eposta;
    public $adres;
    public $il;
    public $ilce;
    public $ekler;

    public function render()
    {
        return view('livewire.front.uyelik-bilgileri-form');
    }

    public function kaydet()
    {
        $this->validate([
            'faaliyet_alani' => 'required',
            'ticari_unvan' => 'required',
            'tapdk_belge_no' => 'required',
            'ad' => 'required',
            'soyad' => 'required',
            'dogum_tarihi' => 'required',
            'telefon' => 'required',
            'eposta' => 'required',
            'adres' => 'required',
            'il' => 'required',
            'ilce' => 'required',
            'ekler' => 'nullable',
        ], [
            'faaliyet_alani.required' => 'Faaliyet alanı zorunludur.',
            'ticari_unvan.required' => 'Ticari unvan zorunludur.',
            'tapdk_belge_no.required' => 'Tapdk belge no zorunludur.',
            'ad.required' => 'Ad zorunludur.',
            'soyad.required' => 'Soyad zorunludur.',
            'dogum_tarihi.required' => 'Doğum tarihi zorunludur.',
            'telefon.required' => 'Telefon zorunludur.',
            'eposta.required' => 'Eposta zorunludur.',
            'adres.required' => 'Adres zorunludur.',
            'il.required' => 'İl zorunludur.',
            'ilce.required' => 'İlçe zorunludur.',
        ]);

        $basvuru = new UyelikBasvurusuModel();
        $basvuru->faaliyet_alani = $this->faaliyet_alani;
        $basvuru->ticari_unvan = $this->ticari_unvan;
        $basvuru->tapdk_belge_no = $this->tapdk_belge_no;
        $basvuru->ad = $this->ad;
        $basvuru->soyad = $this->soyad;
        $basvuru->dogum_tarihi = $this->dogum_tarihi;
        $basvuru->telefon = $this->telefon;
        $basvuru->eposta = $this->eposta;
        $basvuru->adres = $this->adres;
        $basvuru->il = $this->il;
        $basvuru->ilce = $this->ilce;
        $basvuru->ekler = $this->ekler;
        $basvuru->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Üyelik başvurunuz başarıyla kaydedildi.']);
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
