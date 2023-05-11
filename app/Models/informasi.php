<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;
    protected $fillable=[
        'idinformasi',
        'keterangan',
        'deskripsi',
    ];
    protected $primaryKey = 'idinformasi';

    protected $casts = [
        'idinformasi'=> 'string',
    ];
}
