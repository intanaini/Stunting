<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan extends Model
{
    use HasFactory;
    protected $fillable=[
        'idaturan',
        'jenis_kelamin',
        'umur',
        'panjang_badan',
        'penyakit'
    ];
    protected $primaryKey = 'idaturan';
    protected $casts = [
        'idaturan'=> 'string',
    ];
}
