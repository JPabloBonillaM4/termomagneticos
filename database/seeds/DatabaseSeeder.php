<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            ComponenteSeeder::class,
            UserSeeder::class,
            ProjectCategorieSeeder::class,
            ProjectSubcategorieSeeder::class,
            ProjectSeeder::class
        ]);
    }
}
