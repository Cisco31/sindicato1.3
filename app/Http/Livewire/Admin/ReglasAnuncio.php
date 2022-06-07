<?php

namespace App\Http\Livewire\Admin;


class ReglasAnuncio
{
    public static function reglas()
    {
        return [
            'anuncio.titulo' => 'required|string|max:30',
            'anuncio.contenido' => 'required|string|max:200',
            'url_img' => 'nullable|image'
        ];
    }
}
