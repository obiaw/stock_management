<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password;
    public function render()
    {
        return view('livewire.auth.register')
                ->extends('layouts.auth')
                ->section('content');
    }
    public function resetInputs(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function signup(){
        $validate = $this->validate([
            'name' => 'required|min:8',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $this->password = Hash::make($this->password);
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];
        User::create($data);
        $this->resetInputs();
        return redirect()->to('/login');
    }

}
