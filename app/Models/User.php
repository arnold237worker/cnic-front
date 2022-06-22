<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'phone',
        'avatar',
        'type',
        'adresse',
        'password',
        'payment_id',
        'statut',
        'couverture',
        'code_vendeur',
        'last_connexion',
        'ville',
        'pays',
        'motivation',
        'profession',
        'piece1',
        'piece2',
        'code_reinitialisation',
        'vues',
        'code_prospection',
        'is_in_sua',
        'code_prospection_vendeur'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

}
