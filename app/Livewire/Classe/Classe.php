<?php

namespace App\Livewire\Classe;

use App\Models\Classe as ModelsClasse;
use Livewire\Component;

class Classe extends Component
{

    public $data;
    public $classe;

    public $name;
    public $description;

    public function save(){
        $this->classe->name = $this->name;
        $this->classe->description = $this->description;
        $this->classe->save();
    }

    public function loadClasse(int $id){
        $this->classe = ModelsClasse::where('id_classe' , $id)->first();
        $this->name =  $this->classe->name;
        $this->description =  $this->classe->description;
    }

    public function render()
    {
        $classes = ModelsClasse::with(['alunos' => function ($query) {
            $query->latest(); // Ordena os alunos pela coluna created_at em ordem decrescente
        }])->get();

        return view('livewire.classe.classe' , compact('classes'));
    }
}
