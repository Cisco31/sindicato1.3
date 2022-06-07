<?php

namespace App\Http\Livewire\Admin;

use App\Models\Anuncio;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AnuncioCreate extends Component
{

    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    use WithFileUploads;
    public Anuncio $anuncio;
    public $url_img;


    public function render()
    {
        return view('livewire.admin.anuncio-create');
    }

    public function crearAnuncio()
    {
        $this->validate();
        if ($this->url_img != null) {
            $this->anuncio->url_img = Storage::disk('public')->put('images/anuncios', $this->url_img);
        }
        $this->anuncio->save();
        $this->emit('alert-anuncio-create', 'Se ha publicado correctamente el anuncio');
        return redirect(route("admin.view"));
    }

    public function rules()
    {
        return ReglasAnuncio::reglas();
    }
}
