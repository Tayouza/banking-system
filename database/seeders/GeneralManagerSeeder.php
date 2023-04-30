<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Customer;
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
            $generalManager = User::create([
                'name'     => 'General Manager',
                'email'    => $email,
                'cpf'      => '00000000000',
                'password' => Hash::make('123'),
                'role_id'  => 1,
                'active'   => true
            ]);

            $customer = Customer::create([
                'birthdate' => '1997-01-01',
                'address_street' => 'Rua dos bobos',
                'address_number' => '0',
                'address_district' => 'Cidade Baixa',
                'address_city' => 'Porto Alegre',
                'address_state' => 'Rio Grande do Sul',
                'cep' => '90000000',
                'user_id' => $generalManager->id
            ]);

            Account::create([
                'customer_id' => $customer->id
            ]);
        }

        
    }
}
