<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material; // Usa el modelo Material

class MaterialesSeeder extends Seeder
{
    public function run()
    {
        // Insertar materiales iniciales usando Eloquent
        Material::create([
            'material' => 'Aire',
            'id_material_debil' => 2,
            'id_material_fuerte' => 3,
            'id_elemento_debil' => 1,
            'id_elemento_fuerte' => 4,
            'descripcion' => 'Material liviano, usado para crear objetos rápidos',
        ]);

        Material::create([
            'material' => 'Metal',
            'id_material_debil' => 1,
            'id_material_fuerte' => 2,
            'id_elemento_debil' => 3,
            'id_elemento_fuerte' => 2,
            'descripcion' => 'Material resistente, ideal para armas y armaduras',
        ]);

        Material::create([
            'material' => 'Cristal',
            'id_material_debil' => 4,
            'id_material_fuerte' => 5,
            'id_elemento_debil' => 2,
            'id_elemento_fuerte' => 3,
            'descripcion' => 'Material mágico, frágil pero con alto poder',
        ]);

        Material::create([
            'material' => 'Madera',
            'id_material_debil' => 2,
            'id_material_fuerte' => 1,
            'id_elemento_debil' => 3,
            'id_elemento_fuerte' => 4,
            'descripcion' => 'Material flexible y resistente, usado para estructuras y armas ligeras',
        ]);

        Material::create([
            'material' => 'Veneno',
            'id_material_debil' => 5,
            'id_material_fuerte' => 6,
            'id_elemento_debil' => 6,
            'id_elemento_fuerte' => 7,
            'descripcion' => 'Material tóxico, usado en la creación de armas venenosas',
        ]);

        // Puedes agregar más materiales según lo necesites
    }
}
