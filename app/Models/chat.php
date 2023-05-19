<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $fillable=[
        'idchat',
        'idpengirim',
        'idpenerima',
        'isi_text',
        'pakar',
        'tanggal',
    ];
    protected $primaryKey = 'idchat';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $casts = [
        'idchat '=> 'string',
        'tanggal '=> 'datetime',
    ];


    public function penerima()
    {
        return $this->belongsTo(User::class,'idpenerima','id_user');
    }
    public function pengirim()
    {
        return $this->belongsTo(User::class,'idpengirim','id_user');
    }


}
