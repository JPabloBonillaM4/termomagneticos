<?php

use Illuminate\Database\Seeder;
use App\ProjectCategorie;

class ProjectCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectCategorie::create(['name' => 'Ingeniería eléctrica']);
        ProjectCategorie::create(['name' => 'Física de radiaciones']);
    }
}
