<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Factory as FakerFactory;

$factory->define(SiteContato::class, function () {
    $faker = FakerFactory::create('pt_BR');
    return [
        'nome' => $faker->name(),
        'telefone' => $faker->cellphoneNumber(),
        'email' => $faker->unique()->safeEmail,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' => $faker->text(200)
    ];
});
