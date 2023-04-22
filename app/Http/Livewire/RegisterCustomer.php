<?php

namespace App\Http\Livewire;

use App\Helpers\Cpf;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use WireUi\Traits\Actions;

class RegisterCustomer extends Component
{
    use Actions;

    public $name;
    public $email;
    public $cpf;
    public $password;
    public $password_confirmation;
    public $birthdate;
    public $address_street;
    public $address_number;
    public $address_complement;
    public $address_district;
    public $address_city;
    public $address_state;
    public $cep;

    public function render()
    {
        return view('livewire.register-customer')
            ->layout('layouts.guest');
    }

    public function save()
    {
        $this->validate([
            'name'               => ['required', 'string', 'max:255'],
            'email'              => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'cpf'                => ['required', 'string', 'max:14', 'min:11'],
            'password'           => ['required', 'confirmed', Password::defaults()],
            'birthdate'          => ['required', 'date'],
            'address_street'     => ['required', 'string'],
            'address_number'     => ['required', 'string'],
            'address_complement' => ['nullable', 'string'],
            'address_district'   => ['required', 'string'],
            'address_city'       => ['required', 'string'],
            'address_state'      => ['required', 'string'],
            'cep'                => ['required', 'string', 'min:7', 'max:8'],
        ]);

        if (!Cpf::validate($this->cpf)) {
            throw ValidationException::withMessages(['cpf' => 'Esse CPF é inválido']);
        }

        DB::beginTransaction();

        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'cpf'      => $this->cpf,
            'password' => Hash::make($this->password),
            'role_id'  => 3,
            'active'   => false,
        ]);

        $customer = Customer::create([
            'birthdate'          => $this->birthdate,
            'address_street'     => $this->address_street,
            'address_number'     => $this->address_number,
            'address_complement' => $this->address_complement,
            'address_district'   => $this->address_district,
            'address_city'       => $this->address_city,
            'address_state'      => $this->address_state,
            'cep'                => $this->cep,
            'user_id'            => $user->id,
        ]);

        $customer ? DB::commit() : DB::rollBack();

        return redirect()->route('home');
    }

    public function getCep()
    {
        $address = Http::get('viacep.com.br/ws/' . $this->cep . '/json/')->json();

        if (empty($address['erro'])) {
            $this->resetErrorBag();
            $this->setAddress($address);
        } else {
            throw ValidationException::withMessages(['cep' => 'Esse CEP é inválido']);
        }
    }

    private function setAddress($address)
    {
        if ($address) {
            $this->address_street = $address['logradouro'];
            $this->address_district = $address['bairro'];
            $this->address_city = $address['localidade'];
            $this->address_state = $address['uf'];
        }
    }
}
