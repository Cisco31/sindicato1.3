<?php

namespace App\Http\Livewire\Admin;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{


    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $confirm_password;
    public $password;

    public function render()
    {

        return view('livewire.admin.usuarios-edit');
    }


    public function editar()
    {
        $this->validate();
        if ($this->password) {
            $this->usuario->password = Hash::make($this->password);
        }
        $this->usuario->save();
        $this->emit('alert-user-edit', 'Se ha modificado correctamente al usuario');
    }

    protected function rules()
    {
        return ReglasUsuario::reglas($this->usuario->id);
    }
}
