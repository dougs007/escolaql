<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\HasMany, SoftDeletes};

class Aluno extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_nome', 'nu_idade', 'tx_email', 'nu_matricula'
    ];

    public function alunoMateria(): HasMany
    {
        return $this->hasMany(\App\Models\AlunoMateria::class, 'alunos_id');
    }
}
