<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Back\Basindan as BasindanModel;

class Basindan extends Component
{
    public function render()
    {
        return view('livewire.back.basindan-sayfa-ayarlari');
    }
    use WithFileUploads;
    public $baslik;
    public $alt_baslik;
    public $aciklama;
    public $fotograf_ana;
    public $fotograf1;
    public $fotograf2;
    public $fotograf3;
    public $fotograf4;
    public $fotograf_ana_temp;
    public $fotograf1_temp;
    public $fotograf2_temp;
    public $fotograf3_temp;


    public $fotograf4_temp;

    public function mount()
    {
        $basindan_sayfa = BasindanModel::first();
        if ($basindan_sayfa) {
            $this->baslik = $basindan_sayfa->baslik;
            $this->alt_baslik = $basindan_sayfa->alt_baslik;
            $this->aciklama = $basindan_sayfa->aciklama;
            $this->fotograf_ana_temp = $basindan_sayfa->fotograf_ana;
            $this->fotograf1_temp = $basindan_sayfa->fotograf1;
            $this->fotograf2_temp = $basindan_sayfa->fotograf2;
            $this->fotograf3_temp = $basindan_sayfa->fotograf3;
            $this->fotograf4_temp = $basindan_sayfa->fotograf4;
        }

    }

    public function kaydet()
    {
        $this->validate([
            'baslik' => 'required',
            'alt_baslik' => 'required',
            'aciklama' => 'required',
        ], [
            'baslik.required' => 'Başlık alanı zorunludur.',
            'alt_baslik.required' => 'Alt Başlık alanı zorunludur.',
            'aciklama.required' => 'Alt Başlık alanı zorunludur.',
        ]);

        $basindan_sayfa = BasindanModel::first();

        if ($basindan_sayfa) {
            $basindan_sayfa->delete();
        }
        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->fotograf1_temp;
        $foto2 = $this->fotograf2_temp;
        $foto3 = $this->fotograf3_temp;
        $foto4 = $this->fotograf4_temp;

        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Arka plan fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Arka plan fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Arka plan fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/basindan', $foto);
        }
        if ($this->fotograf1) {
            $this->validate([
                'fotograf1' => 'image|max:1024',
            ], [
                'fotograf1.image' => '1.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf1.max' => '1.Fotoğraf alanı en fazla 1MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf1 . microtime()) . '.' . $this->fotograf1->extension();
            $this->fotograf1->storeAs('public/basindan', $foto1);
        }

        if ($this->fotograf2) {
            $this->validate([
                'fotograf2' => 'image|max:1024',
            ], [
                'fotograf2.image' => '2.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf2.max' => '2.Fotoğraf alanı en fazla 1MB olmalıdır.',
            ]);

            $foto2 = md5($this->fotograf2 . microtime()) . '.' . $this->fotograf2->extension();
            $this->fotograf2->storeAs('public/basindan', $foto2);
        }
        if ($this->fotograf3) {
            $this->validate([
                'fotograf3' => 'image|max:1024',
            ], [
                'fotograf3.image' => '3.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf3.max' => '3.Fotoğraf alanı en fazla 1MB olmalıdır.',
            ]);

            $foto3 = md5($this->fotograf3 . microtime()) . '.' . $this->fotograf3->extension();
            $this->fotograf3->storeAs('public/basindan', $foto3);
        }
        if ($this->fotograf4) {
            $this->validate([
                'fotograf4' => 'image|max:1024',
            ], [
                'fotograf4.image' => '4.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf4.max' => '4.Fotoğraf alanı en fazla 1MB olmalıdır.',
            ]);

            $foto4 = md5($this->fotograf4 . microtime()) . '.' . $this->fotograf4->extension();
            $this->fotograf4->storeAs('public/basindan', $foto4);
        }



        $basindan_sayfa = new BasindanModel();
        $basindan_sayfa->baslik = $this->baslik;
        $basindan_sayfa->alt_baslik = $this->alt_baslik;
        $basindan_sayfa->aciklama = nl2br($this->aciklama);
        $basindan_sayfa->fotograf_ana = $foto;
        $basindan_sayfa->fotograf1 = $foto1;
        $basindan_sayfa->fotograf2 = $foto2;
        $basindan_sayfa->fotograf3 = $foto3;
        $basindan_sayfa->fotograf4 = $foto4;
        $basindan_sayfa->save();

        session()->flash('success', 'Basından Sayfası başarıyla güncellendi..');
        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Basından Sayfası başarıyla güncellendi.']);
    }
}
