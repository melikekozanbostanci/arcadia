<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Back\Hikayemiz as HikayemizModel;

class Hikayemiz extends Component
{
    public function render()
    {
        return view('livewire.back.hikayemiz');
    }
    use WithFileUploads;
    public $hikayemiz_sayfa;
    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $baslik_teruar;
    public $alt_baslik_teruar;
    public $aciklama_teruar_alan1;
    public $fotograf_teruar_1;
    public $fotograf_teruar_1_temp;
    public $baslik_teruar_alan2;
    public $aciklama_teruar_alan2_1;
    public $aciklama_teruar_alan2_2;
    public $fotograf_teruar_2;
    public $fotograf_teruar_2_temp;
    public $baslik_kurucu;
    public $alt_baslik_kurucu;
    public $aciklama_kurucu_alan1;
    public $fotograf_kurucu_1;
    public $fotograf_kurucu_1_temp;
    public $fotograf_kurucu_text_1;
    public $fotograf_kurucu_2;
    public $fotograf_kurucu_2_temp;
    public $fotograf_kurucu_text_2;
    public $fotograf_kurucu_3;
    public $fotograf_kurucu_3_temp;
    public $fotograf_kurucu_text_3;
    public $baslik_bag;
    public $alt_baslik_bag;
    public $aciklama_bag_alan1;
    public $fotograf_bag_1;
    public $fotograf_bag_1_temp;
    public $baslik_bag_alan2_1;
    public $baslik_bag_alan2_2;
    public $aciklama_bag_alan2_1;
    public $aciklama_bag_alan2_2;
    public $fotograf_bag_2;
    public $fotograf_bag_2_temp;
    public $fotograf_bag_3;
    public $fotograf_bag_3_temp;
    public $fotograf_bag_4;
    public $fotograf_bag_4_temp;
    public $fotograf_bag_4_aciklama;
    public $aciklama_bag_alan3_1;
    public $aciklama_bag_alan3_2;
    public $aciklama_bag_alan3_3;
    public $baslik_bag_alan3_1;
    public $baslik_bag_alan3_2;
    public $baslik_arcadia;
    public $alt_baslik_arcadia;
    public $aciklama_arcadia_alan1;
    public $fotograf_arcadia_1;
    public $fotograf_arcadia_1_temp;
    public $baslik_arcadia_alan2_1;
    public $aciklama_arcadia_alan2_1;
    public $fotograf_arcadia_2;
    public $fotograf_arcadia_2_temp;
    public $fotograf_arcadia_3;
    public $fotograf_arcadia_3_temp;
    public $baslik_arcadia_alan3_1;
    public $aciklama_arcadia_alan3_1;
    public $baslik_arcadia_alan4_1;
    public $aciklama_arcadia_alan4_1;
    public $fotograf_arcadia_4;
    public $fotograf_arcadia_4_temp;


    public function mount(){
        $hikayemiz_sayfa = HikayemizModel::first();
        if($hikayemiz_sayfa){
            $this->fotograf_ana_temp = $hikayemiz_sayfa->fotograf_ana;
            $this->baslik_teruar = $hikayemiz_sayfa->baslik_teruar;
            $this->alt_baslik_teruar = $hikayemiz_sayfa->alt_baslik_teruar;
            $this->aciklama_teruar_alan1 = $hikayemiz_sayfa->aciklama_teruar_alan1;
            $this->fotograf_teruar_1_temp = $hikayemiz_sayfa->fotograf_teruar_1;
            $this->baslik_teruar_alan2 = $hikayemiz_sayfa->baslik_teruar_alan2;
            $this->aciklama_teruar_alan2_1 = $hikayemiz_sayfa->aciklama_teruar_alan2_1;
            $this->aciklama_teruar_alan2_2 = $hikayemiz_sayfa->aciklama_teruar_alan2_2;
            $this->fotograf_teruar_2_temp = $hikayemiz_sayfa->fotograf_teruar_2;
            $this->baslik_kurucu = $hikayemiz_sayfa->baslik_kurucu;
            $this->alt_baslik_kurucu = $hikayemiz_sayfa->alt_baslik_kurucu;
            $this->aciklama_kurucu_alan1 = $hikayemiz_sayfa->aciklama_kurucu_alan1;
            $this->fotograf_kurucu_1_temp = $hikayemiz_sayfa->fotograf_kurucu_1;
            $this->fotograf_kurucu_text_1 = $hikayemiz_sayfa->fotograf_kurucu_text_1;
            $this->fotograf_kurucu_2_temp = $hikayemiz_sayfa->fotograf_kurucu_2;
            $this->fotograf_kurucu_text_2 = $hikayemiz_sayfa->fotograf_kurucu_text_2;
            $this->fotograf_kurucu_3_temp = $hikayemiz_sayfa->fotograf_kurucu_3;
            $this->fotograf_kurucu_text_3 = $hikayemiz_sayfa->fotograf_kurucu_text_3;
            $this->baslik_bag = $hikayemiz_sayfa->baslik_bag;
            $this->alt_baslik_bag = $hikayemiz_sayfa->alt_baslik_bag;
            $this->aciklama_bag_alan1 = $hikayemiz_sayfa->aciklama_bag_alan1;
            $this->fotograf_bag_1_temp = $hikayemiz_sayfa->fotograf_bag_1;
            $this->baslik_bag_alan2_1 = $hikayemiz_sayfa->baslik_bag_alan2_1;
            $this->baslik_bag_alan2_2 = $hikayemiz_sayfa->baslik_bag_alan2_2;
            $this->aciklama_bag_alan2_1 = $hikayemiz_sayfa->aciklama_bag_alan2_1;
            $this->aciklama_bag_alan2_2 = $hikayemiz_sayfa->aciklama_bag_alan2_2;
            $this->fotograf_bag_2_temp = $hikayemiz_sayfa->fotograf_bag_2;
            $this->fotograf_bag_3_temp = $hikayemiz_sayfa->fotograf_bag_3;
            $this->fotograf_bag_4_temp = $hikayemiz_sayfa->fotograf_bag_4;
            $this->fotograf_bag_4_aciklama = $hikayemiz_sayfa->fotograf_bag_4_aciklama;
            $this->aciklama_bag_alan3_1 = $hikayemiz_sayfa->aciklama_bag_alan3_1;
            $this->aciklama_bag_alan3_2 = $hikayemiz_sayfa->aciklama_bag_alan3_2;
            $this->aciklama_bag_alan3_3 = $hikayemiz_sayfa->aciklama_bag_alan3_3;
            $this->baslik_bag_alan3_1 = $hikayemiz_sayfa->baslik_bag_alan3_1;
            $this->baslik_bag_alan3_2 = $hikayemiz_sayfa->baslik_bag_alan3_2;
            $this->baslik_arcadia = $hikayemiz_sayfa->baslik_arcadia;
            $this->alt_baslik_arcadia = $hikayemiz_sayfa->alt_baslik_arcadia;
            $this->aciklama_arcadia_alan1 = $hikayemiz_sayfa->aciklama_arcadia_alan1;
            $this->fotograf_arcadia_1_temp = $hikayemiz_sayfa->fotograf_arcadia_1;
            $this->baslik_arcadia_alan2_1 = $hikayemiz_sayfa->baslik_arcadia_alan2_1;
            $this->aciklama_arcadia_alan2_1 = $hikayemiz_sayfa->aciklama_arcadia_alan2_1;
            $this->fotograf_arcadia_2_temp = $hikayemiz_sayfa->fotograf_arcadia_2;
            $this->fotograf_arcadia_3_temp = $hikayemiz_sayfa->fotograf_arcadia_3;
            $this->baslik_arcadia_alan3_1 = $hikayemiz_sayfa->baslik_arcadia_alan3_1;
            $this->aciklama_arcadia_alan3_1 = $hikayemiz_sayfa->aciklama_arcadia_alan3_1;
            $this->baslik_arcadia_alan4_1 = $hikayemiz_sayfa->baslik_arcadia_alan4_1;
            $this->aciklama_arcadia_alan4_1 = $hikayemiz_sayfa->aciklama_arcadia_alan4_1;
            $this->fotograf_arcadia_4_temp = $hikayemiz_sayfa->fotograf_arcadia_4;
        }
    }

    public function kaydet(){
        $this->validate([
            'baslik_teruar' => 'required',
            'alt_baslik_teruar' => 'required',
            'aciklama_teruar_alan1' => 'required',
            'baslik_teruar_alan2' => 'required',
            'aciklama_teruar_alan2_1' => 'required',
            'aciklama_teruar_alan2_2' => 'required',
            'baslik_kurucu' => 'required',
            'alt_baslik_kurucu' => 'required',
            'aciklama_kurucu_alan1' => 'required',
            'baslik_bag' => 'required',
            'alt_baslik_bag' => 'required',
            'aciklama_bag_alan1' => 'required',
            'baslik_bag_alan2_1' => 'required',
            'baslik_bag_alan2_2' => 'required',
            'aciklama_bag_alan2_1' => 'required',
            'aciklama_bag_alan2_2' => 'required',
            'fotograf_bag_4_aciklama' => 'required',
            'aciklama_bag_alan3_1' => 'required',
            'aciklama_bag_alan3_2' => 'required',
            'aciklama_bag_alan3_3' => 'required',
            'baslik_bag_alan3_1' => 'required',
            'baslik_bag_alan3_2' => 'required',
            'baslik_arcadia' => 'required',
            'alt_baslik_arcadia' => 'required',
            'aciklama_arcadia_alan1' => 'required',
            'baslik_arcadia_alan2_1' => 'required',
            'aciklama_arcadia_alan2_1' => 'required',
            'baslik_arcadia_alan3_1' => 'required',
            'aciklama_arcadia_alan3_1' => 'required',
            'baslik_arcadia_alan4_1' => 'required',
            'aciklama_arcadia_alan4_1' => 'required',
        ], [
            'baslik_teruar.required' => 'Başlık alanı zorunludur.',
            'alt_baslik_teruar.required' => 'Alt Başlık alanı zorunludur.',
            'aciklama_teruar_alan1.required' => 'Açıklama alanı zorunludur.',
            'baslik_teruar_alan2.required' => 'Başlık alanı zorunludur.',
            'aciklama_teruar_alan2_1.required' => 'Açıklama alanı zorunludur.',
            'aciklama_teruar_alan2_2.required' => 'Açıklama alanı zorunludur.',
            'baslik_kurucu.required' => 'Başlık alanı zorunludur.',
            'alt_baslik_kurucu.required' => 'Alt Başlık alanı zorunludur.',
            'aciklama_kurucu_alan1.required' => 'Açıklama alanı zorunludur.',
            'baslik_bag.required' => 'Başlık alanı zorunludur.',
            'alt_baslik_bag.required' => 'Alt Başlık alanı zorunludur.',
            'aciklama_bag_alan1.required' => 'Açıklama alanı zorunludur.',
            'baslik_bag_alan2_1.required' => 'Başlık alanı zorunludur.',
            'baslik_bag_alan2_2.required' => 'Başlık alanı zorunludur.',
            'aciklama_bag_alan2_1.required' => 'Açıklama alanı zorunludur.',
            'aciklama_bag_alan2_2.required' => 'Açıklama alanı zorunludur.',
            'fotograf_bag_4_aciklama.required' => 'Açıklama alanı zorunludur.',
            'aciklama_bag_alan3_1.required' => 'Açıklama alanı zorunludur.',
            'aciklama_bag_alan3_2.required' => 'Açıklama alanı zorunludur.',
            'aciklama_bag_alan3_3.required' => 'Açıklama alanı zorunludur.',
            'baslik_bag_alan3_1.required' => 'Başlık alanı zorunludur.',
            'baslik_bag_alan3_2.required' => 'Başlık alanı zorunludur.',
            'baslik_arcadia.required' => 'Başlık alanı zorunludur.',
            'alt_baslik_arcadia.required' => 'Alt Başlık alanı zorunludur.',
            'aciklama_arcadia_alan1.required' => 'Açıklama alanı zorunludur.',
            'baslik_arcadia_alan2_1.required' => 'Başlık alanı zorunludur.',
            'aciklama_arcadia_alan2_1.required' => 'Açıklama alanı zorunludur.',
            'baslik_arcadia_alan3_1.required' => 'Başlık alanı zorunludur.',
            'aciklama_arcadia_alan3_1.required' => 'Açıklama alanı zorunludur.',
            'baslik_arcadia_alan4_1.required' => 'Başlık alanı zorunludur.',
            'aciklama_arcadia_alan4_1.required' => 'Açıklama alanı zorunludur.',
        ]);

        $hikayemiz_sayfa = HikayemizModel::first();

        if($hikayemiz_sayfa){
            $hikayemiz_sayfa->delete();
        }
        $foto = $this->fotograf_ana_temp;
        $foto1 = $this->fotograf_teruar_1_temp;
        $foto2 = $this->fotograf_teruar_2_temp;
        $foto3 = $this->fotograf_kurucu_1_temp;
        $foto4 = $this->fotograf_kurucu_2_temp;
        $foto5 = $this->fotograf_kurucu_3_temp;
        $foto6 = $this->fotograf_bag_1_temp;
        $foto7 = $this->fotograf_bag_2_temp;
        $foto8 = $this->fotograf_bag_3_temp;
        $foto9 = $this->fotograf_bag_4_temp;
        $foto10 = $this->fotograf_arcadia_1_temp;
        $foto11 = $this->fotograf_arcadia_2_temp;
        $foto12 = $this->fotograf_arcadia_3_temp;
        $foto13 = $this->fotograf_arcadia_4_temp;


        if($this->fotograf_ana){
            $this->validate([
                'fotograf_ana' => 'required|image|max:2048',
            ], [
                'fotograf_ana.required' => 'Ana Fotoğraf alanı zorunludur.',
                'fotograf_ana.image' => 'Ana Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/hikayemiz', $foto);
        }
        if($this->fotograf_teruar_1){
            $this->validate([
                'fotograf_teruar_1' => 'required|image|max:2048',
            ], [
                'fotograf_teruar_1.required' => '1.Fotoğraf alanı zorunludur.',
                'fotograf_teruar_1.image' => '1.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_teruar_1.max' => '1.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto1 = md5($this->fotograf_teruar_1 . microtime()) . '.' . $this->fotograf_teruar_1->extension();
            $this->fotograf_teruar_1->storeAs('public/hikayemiz', $foto1);
        }
        if($this->fotograf_teruar_2){
            $this->validate([
                'fotograf_teruar_2' => 'required|image|max:4096',
            ], [
                'fotograf_teruar_2.required' => '2.Fotoğraf alanı zorunludur.',
                'fotograf_teruar_2.image' => '2.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_teruar_2.max' => '2.Fotoğraf alanı en fazla 3MB olmalıdır.',
            ]);

            $foto2 = md5($this->fotograf_teruar_2 . microtime()) . '.' . $this->fotograf_teruar_2->extension();
            $this->fotograf_teruar_2->storeAs('public/hikayemiz', $foto2);
        }
        if($this->fotograf_kurucu_1){
            $this->validate([
                'fotograf_kurucu_1' => 'required|image|max:2048',
            ], [
                'fotograf_kurucu_1.required' => '1.Fotoğraf alanı zorunludur.',
                'fotograf_kurucu_1.image' => '1.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_kurucu_1.max' => '1.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto3 = md5($this->fotograf_kurucu_1 . microtime()) . '.' . $this->fotograf_kurucu_1->extension();
            $this->fotograf_kurucu_1->storeAs('public/hikayemiz', $foto3);
        }
        if($this->fotograf_kurucu_2){
            $this->validate([
                'fotograf_kurucu_2' => 'required|image|max:2048',
            ], [
                'fotograf_kurucu_2.required' => '2.Fotoğraf alanı zorunludur.',
                'fotograf_kurucu_2.image' => '2.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_kurucu_2.max' => '2.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto4 = md5($this->fotograf_kurucu_2 . microtime()) . '.' . $this->fotograf_kurucu_2->extension();
            $this->fotograf_kurucu_2->storeAs('public/hikayemiz', $foto4);
        }
        if($this->fotograf_kurucu_3){
            $this->validate([
                'fotograf_kurucu_3' => 'required|image|max:2048',
            ], [
                'fotograf_kurucu_3.image' => '3.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_kurucu_3.max' => '3.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto5 = md5($this->fotograf_kurucu_3 . microtime()) . '.' . $this->fotograf_kurucu_3->extension();
            $this->fotograf_kurucu_3->storeAs('public/hikayemiz', $foto5);
        }
        if($this->fotograf_bag_1){
            $this->validate([
                'fotograf_bag_1' => 'required|image|max:2048',
            ], [
                'fotograf_bag_1.image' => '1.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_bag_1.max' => '1.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto6 = md5($this->fotograf_bag_1 . microtime()) . '.' . $this->fotograf_bag_1->extension();
            $this->fotograf_bag_1->storeAs('public/hikayemiz', $foto6);
        }
        if($this->fotograf_bag_2){
            $this->validate([
                'fotograf_bag_2' => 'required|image|max:2048',
            ], [
                'fotograf_bag_2.required' => '2.Fotoğraf alanı zorunludur.',
                'fotograf_bag_2.image' => '2.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_bag_2.max' => '2.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto7 = md5($this->fotograf_bag_2 . microtime()) . '.' . $this->fotograf_bag_2->extension();
            $this->fotograf_bag_2->storeAs('public/hikayemiz', $foto7);
        }
        if($this->fotograf_bag_3){
            $this->validate([
                'fotograf_bag_3' => 'required|image|max:2048',
            ], [
                'fotograf_bag_3.required' => '3.Fotoğraf alanı zorunludur.',
                'fotograf_bag_3.image' => '3.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_bag_3.max' => '3.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto8 = md5($this->fotograf_bag_3 . microtime()) . '.' . $this->fotograf_bag_3->extension();
            $this->fotograf_bag_3->storeAs('public/hikayemiz', $foto8);
        }
        if($this->fotograf_bag_4){
            $this->validate([
                'fotograf_bag_4' => 'required|image|max:2048',
            ], [
                'fotograf_bag_4.required' => '4.Fotoğraf alanı zorunludur.',
                'fotograf_bag_4.image' => '4.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_bag_4.max' => '4.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto9 = md5($this->fotograf_bag_4 . microtime()) . '.' . $this->fotograf_bag_4->extension();
            $this->fotograf_bag_4->storeAs('public/hikayemiz', $foto9);
        }
        if($this->fotograf_arcadia_1){
            $this->validate([
                'fotograf_arcadia_1' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_1.required' => '1.Fotoğraf alanı zorunludur.',
                'fotograf_arcadia_1.image' => '1.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_1.max' => '1.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto10 = md5($this->fotograf_arcadia_1 . microtime()) . '.' . $this->fotograf_arcadia_1->extension();
            $this->fotograf_arcadia_1->storeAs('public/hikayemiz', $foto10);
        }
        if($this->fotograf_arcadia_2){
            $this->validate([
                'fotograf_arcadia_2' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_2.required' => '2.Fotoğraf alanı zorunludur.',
                'fotograf_arcadia_2.image' => '2.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_2.max' => '2.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto11 = md5($this->fotograf_arcadia_2 . microtime()) . '.' . $this->fotograf_arcadia_2->extension();
            $this->fotograf_arcadia_2->storeAs('public/hikayemiz', $foto11);
        }
        if($this->fotograf_arcadia_3){
            $this->validate([
                'fotograf_arcadia_3' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_3.required' => '3.Fotoğraf alanı zorunludur.',
                'fotograf_arcadia_3.image' => '3.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_3.max' => '3.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto12 = md5($this->fotograf_arcadia_3 . microtime()) . '.' . $this->fotograf_arcadia_3->extension();
            $this->fotograf_arcadia_3->storeAs('public/hikayemiz', $foto12);
        }
        if($this->fotograf_arcadia_4){
            $this->validate([
                'fotograf_arcadia_4' => 'required|image|max:2048',
            ], [
                'fotograf_arcadia_4.required' => '4.Fotoğraf alanı zorunludur.',
                'fotograf_arcadia_4.image' => '4.Fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_arcadia_4.max' => '4.Fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $foto13 = md5($this->fotograf_arcadia_4 . microtime()) . '.' . $this->fotograf_arcadia_4->extension();
            $this->fotograf_arcadia_4->storeAs('public/hikayemiz', $foto13);
        }

        $hikayemiz_sayfa = new HikayemizModel();
        $hikayemiz_sayfa->fotograf_ana = $foto;
        $hikayemiz_sayfa->baslik_teruar = $this->baslik_teruar;
        $hikayemiz_sayfa->alt_baslik_teruar = $this->alt_baslik_teruar;
        $hikayemiz_sayfa->aciklama_teruar_alan1 =nl2br($this->aciklama_teruar_alan1);
        $hikayemiz_sayfa->fotograf_teruar_1 = $foto1;
        $hikayemiz_sayfa->baslik_teruar_alan2 = $this->baslik_teruar_alan2;
        $hikayemiz_sayfa->aciklama_teruar_alan2_1 = nl2br($this->aciklama_teruar_alan2_1);
        $hikayemiz_sayfa->aciklama_teruar_alan2_2 = nl2br($this->aciklama_teruar_alan2_2);
        $hikayemiz_sayfa->fotograf_teruar_2 = $foto2;
        $hikayemiz_sayfa->baslik_kurucu = $this->baslik_kurucu;
        $hikayemiz_sayfa->alt_baslik_kurucu = $this->alt_baslik_kurucu;
        $hikayemiz_sayfa->aciklama_kurucu_alan1 = nl2br($this->aciklama_kurucu_alan1);
        $hikayemiz_sayfa->fotograf_kurucu_1 = $foto3;
        $hikayemiz_sayfa->fotograf_kurucu_text_1 = $this->fotograf_kurucu_text_1;
        $hikayemiz_sayfa->fotograf_kurucu_2 = $foto4;
        $hikayemiz_sayfa->fotograf_kurucu_text_2 = $this->fotograf_kurucu_text_2;
        $hikayemiz_sayfa->fotograf_kurucu_3 = $foto5;
        $hikayemiz_sayfa->fotograf_kurucu_text_3 = $this->fotograf_kurucu_text_3;
        $hikayemiz_sayfa->baslik_bag = $this->baslik_bag;
        $hikayemiz_sayfa->alt_baslik_bag = $this->alt_baslik_bag;
        $hikayemiz_sayfa->aciklama_bag_alan1 = nl2br($this->aciklama_bag_alan1);
        $hikayemiz_sayfa->fotograf_bag_1 = $foto6;
        $hikayemiz_sayfa->baslik_bag_alan2_1 = $this->baslik_bag_alan2_1;
        $hikayemiz_sayfa->baslik_bag_alan2_2 = $this->baslik_bag_alan2_2;
        $hikayemiz_sayfa->aciklama_bag_alan2_1 = nl2br($this->aciklama_bag_alan2_1);
        $hikayemiz_sayfa->aciklama_bag_alan2_2 = nl2br($this->aciklama_bag_alan2_2);
        $hikayemiz_sayfa->fotograf_bag_2 = $foto7;
        $hikayemiz_sayfa->fotograf_bag_3 = $foto8;
        $hikayemiz_sayfa->fotograf_bag_4 = $foto9;
        $hikayemiz_sayfa->fotograf_bag_4_aciklama = nl2br($this->fotograf_bag_4_aciklama);
        $hikayemiz_sayfa->aciklama_bag_alan3_1 = nl2br($this->aciklama_bag_alan3_1);
        $hikayemiz_sayfa->aciklama_bag_alan3_2 =nl2br($this->aciklama_bag_alan3_2);
        $hikayemiz_sayfa->aciklama_bag_alan3_3 = nl2br($this->aciklama_bag_alan3_3);
        $hikayemiz_sayfa->baslik_bag_alan3_1 = $this->baslik_bag_alan3_1;
        $hikayemiz_sayfa->baslik_bag_alan3_2 = $this->baslik_bag_alan3_2;
        $hikayemiz_sayfa->baslik_arcadia = $this->baslik_arcadia;
        $hikayemiz_sayfa->alt_baslik_arcadia = $this->alt_baslik_arcadia;
        $hikayemiz_sayfa->aciklama_arcadia_alan1 = nl2br($this->aciklama_arcadia_alan1);
        $hikayemiz_sayfa->fotograf_arcadia_1 = $foto10;
        $hikayemiz_sayfa->baslik_arcadia_alan2_1 = $this->baslik_arcadia_alan2_1;
        $hikayemiz_sayfa->aciklama_arcadia_alan2_1 = nl2br($this->aciklama_arcadia_alan2_1);
        $hikayemiz_sayfa->fotograf_arcadia_2 = $foto11;
        $hikayemiz_sayfa->fotograf_arcadia_3 = $foto12;
        $hikayemiz_sayfa->baslik_arcadia_alan3_1 = $this->baslik_arcadia_alan3_1;
        $hikayemiz_sayfa->aciklama_arcadia_alan3_1 = nl2br($this->aciklama_arcadia_alan3_1);
        $hikayemiz_sayfa->baslik_arcadia_alan4_1 = $this->baslik_arcadia_alan4_1;
        $hikayemiz_sayfa->aciklama_arcadia_alan4_1 = nl2br($this->aciklama_arcadia_alan4_1);
        $hikayemiz_sayfa->fotograf_arcadia_4 = $foto13;
        $hikayemiz_sayfa->save();

        session()->flash('success', 'Hikayemiz sayfası başarıyla güncellendi.');
        return redirect()->to('/admin/dashboard');

    }

}
