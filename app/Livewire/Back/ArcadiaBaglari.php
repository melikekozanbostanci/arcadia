<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Back\ArcadiaBaglari as ArcadiaBaglariModel;

class ArcadiaBaglari extends Component
{
    public function render()
    {
        return view('livewire.back.arcadia-baglari');
    }

    use WithFileUploads;

    public $arcadia_sayfa;
    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $baslik_arcadia;
    public $alt_baslik_arcadia;
    public $aciklama_arcadia_alan1;
    public $fotograf_arcadia_1;
    public $fotograf_arcadia_1_temp;
    public $baslik_arcadia_alan2_1;
    public $aciklama_arcadia_alan2_1;
    public $aciklama_arcadia_alan2_2;
    public $baslik_arcadia_alan3_1;
    public $aciklama_arcadia_alan3_1;
    public $fotograf_arcadia_2;
    public $fotograf_arcadia_2_temp;
    public $baslik_uzum;
    public $alt_baslik_uzum;
    public $aciklama_uzum_alan1;
    public $fotograf_uzum_1;
    public $fotograf_uzum_1_temp;
    public $fotograf_uzum_1_aciklama;
    public $fotograf_uzum_1_aciklama2;
    public $aciklama_uzum_alan2;
    public $fotograf_uzum_2;
    public $fotograf_uzum_2_temp;
    public $fotograf_uzum_3;
    public $fotograf_uzum_3_temp;
    public $baslik_bag;
    public $alt_baslik_bag;
    public $fotograf_bag;
    public $fotograf_bag_temp;


    public function mount()
    {
        $arcadia_sayfa = ArcadiaBaglariModel::first();
        if ($arcadia_sayfa) {
            $this->fotograf_ana_temp = $arcadia_sayfa->fotograf_ana;
            $this->baslik_arcadia = $arcadia_sayfa->baslik_arcadia;
            $this->alt_baslik_arcadia = $arcadia_sayfa->alt_baslik_arcadia;
            $this->aciklama_arcadia_alan1 = $arcadia_sayfa->aciklama_arcadia_alan1;
            $this->fotograf_arcadia_1_temp = $arcadia_sayfa->fotograf_arcadia_1;
            $this->baslik_arcadia_alan2_1 = $arcadia_sayfa->baslik_arcadia_alan2_1;
            $this->aciklama_arcadia_alan2_1 = $arcadia_sayfa->aciklama_arcadia_alan2_1;
            $this->aciklama_arcadia_alan2_2 = $arcadia_sayfa->aciklama_arcadia_alan2_2;
            $this->baslik_arcadia_alan3_1 = $arcadia_sayfa->baslik_arcadia_alan3_1;
            $this->aciklama_arcadia_alan3_1 = $arcadia_sayfa->aciklama_arcadia_alan3_1;
            $this->fotograf_arcadia_2_temp = $arcadia_sayfa->fotograf_arcadia_2;
            $this->baslik_uzum = $arcadia_sayfa->baslik_uzum;
            $this->alt_baslik_uzum = $arcadia_sayfa->alt_baslik_uzum;
            $this->aciklama_uzum_alan1 = $arcadia_sayfa->aciklama_uzum_alan1;
            $this->fotograf_uzum_1_temp = $arcadia_sayfa->fotograf_uzum_1;
            $this->fotograf_uzum_1_aciklama = $arcadia_sayfa->fotograf_uzum_1_aciklama;
            $this->fotograf_uzum_1_aciklama2 = $arcadia_sayfa->fotograf_uzum_1_aciklama2;
            $this->aciklama_uzum_alan2 = $arcadia_sayfa->aciklama_uzum_alan2;
            $this->fotograf_uzum_2_temp = $arcadia_sayfa->fotograf_uzum_2;
            $this->fotograf_uzum_3_temp = $arcadia_sayfa->fotograf_uzum_3;
            $this->baslik_bag = $arcadia_sayfa->baslik_bag;
            $this->alt_baslik_bag = $arcadia_sayfa->alt_baslik_bag;
            $this->fotograf_bag_temp = $arcadia_sayfa->fotograf_bag;
        }
    }

    public function kaydet()
    {
        $this->validate([
            'baslik_arcadia' => 'required',
            'alt_baslik_arcadia' => 'required',
            'aciklama_arcadia_alan1' => 'required',
            'baslik_arcadia_alan2_1' => 'required',
            'aciklama_arcadia_alan2_1' => 'required',
            'aciklama_arcadia_alan2_2' => 'required',
            'baslik_arcadia_alan3_1' => 'required',
            'aciklama_arcadia_alan3_1' => 'required',
            'baslik_uzum' => 'required',
            'alt_baslik_uzum' => 'required',
            'aciklama_uzum_alan1' => 'required',
            'fotograf_uzum_1_aciklama2' => 'required',
            'aciklama_uzum_alan2' => 'required',
            'baslik_bag' => 'required',
            'alt_baslik_bag' => 'required',
        ], [
            'baslik_arcadia.required' => 'Başlık Alanı Boş Bırakılamaz',
            'alt_baslik_arcadia.required' => 'Alt Başlık Alanı Boş Bırakılamaz',
            'aciklama_arcadia_alan1.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'baslik_arcadia_alan2_1.required' => 'Başlık Alanı Boş Bırakılamaz',
            'aciklama_arcadia_alan2_1.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'aciklama_arcadia_alan2_2.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'baslik_arcadia_alan3_1.required' => 'Başlık Alanı Boş Bırakılamaz',
            'aciklama_arcadia_alan3_1.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'baslik_uzum.required' => 'Başlık Alanı Boş Bırakılamaz',
            'alt_baslik_uzum.required' => 'Alt Başlık Alanı Boş Bırakılamaz',
            'aciklama_uzum_alan1.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'aciklama_uzum_alan2.required' => 'Açıklama Alanı Boş Bırakılamaz',
            'baslik_bag.required' => 'Başlık Alanı Boş Bırakılamaz',
            'alt_baslik_bag.required' => 'Alt Başlık Alanı Boş Bırakılamaz',
        ]);

        $arcadia_sayfa = ArcadiaBaglariModel::first();

        if ($arcadia_sayfa) {
            $arcadia_sayfa->delete();
        }

        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->fotograf_arcadia_1_temp;
        $foto2 = $this->fotograf_arcadia_2_temp;
        $foto3 = $this->fotograf_uzum_1_temp;
        $foto4 = $this->fotograf_uzum_2_temp;
        $foto5 = $this->fotograf_uzum_3_temp;
        $foto6 = $this->fotograf_bag_temp;

        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Ana Fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Ana Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/arcadia-baglari', $foto);
        }

        if ($this->fotograf_arcadia_1) {
            $this->validate([
                'fotograf_arcadia_1' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_1.required' => 'Fotoğraf 1 alanı zorunludur.',
                'fotograf_arcadia_1.image' => 'Fotoğraf 1 alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_1.max' => 'Fotoğraf 1 alanı en fazla 2MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf_arcadia_1 . microtime()) . '.' . $this->fotograf_arcadia_1->extension();
            $this->fotograf_arcadia_1->storeAs('public/arcadia-baglari', $foto1);
        }

        if ($this->fotograf_arcadia_2) {
            $this->validate([
                'fotograf_arcadia_2' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_2.required' => 'Fotoğraf 2 alanı zorunludur.',
                'fotograf_arcadia_2.image' => 'Fotoğraf 2 alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_2.max' => 'Fotoğraf 2 alanı en fazla 2MB olmalıdır.',
            ]);

            $foto2 = md5($this->fotograf_arcadia_2 . microtime()) . '.' . $this->fotograf_arcadia_2->extension();
            $this->fotograf_arcadia_2->storeAs('public/arcadia-baglari', $foto2);
        }

        if ($this->fotograf_uzum_1) {
            $this->validate([
                'fotograf_uzum_1' => 'required|image|max:2048',
            ], [
                'fotograf_uzum_1.required' => 'Fotoğraf 1 alanı zorunludur.',
                'fotograf_uzum_1.image' => 'Fotoğraf 1 alanı resim dosyası olmalıdır.',
                'fotograf_uzum_1.max' => 'Fotoğraf 1 alanı en fazla 2MB olmalıdır.',
            ]);

            $foto3 = md5($this->fotograf_uzum_1 . microtime()) . '.' . $this->fotograf_uzum_1->extension();
            $this->fotograf_uzum_1->storeAs('public/arcadia-baglari', $foto3);
        }

        if ($this->fotograf_uzum_2) {
            $this->validate([
                'fotograf_uzum_2' => 'required|image|max:2048',
            ], [
                'fotograf_uzum_2.required' => 'Fotoğraf 2 alanı zorunludur.',
                'fotograf_uzum_2.image' => 'Fotoğraf 2 alanı resim dosyası olmalıdır.',
                'fotograf_uzum_2.max' => 'Fotoğraf 2 alanı en fazla 2MB olmalıdır.',
            ]);

            $foto4 = md5($this->fotograf_uzum_2 . microtime()) . '.' . $this->fotograf_uzum_2->extension();
            $this->fotograf_uzum_2->storeAs('public/arcadia-baglari', $foto4);
        }

        if ($this->fotograf_uzum_3) {
            $this->validate([
                'fotograf_uzum_3' => 'required|image|max:2048',
            ], [
                'fotograf_uzum_3.required' => 'Fotoğraf 3 alanı zorunludur.',
                'fotograf_uzum_3.image' => 'Fotoğraf 3 alanı resim dosyası olmalıdır.',
                'fotograf_uzum_3.max' => 'Fotoğraf 3 alanı en fazla 2MB olmalıdır.',
            ]);

            $foto5 = md5($this->fotograf_uzum_3 . microtime()) . '.' . $this->fotograf_uzum_3->extension();
            $this->fotograf_uzum_3->storeAs('public/arcadia-baglari', $foto5);
        }

        if ($this->fotograf_bag) {
            $this->validate([
                'fotograf_bag' => 'required|image|max:4096',
            ], [
                'fotograf_bag.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_bag.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_bag.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto6 = md5($this->fotograf_bag . microtime()) . '.' . $this->fotograf_bag->extension();
            $this->fotograf_bag->storeAs('public/arcadia-baglari', $foto6);
        }

        $arcadia_sayfa = new ArcadiaBaglariModel();
        $arcadia_sayfa->fotograf_ana = $foto;
        $arcadia_sayfa->baslik_arcadia = $this->baslik_arcadia;
        $arcadia_sayfa->alt_baslik_arcadia = $this->alt_baslik_arcadia;
        $arcadia_sayfa->aciklama_arcadia_alan1 = nl2br($this->aciklama_arcadia_alan1);
        $arcadia_sayfa->fotograf_arcadia_1 = $foto1;
        $arcadia_sayfa->baslik_arcadia_alan2_1 = $this->baslik_arcadia_alan2_1;
        $arcadia_sayfa->aciklama_arcadia_alan2_1 = nl2br($this->aciklama_arcadia_alan2_1);
        $arcadia_sayfa->aciklama_arcadia_alan2_2 = nl2br($this->aciklama_arcadia_alan2_2);
        $arcadia_sayfa->baslik_arcadia_alan3_1 = $this->baslik_arcadia_alan3_1;
        $arcadia_sayfa->aciklama_arcadia_alan3_1 = nl2br($this->aciklama_arcadia_alan3_1);
        $arcadia_sayfa->fotograf_arcadia_2 = $foto2;
        $arcadia_sayfa->baslik_uzum = $this->baslik_uzum;
        $arcadia_sayfa->alt_baslik_uzum = $this->alt_baslik_uzum;
        $arcadia_sayfa->aciklama_uzum_alan1 = nl2br($this->aciklama_uzum_alan1);
        $arcadia_sayfa->fotograf_uzum_1 = $foto3;
        $arcadia_sayfa->fotograf_uzum_1_aciklama = nl2br($this->fotograf_uzum_1_aciklama);
        $arcadia_sayfa->fotograf_uzum_1_aciklama2 = nl2br($this->fotograf_uzum_1_aciklama2);
        $arcadia_sayfa->aciklama_uzum_alan2 = nl2br($this->aciklama_uzum_alan2);
        $arcadia_sayfa->fotograf_uzum_2 = $foto4;
        $arcadia_sayfa->fotograf_uzum_3 = $foto5;
        $arcadia_sayfa->baslik_bag = $this->baslik_bag;
        $arcadia_sayfa->alt_baslik_bag = $this->alt_baslik_bag;
        $arcadia_sayfa->fotograf_bag = $foto6;
        $arcadia_sayfa->save();

        session()->flash('success', 'Arcadia Bağları Sayfa Ayarları Güncellendi.');
        return redirect()->to('/admin/dashboard');

    }
}
