<?php

namespace App\Http\Livewire\Anuncios;

use App\Models\Anuncio;
use Livewire\Component;
use Livewire\WithPagination;

class AnunciosIndex extends Component
{
    public $cargado = false;

    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    public function render()
    {
        $anuncios = Anuncio::idDescending()->get();

        return view('livewire.anuncios.anuncios-index', compact('anuncios'));
    }

}
