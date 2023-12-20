<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_classe';

    protected  $fillable =['name' , 'description'];
    public function alunos(){
        return $this->hasMany(Aluno::class , 'classe_id' , 'id_classe');
    }
}
