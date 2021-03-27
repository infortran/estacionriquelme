<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'title' => 'Papa Mechada',
                'description' => 'Carne mechada, cebolla caramelizada al vino, chorizo, 2 huevos fritos, papas fritas rusticas',
                'm_price' => 9900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Luco',
                'description' => 'Churrasco, queso fundido, papas rusticas',
                'm_price' => 9900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Barbecue',
                'description' => 'Carne mechada barbecue, cebolla caramelizada al vino, papas rusticas',
                'm_price' => 9900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Tocino',
                'description' => 'Tocino, crema acida, ciboulette, papas rusticas',
                'm_price' => 8900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Huerto',
                'description' => 'Zapallo italiano, cebolla caramelizada al vino, champiñones, pimenton, choclo, 2 huevos fritos, papas rusticas',
                'm_price' => 8900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Luco Veggie',
                'description' => 'Champiñones, queso fundido, papas rusticas',
                'm_price' => 8900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papa Blanca',
                'description' => 'Crema acida, ciboulette, aceituna sevillana, choclo, papas rusticas',
                'm_price' => 8900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Papas Rusticas',
                'description' => 'Con queso rallado y oregano',
                'm_price' => 5500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Salsas Extra',
                'description' => 'Ajo, pebre, yogurt ciboulette, mayonesa cilantro',
                'm_price' => 500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-papas-fritas',
                'categoria_id' => 1
            ],
            [
                'title' => 'Pa\' la chela',
                'description' => 'Aceitunas sevillanas y mani surtido',
                'm_price' => 3500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Pa\' compartir',
                'description' => '8 empanadas de queso',
                'm_price' => 4000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Canastita Chilena',
                'description' => '2 canastas de sopaipilla, carne mechada, salsa blanca y pebre',
                'm_price' => 5900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Canastita Mexicana',
                'description' => '2 canastas de nachos, guacamole y salsa a eleccion',
                'm_price' => 4900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Pa\' mi no mas 1',
                'description' => 'Quesadilla con champiñones, queso, tomate y salsa',
                'm_price' => 4000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Pa\' mi no mas 2',
                'description' => 'Quesadilla con cebolla caramelizada, queso choclo y salsa',
                'm_price' => 4000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Pocillo de mani',
                'description' => null,
                'm_price' => 1000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tablero',
                'categoria_id' => 2
            ],
            [
                'title' => 'Pizza Veggie',
                'description' => 'Salsa de tomate, queso, palmito, choclo, pimenton, champiñon',
                'm_price' => 6900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-pizza',
                'categoria_id' => 3
            ],
            [
                'title' => 'Pizza Mechada',
                'description' => 'Salsa de tomate, queso, cebolla caramelizada en vino tinto, carne mechada, tomate cherry, pimentón',
                'm_price' => 6900,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-pizza',
                'categoria_id' => 3
            ],
            [
                'title' => 'Ingrediente Extra',
                'description' => 'Agrega el de tu elección',
                'm_price' => 1000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-pizza',
                'categoria_id' => 3
            ],
            [
                'title' => 'Hacienda de Quilpue',
                'description' => 'Vino blanco, durazno, platano, guindas',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 3
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 1
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 1
            ],
            [
                'title' => '',
                'description' => '',
                'm_price' => 0,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-jarra-de-agua',
                'categoria_id' => 1
            ],






        ]);
    }
}
