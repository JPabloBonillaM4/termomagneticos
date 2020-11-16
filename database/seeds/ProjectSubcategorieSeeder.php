<?php

use Illuminate\Database\Seeder;
use App\ProjectSubcategorie;

class ProjectSubcategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectSubcategorie::create([
            'name'         => 'Construcción',
            'categorie_id' => 1
        ]);
        ProjectSubcategorie::create([
            'name'         => 'Casos de éxito',
            'categorie_id' => 1
        ]);
        ProjectSubcategorie::create([
            'name'         => 'Blindaje',
            'categorie_id' => 2
        ]);
        ProjectSubcategorie::create([
            'name'         => 'Cristales',
            'categorie_id' => 2
        ]);
        ProjectSubcategorie::create([
            'name'         => 'Puertas',
            'categorie_id' => 2
        ]);
    }
}
