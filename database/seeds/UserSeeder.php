<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'     => 'Superadministrador',
            'email'    => 'termo_superadmin@termomagneticos.com',
            'password' => Hash::make('termo_superadmin')
        ]);
        $user->assignRole('superadmin');
    }
}
