<?php

namespace App\Livewire\Back\Blog;

use App\Models\Back\Blog\Blog;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogDuzenlemeForm extends Component
{
    use WithFileUploads;

    public $baslik;
    public $slug;
    public $icerik;
    public $zaman;
    public $mekan;
    public $meta_baslik;
    public $meta_aciklama;
    public $meta_anahtar_kelimeler;
    public $temp_fotograf;
    public $fotograf;
    public $sira;
    public $aktif;

    public $blog;

    public function mount($uuid)
    {
        $this->blog = Blog::where('uuid', $uuid)->firstOrFail();
        $this->baslik = $this->blog->baslik;
        $this->slug = $this->blog->slug;
        $this->icerik = $this->blog->icerik;
        $this->meta_baslik = $this->blog->meta_baslik;
        $this->meta_aciklama = $this->blog->meta_aciklama;
        $this->meta_anahtar_kelimeler = $this->blog->meta_anahtar_kelimeler;
        $this->temp_fotograf = $this->blog->fotograf;
        $this->sira = $this->blog->sira;
        $this->aktif = $this->blog->aktif;
    }

    public function render()
    {
        $blog = Blog::where('id')->get();
        return view('livewire.back.blog.blog-duzenleme-form', compact('blog'));
    }

    public function kaydet()
    {
        $this->validate([
            'baslik' => 'required',
            'slug' => 'required',
            'icerik' => 'required',
            'zaman' => 'required',
            'mekan' => 'required',
            'meta_baslik' => 'max:50',
            'meta_aciklama' => 'max:160',
            'meta_anahtar_kelimeler' => 'max:255',
            'sira' => 'integer',
            'aktif' => 'required|in:1,0',
        ], [
            'baslik.required' => 'Başlık alanı zorunludur.',
            'slug.required' => 'Slug alanı zorunludur.',
            'icerik.required' => 'İçerik alanı zorunludur.',
            'zaman.required' => 'Zaman alanı zorunludur.',
            'mekan.required' => 'Mekan alanı zorunludur.',
            'meta_baslik.max' => 'Meta başlık alanı en fazla 50 karakter olmalıdır.',
            'meta_aciklama.max' => 'Meta açıklama alanı en fazla 160 karakter olmalıdır.',
            'meta_anahtar_kelimeler.max' => 'Meta anahtar kelimeler alanı en fazla 255 karakter olmalıdır.',
            'sira.integer' => 'Sıra alanı sayı olmalıdır.',
            'aktif.required' => 'Aktif alanı zorunludur.',
            'aktif.in' => 'Aktif alanı geçerli bir değer olmalıdır.',
        ]);

        if ($this->fotograf) {
            $this->validate([
                'fotograf' => 'image',
            ], [
                'fotograf.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
            ]);

            $fotograf_name = md5($this->fotograf->getClientOriginalName() . microtime()) . '.' . $this->fotograf->extension();
            $this->fotograf->storeAs('public/bloglar', $fotograf_name);
        } else {
            $fotograf_name = $this->blog->fotograf;
        }

        $blog = Blog::where('uuid', $this->blog->uuid)->firstOrFail();
        $blog->baslik = $this->baslik;
        $blog->slug = $this->slug;
        $blog->icerik = $this->icerik;
        $blog->zaman = $this->zaman;
        $blog->mekan = $this->mekan;
        $blog->meta_baslik = $this->meta_baslik;
        $blog->meta_aciklama = $this->meta_aciklama;
        $blog->meta_anahtar_kelimeler = $this->meta_anahtar_kelimeler;
        $blog->fotograf = $fotograf_name;
        $blog->sira = $this->sira;
        $blog->aktif = $this->aktif;
        $blog->updated_by = auth()->guard('admin')->user()->id;
        $blog->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Blog başarıyla eklendi.']);
        return $this->redirect(route("admin.bloglar"), navigate: true);
    }

    public function slugUret()
    {
        $this->slug = Str::slug($this->baslik);
    }


}
