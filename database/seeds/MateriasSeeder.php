<?php

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create(['tx_nome' => 'Português', 'tx_descricao' => 'Materia de Português',]);
        Materia::create(['tx_nome' => 'Inglês', 'tx_descricao' => 'Materia de Inglês',]);
        Materia::create(['tx_nome' => 'Francês', 'tx_descricao' => 'Materia de Francês',]);
        Materia::create(['tx_nome' => 'Japonês', 'tx_descricao' => 'Materia de Japonês',]);
        Materia::create(['tx_nome' => 'Espanhol', 'tx_descricao' => 'Materia de Espanhol',]);
    }
}
