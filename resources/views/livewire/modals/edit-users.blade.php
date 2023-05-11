<div class="p-4">
    <form wire:submit.prevent="save" class="flex flex-col gap-y-2">
        <div class="w-full">
            <x-input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" label="Nome" placeholder="Nome" wire:model.defer="name" />
        </div>
        <div class="w-full">
            <x-inputs.maskable class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" mask="###.###.###-##" label="CPF" placeholder="000.000.000-00" wire:model.defer="cpf" />
        </div>
        <div class="w-full">
            <x-input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" label="Email" type="email" placeholder="example@mail.com" wire:model.defer="email" />
        </div>
        <div class="w-full">
            <x-native-select label="Perfil" :options="$this->roles" option-label="name" option-value="id"
                wire:model="roleId" />
        </div>
        <div class="w-full">
            <x-select label="Pesquise por um gerente" wire:model.defer="managerId" placeholder="Gerente"
                :async-data="route('api.managers')" option-label="name" option-value="id" />
        </div>
        <div class="w-full">
            <x-toggle left-label="Ativo" wire:model.defer="active" />
        </div>
        <button type="submit"
            class="text-white cursor-pointer p-2 bg-blue-500 rounded hover:bg-blue-700">Salvar</button>
    </form>
</div>