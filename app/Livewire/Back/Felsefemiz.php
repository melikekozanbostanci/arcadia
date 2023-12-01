<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Front\Felsefemiz as FelsefemizModel;

class Felsefemiz extends Component
{
    public function render()
    {
        return view('livewire.back.felsefemiz');
    }

    use WithFileUploads;
    public $felsefemiz;
    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $baslik_surdurebilirlik;
    public $alt_baslik_surdurebilirlik;
    public $aciklama_surdurebilirlik_alan1;
    public $fotograf_surdurebilirlik_1;
    public $foto_surdurebilirlik_1_temp;
    public $baslik_surdurebilirlik_2;
    public $aciklama_surdurebilirlik_alan2;
    public $fotograf_surdurebilirlik_2;
    public $foto_surdurebilirlik_2_temp;
    public $fotograf_surdurebilirlik_3;
    public $foto_surdurebilirlik_3_temp;
    public $fotograf_surdurebilirlik_4;
    public $foto_surdurebilirlik_4_temp;
    public $fotograf_surdurebilirlik_5;
    public $foto_surdurebilirlik_5_temp;
    public $baslik_surdurebilirlik_3;
    public $aciklama_surdurebilirlik_alan3;
    public $baslik_surdurebilirlik_4;
    public $aciklama_surdurebilirlik_alan4;
    public $baslik_surdurebilirlik_5;
    public $aciklama_surdurebilirlik_alan5;
    public $fotograf_surdurebilirlik_6;
    public $foto_surdurebilirlik_6_temp;
    public $baslik_fauna;
    public $alt_baslik_fauna;



    public function mount(){
        $this->felsefemiz = FelsefemizModel::first();
        if ($this->felsefemiz){
            $this->fotograf_ana_temp = $this->felsefemiz->fotograf_ana;
            $this->foto_surdurebilirlik_1_temp = $this->felsefemiz->fotograf_surdurebilirlik_1;
            $this->foto_surdurebilirlik_2_temp = $this->felsefemiz->fotograf_surdurebilirlik_2;
            $this->foto_surdurebilirlik_3_temp = $this->felsefemiz->fotograf_surdurebilirlik_3;
            $this->foto_surdurebilirlik_4_temp = $this->felsefemiz->fotograf_surdurebilirlik_4;
            $this->foto_surdurebilirlik_5_temp = $this->felsefemiz->fotograf_surdurebilirlik_5;
            $this->foto_surdurebilirlik_6_temp = $this->felsefemiz->fotograf_surdurebilirlik_6;
            $this->baslik_surdurebilirlik = $this->felsefemiz->baslik_surdurebilirlik;
            $this->alt_baslik_surdurebilirlik = $this->felsefemiz->alt_baslik_surdurebilirlik;
            $this->aciklama_surdurebilirlik_alan1 = $this->felsefemiz->aciklama_surdurebilirlik_alan1;
            $this->baslik_surdurebilirlik_2 = $this->felsefemiz->baslik_surdurebilirlik_2;
            $this->aciklama_surdurebilirlik_alan2 = $this->felsefemiz->aciklama_surdurebilirlik_alan2;
            $this->baslik_surdurebilirlik_3 = $this->felsefemiz->baslik_surdurebilirlik_3;
            $this->aciklama_surdurebilirlik_alan3 = $this->felsefemiz->aciklama_surdurebilirlik_alan3;
            $this->baslik_surdurebilirlik_4 = $this->felsefemiz->baslik_surdurebilirlik_4;
            $this->aciklama_surdurebilirlik_alan4 = $this->felsefemiz->aciklama_surdurebilirlik_alan4;
            $this->baslik_surdurebilirlik_5 = $this->felsefemiz->baslik_surdurebilirlik_5;
            $this->aciklama_surdurebilirlik_alan5 = $this->felsefemiz->aciklama_surdurebilirlik_alan5;
            $this->baslik_fauna = $this->felsefemiz->baslik_fauna;
            $this->alt_baslik_fauna = $this->felsefemiz->alt_baslik_fauna;
        }
    }

    public function kaydet(){
        $this->validate([
            'baslik_surdurebilirlik' => 'required',
            'alt_baslik_surdurebilirlik' => 'required',
            'aciklama_surdurebilirlik_alan1' => 'required',
            'baslik_surdurebilirlik_2' => 'required',
            'aciklama_surdurebilirlik_alan2' => 'required',
            'baslik_surdurebilirlik_3' => 'required',
            'aciklama_surdurebilirlik_alan3' => 'required',
            'baslik_surdurebilirlik_4' => 'required',
            'aciklama_surdurebilirlik_alan4' => 'required',
            'baslik_surdurebilirlik_5' => 'required',
            'aciklama_surdurebilirlik_alan5' => 'required',
            'baslik_fauna' => 'required',
            'alt_baslik_fauna' => 'required',
        ],
        [
            'baslik_surdurebilirlik.required' => 'Başlık alanı boş bırakılamaz!',
            'alt_baslik_surdurebilirlik.required' => 'Alt Başlık alanı boş bırakılamaz!',
            'aciklama_surdurebilirlik_alan1.required' => 'Açıklama alanı boş bırakılamaz!',
            'baslik_surdurebilirlik_2.required' => 'Başlık alanı boş bırakılamaz!',
            'aciklama_surdurebilirlik_alan2.required' => 'Açıklama alanı boş bırakılamaz!',
            'baslik_surdurebilirlik_3.required' => 'Başlık alanı boş bırakılamaz!',
            'aciklama_surdurebilirlik_alan3.required' => 'Açıklama alanı boş bırakılamaz!',
            'baslik_surdurebilirlik_4.required' => 'Başlık alanı boş bırakılamaz!',
            'aciklama_surdurebilirlik_alan4.required' => 'Açıklama alanı boş bırakılamaz!',
            'baslik_surdurebilirlik_5.required' => 'Başlık alanı boş bırakılamaz!',
            'aciklama_surdurebilirlik_alan5.required' => 'Açıklama alanı boş bırakılamaz!',
            'baslik_fauna.required' => 'Başlık alanı boş bırakılamaz!',
            'alt_baslik_fauna.required' => 'Alt Başlık alanı boş bırakılamaz!',
        ]);

        $felsefemiz = FelsefemizModel::first();

        if($felsefemiz){
            $felsefemiz->delete();
        }

        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->foto_surdurebilirlik_1_temp;
        $foto2 = $this->foto_surdurebilirlik_2_temp;
        $foto3 = $this->foto_surdurebilirlik_3_temp;
        $foto4 = $this->foto_surdurebilirlik_4_temp;
        $foto5 = $this->foto_surdurebilirlik_5_temp;
        $foto6 = $this->foto_surdurebilirlik_6_temp;


        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Ana Fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Ana Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/felsefemiz', $foto);
        }

        if ($this->fotograf_surdurebilirlik_1) {
            $this->validate([
                'fotograf_surdurebilirlik_1' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_1.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_1.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_1.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf_surdurebilirlik_1 . microtime()) . '.' . $this->fotograf_surdurebilirlik_1->extension();
            $this->fotograf_surdurebilirlik_1->storeAs('public/felsefemiz', $foto1);
        }

        if ($this->fotograf_surdurebilirlik_2) {
            $this->validate([
                'fotograf_surdurebilirlik_2' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_2.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_2.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_2.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto2 = md5($this->fotograf_surdurebilirlik_2 . microtime()) . '.' . $this->fotograf_surdurebilirlik_2->extension();
            $this->fotograf_surdurebilirlik_2->storeAs('public/felsefemiz', $foto2);
        }

        if ($this->fotograf_surdurebilirlik_3) {
            $this->validate([
                'fotograf_surdurebilirlik_3' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_3.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_3.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_3.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto3 = md5($this->fotograf_surdurebilirlik_3 . microtime()) . '.' . $this->fotograf_surdurebilirlik_3->extension();
            $this->fotograf_surdurebilirlik_3->storeAs('public/felsefemiz', $foto3);
        }

        if ($this->fotograf_surdurebilirlik_4) {
            $this->validate([
                'fotograf_surdurebilirlik_4' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_4.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_4.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_4.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto4 = md5($this->fotograf_surdurebilirlik_4 . microtime()) . '.' . $this->fotograf_surdurebilirlik_4->extension();
            $this->fotograf_surdurebilirlik_4->storeAs('public/felsefemiz', $foto4);
        }

        if ($this->fotograf_surdurebilirlik_5) {
            $this->validate([
                'fotograf_surdurebilirlik_5' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_5.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_5.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_5.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto5 = md5($this->fotograf_surdurebilirlik_5 . microtime()) . '.' . $this->fotograf_surdurebilirlik_5->extension();
            $this->fotograf_surdurebilirlik_5->storeAs('public/felsefemiz', $foto5);
        }

        if ($this->fotograf_surdurebilirlik_6) {
            $this->validate([
                'fotograf_surdurebilirlik_6' => 'required|image|max:2048',
            ], [
                'fotograf_surdurebilirlik_6.required' => 'Fotoğraf alanı zorunludur.',
                'fotograf_surdurebilirlik_6.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_surdurebilirlik_6.max' => 'Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto6 = md5($this->fotograf_surdurebilirlik_6 . microtime()) . '.' . $this->fotograf_surdurebilirlik_6->extension();
            $this->fotograf_surdurebilirlik_6->storeAs('public/felsefemiz', $foto6);
        }

        $felsefemiz = new FelsefemizModel();
        $felsefemiz->fotograf_ana = $foto;
        $felsefemiz->baslik_surdurebilirlik = $this->baslik_surdurebilirlik;
        $felsefemiz->alt_baslik_surdurebilirlik = $this->alt_baslik_surdurebilirlik;
        $felsefemiz->aciklama_surdurebilirlik_alan1 = nl2br($this->aciklama_surdurebilirlik_alan1);
        $felsefemiz->fotograf_surdurebilirlik_1 = $foto1;
        $felsefemiz->baslik_surdurebilirlik_2 = $this->baslik_surdurebilirlik_2;
        $felsefemiz->aciklama_surdurebilirlik_alan2 =nl2br($this->aciklama_surdurebilirlik_alan2);
        $felsefemiz->fotograf_surdurebilirlik_2 = $foto2;
        $felsefemiz->fotograf_surdurebilirlik_3 = $foto3;
        $felsefemiz->fotograf_surdurebilirlik_4 = $foto4;
        $felsefemiz->fotograf_surdurebilirlik_5 = $foto5;
        $felsefemiz->baslik_surdurebilirlik_3 = $this->baslik_surdurebilirlik_3;
        $felsefemiz->aciklama_surdurebilirlik_alan3 = nl2br($this->aciklama_surdurebilirlik_alan3);
        $felsefemiz->baslik_surdurebilirlik_4 = $this->baslik_surdurebilirlik_4;
        $felsefemiz->aciklama_surdurebilirlik_alan4 = nl2br($this->aciklama_surdurebilirlik_alan4);
        $felsefemiz->baslik_surdurebilirlik_5 = $this->baslik_surdurebilirlik_5;
        $felsefemiz->aciklama_surdurebilirlik_alan5 = nl2br($this->aciklama_surdurebilirlik_alan5);
        $felsefemiz->fotograf_surdurebilirlik_6 = $foto6;
        $felsefemiz->baslik_fauna = $this->baslik_fauna;
        $felsefemiz->alt_baslik_fauna = $this->alt_baslik_fauna;

        $felsefemiz->save();

        session()->flash('success', 'Felsefemiz sayfası başarıyla güncellendi.');
        return redirect()->to('/admin/dashboard');
    }

}
