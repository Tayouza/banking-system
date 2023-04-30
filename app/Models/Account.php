<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'savings_balance',
        'checking_account_balance',
        'withdrawal_limit',
        'transfer_limit',
        'customer_id'
    ];
    
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
