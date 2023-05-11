<div class="w-full flex justify-center p-2" style="background-color: rgba(136,151,210,255)">
    <div class="p-2 bg-white overflow-auto">
        <table class="table-fixed">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Nome</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">CPF</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">E-mail</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Perfil</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Ativo</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Gerente</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($this->users as $user)
                <tr class="bg-gray-200">
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{{$user->name}}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{{\App\Helpers\Cpf::mask($user->cpf)}}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{{$user->email}}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{{$user->role->getNameTranslated()}}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{{$user->active ? 'Ativo' : 'Inativo'}}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">{!!$user->customer?->manager?->name ?? '<span class="italic text-gray-500">Sem gerente</span>'!!}</td>
                    <td class="p-3 text-sm text-black-700 whitespace-nowrap">
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
