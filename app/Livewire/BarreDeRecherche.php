<?php

namespace App\Livewire;

use App\Models\Livewire;
use Livewire\Component;

class BarreDeRecherche extends Component
{
    public $recherche = '';
    public function render()
    {
        if (!empty($this->recherche)) {
            $livewire = Livewire::where('motsCle', 'like', '%' . $this->recherche . '%')->paginate(10);
        } else {
            $livewire = Livewire::paginate(10);
        }
        return view('livewire.barre-de-recherche', [
            'livewire' => $livewire
        ]);
    }
}
