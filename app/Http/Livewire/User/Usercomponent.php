<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Usercomponent extends Component
{
    public $user, $name, $login, $password, $password_confirm, $type;

    protected $rules = [
        'name' => 'required|min:4',
        'login' => 'required|string',
        'password' => 'required|string',
        'password_confirm' => 'required|same:password',
        'type' => 'required|string',
    ];

    public function render()
    {
        if (Auth::user()->type === 'Admin') {
            return view('livewire.user.usercomponent', [
                'users' => User::all()
            ]);
        }
    }

    public function store()
    {
        User::create($this->validate());
        session()->flash('message', 'usuário cadastrado com sucesso.');
        $this->default();
    }

    public function edit(int $id)
    {
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->login = $this->user->login;
        $this->type = $this->user->type;
    }

    public function update()
    {
        $this->user->update([
            'name' => $this->name,
            'login' => $this->login,
            'type' => $this->type,
        ]);

        if ($this->password) {
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }

        $this->user->save();

        session()->flash('message', 'usuário atualizado com sucesso.');

        $this->default();
    }

    public function default()
    {
        $this->user_id = '';
        $this->name = '';
        $this->login = '';
        $this->password = '';
        $this->password_confirm = '';
        $this->type = '';
        $this->user = '';
    }
}
