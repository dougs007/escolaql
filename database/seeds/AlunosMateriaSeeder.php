<?php

use App\Models\AlunoMateria;
use Illuminate\Database\Seeder;

class AlunosMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlunoMateria::create([ 'alunos_id' => 1, 'materias_id' => 1, ]);
        AlunoMateria::create([ 'alunos_id' => 1, 'materias_id' => 2, ]);
        AlunoMateria::create([ 'alunos_id' => 2, 'materias_id' => 1, ]);
        AlunoMateria::create([ 'alunos_id' => 2, 'materias_id' => 3, ]);
        AlunoMateria::create([ 'alunos_id' => 3, 'materias_id' => 4, ]);
        AlunoMateria::create([ 'alunos_id' => 3, 'materias_id' => 5, ]);
        AlunoMateria::create([ 'alunos_id' => 4, 'materias_id' => 1, ]);
        AlunoMateria::create([ 'alunos_id' => 4, 'materias_id' => 3, ]);
        AlunoMateria::create([ 'alunos_id' => 5, 'materias_id' => 1, ]);
        AlunoMateria::create([ 'alunos_id' => 5, 'materias_id' => 5, ]);
    }
}
