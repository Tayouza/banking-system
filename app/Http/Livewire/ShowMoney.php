<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class ShowMoney extends Component
{
    public $savingsBalanceMoney;
    public $savingsBalanceCents;
    public $checkingAccountBalanceMoney;
    public $checkingAccountBalanceCents;
    public bool $active = true;

    public function mount()
    {
        $account = auth()->user()->customer->account;

        $separateMoney = $this->separateMoney($account->savings_balance);
        $this->savingsBalanceMoney = $separateMoney[0];
        $this->savingsBalanceCents = $separateMoney[1];

        $separateMoney = $this->separateMoney($account->checking_account_balance);
        $this->checkingAccountBalanceMoney = $separateMoney[0];
        $this->checkingAccountBalanceCents = $separateMoney[1];
    }

    public function render()
    {
        return view('livewire.show-money');
    }

    private function separateMoney(float $value)
    {
        $value = number_format($value, 2, ',', '');
        $value = explode(',', $value);

        return $value;
    }

    public function changeActivity()
    {
        $this->active = !$this->active;
    }
}
