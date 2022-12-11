<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = "12345";
        $user = new User([
            "email" => "admin@ringsaqp.com",
            "password" => Hash::make($password),
            "name"=> "Administrador",
        ]);
        $user->save(); 
    }
}
