<?php

namespace App\Livewire\Back\HasatRaporu;

use App\Models\Back\HasatRapor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class HasatRaporuDuzenle extends Component
{
    use WithFileUploads;

    public $hasatRapor;

    public $hasat_yil;
    public $hasat_raporu_pdf;
    public $hasat_raporu_pdf_temp;

    public function render()
    {
        $hasatRapor = HasatRapor::where('id', $this->hasatRapor->id)->firstOrFail();
        return view('livewire.back.hasat-raporlari.hasat-raporu-düzenle', compact('hasatRapor'));
    }

    public function mount($id)
    {
        $this->hasatRapor = HasatRapor::where('id', $id)->firstOrFail();
        $this->hasat_yil = $this->hasatRapor->hasat_yil;
        $this->hasat_raporu_pdf = $this->hasatRapor->hasat_raporu_pdf;
        $this->hasat_raporu_pdf_temp = $this->hasatRapor->hasat_raporu_pdf;
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

        if ($this->hasat_raporu_pdf) {
            $this->validate([
                'hasat_raporu_pdf' => 'file|mimes:pdf|max:2048',
            ], [
                'hasat_raporu_pdf.file' => 'Hasat raporu PDF dosyası olmalıdır.',
                'hasat_raporu_pdf.mimes' => 'PDF dosyası olmalıdır.',
                'hasat_raporu_pdf.max' => 'PDF dosyası en fazla 2MB olmalıdır.',
            ]);

            $hasat_raporu_pdf_temp = md5($this->hasat_raporu_pdf . microtime()) . '.' . $this->hasat_raporu_pdf->extension();

            // Eski dosyayı sil ve yeni dosyayı geçici olarak sakla
            Storage::putFileAs('public/hasat_raporu_pdf', $this->hasat_raporu_pdf, $hasat_raporu_pdf_temp);

            $hasatRapor = HasatRapor::find($this->hasatRapor->id);
            $hasatRapor->hasat_raporu_pdf = $hasat_raporu_pdf_temp;
            $hasatRapor->hasat_yil = $this->hasat_yil;
            $hasatRapor->save();

            // Geçici dosyayı sıfırla
            $this->hasat_raporu_pdf_temp = null;

            $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Hasat raporu başarıyla düzenlendi.']);
            return $this->redirect(route("admin.hasat-raporlari"), navigate: true);

    }}


}
