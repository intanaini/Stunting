<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'aktivasi',
        'status'
    ];
    protected $casts = [
        'id_user' => 'string',
    ];

    public function aktif()
    {
        //  idposyandu pertama dari penamaan database disini, idposyandu setelah koma dari database asli posyandu
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
