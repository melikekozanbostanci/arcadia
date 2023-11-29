<div>
    <form wire:submit.prevent="login">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" wire:model="email">
            @error('email') <p><span class="text-danger">{{$message}}</span></p> @enderror
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Şifre</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" wire:model="password">
            @error('password') <p><span class="text-danger">{{$message}}</span></p> @enderror
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label text-dark" for="flexCheckChecked">
                    Beni Hatırla
                </label>
            </div>
            <a class="text-primary fw-medium" href="./authentication-forgot-password.html">Şifremi Unuttum</a>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Giriş Yap</button>
    </form>
</div>
