<div class="card col-lg-6 mx-1 my-1 py-1">
    <div
        class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
        <span>
            Ubah Password
        </span>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="updatePassword">
            <div class="input-group mb-2">
                <label class="input-group-text col-4" for="passwordLama">Password Lama</label>
                <input wire:model="oldPassword" type="{{ $showPassword }}" class="form-control col-7" id="passwordLama">
                @if ($eyePassword)
                <div wire:click="showPasswords(0,'password')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                </div>
                @else
                <div wire:click="showPasswords(1,'text')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                @endif
            </div>
            @error('oldPassword')
            <div class="text-danger px-2 my-2 small">
                {{ $message }}
            </div>
            @enderror
            <div class="input-group mb-2">
                <label class="input-group-text col-4" for="passwordBaru">Password Baru</label>
                <input wire:model="password" type="{{ $showNewPassword }}" class="form-control col-7" id="passwordBaru">
                @if ($eyeNewPassword)
                <div wire:click="showNewPasswords(0,'password')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                </div>
                @else
                <div wire:click="showNewPasswords(1,'text')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                @endif
            </div>
            <div class="input-group mb-2">
                <label class="input-group-text col-4" for="konfirmasiPassword">Konfirmasi Password</label>
                <input wire:model="password_confirmation" type="{{ $showConfirmPassword }}" class="form-control col-7" id="konfirmasiPassword">
                @if ($eyeConfirmPassword)
                <div wire:click="showConfirmPasswords(0,'password')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                </div>
                @else
                <div wire:click="showConfirmPasswords(1,'text')" class="input-group-text" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                @endif
            </div>
            @error('password')
            <div class="text-danger px-2 my-2 small">
                {{ $message }}
            </div>
            @enderror
            <div class="d-flex justify-content-end">
                <button class="btn btn-success" type="submit">Ganti Password</button>
            </div>
        </form>
    </div>
</div>
