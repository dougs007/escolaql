<?php

use App\Models\{Avaliacao, AlunoMateria};
use Illuminate\Database\Seeder;

class AvaliacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrAlunos_materias = AlunoMateria::all();

        foreach ($arrAlunos_materias as $alunos_materias):
            Avaliacao::create(
                [
                    'alunos_materias_id' => $alunos_materias->id,
                    'nu_nota' => rand(1, 10)
                ]
            );
        endforeach;
    }
}
