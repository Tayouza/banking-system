<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GeneralManagerSeeder extends Seeder
{
    public function run(): void
    {
        $email = 'generalmanager@banking.app';
        $existsGeneralManager = User::where('email', $email)->count();

        if ($existsGeneralManager === 0) {
            User::create([
                'name'     => 'General Manager',
                'email'    => $email,
                'document' => '000.000.000-00',
                'password' => Hash::make('123')
            ]);
        }
    }
}
