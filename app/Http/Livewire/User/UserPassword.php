<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserPassword extends Component
{
    public $oldPassword;
    public $password;
    public $password_confirmation;
    public $showPassword;
    public $showNewPassword;
    public $showConfirmPassword;
    public $eyePassword = false;
    public $eyeNewPassword = false;
    public $eyeConfirmPassword = false;
    protected $rules = [
        'oldPassword' => 'required|current_password:web',
        'password' => 'required|min:8|string|confirmed',
    ];
    public function mount(){
        $this->showPassword = 'password';
        $this->showNewPassword = 'password';
        $this->showConfirmPassword = 'password';
    }
    public function showPasswords($condition, $status){
        $this->eyePassword = $condition;
        $this->showPassword = $status;
    }
    public function showNewPasswords($condition, $status){
        $this->eyeNewPassword = $condition;
        $this->showNewPassword = $status;
    }
    public function showConfirmPasswords($condition, $status){
        $this->eyeConfirmPassword = $condition;
        $this->showConfirmPassword = $status;
    }
    public function updatePassword(){
        $this->validate();
        $user = User::find(auth()->user()->id);
        $user->update([
            'password' => Hash::make($this->password),
        ]);
        $this->dispatchBrowserEvent('notyf:success', [
            'type' => 'warning',
            'message' => 'Berhasil Mengganti Password'
        ]);
        $this->password = '';
        $this->oldPassword = '';
        $this->password_confirmation = '';
    }
    public function render()
    {
        return view('livewire.user.user-password');
    }
}
