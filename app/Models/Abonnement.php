<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'user_id',
        'expired_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
