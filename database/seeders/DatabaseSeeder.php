<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserType;
use App\Enums\VoucherType;
use App\Models\Service;
use App\Models\Voucher;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = \App\Models\User::factory()->create([
            'id' => UserType::Admin->value,
            'name' => UserType::Admin->name,
            'email' => 'admin@vtexpress.com',
            'type' => UserType::Admin->value,
            'password' => bcrypt('admin@vtexpress.com'),
            'active' => true,
            'website' => 'vtexpress.com',
            'address' => 'Hoang Mai, Ha Noi',
            'phone' => '0346479335',
        ]);

        // Qui uoc: don hang co shop_id nay se la don hang ki gui, chi co 1 shop type nay duy nhat
        $GuiHangTQVN = \App\Models\User::factory()->create([
            'id'=> UserType::GuiHangTQVN->value,
            'name' => UserType::GuiHangTQVN->name,
            'email' => 'shop@vtexpress.com',
            'type' => UserType::GuiHangTQVN->value,
            'password' => bcrypt('shop@vtexpress.com'),
            'active' => true,
            'website' => 'vtexpress.com',
            'address' => 'Hoang Mai, Ha Noi',
            'phone' => '0346479336',
        ]);

        /**
         * Qui uoc: co san 1 va chi 1 customer ko xac dinh danh cho kien hang ko xac dinh
         */
        $customer = \App\Models\User::factory()->create([
            'id' => UserType::CustomerUndefined->value,
            'name' => UserType::CustomerUndefined->name,
            'email' => 'customer@vtexpress.com',
            'type' => UserType::CustomerUndefined->value,
            'password' => bcrypt('customer@vtexpress.com'),
            'active' => true,
            'website' => 'vtexpress.com',
            'address' => 'Hoang Mai, Ha Noi',
            'phone' => '0346479337',
        ]);

        Service::create([
            'id' => 1,
            'name' => 'yuan',
            'value' => '3500',
            'created_by' => $admin->id,
        ]);

        Voucher::factory()->create([
            'id' => VoucherType::None->value,
            'discount_max' => 0,
            'name' => "None",
            'active' => true
        ]);
    }
}
