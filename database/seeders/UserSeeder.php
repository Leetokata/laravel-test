<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Luis',
            'apellido' => 'Davalillo',
            'email' => 'ldmorles@gmail.com',
            'clave' => Hash::make('admin'),
        ]);
    }
}
