<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData= [
            [
                'email'=> 'admin@desa.id',
                'password'=>bcrypt('admin127'),
                'level'=> 'admin',
            ],
            [
                'email'=> 'bendahara@desa.id',
                'password'=>bcrypt('bendahara127'),
                'level'=> 'bendahara',
            ],
            [
                'email'=> 'pemilik@desa.id',
                'password'=>bcrypt('pemilik127'),
                'level'=> 'pemilik',
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
