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
                'm_price' => 4000,
                's_price' => 7500,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Plaza La Dignidad',
                'description' => 'Vino Blanco, piña, limón, pepino',
                'm_price' => 4000,
                's_price' => 7500,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Puente El Rey',
                'description' => 'Vino blanco, manzana verde, menta',
                'm_price' => 4000,
                's_price' => 7500,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Tahai',
                'description' => 'Vino blanco, pisco, mango, maracuyá',
                'm_price' => 4500,
                's_price' => 9900,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'El Cristo',
                'description' => 'Vino tinto, naranja, frutilla, cardamomo',
                'm_price' => 4000,
                's_price' => 7500,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Esquina Colorada',
                'description' => 'Vino tinto, frambuesa, arándano, canela',
                'm_price' => 4500,
                's_price' => 8000,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Las 3 Esquinas',
                'description' => 'Vino blanco, manzana verde, platano',
                'm_price' => 7990,
                's_price' => null,
                'm_capacity' => '1.4 lt',
                's_capacity' => null,
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Clásico',
                'description' => 'Jarrita o dos frutas, de preferencia en trozos o licuadas',
                'm_price' => 7990,
                's_price' => null,
                'm_capacity' => '1.4 lt',
                's_capacity' => null,
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Estación Riquelme',
                'description' => 'Vino tinto, manzana roja, naranja, canela',
                'm_price' => 7990,
                's_price' => null,
                'm_capacity' => '1.4 lt',
                's_capacity' => null,
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],
            [
                'title' => 'Estación Riquelme 2.0',
                'description' => 'Estación Riquelme con un shot de Jagermeister',
                'm_price' => 8990,
                's_price' => null,
                'm_capacity' => '1.4 lt',
                's_capacity' => null,
                'icon' => 'jarra-de-agua',
                'categoria_id' => 4
            ],

            [
                'title' => 'Mojito Variedades',
                'description' => 'Maracuyá, frambuesa y clásico',
                'm_price' => 4500,
                's_price' => 9900,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'flaticon-martini',
                'categoria_id' => 5
            ],
            [
                'title' => 'Mojito Cerveza',
                'description' => null,
                'm_price' => 5000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-martini',
                'categoria_id' => 5
            ],
            [
                'title' => 'Aperol Spritz',
                'description' => null,
                'm_price' => 4800,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-martini',
                'categoria_id' => 5
            ],
            [
                'title' => 'Ramazzotti',
                'description' => null,
                'm_price' => 4800,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-martini',
                'categoria_id' => 5
            ],
            [
                'title' => 'Pisco Sour Variedades',
                'description' => 'Jengibre, maracuyá y clásico',
                'm_price' => 4500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-martini',
                'categoria_id' => 5
            ],

            [
                'title' => 'Pisco Mistral',
                'description' => null,
                'm_price' => 3000,
                's_price' => 5000,
                'm_capacity' => 'c/u',
                's_capacity' => '2x',
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],
            [
                'title' => 'Pisco Alto del Carmen',
                'description' => null,
                'm_price' => 3000,
                's_price' => 5000,
                'm_capacity' => 'c/u',
                's_capacity' => '2x',
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],
            [
                'title' => 'Pisco Mal Paso o Tres Erres',
                'description' => null,
                'm_price' => 2000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],

            [
                'title' => 'Whisky Jack Daniels',
                'description' => '+ 1 Bebida',
                'm_price' => 5500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],
            [
                'title' => 'Whisky Ballantines',
                'description' => '+ 1 Bebida',
                'm_price' => 3500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],
            [
                'title' => 'Ron Pampero',
                'description' => null,
                'm_price' => 3000,
                's_price' => 5000,
                'm_capacity' => 'c/u',
                's_capacity' => '2x',
                'icon' => 'flaticon-tequila-1',
                'categoria_id' => 6
            ],

            [
                'title' => 'Royal Clásica',
                'description' => null,
                'm_price' => 2000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],

            [
                'title' => 'Royal Ipa o Scotch',
                'description' => null,
                'm_price' => 2500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Heineken',
                'description' => null,
                'm_price' => 2000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Budweiser',
                'description' => null,
                'm_price' => 2000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Kunnstmann Torobayo',
                'description' => null,
                'm_price' => 2800,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Artesanal Botella',
                'description' => null,
                'm_price' => 2500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Artesanal Schop',
                'description' => null,
                'm_price' => 3000,
                's_price' => 5000,
                'm_capacity' => 'c/u',
                's_capacity' => '2 x',
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Cristal o Escudo',
                'description' => null,
                'm_price' => 1700,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Limón Michelada Natural',
                'description' => null,
                'm_price' => 500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-cerveza',
                'categoria_id' => 7
            ],
            [
                'title' => 'Jugo Natural',
                'description' => null,
                'm_price' => 2500,
                's_price' => 6000,
                'm_capacity' => '600cc',
                's_capacity' => '1.4 lt',
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Cerveza sin Alcohol',
                'description' => null,
                'm_price' => 2000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Cerveza sin Gluten',
                'description' => null,
                'm_price' => 3500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Mojito sin Alcohol',
                'description' => null,
                'm_price' => 4000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Mojito Cerveza sin Alcohol',
                'description' => null,
                'm_price' => 5000,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Agua Mineral',
                'description' => null,
                'm_price' => 1500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Bebida Lata',
                'description' => null,
                'm_price' => 1500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
            [
                'title' => 'Redbull',
                'description' => null,
                'm_price' => 2500,
                's_price' => null,
                'm_capacity' => null,
                's_capacity' => null,
                'icon' => 'flaticon-tequila',
                'categoria_id' => 8
            ],
        ]);
    }
}
