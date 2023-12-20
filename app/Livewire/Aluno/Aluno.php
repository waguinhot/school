<?php

namespace App\Livewire\Aluno;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aluno as ModelAluno;

class Aluno extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $alunos = ModelAluno::where('name' , 'LIKE' , '%'.$this->search.'%')->paginate(7);

        return view('livewire.aluno.aluno' , ['alunos' => $alunos]);
    }
}
