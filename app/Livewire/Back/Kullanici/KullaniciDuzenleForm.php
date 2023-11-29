<?php

namespace App\Livewire\Back\Kullanici;

use App\Models\Back\Admin;
use App\Models\Back\Kullanici\AdminRole;
use App\Models\Back\Kullanici\Role;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class KullaniciDuzenleForm extends Component
{
    use WithFileUploads;

    public $kullanici;

    public $rol;
    public $name;
    public $email;
    public $avatar;
    public $avatarTemp;
    public $phone;
    public $password;
    public $password_confirmation;

    public function mount($kullanici)
    {
        $this->kullanici = $kullanici;
        $this->rol = $kullanici->roles->first()->id;
        $this->name = $kullanici->name;
        $this->email = $kullanici->email;
        $this->phone = $kullanici->phone;
        $this->avatarTemp = $kullanici->avatar;
    }
    public function rendered()
    {
        $this->password = "";
        $this->password_confirmation = "";
    }

    public function render()
    {
        $roller = Role::all();
        return view('livewire.back.kullanici.kullanici-duzenle-form', compact('roller'));
    }

    public function kaydet()
    {

        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
        ], [
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'name.min' => 'Ad Soyad alanı en az 3 karakterden oluşmalıdır.',
            'email.required' => 'E-Posta alanı zorunludur.',
            'email.email' => 'E-Posta alanı geçerli bir e-posta adresi olmalıdır.',
            'email.unique' => 'E-Posta alanı daha önce kayıt edilmiş.',
        ]);

        if ($this->avatar) {
            $this->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'avatar.required' => 'Profil Resmi alanı zorunludur.',
                'avatar.image' => 'Profil Resmi alanı resim dosyası olmalıdır.',
                'avatar.mimes' => 'Profil Resmi alanı jpeg,png,jpg,gif,svg uzantılı resim dosyası olmalıdır.',
                'avatar.max' => 'Profil Resmi alanı maksimum 2048kb boyutunda olmalıdır.',
            ]);

            $avatar_name = md5($this->avatar . microtime()) . '.' . $this->avatar->extension();
            $this->avatar->storeAs('public/avatar', $avatar_name);
        } else {
            $avatar_name = null;
        }

        $kullanici = Admin::find($this->kullanici->id);
        $kullanici->name = $this->name;
        $kullanici->email = $this->email;
        $kullanici->avatar = $avatar_name;
        $kullanici->phone = $this->phone;
        $kullanici->save();

        /* mevcut rol silinip yenisi eklenecek */
        $admin_role = new AdminRole();
        $admin_role->where('admin_id', $kullanici->id)->delete();

        $admin_role->admin_id = $kullanici->id;
        $admin_role->role_id = $this->rol;
        $admin_role->save();

        /* Şifre gelmişse güncelleme yapıyoruz */

        if ($this->password && $this->password_confirmation) {
            $this->validate([
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
            ], [
                'password.required' => 'Şifre alanı zorunludur.',
                'password.min' => 'Şifre alanı en az 6 karakterden oluşmalıdır.',
                'password.confirmed' => 'Şifre alanı ile Şifre Tekrar alanı aynı olmalıdır.',
                'password_confirmation.required' => 'Şifre Tekrar alanı zorunludur.',
                'password_confirmation.min' => 'Şifre Tekrar alanı en az 6 karakterden oluşmalıdır.',
            ]);
            $kullanici->password = Hash::make($this->password);
            $kullanici->save();
        }

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Kullanıcı başarıyla eklendi.']);
        return $this->redirect(route('admin.kullanicilar'));
    }

    public function sifreOlustur()
    {
        $this->password = rand(100000, 999999);
        $this->password_confirmation = $this->password;
    }
}
