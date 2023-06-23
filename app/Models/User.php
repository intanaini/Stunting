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
        'name',
        'nik',
        'id_user',
        'password',
        'idposyandu',
        'role',
        'status_users',
        'no_hp'
    ];


    protected $primaryKey = 'id_user';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $keyType = 'string';

    public $incrementing = false;
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'id_user' => 'string',
    ];

    public function posyandu()
    {
        //  idposyandu pertama dari penamaan database disini, idposyandu setelah koma dari database asli posyandu
        return $this->belongsTo(posyandu::class, 'idposyandu', 'idposyandu');
    }

    public function balita()
    {
        return $this->hasMany(balita::class, 'idortu');
    }
    public function aktif()
    {
        return $this->hasMany(aktivasi::class, 'id_user');
    }
}
