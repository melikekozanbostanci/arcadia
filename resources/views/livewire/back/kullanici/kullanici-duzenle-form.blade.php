<div>
    <form wire:submit.prevent="kaydet">
        <div class="row">
            <div class="col-12 col-lg-3">
                <label for="role">Rol</label>
                <select wire:model="rol" class="form-select @error('rol') is-invalid @enderror" id="role">
                    <option value="">Seçiniz</option>
                    @foreach($roller as $rol)
                        <option value="{{$rol->id}}">{{$rol->name}}</option>
                    @endforeach
                </select>
                <div wire:ignore>
                    <label for="avatar">Avatar</label>
                    @if($avatarTemp)
                        <input type="file" wire:model="avatar" class="dropify @error('avatar') is-invalid @enderror" id="avatar" placeholder="Avatar" data-default-file="{{asset("storage/avatar/$avatarTemp")}}">
                    @else
                        <input type="file" wire:model="avatar" class="dropify @error('avatar') is-invalid @enderror" id="avatar" placeholder="Avatar">
                    @endif
                </div>
                @error('avatar') <p><span class="text-danger">{{$message}}</span></p> @enderror
            </div>
            <div class="col-12 col-lg-9">
                <label for="name">Adı ve soyadı</label>
                <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Adı ve soyadı">
                @error('name') <p><span class="text-danger">{{$message}}</span></p> @enderror
                <label for="email">E-posta</label>
                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-posta">
                @error('email') <p><span class="text-danger">{{$message}}</span></p> @enderror
                <label for="phone">Telefon</label>
                <input type="text" wire:model="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Telefon">
                @error('phone') <p><span class="text-danger">{{$message}}</span></p> @enderror
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <label for="password">Şifre</label>
                        <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Şifre">
                        @error('password') <p><span class="text-danger">{{$message}}</span></p> @enderror
                    </div>
                    <div class="col-12 col-lg-4">
                        <label for="password_confirmation">Şifre Tekrar</label>
                        <input type="password" wire:model="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Şifre tekrar">
                        @error('password_confirmation') <p><span class="text-danger">{{$message}}</span></p> @enderror
                    </div>
                    <div class="col-12 col-lg-2">
                        <button type="button" class="btn btn-outline-secondary mt-4" id="showPasswordButton" onclick="togglePasswordVisibility()">Göster</button>
                    </div>
                    <div class="col-12 col-lg-2">
                        <button type="button" class="btn btn-primary mt-4 w-100" wire:click="sifreOlustur">Şifre Oluştur</button>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Kaydet</button>
    </form>
</div>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var passwordConfirmationInput = document.getElementById('password_confirmation');
        var showPasswordButton = document.getElementById('showPasswordButton');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordConfirmationInput.type = 'text';
            showPasswordButton.textContent = 'Gizle';
        } else {
            passwordInput.type = 'password';
            passwordConfirmationInput.type = 'password';
            showPasswordButton.textContent = 'Göster';
        }
    }
</script>

