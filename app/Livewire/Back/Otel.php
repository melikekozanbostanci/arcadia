<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Back\Otel as ModelsOtel;

class Otel extends Component
{
    public function render()
    {
        return view('livewire.back.otel');
    }

    use WithFileUploads;
    public $otel;
    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $baslik;
    public $aciklama;
    public $fotograf_1;
    public $fotograf_1_temp;


    public function mount()
    {
        $otel = ModelsOtel::first();

        if ($otel){
            $this->fotograf_ana_temp = $otel->fotograf_ana;
            $this->baslik = $otel->baslik;
            $this->aciklama = $otel->aciklama;
            $this->fotograf_1_temp = $otel->fotograf_1;
        }
    }

    public function kaydet(){
        $this->validate([
            'baslik' => 'required',
            'aciklama' => 'required',
        ],
            [
                'baslik.required' => 'Başlık alanı zorunludur.',
                'aciklama.required' => 'Açıklama alanı zorunludur.',
            ]);

        $otel = ModelsOtel::first();

        if($otel){
           $otel->delete();
        }

        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->fotograf_1_temp;

        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Ana Fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Ana Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/otel', $foto);
        }

        if ($this->fotograf_1) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_1.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_1.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_1.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf_1 . microtime()) . '.' . $this->fotograf_1->extension();
            $this->fotograf_1->storeAs('public/otel', $foto1);
        }

        $otel = new ModelsOtel();
        $otel->fotograf_ana = $foto;
        $otel->baslik = $this->baslik;
        $otel->aciklama = nl2br($this->aciklama);
        $otel->fotograf_1 = $foto1;
        $otel->save();

        session()->flash('success', 'Otel sayfası başarıyla güncellendi.');
        return redirect()->to('/admin/dashboard');

    }


}
