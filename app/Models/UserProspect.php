<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProspect extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'pays',
        'profession',
        'attentes',
        'moyen_paiement',
        'user_id',
        'statut'
    ];

}
