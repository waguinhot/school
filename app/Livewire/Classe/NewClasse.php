<?php

namespace App\Livewire\Classe;

use Livewire\Component;
use App\Models\Classe;

class NewClasse extends Component
{
    public $name = '';
    public $description = '';

    public function save(){
        $validated = $this->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        Classe::create($validated);


    }
    public function render()
    {
        return view('livewire.classe.new-classe');
    }
}
