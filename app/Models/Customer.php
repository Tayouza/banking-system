<?php

namespace App\Models;

use App\Models\Relations\CustomerRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use CustomerRelations;

    protected $fillable = [
        'birthdate',
        'address_street',
        'address_number',
        'address_complement',
        'address_district',
        'address_city',
        'address_state',
        'cep',
        'user_id',
    ];
}
