<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
            'title' => 'Papa Mechada',
            'subtitle' => 'Carne mechada, cebolla caramelizada al vino, chorizo, 2 huevos fritos, papas fritas rusticas',
            'price' => '9900',
            'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Luco',
                'subtitle' => 'Churrasco, queso fundido, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Barbecue',
                'subtitle' => 'Carne mechada barbecue, cebolla caramelizada al vino, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Tocino',
                'subtitle' => 'Tocino, crema acida, ciboulette, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Huerto',
                'subtitle' => 'Zapallo italiano, cebolla caramelizada al vino, champiñones, pimenton, choclo, 2 huevos fritos, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Luco Veggie',
                'subtitle' => 'Champiñones, queso fundido, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papa Blanca',
                'subtitle' => 'Crema acida, ciboulette, aceituna sevillana, choclo, papas rusticas',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Papas Rusticas',
                'subtitle' => 'Con queso rallado y oregano',
                'icon' => 'flaticon-',
            ],
            [
                'title' => 'Salsas Extra',
                'subtitle' => 'Ajo, pebre, yogurt ciboulette, mayonesa cilantro',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
            [
                'title' => '',
                'subtitle' => '',
                'icon' => 'flaticon-',
            ],
        ]);
    }
}
