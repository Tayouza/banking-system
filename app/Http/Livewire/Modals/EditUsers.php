<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditUsers extends ModalComponent
{
    use Actions;

    public $user;
    public $name;
    public $cpf;
    public $email;
    public $roleId;
    public $active;

    public function mount(int $id)
    {
        $this->user = User::find($id);

        $this->name = $this->user->name;
        $this->cpf = $this->user->cpf;
        $this->email = $this->user->email;
        $this->roleId = $this->user->role_id;
        $this->active = $this->user->active;
    }

    public function render()
    {
        return view('livewire.modals.edit-users');
    }

    public function save()
    {
        $this->validate([
            'name'   => 'filled|string',
            'cpf'    => 'filled|string',
            'email'  => ['filled','email', Rule::unique('users', 'email')->ignore($this->user->id)],
            'roleId' => 'filled|in:2,3',
            'active' => 'filled|boolean'
        ]);

        $this->user->name = $this->name;
        $this->user->cpf = $this->cpf;
        $this->user->email = $this->email;
        $this->user->role_id = $this->roleId;
        $this->user->active = $this->active;

        $this->user->save();

        $this->emit('save-user');
        $this->notification()->success('Usuário', 'Usúario salvo com sucesso!');
        $this->closeModal();
    }
}
