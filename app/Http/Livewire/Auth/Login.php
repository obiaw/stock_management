<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.auth.login')
                ->extends('layouts.auth')
                ->section('content');
    }

    public function login(){

        $validate = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if(Auth::attempt(['email'=> $this->email, 'password' => $this->password])){
            session()->flash('message', 'Login Successful');
            return redirect()->to('/');
        }
        else{
            session()->flash('error', 'Invalid email or password, please try again');
        }
    }
}
