<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo, Relations\HasMany, SoftDeletes};

class AlunoMateria extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alunos_id', 'materias_id'
    ];

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Aluno::class, 'alunos_id');
    }

    public function materia(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Materia::class, 'materias_id');
    }

    public function avalicao(): HasMany
    {
        return $this->hasMany(\App\Models\Avaliacao::class, 'alunos_materias_id');
    }
}
