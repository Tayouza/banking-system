<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class TableUsers extends Component
{
    protected $listeners = ['save-user' => '$refresh'];

    public function render()
    {
        return view('livewire.table-users');
    }

    public function getUsersProperty()
    {
        return User::all();
    }
}
