<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Documento;

class Documentos extends Component
{
    public $documentos;
    public function render()
    {
        $this->documentos = Documento::all();
        return view('livewire.documentos');
    }
}
