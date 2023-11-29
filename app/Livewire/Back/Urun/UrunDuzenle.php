<?php

namespace App\Livewire\Back\Urun;

use App\Models\Back\Urun\UrunKategorileri;
use App\Models\Back\Urun\Urunler as UrunlerModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UrunDuzenle extends Component
{
    use WithFileUploads;

    public $vine;
    public $urun_adi;
    public $urunler_kategori_id;
    public $baslik;
    public $aciklama;
    public $fotograf1;
    public $fotograf2;
    public $fotograf3;
    public $fotograf4;
    public $fotograf1_temp;
    public $fotograf2_temp;
    public $fotograf3_temp;
    public $fotograf4_temp;


    public function render()
    {
        $urunKategorileri = UrunKategorileri::all();
        $vine = UrunlerModel::where('id', $this->vine->id)->firstOrFail();

        return view('livewire.back.urun.urun-duzenle-form', compact('urunKategorileri', 'vine'));
    }

    public function mount($id)
    {
        $this->vine = UrunlerModel::where('id', $id)->firstOrFail();

        $this->urun_adi = $this->vine->urun_adi;
        $this->urunler_kategori_id = $this->vine->urunler_kategori_id;
        $this->baslik = $this->vine->baslik;
        $this->aciklama = $this->vine->aciklama;
        if($this->vine->fotograf1){
            $this->fotograf1_temp = $this->vine->fotograf1;
        }
        if($this->vine->fotograf2){
            $this->fotograf2_temp = $this->vine->fotograf2;
        }
        if($this->vine->fotograf3){
            $this->fotograf3_temp = $this->vine->fotograf3;
        }
        if($this->vine->fotograf4){
            $this->fotograf4_temp = $this->vine->fotograf4;
        }
    }

    public function kaydet()
    {
        $this->validate([
            'urun_adi' => 'required|min:2',
            'urunler_kategori_id' => 'required',
            'baslik' => 'required|min:2',
            'aciklama' => 'required|min:2',
            'fotograf1' => 'nullable|image|max:2048',
            'fotograf2' => 'nullable|image|max:2048',
            'fotograf3' => 'nullable|image|max:2048',
            'fotograf4' => 'nullable|image|max:2048',
        ]);

        $vine = UrunlerModel::where('id', $this->vine->id)->firstOrFail();
        $vine->urun_adi = $this->urun_adi;
        $vine->urunler_kategori_id = $this->urunler_kategori_id;
        $vine->baslik = $this->baslik;
        $vine->aciklama = $this->aciklama;

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

        session()->flash('success', 'Ürün başarıyla güncellendi.');

        return $this->redirect(route("admin.urunler"), navigate: true);
    }
}
