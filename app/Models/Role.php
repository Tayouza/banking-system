<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'permissions'
    ];

    public function getNameTranslated()
    {
        return match ($this->name) {
            'GENERAL MANAGER' => 'Gerente Geral',
            'ACCOUNT MANAGER' => 'Gerente de Conta',
            'CUSTOMER' => 'Cliente',
        };
    }
}
