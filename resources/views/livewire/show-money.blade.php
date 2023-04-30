<div class="flex flex-col gap-2">
    <div class="flex items-center gap-2 bg-white text-xl rounded-lg p-4 shadow-md">
        Suas contas <span wire:click="changeActivity">@if($active) <x-icons.eye-open class="w-[22px] ml-[1px] cursor-pointer" /> @else <x-icons.eye-slash class="w-[24px] cursor-pointer" /> @endif</span>
    </div>
    <div class="flex gap-4">
        <x-money-card card-title="Conta Poupança" money="{{$this->savingsBalanceMoney}}" cents="{{$this->savingsBalanceCents}}" active="{{$this->active}}" />
        <x-money-card card-title="Conta Corrente" money="{{$this->checkingAccountBalanceMoney}}" cents="{{$this->checkingAccountBalanceCents}}" active="{{$this->active}}" />
    </div>
</div>