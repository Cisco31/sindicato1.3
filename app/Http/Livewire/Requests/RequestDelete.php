<?php

namespace App\Http\Livewire\Requests;

use App\Models\Request;
use Livewire\Component;

class RequestDelete extends Component
{
    public Request $request;

    public function render()
    {
        return view('livewire.requests.request-delete');
    }

    public function delete(){

        if ($this->request->id_usuario != auth()->user()->id) {
            return redirect(route('requests.create'));
        }
        $this->request->delete();
        return redirect(route('requests.create'));
    }
}
