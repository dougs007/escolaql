<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\HasMany, SoftDeletes};

class Materia extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_nome', 'tx_descricao'
    ];

    public function alunoMateria(): HasMany
    {
        return $this->hasMany(\App\Models\AlunoMateria::class, 'alunos_materias_id');
    }
}
