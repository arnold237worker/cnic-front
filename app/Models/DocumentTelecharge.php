<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTelecharge extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'document',
        'email',
        'telephone'
    ];
}
