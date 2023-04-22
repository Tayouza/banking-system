<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProvider = [
            'GENERAL MANAGER' => ['*'],
            'ACCOUNT MANAGER' => ['customers', 'account'],
            'CUSTOMER'        => ['account'],
        ];

        foreach ($dataProvider as $key => $value) {
            Role::create([
                'name'        => $key,
                'permissions' => json_encode($value, JSON_UNESCAPED_UNICODE)
            ]);
        }
    }
}
