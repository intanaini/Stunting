<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_perkembangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'idperkembangan', 
        'iddetail_perkembangan',  
        'tanggal',
        'panjang_badan',
        'status',
    ];

    protected $primaryKey = 'iddetail_perkembangan';

    protected $casts = [
        'tanggal' => 'datetime',
        'iddetail_perkembangan'=> 'string',
    ];
    protected $keyType = 'string';
 
    public $incrementing = false;
    public function perkembangan()
    {
    //  idposyandu pertama dari penamaan database disini, idposyandu setelah koma dari database asli posyandu
     return $this->belongsTo(perkembangan::class,'idperkembangan','idperkembangan');
    }
}
