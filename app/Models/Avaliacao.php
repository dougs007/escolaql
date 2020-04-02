<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nu_nota', 'alunos_materias_id'
    ];
}
