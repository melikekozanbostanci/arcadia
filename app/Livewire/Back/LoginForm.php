<?php

namespace App\Livewire\Back;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.back.login-form');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email alanı boş bırakılamaz.',
            'email.email' => 'Email adresi geçerli değil.',
            'password.required' => 'Şifre alanı boş bırakılamaz.',
            'password.min' => 'Şifre en az 6 karakter olmalıdır.'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        if (Auth::guard('admin')->attempt($credentials)) {
            // Oturum açma başarılı, kullanıcıyı yönlendirin veya istediğiniz işlemi yapın.
            $this->dispatch('toastr', ['type' => 'success', 'message' => 'Başarıyla giriş yapıldı.', 'title' => 'Başarılı']);

            return redirect()->route('admin.dashboard'); // Örnek olarak admin paneline yönlendirme
        } else {
            // Oturum açma başarısız, hata mesajını gösterin.
            $this->dispatch('toastr', ['type' => 'error', 'message' => 'Email adresi veya şifre hatalı.', 'title' => 'Hata']);
        }
    }
}
