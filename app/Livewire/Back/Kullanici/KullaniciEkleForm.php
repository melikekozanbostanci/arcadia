<?php

namespace App\Livewire\Back\Kullanici;

use App\Models\Back\Admin;
use App\Models\Back\Kullanici\Role;
use App\Models\Back\Kullanici\AdminRole;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class KullaniciEkleForm extends Component
{
    use WithFileUploads;

    public $rol;
    public $name;
    public $email;
    public $avatar;
    public $phone;
    public $password;
    public $password_confirmation;
    public function render()
    {
        $roller = Role::all();
        return view('livewire.back.kullanici.kullanici-ekle-form', compact('roller'));
    }

    public function kaydet()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ], [
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'name.min' => 'Ad Soyad alanı en az 3 karakterden oluşmalıdır.',
            'email.required' => 'E-Posta alanı zorunludur.',
            'email.email' => 'E-Posta alanı geçerli bir e-posta adresi olmalıdır.',
            'email.unique' => 'E-Posta alanı daha önce kayıt edilmiş.',
            'password.required' => 'Şifre alanı zorunludur.',
            'password.min' => 'Şifre alanı en az 6 karakterden oluşmalıdır.',
            'password.confirmed' => 'Şifre alanı ile Şifre Tekrar alanı aynı olmalıdır.',
            'password_confirmation.required' => 'Şifre Tekrar alanı zorunludur.',
            'password_confirmation.min' => 'Şifre Tekrar alanı en az 6 karakterden oluşmalıdır.',
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

        $kullanici = new Admin();
        $kullanici->name = $this->name;
        $kullanici->email = $this->email;
        $kullanici->avatar = $avatar_name;
        $kullanici->phone = $this->phone;
        $kullanici->password = Hash::make($this->password);
        $kullanici->save();

        $admin_role = new AdminRole();
        $admin_role->admin_id = $kullanici->id;
        $admin_role->role_id = $this->rol;
        $admin_role->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Kullanıcı başarıyla eklendi.']);
        return $this->redirect(route('admin.kullanicilar'));
    }

    public function sifreOlustur()
    {
        $this->password = rand(100000, 999999);
        $this->password_confirmation = $this->password;
    }

}
