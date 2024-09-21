<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Elemento;

class ElementosSeeder extends Seeder
{
    public function run()
    {
        // Insertar elementos iniciales
        Elemento::create([
            'elemento' => 'Aire',
            'descripcion' => 'Elemento que controla el aire',
            'id_elemento_debil' => 3,
            'id_elemento_fuerte' => 2,
        ]);
        
        Elemento::create([
            'elemento' => 'Fuego',
            'descripcion' => 'Elemento que controla el fuego',
            'id_elemento_debil' => 4,
            'id_elemento_fuerte' => 1,
        ]);
        
        Elemento::create([
            'elemento' => 'Tierra',
            'descripcion' => 'Elemento que controla la tierra',
            'id_elemento_debil' => 1,
            'id_elemento_fuerte' => 4,
        ]);
        
        Elemento::create([
            'elemento' => 'Agua',
            'descripcion' => 'Elemento que controla el agua',
            'id_elemento_debil' => 2,
            'id_elemento_fuerte' => 3,
        ]);
        
        Elemento::create([
            'elemento' => 'Madera',
            'descripcion' => 'Elemento que controla la madera',
            'id_elemento_debil' => 5,
            'id_elemento_fuerte' => 6,
        ]);
        
        Elemento::create([
            'elemento' => 'Veneno',
            'descripcion' => 'Elemento venenoso que afecta al cuerpo',
            'id_elemento_debil' => 6,
            'id_elemento_fuerte' => 7,
        ]);
        
        Elemento::create([
            'elemento' => 'Hielo',
            'descripcion' => 'Elemento que controla el hielo',
            'id_elemento_debil' => 7,
            'id_elemento_fuerte' => 8,
        ]);
        
        Elemento::create([
            'elemento' => 'Ilusión',
            'descripcion' => 'Elemento que crea ilusiones mágicas',
            'id_elemento_debil' => 8,
            'id_elemento_fuerte' => 9,
        ]);
        
        Elemento::create([
            'elemento' => 'Cristal',
            'descripcion' => 'Elemento de cristales mágicos',
            'id_elemento_debil' => 9,
            'id_elemento_fuerte' => 10,
        ]);
        
        Elemento::create([
            'elemento' => 'Metal',
            'descripcion' => 'Elemento que controla los metales',
            'id_elemento_debil' => 10,
            'id_elemento_fuerte' => 11,
        ]);
        
        Elemento::create([
            'elemento' => 'Luz',
            'descripcion' => 'Elemento de luz sagrada',
            'id_elemento_debil' => 11,
            'id_elemento_fuerte' => 12,
        ]);
        
        Elemento::create([
            'elemento' => 'Electricidad',
            'descripcion' => 'Elemento que controla la electricidad',
            'id_elemento_debil' => 12,
            'id_elemento_fuerte' => 1,
        ]);
        
        Elemento::create([
            'elemento' => 'Curación',
            'descripcion' => 'Elemento que sana las heridas',
            'id_elemento_debil' => 1,
            'id_elemento_fuerte' => 11,
        ]);
        
        
    }
}
