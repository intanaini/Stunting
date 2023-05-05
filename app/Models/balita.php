<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balita extends Model
{
    use HasFactory;
    protected $fillable=[
        'idbalita',
        'nik',
        'nama_balita',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir'
    ];
    protected $primaryKey = 'idbalita';
    protected $dates = ['tanggal_lahir'];

    protected $casts = [
        'idbalita'=> 'string',
        'tanggal_lahir'=>'datetime'
    ];
}
