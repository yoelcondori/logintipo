<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $useradmin=User::create([
            'name' => 'admin paul',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            ]);
                    
        $user1=User::create([
            'name' => 'Bibliotecario',
            'email' => 'biblio@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',
            ]);
        $user1=User::create([
            'name' => 'Laboratorista C.C',
            'email' => 'lab1@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '3',
            ]);
        $user1=User::create([
            'name' => 'Laboratorista C.P.C.A',
            'email' => 'lab2@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '4',
            ]);
    }

    
}
