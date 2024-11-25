<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserRole;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = \App\Models\User::factory()->create([
            'name' => 'Luu Xuan Dat',
            'email' => 'lx.xuandat@gmail.com',
            'type' => UserRole::Admin->value,
            'password' => bcrypt('lx.xuandat@gmail.com'),
        ]);

        Service::factory()->create([
            'name' => 'yuan',
            'value' => '3500',
            'created_by' => $admin->id,
        ]);
    }
}
