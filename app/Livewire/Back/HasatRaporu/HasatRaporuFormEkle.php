<?php

namespace App\Livewire\Back\HasatRaporu;

use App\Models\Back\HasatRapor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class HasatRaporuFormEkle extends Component
{
    use WithFileUploads;

    public $hasatRapor;

    public $hasat_yil;
    public $hasat_raporu_pdf;


    public function render()
    {
        return view('livewire.back.hasat-raporlari.hasat-raporu-ekle');
    }


    public function kaydet()
    {
        $this->validate([
            'hasat_yil' => 'required|min:4|numeric',
        ], [
            'hasat_yil.required' => 'Hasat yıl alanı zorunludur.',
            'hasat_yil.min' => 'Hasat yıl alanı minimum 4 karakterden oluşmalıdır.',
            'hasat_yil.numeric' => 'Hasat yıl alanı rakamlardan oluşmalıdır.',
        ]);

        $this->validate([
            'hasat_raporu_pdf' => 'required|file|mimes:pdf|max:2048',
        ], [
            'hasat_raporu_pdf.required' => 'Hasat raporu PDF dosyası zorunludur.',
            'hasat_raporu_pdf.file' => 'Hasat raporu PDF dosyası olmalıdır.',
            'hasat_raporu_pdf.mimes' => 'PDF dosyası olmalıdır.',
            'hasat_raporu_pdf.max' => 'PDF dosyası en fazla 2MB olmalıdır.',
        ]);

        $hasatRaporu = new HasatRapor();
        $hasatRaporu->hasat_yil = $this->hasat_yil;

        $hasat_raporu_pdf_name = md5($this->hasat_raporu_pdf . microtime()) . '.' . $this->hasat_raporu_pdf->extension();

        Storage::putFileAs('public/hasat_raporu_pdf', $this->hasat_raporu_pdf, $hasat_raporu_pdf_name);

        $hasatRaporu->hasat_raporu_pdf = $hasat_raporu_pdf_name;

        $hasatRaporu->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Hasat raporu başarıyla kaydedildi.']);
        return $this->redirect(route("admin.hasat-raporlari"), navigate: true);
    }

}
