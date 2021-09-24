<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'id_nota' => '1',
            'nota1' => '7',
            'nota2' => '8',
            'nota3' => '9',
            'nota4' => '10',
            'promedio' => '8.5',
            'parcial' => '8.0',
            'id_alumno' => '1',
            'id_curso' => '1',
            'id_profesor' => '1'

        ]);
    }
}
