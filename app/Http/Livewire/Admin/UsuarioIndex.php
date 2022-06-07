<?php

namespace App\Http\Livewire\Admin;

use App\Models\Usuario;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class UsuarioIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;
    public $estado;

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        $usuarios = ($this->cargado == true) ? Usuario::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('departamento', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.admin.usuario-index', compact('usuarios'));
    }

    public function generarPDF()
    {
        $usuarios = Usuario::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('livewire.admin.pdfUsers', ['usuarios' => $usuarios]);
        return $pdf->stream();
    }

    public function cargando()
    {
        $this->cargado = true;
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function rules()
    {
        return ReglaEstado::reglas();
    }
}
