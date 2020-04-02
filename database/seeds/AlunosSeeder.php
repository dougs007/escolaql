<?php

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'tx_nome' => 'Cristiano',
            'nu_idade' => 30,
            'tx_email' => 'cristiano@gmail.com',
            'nu_matricula' => rand(1000, 10000000)
        ]);
        Aluno::create([
            'tx_nome' => 'Adalberto',
            'nu_idade' => 30,
            'tx_email' => 'adalberto@gmail.com',
            'nu_matricula' => rand(1000, 10000000)
        ]);
        Aluno::create([
            'tx_nome' => 'Gilberto',
            'nu_idade' => 30,
            'tx_email' => 'gil@gmail.com',
            'nu_matricula' => rand(1000, 10000000)
        ]);
        Aluno::create([
            'tx_nome' => 'Douglas',
            'nu_idade' => 30,
            'tx_email' => 'douglas@gmail.com',
            'nu_matricula' => rand(1000, 10000000)
        ]);
        Aluno::create([
                'tx_nome' => 'Orion',
                'nu_idade' => 30,
                'tx_email' => 'orion@gmail.com',
                'nu_matricula' => rand(1000, 10000000)
            ]
        );
    }
}
