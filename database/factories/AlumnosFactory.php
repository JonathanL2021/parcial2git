<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name'=> 'Jonathan',
            'apellido'=> 'Lopez',
            'fecha_nacimiento' => '18/10/1998',
            'direccion' => 'Santa Isabel',
            'genero' => 'M',
            'apellido' => 'Lopez',
            'telefono' => '79758329',
            'email' => 'jl3967190@gmail.com',
            'password' => bcrypt('jona2021')  
    ];
});
