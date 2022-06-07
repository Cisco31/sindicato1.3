<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Anuncio;
use App\Models\Usuario;

class AdminView extends Component
{
    public $cargado = false;

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        $anuncios = Anuncio::all();
        return view('livewire.admin.admin-view', compact('anuncios'));
    }
}
