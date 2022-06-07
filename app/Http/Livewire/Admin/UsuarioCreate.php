<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Usuario;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Http\Livewire\Admin\ReglasUsuario;


class UsuarioCreate extends Component
{
    public function mount()
    {
        $this->usuario = new Usuario();
    }

    use WithFileUploads;
    public Usuario $usuario;
    public $password;
    public $confirm_password;
    public $estado;

    public function render()
    {
        return view('livewire.admin.usuario-create');
    }


    public function crearUser()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->usuario->password);
        $this->usuario->estado = 1;
        $this->usuario->save();
        $this->emit('alert-user-create', 'Has registrado a un nuevo usuario correctamente');
        return redirect(route('admin.usuarios'));
    }


    protected function rules()
    {
        return ReglasUsuario::reglas();
    }
}
