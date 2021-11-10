<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logincomponent extends Component
{
    public $login, $password;

    protected $rules = [
        'login'     => 'required|string',
        'password'  => 'required|string',
    ];

    public function render()
    {
        return view('livewire.login.logincomponent');
    }

    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->intended('home');
        } else {
            session()->flash('message', 'As credenciais fornecidas não correspondem aos nossos registros.');
        }
    }
}
