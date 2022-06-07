<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\Anuncio;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class AnuncioIndex extends Component
{
    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $anuncios = ($this->cargado == true) ? Anuncio::where('titulo', 'LIKE', '%' . $this->search . '%')
            // ->orWhere('titulo', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.admin.anuncio-index', compact('anuncios'));
    }

    public function generarPDF()
    {
        $anuncios = Anuncio::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('livewire.admin.pdfAnuncios', ['anuncios' => $anuncios]);
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
}
