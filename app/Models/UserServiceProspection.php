<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserServiceProspection extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'description',
        'user_id',
        'lien_prospection_id'
    ];

}
