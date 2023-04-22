<?php

namespace App\Models\Relations;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait UserRelations
{
    public function customer(): HasOne
    {
        return $this->hasOne(User::class);
    }
}