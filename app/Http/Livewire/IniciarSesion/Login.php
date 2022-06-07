<?php

namespace App\Http\Livewire\IniciarSesion;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.iniciar-sesion.login');
    }

    public function login()
    {
        $datos = $this->validate();

        if (Auth::attempt($datos)) {
            if (auth()->user($datos)->is_admin == 1) {
                return redirect(route('admin.view'));
            } else {
                return redirect(route('anuncios.index'));
            }
        } else {
            $this->emit('alert-login', 'Verifica el correo o la contraseña');
        }
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8|string'
        ];
    }
}
