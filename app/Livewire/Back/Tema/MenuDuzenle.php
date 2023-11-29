<?php

namespace App\Livewire\Back\Tema;

use App\Models\Back\Blog\Blog;
use App\Models\Back\Sayfa\Sayfa;
use App\Models\Back\Tema\Menu;
use App\Models\Back\Tema\MenuElemanlari;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\On;

class MenuDuzenle extends Component
{
    public $uuid;
    public $menu;
    public $baslik;
    public $konum;
    public $menu_adi;
    public $menu_linki;

    public $icon;
    public $menu_gecici = [];

    #[On('refresh')]
    public function mount()
    {
        $this->menu_gecici = [];
        $this->menu = Menu::where('uuid', $this->uuid)->first();
        $this->baslik = $this->menu->baslik;
        $this->konum = $this->menu->konum;
        $menu_elemanlari = MenuElemanlari::where('menu_id', $this->menu->id)->orderBy('sira', 'asc')->get();
        foreach ($menu_elemanlari as $row) {
            $this->menu_gecici[] = [
                'id' => $row['id'],
                'slug' => $row['link'],
                'baslik' => $row['baslik'],
                'icon' => $row['icon'],
                'sira' => $row['sira'],
            ];
        }
    }

    public function render()
    {
        $sayfalar = Sayfa::all();
        $bloglar = Blog::all();
        return view('livewire.back.tema.menu-duzenle', compact('sayfalar', 'bloglar'));
    }

    public function menuBaslikGuncelle()
    {
        $menu = Menu::where('uuid', $this->uuid)->first();
        $menu->baslik = $this->baslik;
        $menu->konum = $this->konum;
        $menu->save();

        $this->dispatch('alert', ['type' => 'success', 'message' => 'Menü başlığı başarıyla güncellendi.']);

    }

    public function menuyeEkle($data)
    {
        $data = json_decode($data);
        /* aynı değer varsa diziye eklemeyeceğiz */
        foreach ($this->menu_gecici as $item) {
            if ($item['slug'] == $data->slug) {
                return;
            }
        }
        $this->menu_gecici[] = [
            'id' => $data->id,
            'slug' => $data->slug,
            'baslik' => $data->baslik,
        ];
    }

    public function ozelMenuyeEkle()
    {
        /* aynı değer varsa diziye eklemeyeceğiz */
        foreach ($this->menu_gecici as $item) {
            if ($item['slug'] == $this->menu_linki) {
                return;
            }
        }
        $this->menu_gecici[] = [
            'id' => null,
            'slug' => $this->menu_linki,
            'baslik' => $this->menu_adi,
        ];
        $this->reset('menu_adi', 'menu_linki');
    }

    public function menuIcerikSil($index)
    {
        unset($this->menu_gecici[$index]);
        $this->menu_gecici = array_values($this->menu_gecici);
    }

    public function menuyuKaydet()
    {
        /* önce mevcut menü elemanlarını silelim */
        MenuElemanlari::where('menu_id', $this->menu->id)->delete();
//        dd($this->menu_gecici);

        foreach ($this->menu_gecici as $item) {
            $menuElemanlari = new MenuElemanlari();
            $menuElemanlari->uuid = (string)Str::uuid();
            $menuElemanlari->menu_id = $this->menu->id;
            $menuElemanlari->baslik = $item['baslik'];
            $menuElemanlari->link = $item['slug'];
            $menuElemanlari->dil = $this->menu->dil;
            $menuElemanlari->sira = @$item["sira"] ? $item["sira"] : 0;
            $menuElemanlari->icon = @$item['icon'] ? $item['icon'] : null;

            $menuElemanlari->save();
        }

        $this->dispatch("refresh");
        $this->dispatch('alert', ['type' => 'success', 'message' => 'Menü başarıyla güncellendi.']);
    }


}
