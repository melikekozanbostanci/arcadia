<?php

namespace App\Livewire\Back;

use App\Mail\SifreGonder;
use App\Models\Back\UyelikBasvurusu;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UyelikBasvuruOnay extends Component
{
    use WithFileUploads;

    public $uye;
    public $sifre;
    public $id;
    public $onay;



    public function render()
    {
        $uye = UyelikBasvurusu::where('id', $this->uye->id)->firstOrFail();
        return view('livewire.back.uyelik-basvuru-onay', compact('uye'));
    }

    public function mount($id)
    {
        $this->uye = UyelikBasvurusu::where('id', $id)->firstOrFail();
        $this->id = $this->uye->id;
        $this->sifre = $this->uye->sifre;
        $this->onay = $this->uye->onay;
    }

    public function kaydet()
    {
        if ($this->uye->onay == 0) {
            // Rastgele şifre oluştur
            $randomSifre = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

            // Şifreyi kaydet
            $uye = UyelikBasvurusu::find($this->uye->id);
            $uye->sifre = $randomSifre;
            $uye->onay = 1;
            $uye->save();

            // Ayrı bir değişkene atayarak bu değişiklikleri aktar
            $uyeForMail = UyelikBasvurusu::find($this->uye->id);

            // Şifreyi mail ile gönder
            Mail::send(new SifreGonder($uyeForMail));

            // Başarılı bir işlem olduğunu belirten bir mesaj gönder
            session()->flash('success', 'Üyelik başvurusu onaylandı ve şifre oluşturuldu.');
        } else {
            // Onay alınmadığı durumu için bir hata mesajı gönder
            session()->flash('error', 'Üyelik başvurusu onaylanmadı.');
        }

        // İlgili sayfaya yönlendirme
        return redirect()->route('admin.uyelik-basvurulari');
    }
}
