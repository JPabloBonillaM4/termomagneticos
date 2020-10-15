<?php

use Illuminate\Database\Seeder;
use App\Componente;
class ComponenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Componente::create(array(
            'nombre'      => 'protección electromagnética',
            'imagen'      => 'images/componentes/proteccion_electromagnetica.jpeg',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));

        Componente::create(array(
            'nombre'      => "mcb's y equipos de control",
            'imagen'      => 'images/componentes/mcbs_y_equipo_de_control.jpg',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));

        Componente::create(array(
            'nombre'      => 'protección termomagnética',
            'imagen'      => 'images/componentes/proteccion_termomagnetica.jpg',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));

        Componente::create(array(
            'nombre'      => 'contactores y guardamotores',
            'imagen'      => 'images/componentes/contactores_y_guardamotores.png',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));

        Componente::create(array(
            'nombre'      => 'arrancadores para motores',
            'imagen'      => 'images/componentes/arrancadores_para_motores.jpg',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));

        Componente::create(array(
            'nombre'      => 'tableros de distribución alumbrado/contactos',
            'imagen'      => 'images/componentes/tableros_de_distribucion.jpg',
            'descripcion' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
        ));
    }
}
