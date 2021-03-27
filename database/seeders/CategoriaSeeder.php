<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'id' => 1,
                'title' => 'Chorrillanas',
                'description' => 'Vamos, adelante, sin culpas, una no es ninguna.',
                'img' => 'chorri_1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Tablas y canastas',
                'description' => 'Pa\' tomarse una chelita con amigos y disfrutar una buena conversa.',
                'img' => 'tabla_1.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Pizzas',
                'description' => 'Una rica pizza mejor, te tinca?.',
                'img' => 'pizza_veggie.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Las Guachacas',
                'description' => 'Ven y conocelas todas.',
                'img' => 'jarra_2.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Los Zorrones',
                'description' => 'Unos ricos tragos preparados con su toque de picardía.',
                'img' => 'bar_5.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Los Cabezones',
                'description' => 'Con todo si no pa\' que!.',
                'img' => 'whisky_jw.jpeg'
            ],
            [
                'id' => 7,
                'title' => 'Birras',
                'description' => 'Bien heladita para calmar la sed.',
                'img' => 'image.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Los falsos',
                'description' => 'Todos sabemos que tomas, no te creas fitness.',
                'img' => 'image.jpg'
            ]
        ]);
    }
}
