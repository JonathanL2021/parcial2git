<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'samuel',
            'apellido' => 'Mendoza',
            'dui' => '25986238-2',
            'telefono' => '71598925',
            'email' => 'samuel20@gmail.com',
            'password' => bcrypt('josue2020')
    ];
});
