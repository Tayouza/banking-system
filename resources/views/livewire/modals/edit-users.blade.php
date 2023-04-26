<div class="p-4">
    <form wire:submit.prevent="save" class="flex flex-col gap-y-2">
        <div class="w-full">
            <x-input label="Nome" placeholder="Nome" wire:model.defer="name" />
        </div>
        <div class="w-full">
            <x-inputs.maskable mask="###.###.###-##" label="CPF" placeholder="000.000.000-00" wire:model.defer="cpf" />
        </div>
        <div class="w-full">
            <x-input label="Email" type="email" placeholder="example@mail.com" wire:model.defer="email" />
        </div>
        <div class="w-full">
            <x-native-select label="Perfil" wire:model.defer="roleId">
                <option value="2">Gerente de conta</option>
                <option value="3">Cliente</option>
            </x-native-select>
        </div>
        <div class="w-full">
            <x-toggle left-label="Ativo" wire:model.defer="active" />
        </div>
        <button type="submit" class="text-white cursor-pointer p-2 bg-blue-500 rounded hover:bg-blue-700">Salvar</button>
    </form>
</div>