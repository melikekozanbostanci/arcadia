<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Back\Teruar as ModelsTeruar;

class Teruar extends Component
{
    public function render()
    {
        return view('livewire.back.teruar');
    }

    use WithFileUploads;
    public $teruar;
    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $baslik;
    public $alt_baslik;
    public $aciklama;
    public $fotograf_1;
    public $fotograf_1_temp;
    public $fotograf_2;
    public $fotograf_2_temp;
    public $fotograf_3;
    public $fotograf_3_temp;
    public $fotograf_4;
    public $fotograf_4_temp;


    public function mount()
    {
        $teruar = ModelsTeruar::first();

        if ($teruar){
            $this->fotograf_ana_temp = $teruar->fotograf_ana;
            $this->baslik = $teruar->baslik;
            $this->alt_baslik = $teruar->alt_baslik;
            $this->aciklama = $teruar->aciklama;
            $this->fotograf_1_temp = $teruar->fotograf_1;
            $this->fotograf_2_temp = $teruar->fotograf_2;
            $this->fotograf_3_temp = $teruar->fotograf_3;
            $this->fotograf_4_temp = $teruar->fotograf_4;
        }
    }

    public function kaydet(){
        $this->validate([
            'baslik' => 'required',
            'alt_baslik' => 'required',
            'aciklama' => 'required',
        ],
            [
                'baslik.required' => 'Başlık alanı zorunludur.',
                'alt_baslik.required' => 'Alt Başlık alanı zorunludur.',
                'aciklama.required' => 'Açıklama alanı zorunludur.',
            ]);

        $teruar = ModelsTeruar::first();

        if($teruar){
           $teruar->delete();
        }

        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->fotograf_1_temp;
        $foto2 = $this->fotograf_2_temp;
        $foto3 = $this->fotograf_3_temp;
        $foto4 = $this->fotograf_4_temp;


        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Ana Fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Ana Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/teruar', $foto);
        }

        if ($this->fotograf_1) {
            $this->validate([
                'fotograf_1' => 'required|image|max:2048',
            ], [
                'fotograf_1.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_1.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_1.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf_1 . microtime()) . '.' . $this->fotograf_1->extension();
            $this->fotograf_1->storeAs('public/teruar', $foto1);
        }

        if ($this->fotograf_2) {
            $this->validate([
                'fotograf_2' => 'required|image|max:2048',
            ], [
                'fotograf_2.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_2.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_2.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto2 = md5($this->fotograf_2 . microtime()) . '.' . $this->fotograf_2->extension();
            $this->fotograf_2->storeAs('public/teruar', $foto2);
        }

        if ($this->fotograf_3) {
            $this->validate([
                'fotograf_3' => 'required|image|max:2048',
            ], [
                'fotograf_3.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_3.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_3.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto3 = md5($this->fotograf_3 . microtime()) . '.' . $this->fotograf_3->extension();
            $this->fotograf_3->storeAs('public/teruar', $foto3);
        }

        if ($this->fotograf_4) {
            $this->validate([
                'fotograf_4' => 'required|image|max:2048',
            ], [
                'fotograf_4.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_4.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_4.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto4 = md5($this->fotograf_4 . microtime()) . '.' . $this->fotograf_4->extension();
            $this->fotograf_4->storeAs('public/teruar', $foto4);
        }

        $teruar = new ModelsTeruar();
        $teruar->fotograf_ana = $foto;
        $teruar->baslik = $this->baslik;
        $teruar->alt_baslik = $this->alt_baslik;
        $teruar->aciklama = nl2br($this->aciklama);
        $teruar->fotograf_1 = $foto1;
        $teruar->fotograf_2 = $foto2;
        $teruar->fotograf_3 = $foto3;
        $teruar->fotograf_4 = $foto4;
        $teruar->save();

        session()->flash('success', 'Teruar Sayfa Ayarları başarıyla güncellendi.');
        return redirect()->to('/admin/dashboard');
    }
}
