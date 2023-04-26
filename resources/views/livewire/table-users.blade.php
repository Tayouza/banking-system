<div class="w-full flex justify-center p-2">
    <div class="p-2 bg-white">
        <table class="table-fixed">
            <thead>
                <tr>
                    <th class="border p-2">Nome</th>
                    <th class="border p-2">CPF</th>
                    <th class="border p-2">E-mail</th>
                    <th class="border p-2">Perfil</th>
                    <th class="border p-2">Ativo</th>
                    <th class="border p-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->users as $user)
                <tr>
                    <td class="border p-2">{{$user->name}}</td>
                    <td class="border p-2">{{\App\Helpers\Cpf::mask($user->cpf)}}</td>
                    <td class="border p-2">{{$user->email}}</td>
                    <td class="border p-2">{{__($user->role->getNameTranslated())}}</td>
                    <td class="border p-2">{{$user->active ? 'Ativo' : 'Inativo'}}</td>
                    <td class="border p-2">
                        @if($user->role_id !== 1)
                        <button wire:click="$emit('openModal', 'modals.edit-users', {{json_encode(['id' => $user->id])}})" class="text-white cursor-pointer p-2 bg-blue-500 rounded hover:bg-blue-700">Editar</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
