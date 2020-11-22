<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\CarouselImage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CONSTRUCCIÓN
        Project::create([
            'title'          => 'energías limpias y sustentables',
            'subcategory_id' => 1
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_4.jpg'])
        ]);
        Project::create([
            'title'          => 'instalación de equipo eléctrico a prueba de vapor y humedad ip65',
            'subcategory_id' => 1
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/construccion/construccion_1.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/construccion_2.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/construccion_3.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/construccion_4.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/construccion_5.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/construccion_6.jpg'])
        ]);
        Project::create([
            'title'          => 'instalación de transformadores de media y baja tensión',
            'subcategory_id' => 1
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/construccion/transformadores_1.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/transformadores_2.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/transformadores_3.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/transformadores_4.jpg'])
        ]);
        Project::create([
            'title'          => 'instalaciones subterráneas de media y baja tensión normativa CFE',
            'subcategory_id' => 1
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/construccion/registros_1.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/registros_2.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/registros_3.jpg']),
            new CarouselImage(['image_url' => 'images/construccion/registros_4.jpg'])
        ]);
        // CASOS ÉXITO
        Project::create([
            'title'          => 'elementa',
            'subcategory_id' => 2
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_4.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_5.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_6.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_7.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_8.jpg'])
        ]);
        Project::create([
            'title'          => 'facultad de psicología buap',
            'subcategory_id' => 2
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/buap_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/buap_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/buap_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/buap_4.jpg'])
        ]);
        Project::create([
            'title'          => 'oficinas y naves cantabrico',
            'subcategory_id' => 2
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/cantabrico_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cantabrico_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cantabrico_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cantabrico_4.jpg'])
        ]);
        Project::create([
            'title'          => 'almacén con oficinas cervezas modelo en hermosilloo',
            'subcategory_id' => 2
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_4.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_5.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_6.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_7.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_8.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_9.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_10.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_12.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_15.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_16.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_17.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_18.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_19.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_21.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_22.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_23.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_24.jpg'])
            ,new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_25.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/cervezeras_26.jpg'])
        ]);
        // BLINDAJE
        Project::create([
            'title'          => 'hospital',
            'subcategory_id' => 3
        ])->images()->saveMany([            
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_3.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_4.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_1.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_2.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_5.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_6.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_7.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_8.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_9.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_10.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_11.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_12.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_13.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_14.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_15.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_16.webp']),
            new CarouselImage(['image_url' => 'images/blindaje/blindaje_17.webp'])
        ]);
        // CRISTALES
        Project::create([
            'title'          => 'hospital',
            'subcategory_id' => 4
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_2.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_3.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_4.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_1.jpg']),
            new CarouselImage(['image_url' => 'images/casos-exito/elementa_2.jpg'])
        ]);
        // PUERTAS
        Project::create([
            'title'          => 'centro oncológico de saltillo, saltillo coahuila',
            'subcategory_id' => 5
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/puertas/centro_ontologico_1.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/centro_ontologico_2.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/centro_ontologico_3.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/centro_ontologico_4.jpg'])
        ]);
        Project::create([
            'title'          => 'centro oncológico hospital central militar, cdmx',
            'subcategory_id' => 5
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/puertas/ontologico_militar_1.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/ontologico_militar_2.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/ontologico_militar_3.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/ontologico_militar_4.jpg'])
        ]);
        Project::create([
            'title'          => 'centro oncológico hospital juárez de méxico, cdmx',
            'subcategory_id' => 5
        ])->images()->saveMany([
            new CarouselImage(['image_url' => 'images/puertas/ontologico_juarez_1.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/ontologico_juarez_2.jpg']),
            new CarouselImage(['image_url' => 'images/puertas/ontologico_juarez_3.jpg'])
        ]);
    }
}
