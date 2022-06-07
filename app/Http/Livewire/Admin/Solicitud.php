<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Solicitud extends Component
{
    // public function mount()
    // {
    //     $this->solicitud = new Solicitud();
    // }

    public $cargado = false;
    public $search;

    public function render()
    {
        // $solicitudes = ($this->cargado == true) ? Solicitud::where('solicitud', 'LIKE', '%' . $this->search . '%')
        //     ->orwhere('puesto', 'LIKE', '%' . $this->search . '%')
        //     ->paginate(10) : [];
        return view('livewire.admin.solicitud');
    }

    // public function cargando()
    // {
    //     $this->cargado = true;
    // }

    // public function updatingSearch()
    // {
    //     $this->resetPage();
    // }
}
