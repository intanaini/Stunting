<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posyandu extends Model
{
    use HasFactory;
    protected $fillable=[
        'idposyandu',
        'nama_posyandu',
        'alamat_posyandu',
        'jadwal_posyandu'
    ];
    protected $primaryKey = 'idposyandu';
    protected $casts = [
        'idposyandu'=> 'string',
    ];
}
