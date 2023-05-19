<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;
    protected $fillable=[
        'idinformasi',
        'judul',
        'deskripsi',
        'gambar',
    ];
    protected $primaryKey = 'idinformasi';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $casts = [
        'idinformasi'=> 'string',
    ];
}
